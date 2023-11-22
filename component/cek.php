<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/cek/cek.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearHouse - Home</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="kiri">
            <ul>
                <a href="./home.html" id="logo">WearHouse</a>
                <div class="catabout">
                    <li><a href="./category.html">Category</a></li>
                    <li><a href="./aboutUs.html">About Us</a></li>
                </div>
            </ul>
        </div>
        <div class="kanan">
            <ul>
                <li><input type="checkbox" id="tri"></li>
                <li><p id="userlogged"></p></li>
                <li><label for="tri" id="segitiga">▼</label></li>
                <button id="LogOut" onclick="doLogOut()">LogOut</button>
                <div id="loginRegister">
                    <li><a href="./login.html">Login</a></li>
                    <li><a href="./register.html">Register</a></li>
                </div>
            </ul>  
        </div>
        <input type="checkbox" id="hamburger">
        <label for="hamburger" id="burgerbtn">&equiv;</label>

        <!-- Navbar Responsiv -->
        <div class="navrespon">
            <div class="ddatas">
                <a href="./category.html">category</a>
                <a href="./aboutUs.html">About Us</a>
            </div>
            <a href="./login.html">Login</a>
            <a href="./register.html">Register</a>
        </div>
    </nav>
    <!-- content -->
    <div class="homecontainer">
        <div class="boxshadow" id="boxHomeLogin">
            <div class="boxhome">
                <div class="title">
                    <p>Dashboard</p>
                </div>
                <div class="content">
                    <p>You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer">
        <div class="footercontent">
            <div class="icons">
                <a href="#"><img src="../assets/category/img/bxl-twitter.svg"></a>
                <a href="#"><img src="..//assets/category/img/bxl-facebook.svg"></a>
                <a href="#"><img src="../assets/category/img/bxl-instagram.svg"/></i></a>
            </div>
            <div class="text">
                <p>Copyright @ 2021. All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        <?php
            if($_SESSION['is_login'] == true) {
                echo "$('#userlogged').text('" . $_SESSION['userName'] . "');" ;
                echo "$('#boxHomeLogin').show();";
                echo "$('#loginRegister').hide();";
                echo "$('#dropdownBtn').show();";
                echo "$('#btnLogOut').show();";
                echo "$('#userlogged').show();"; // changed from '#UserName'
                echo "$('#userlogged').css('margin-left', '50px');"; // changed from '#UserName'
                echo "$('#btnLogOut').css('margin-left', '10px');";
            } else {
                echo "$('#boxHomeLogin').hide();";
            }
        ?>
        console.log("Jenggo");
    </script>
</body>
</html>
