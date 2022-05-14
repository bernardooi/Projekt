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