<?php
error_reporting(0);
session_start();
if($_COOKIE["theme"] == "dark")
{
    $background ="#1b1d1e";
    $color ="#fff";
}
else{
    $background ="#f1f1f1";
    $color="#1b1d1e";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <div id="header" style="background-color:<?php echo $background?>;">
        
        <div id="WebTitle">
    <a href="index.php"><img src="Images/Books.png" alt="" id="Title"></a>
        </div>
        <a href="login.php" id="login">
            <div id="loginbutton" class="border-right border-left">
                <h2 id="button" style="color:<?php echo $color?>;">Sign in</h2>
            </div>
        </a>
    </div>

    <div id="sidenav" style="background-color:<?php echo $background?>;">
 
    <a href="index.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="home" style="color:<?php echo $color?>;"></h2></div></a>
    <a href="profile.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="Profile"style="color:<?php echo $color?>;"></h2></div></a>
    <a href="TopBooks.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="TopBooks"style="color:<?php echo $color?>;" ></h2></div></a>
  
    </div>
    <a href="javascript:void(0)"><h1 id="Open" onclick="OpenSideNav()">></h1></a>
    <a href="javascript:void(0)"><h1 id="Close" onclick="CloseSideNav()"></h1></a>
    

    <footer class="bgRound" style="background-color:<?php echo $background?>;">   <div id="switchbox">
        <label class="switch">
    <input type="checkbox" id="toggleTheme" >
    <span class="slider round"></span>
    </label></div></footer>
    
    <div id="books"></div>
    <script>
     $.get("https://api.nytimes.com/svc/books/v3/lists/current/hardcover-fiction.json?api-key=txAzBOVxTpflhEes8iVZrVsvHIQwgsPx", function (data){
            
            console.log(data.results.books);
            console.log(data);
            var books=data.results.books;
        books.forEach(CreateCards);

        })

        function CreateCards(item){
    var card = $("<div></div>").attr("class", "card").css("margin-top", "2vh").css("margin-left","5.25vw").attr("class","lol2").css("margin-right", "2vw").css("display","inline-block").css("width","18rem");
    var img = $("<img></img>").attr("src", item.book_image).attr("class", "card-img-top").css("height", "50vh");
    var div2 = $("<div></div>").attr("class", "card-body").css("height", "30vh").attr("class","lol2");
    var title= $("<h5></h5>").attr("class", "card-title").text(item.title);
    var author= $("<h6></h6>").text(item.author);
    var desc= $("<p></p>").attr("class", "card-text").text(item.description);
    var button =$('<a>Buy</a>' ).attr({ class:"btn btn-secondary", href:item.amazon_product_url});
    card.append(img);
    div2.append(title);
    div2.append(desc);
    div2.append(button);
    card.append(author);
    card.append(div2);        
    var x = card.appendTo("#books");


    $.get(`https://booksrun.com/api/v3/price/buy/${item.primary_isbn10}?key=d3m8etzkbado8vkgr7p4`, function(data){

const Pris = data.result.offers.booksrun.new.price;
var Price = (Pris == undefined) ? "Out of Stock" : `${data.result.offers.booksrun.new.price} $`;
(Pris == undefined) ? $( button ).remove() : false;



var priceDiv = $('<p id="out" style=" margin-left:5%;"></p>').attr({ class:"card-text btn btn-secondary"}).text(Price);
div2.append(priceDiv);

        });
    }
</script>

<script>
    $("#toggleTheme").on('change', function() {
				if($(this).is(':checked')) {
					$(this).attr('value', 'true');
					document.cookie = "theme=dark";

				} else {
					$(this).attr('value', 'false');
					document.cookie = 'theme=; Max-Age=0';

				}
			});

</script>
<script src="sideNav.js"></script>
</body>
</html>