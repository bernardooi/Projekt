$( document ).ready(function() {
 

});



function OpenSideNav()
{
    
    $("#sidenav").css("width", "15vw");
    $("#Close").text("<");
    $("#Open").text("");
    $("#home").text("Home");
    $("#Profile").text("Profile");
    $("#TopBooks").text("Top Books");
    $(".sidenavbuttonDiv").css("width","15vw");
    $("#switchTitle").text("Dark Mode");
    $("#box").css("padding-left","-15vw");
}

function CloseSideNav()
{
    $("#sidenav").css("width", "0");
    $("#Open").text(">");
    $("#Close").text("");
    $("#home").text("");
    $("#Profile").text("");
    $("#TopBooks").text("");
    $(".sidenavbuttonDiv").css("width","0");
    $("#switchTitle").text("");
    $("#boxed").css("padding-left","0");
}