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
        var_dump("Joshua");
        die();
    } else {
        
        require('../controller/connection.php');

        if ($con->connect_error) {
            http_response_code(500); 
            echo "database gagal terkoneksi: " . $con->connect_error;
        } else {
            $checkEmailQuery = "SELECT * FROM msuser WHERE userEmail = ?";
            $checkEmailStmt = $con->prepare($checkEmailQuery);
            $checkEmailStmt->bind_param("s", $userEmail);
            $checkEmailStmt->execute();
            $resultEmail = $checkEmailStmt->get_result();

            if ($resultEmail->num_rows > 0) {
                http_response_code(400); 
                echo "Email sudah ada";
            } else {
                $checkUsernameQuery = "SELECT * FROM msuser WHERE userName = ?";
                $checkUsernameStmt = $con->prepare($checkUsernameQuery);
                $checkUsernameStmt->bind_param("s", $userName);
                $checkUsernameStmt->execute();
                $resultUsername = $checkUsernameStmt->get_result();

                if ($resultUsername->num_rows > 0) {
                    http_response_code(400); 
                    echo "Username sudah dipakai.";
                } else {

                    // Persiapkan query untuk insert data ke tabel 'users' termasuk password
                    $insertUserQuery = "INSERT INTO msuser (userID, userName, userEmail, userPassword) VALUES (null, ?, ?, ?)";
                    $insertUserStmt = $con->prepare($insertUserQuery);
                    $insertUserStmt->bind_param("sss", $userName, $userEmail, $userPassword);

                    if ($insertUserStmt->execute()) {
                        echo "Registrasi berhasil!";
                    } else {
                        http_response_code(500); 
                        echo "Registrasi gagal: " . $insertUserStmt->error;
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
