document.addEventListener("DOMContentLoaded", function () {
    getDataCat();
});

$("#popUpID").hide();
$("#popUpID2").hide();
$("#popUpID3").hide();
function add() {
    $("#popUpID").show();
}

var proCatID = "";
var newCat = "";

function edit(catId){
    $("#popUpID2").show();
    localStorage.setItem('proCatID', $("#dataCat_" + catId).text());
}

function dlt(catId){
    $("#popUpID3").show();
    localStorage.setItem('proCatID', $("#dataCat_" + catId).text());
}

function EditCat(){
    $.ajax({
        type: 'POST',
        url: 'https://localhost:7273/api/Category/EditCat',
        contentType: 'application/json',
        data: JSON.stringify({
            UserId: localStorage.getItem('userId'),
            ProCatID: localStorage.getItem('proCatID'),
            Category: $("#boxInput2").val()
        }),
        success: function(data) {
            localStorage.removeItem('proCatID');
            localStorage.removeItem('newCat'); 
            $("#popUpID2").hide();
            getDataCat();
        },
        error: function() {
            console.log("gagal");
        }
    });
}


function DeleteCat(){
    $.ajax({
        type: 'POST',
        url: 'https://localhost:7273/api/Category/DeleteCat',
        contentType: 'application/json',
        data: JSON.stringify({
            UserId: localStorage.getItem('userId'),
            ProCatID: localStorage.getItem('proCatID')
        }),
        success: function(data) {
            localStorage.removeItem('proCatID');
            localStorage.removeItem('newCat'); 
            $("#popUpID3").hide();
            getDataCat();
        },
        error: function() {
            console.log("gagal");
        }
    });
}

function tombolClose() {
    $("#popUpID").hide();
    $("#popUpID2").hide();
    $("#popUpID3").hide(); 
    localStorage.removeItem('proCatID');
    localStorage.removeItem('newCat');  
}
$("#editsub").click(function(){
    var $boxInput2 = $("#boxInput2").val()

    
    $("#popUpID2").hide()
})
$("#dltRow").click(function(){
    var $table = $(".tabel")
    var row = $(this).closest("tr"); 
    row.remove(); 
    $("#popUpID3").hide()
})

function getDataCat() {
    console.log(console.log(localStorage.getItem('userId')));
    $.ajax({
        type: "get",
        url: "https://localhost/api/Category/GetCat",
        contentType: "application/json",
        data: {
            userID: localStorage.getItem('userId')
        },
        success: function (response) {
            // Tangani respons dari server
            console.log(response , "ini apa");
    
            // Ambil tabel dan hapus semua baris kecuali baris pertama (header)
            var tabel = $(".tabel");
            tabel.find("tr:gt(0)").remove();
    
            // Loop melalui data dari respons dan tambahkan setiap entri ke tabel
            $.each(response, function (index, item) {
                var newRow = $("<tr></tr>");
                newRow.append('<td>' + (index + 1) + '.</td>');
                newRow.append('<td id="Cat_' + (index + 1) + '">' + item.category + '</td>');
                newRow.append('<td style="display: none;" id="dataCat_' + (index + 1) + '">' + item.proCatID + '</td>');
                newRow.append('<td><button id="editbtn" onclick="edit(' + (index + 1) + ')">Edit</button><button id="dltbtn" onclick="dlt(' + (index + 1) + ')">Delete</button></td>');
                tabel.append(newRow);
            });
            $("#popUpID").hide();
        },
        error: function (error) {
            alert(error);
        }
    });            
}

function addcategory(){
    $.ajax({
        type: "post",
        url: "https://localhost:7273/api/Category/AddCat",
        data: JSON.stringify({
            UserId: localStorage.getItem('userId'),
            Category: $("#boxInput").val(),
        }),
        contentType: "application/json",
        success: function() {
            getDataCat();
        },
        error: function(error) {
            console.error(error);
        }
    }); 
}
