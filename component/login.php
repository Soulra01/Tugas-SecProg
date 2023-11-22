

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wear House - Login</title>
    <link rel="stylesheet" href="../assets/global.css">
    <link rel="stylesheet" href="../assets/login/login.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <script src="../script/jquery.js"></script>
    <script src="../script/login.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="kiri">
            <ul>
                <a href="./home.html" id="logo">WearHouse</a>
                <div class="catabout">
                    <li><a href="./category.php">Category</a></li>
                    <li><a href="./aboutus.php">About Us</a></li>
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
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
        </div>
    </nav>

    <!-- content -->
    <!-- login -->

    <div class="loginContainer">
        <div class="loginBox">
           <div class="loginBox2">
                <div class="loginTitle">
                    <P>Login</P>
                </div>
                <form action="../controllers/authcontrolerlogin.php" method="POST">
                    <div class="inputanLogin">
                        
                            <div class="emailset">
                                <label for="email">Email Address</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="passwordset">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password">
                            </div>
                            <div class="rememberme">
                                <input type="checkbox" id="kotak">
                                <label for="kotak" id="rm">Remember Me</label>
                            </div>
                            <div class="loginbawah">
                                <button class="loginbtn">Login</button>
                                <a href="#" class="forgot">Forgot Your Password?</a>
                            </div>
                        
                    </div>
                </form>
           </div> 
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footercontent">
            <div class="icons">
                <a href="#"><img src="../assets/category/img/bxl-twitter.svg"></a>
                <a href="#"><img src="..//assets/category/img/bxl-facebook.svg"></a>
                <a href="#"><img src="../assets/category/img/bxl-instagram.svg"/></i></a>
            </div>
            <div class="text">
                <p>Copyright @ 2023 Secure Programming KEL . All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>