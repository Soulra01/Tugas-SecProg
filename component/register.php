<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wear House - Register</title>
    <link rel="stylesheet" href="../assets/register/register.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/global.css">
    <script src="../script/jquery.js"></script>
    <script src="..//script/register.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
    <div class="kiri">
            <ul>
                <a href="./cek.php" id="logo">WearHouse</a>
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
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./register.php">Register</a></li>
                </div>
            </ul>  
        </div>
        <input type="checkbox" id="hamburger">
        <label for="hamburger" id="burgerbtn">&equiv;</label>

        <!-- Navbar Responsiv -->
        <div class="navrespon">
            <div class="ddatas">
                <a href="./category.php">category</a>
                <a href="./aboutus.php">About Us</a>
            </div>
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
        </div>
    </nav>

    <!-- content -->
    <div class="regisContainer">
        <div class="regisBox">
            <div class="regisBox2">
                <div class="regisTitle">
                    <P>Register</P>
                </div>
                <form action="../controllers/registercontroller.php" method="POST">
                    <div class="inputanregis">
                        <div class="nameset">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="emailset">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="passwordset">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="confirmpass">
                            <label for="confirm"> Confirm Password</label>
                            <input type="password" id="confirm" name="confirm">
                        </div>
                        <div class="agreement">
                            <input type="checkbox" id="kotak" name="kotak">
                            <label for="kotak" id="ag">By clicking register, I agree to the terms and conditions</label>
                        </div>
                        <div class="regisbawah">
                            <button class="regisbtn">Register</button>
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
                <p>Copyright @ 2023 Secure Programming Kelompok 10 . All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>
<script>
    $('.homecontainer').hide();
</script>
<script src="../script/status.js"></script>
</html>
>>>>>>> f0128362c67e9cc11ad82726c5c813e56a3e9632
