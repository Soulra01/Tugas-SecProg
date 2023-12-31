<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wear House - About Us</title>
    <link rel="stylesheet" href="../assets/aboutus/aboutus.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/global.css">
    <script src="../script/jquery.js"></script>
    <!-- <script>
        if (localStorage.getItem('userId') == null){
            window. window.location.href = 'login.php';
        };
    </script> -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="kiri">
            <ul>
                <a href="./home.html" id="logo">WearHouse</a>
                <div class="catabout">
                    <li><a href="./category.php">Category</a></li>
                    <li><a href="./aboutUs.php">About Us</a></li>
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
                <a href="./category.html">category</a>
                <a href="./aboutUs.html">About Us</a>
            </div>
            <a href="./login.html">Login</a>
            <a href="./register.html">Register</a>
        </div>
    </nav>

    <!-- content -->
    <div class="aucontainer">
        <div class="aubox">
            <p id="autitle">About Us</p>
            <div class="aubox2">
                <p id="isibox">WearHouse is a fast fashion brand that was found in 2019. WearHouse aims to provide affordable, high<br>
                quality, trendy, and easy-to-access fashion apparels. To fullfil our goals, we have opened more than 100<br>
                store in various cities across Indonesia. We have a commitment to make each of our product available in<br>
                every store, with equal price tags and build qualities regardless of location</p>
                <h1>Contact Us</h1>
                <p id="nohp">Phone: (021) 12345</p>
                <p id="email">Email: support@warehouse.com</p>
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
                <p>Copyright @ 2023 Secure Programming KEL10 . All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>
<script>
    $('.homecontainer').hide();
</script>
<script src="../script/status.js"></script>
</html>