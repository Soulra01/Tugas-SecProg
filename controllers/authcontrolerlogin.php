<?php
    require "./connection.php";

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $userEmail = $_POST['Email'];
        $userPassword = $_POST['Password'];

        $query = "SELECT * FROM users WHERE userEmail=? AND userPassword=?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $userEmail, $userPassword);
        $stmt->execute();
        $result = $stmt->get_result();
        $db->close();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            $_SESSION["userid"] = $row['userid'];
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $row['username'];

            header("Location: ../cek.php");
        }
        else {
            $_SESSION["error_message"] = "Login Failed";

            header("Location: ../login.php");
        }

    }
    ?>