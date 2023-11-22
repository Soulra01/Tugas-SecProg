<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearHouse - Home</title>
    <script src="../script/connection.js"></script>
    <script src="../script/jquery.js"></script>
    <script src="../script/statusUser.js" defer></script>
</head>
<body>
    <!-- navbar -->
    <header>
        <div class="header">
            <a href="./home.html" id="warehouse">WareHouse</a>
            <div class="kiri">
                <a href="./category.html">Category</a>
                <a href="./aboutus.html">About Us</a>
            </div>
        </div>
        <div class="logreg">
            <input type="checkbox" id="usercheckbox">
            <p id="UserName"></p>
            <label for="usercheckbox" id="dropdownBtn">▼</label>
            <button id="btnLogOut" onclick="LogOut()">Logout</button>
            <div class="loginReq">
                <a href="./login.html">login</a>
                <a href="./register.html">register</a>
            </div>
        </div>
        <input type="checkbox" id="hamburger">
        <label for="hamburger" id="burgerbtn">&equiv;</label>
        <!-- navbar responsive -->
        <div class="respons">
            <div class="head">
                <a href="./category.html">Category</a>
                <a href="./aboutus.html">About Us</a>
            </div>
            <div class="logres">
                <a href="./login.html">login</a>
                <a href="./register.html">register</a>
            </div>
        </div>
    </header>
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
    <footer>
        <div class="image">
            <img src="../assets/bxl-facebook.svg" alt="">
            <img src="../assets/bxl-instagram.svg" alt="">
            <img src="../assets/bxl-twitter.svg" alt="">
        </div>
        <div class="text">
            <p>Copyright @ 2021 jenggo. All Right Reversed</p>
        </div>
    </footer>
</body>
</html>