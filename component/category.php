<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
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


=======
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" href="../assets/global.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/category/category.css">
    <script src="../script/jquery.js"></script>
    <script src="../script/category.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearHouse - Category</title>
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
            <a href="./login.html">login</a>
            <a href="./register.html">register</a>
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
    <!-- add category -->
    <div class="popup" id="popupadd">
        <div class="popupboxshadow">
            <div class="title">
                <h1>Edit Category</h1>
                <button id="xbtn" onclick="xbtnadd()">&times;</button>
            </div>
            <div class="popupcontent">
                <p>Category</p>
                <input type="text" id="inputcategory">
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
                <h1>Add Category</h1>
                <button id="xbtn" onclick="xbtnedit()">&times;</button>
            </div>
            <div class="popupcontent">
                <p>Category</p>
                <input type="text" id="inputcategory">
            </div>
            <div class="btnsubmit">
                <button id="submitbtn">Submit</button>
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
                <button id="submitbtndelete">Delete</button>
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
                    <table>
                        <tr>
                          <th>no</th>
                          <th>Category</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>shoes</td>
                          <td><button id="edit" onclick="editpopup()">edit</button><button id="delete" onclick="deletepopup()">delete</button></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>hats</td>
                          <td><button id="edit" onclick="editpopup()">edit</button><button id="delete" onclick="deletepopup()">delete</button></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>clothes</td>
                          <td><button id="edit" onclick="editpopup()">edit</button><button id="delete" onclick="deletepopup()">delete</button></td>
                        </tr>
                      </table>
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
    function editpopup(){
        $('#popupedit').show();
    }
    function xbtnedit(){
        $('#popupedit').hide();
    }
    function deletepopup(){
        $('#popupdelete').show();
    }
    function xbtndelete(){
        $('#popupdelete').hide();
    }
>>>>>>> 11f5db6c9dfd08deddc1217e95cdbcbcdb50e276
</script>
</html>