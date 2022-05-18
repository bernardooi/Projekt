$( document ).ready(function() {
    $("#send").attr("disabled", true);
});


function OpenSideNav()
{
    
    $("#sidenav").css("width", "15vw");
    $("#Close").text("<");
    $("#Open").text("");
    $("#home").text("Home");
}

function CloseSideNav()
{
    $("#sidenav").css("width", "0");
    $("#Open").text(">");
    $("#Close").text("");
    $("#home").text("");
}



//Register
function CheckPass()
{
    //alert("fungerar");
    var pass1 =  document.getElementById("_pass").value;
    var pass2 = document.getElementById("_confirmPass").value;
    //alert(pass1,pass2);
    if(pass1 == pass2)
    {
        //alert("rererere");
        $("#send").attr("disabled", false);
    }
}

