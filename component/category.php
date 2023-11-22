<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/navbar.css">
</head>
<body>
    <!-- navbar  -->
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
                    <li><a href="./login.php">Login</a></li>
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
                <hr>
            </div>
            <a href="./login.html">Login</a>
            <a href="./register.html">Register</a>
        </div>
    </nav>


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
</body>
</html>