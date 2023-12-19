<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    require "./connection.php";
    var_dump("Joshua Ganteng");
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];
        
        $query = "SELECT * FROM  users WHERE email=? AND password=?;";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $userEmail, $userPassword);
        $stmt->execute();
        $result = $stmt->get_result();
        var_dump("Joshua Ganteng");
        $con->close();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            $_SESSION["success_message"] = "Login Success";
            $_SESSION['is_login'] = false;
            $_SESSION['userName'] = $row['email'];
            $_SESSION['UserID'] = $row['id'];
            header("Location: ../component/cek.php");
            echo "Login Success";
        }
        else {
            $_SESSION["error_message"] = "Login Failed";
            header("Location: ../component/login.php");
            echo "Login Failed";
        }
    }
?>