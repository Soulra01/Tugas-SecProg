function DoLogOut(){
    $('#UserName').text(null);
    $('.loginReq').show();
    $('#boxHomeLogin').hide();
    $('#dropdownBtn').hide();
    $('#UserName').hide();
    $('#btnLogOut').hide();
    $('#btnLogOut').val("notchecked");
    localStorage.removeItem('userID');
    localStorage.removeItem ('userName');
    location.reload();
}

function doLogin() {
    const email = $("#username").val();
    const password = $("#password").val(); 

    if(email == "" || password == "") {
        alert('data harus diisi');
        return;
    }

    if(!emailvalidate(email)){
        alert('isi pakai format@email.com');
        return;
    }
}