<?php
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=ProjectRedShop', $user, $pass);
    echo 'Connected!';
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Red</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onscroll="toggleHeader()">
    <div class="header">
        <!--<div class="profile">
            <p>gamma</p>
            <p>$5000</p>
        </div>-->
        <img class="logo" src="res/logo.png"/>
        <div class="dropdown-btn" onclick="toggleDropdown()">
            <div id="mainDropdown" class="dropdown-content">
                <a href="/">Launch Game</a>
                <a href="/">Login</a>
                <a href="/">Settings</a>
                <a href="/">Shop</a>
            </div>
        </div>
    </div>

    <div class="min-header">
        <a href="/">Launch Game</a>
        <a href="/">Login</a>
        <a href="/">Settings</a>
        <a href="/">Shop</a>
        <img class="top" src="res/top.png" onclick="scrollToTop()"/>
    </div>

    <div class="content">
         <ul class="products">
             <li class="product">
                 <div class="product-img product-cat">
                    <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                    <div style="width: 128px; height: 128px;">
                        <span>4/5 Stars</span>
                    </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
             <li class="product">
                 <div class="product-img product-cat">
                     <img class="product-img" src="res/pokeball.png"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">Product Name</span><br>
                     <span class="product-price"><b>$500</b></span>
                 </div>
                 <div class="product-rate product-cat">
                     <div style="width: 128px; height: 128px;">
                         <span>4/5 Stars</span>
                     </div>
                 </div>
             </li>
         </ul>
    </div>

    <script>
        function scrollToTop() {
            window.scrollTo(0,0);
        }

        function toggleHeader() {
            var header = document.getElementsByClassName("header")[0];
            var minHeader = document.getElementsByClassName("min-header")[0];
            var scroll = window.scrollY;
            if(scroll > header.clientHeight) {
                header.style.display = "none";
                minHeader.style.display = "block";
            }
            else {
                header.style.display = "block";
                minHeader.style.display = "none";
            }
        }

        function toggleDropdown() {
            document.getElementById("mainDropdown").classList.toggle("show");
        }
        window.onclick = function(e) {
            if(!e.target.matches('.dropdown-btn')) {
                var elements = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < elements.length; i++) {
                    if (elements[i].classList.contains('show')) elements[i].classList.remove('show');
                }
            }
        };
    </script>
</body>
</html>