<?php
    require "./connection.php";

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username=? AND password=?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $username, $password);
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