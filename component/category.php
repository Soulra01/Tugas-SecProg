<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/category/category.css">
    <script src="../script/jquery.js"></script>
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

    <!-- content -->

    <!-- add category -->

    <div class="popup" id="popupadd">

        <div class="popupboxshadow">

            <div class="title">

                <h1>Edit Category</h1>

                <button id="xbtn" onclick="xbtnadd()">&times;</button>

            </div>

            <div class="popupcontent">

                <p>Category</p>

                <input type="text" class="inputcategory" id="addCategoryInput">

            </div>

            <div class="btnsubmit">

                <button id="submitbtn" onclick="addcategory()">Submit</button>

            </div>

        </div>

    </div>

    <!-- edit category -->

    <div class="popup" id="popupedit">

        <div class="popupboxshadow">

            <div class="title">

                <h1>Edit Category</h1>

                <button id="xbtn" onclick="xbtnedit()">&times;</button>

            </div>

            <div class="popupcontent">

                <p>Category</p>

                <input type="text" class="inputcategory" id="editCategoryInput">

            </div>

            <div class="btnsubmit">

                <button id="submitbtn" onclick="editcategory()">Submit</button>

            </div>

        </div>

    </div>

    <!-- delete category -->

    <div class="popup" id="popupdelete">

        <div class="popupboxshadow">

            <div class="title">

                <h1>Delete Category</h1>

                <button id="xbtn" onclick="xbtndelete()">&times;</button>

            </div>

            <div class="popupcontent">

                <p>This action is irreversable! Are you sure you want to the delete this category?</p>

            </div>

            <div class="btnsubmit">

                <button id="submitbtndelete" onclick="deletecategory()">Delete</button>

            </div>

        </div>

    </div>

    <!-- content -->

    <div class="categorycontainer">

        <div class="boxshadow">

            <div class="content">

                <h1>Product Categories</h1>

                <button id="categorybtn" onclick="addpopup()">Add Category</button>

                <div class="categorybox">

                    <table id="table">

                        <tr>

                          <th>no</th>

                          <th>Category</th>

                          <th>Action</th>

                        </tr>

                      </table>

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
    <!-- <script src="../script/category.js"></script> -->
</body>
<script>

    $('#popupadd').hide();

    $('#popupedit').hide();

    $('#popupdelete').hide();
    function addpopup(){

        $('#popupadd').show();

    }

    function xbtnadd(){

        $('#popupadd').hide();

    }

    function xbtnedit(){

        $('#popupedit').hide();

    }

    function xbtndelete(){

        $('#popupdelete').hide();
    }

    function addcategory(){

    const $categoryinput = $("#inputcategory").val();



    if($categoryinput == ""){

        alert('harus diisi!')

        return;

    }

    }


</script>
</html>