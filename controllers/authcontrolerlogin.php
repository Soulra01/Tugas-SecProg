<?php
    require "./connection.php";

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $userEmail = $_POST['Email'];
        $userPassword = $_POST['Password'];
        $remember_me = isset($_POST['remember_me']);

        $query = "SELECT * FROM users WHERE userEmail=? AND userPassword=?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $userEmail, $userPassword);
        $stmt->execute();
        $result = $stmt->get_result();
        $db->close();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
    
            if (password_verify($password, $row['password'])) {
                $_SESSION["userid"] = $row['userid'];
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $row['username'];
    
                if ($remember_me) {
                    setcookie('remember_me', password_hash($password, PASSWORD_DEFAULT), time() + 86400, '/');
                }
    
                header("Location: ../cek.php");
            } else {
                $_SESSION["error_message"] = "Login Failed";
    
                header("Location: ../login.php");
            }
        } else {
            $_SESSION["error_message"] = "Login Failed";
    
            header("Location: ../login.php");
        }
    } else {
        if (isset($_COOKIE['remember_me'])) {
            $result = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
    
                if (password_verify($row['password'], $_COOKIE['remember_me'])) {
                    $_SESSION["userid"] = $row['userid'];
                    $_SESSION['is_login'] = true;
                    $_SESSION['username'] = $row['username'];
    
                    header("Location: ../cek.php");
                } else {
                    $_SESSION["error_message"] = "Login Failed";
    
                    header("Location: ../login.php");
                }
            } else {
                $_SESSION["error_message"] = "Login Failed";
    
                header("Location: ../login.php");
            }
        }

    }
    ?>