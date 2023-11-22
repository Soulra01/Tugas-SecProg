<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if (strlen($userName) < 4 || !filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400); 
        echo "input data tidak valid.";
    } else {
        require('../controller/connection.php');

        if ($con->connect_error) {
            http_response_code(500); 
            echo "Koneksi database gagal: " . $con->connect_error;
        } else {
            $checkEmailQuery = "SELECT * FROM users WHERE Email = ?";
            $checkEmailStmt = $con->prepare($checkEmailQuery);
            $checkEmailStmt->bind_param("s", $userEmail);
            $checkEmailStmt->execute();
            $resultEmail = $checkEmailStmt->get_result();

            if ($resultEmail->num_rows > 0) {
                http_response_code(400); 
                echo "Email sudah ada";
            } else {
                $checkUsernameQuery = "SELECT * FROM users WHERE Name = ?";
                $checkUsernameStmt = $con->prepare($checkUsernameQuery);
                $checkUsernameStmt->bind_param("s", $userName);
                $checkUsernameStmt->execute();
                $resultUsername = $checkUsernameStmt->get_result();

                if ($resultUsername->num_rows > 0) {
                    http_response_code(400); 
                    echo "Username sudah dipakai.";
                } else {
                    $insertUserQuery = "INSERT INTO users (UserId, Name, Email) VALUES (null, ?, ?)";
                    $insertUserStmt = $con->prepare($insertUserQuery);
                    $insertUserStmt->bind_param("ss", $userName, $userEmail);
        
                    if ($insertUserStmt->execute()) {
                        $userID = $insertUserStmt->insert_id;

                        $insertPasswordQuery = "INSERT INTO passwords (password_id, UserId, password) VALUES (null, ?, ?)";
                        $insertPasswordStmt = $con->prepare($insertPasswordQuery);
                        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
                        $insertPasswordStmt->bind_param("is", $userID, $hashedPassword);

                        if ($insertPasswordStmt->execute()) {
                            echo "Registrasi berhasil!";
                        } else {
                            http_response_code(500); 
                            echo "Registrasi gagal (password): " . $insertPasswordStmt->error;
                        }

                        $insertPasswordStmt->close();
                    } else {
                        http_response_code(500); 
                        echo "Registrasi gagal (user): " . $insertUserStmt->error;
                    }

                    $insertUserStmt->close();
                }
            }

            $con->close();
        }
    }
} else {
    echo json_encode(["status" => "error", "message" => "Metode request tidak valid."]);
}
?>
