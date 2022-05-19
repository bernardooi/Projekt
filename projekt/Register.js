$( document ).ready(function() {
    $("#send").attr("disabled", true);

});


function OpenSideNav()
{
    
    $("#sidenav").css("width", "15vw");
    $("#Close").text("<");
    $("#Open").text("");
    $("#home").text("Home");
    $("#Profile").text("Profile");
    $("#TopBooks").text("Top Books");
    $(".switch").show();
    $("#toggleTheme").show();
    $(".sliderThing").show();
    $(".sidenavbuttonDiv").css("width","15vw");
    $("#switchTitle").Text("Dark Mode");
}

function CloseSideNav()
{
    $("#sidenav").css("width", "0");
    $("#Open").text(">");
    $("#Close").text("");
    $("#home").text("");
    $("#Profile").text("");
    $("#TopBooks").text("");
    $(".switch").hide();
    $("#toggleTheme").hide();
    $(".sliderThing").hide();
    $(".sidenavbuttonDiv").css("width","0");
    $("#switchTitle").text("");
}

//Register
function CheckPass()
{
    //alert("fungerar");
    var pass1 =  document.getElementById("_pass").value;
    var pass2 = document.getElementById("_confirmPass").value;
    //alert(pass1,pass2);
    if(pass1.length < 4)
    {
        alert("password is too short 4-32 characters");

    }

    if(pass1.length > 4 && pass1.length < 32){

        if(pass1 == pass2)
        {
            $("#send").attr("disabled", false);
        }
}
}
