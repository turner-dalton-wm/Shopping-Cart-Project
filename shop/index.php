<?php
$user = 'root';
$pass = 'root';
$name = 'projectreddb';
$dbh = null;
try {
    $dbh = new PDO('mysql:host=localhost;dbname='.$name, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function getProducts($conn)
{
    $sql = 'SELECT id, name, price, preview FROM products ORDER BY name';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        while ($row = $stmt->fetch()) {
            echo '<li class="product">
                 <div class="product-img product-cat">
                    <img class="product-img" src="../' . $row['preview'] . '"/>
                 </div>
                 <div class="product-detail product-cat">
                     <span class="product-name">' . $row['name'] . '</span><br>
                     <span class="product-price"><b>$' . $row['price'] . '</b></span>
                 </div>
                 <div class="product-rate product-cat">
                    <div style="width: 128px; height: 128px;">
                        <form method="post" action="/cart/">
                            <input type="hidden" name="id" value="' . $row['id'] . '"/>
                            <input class="cart" type="submit" name="submit" value=" "/>
                        </form>
                    </div>
                 </div>
             </li>';
        }
    }
}

function getAccountName($conn) {
    $token = null;
    if (isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];
    }
    else {
        return;
    }
    $sql = 'SELECT username FROM users WHERE token = ?';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array($token))) {
        while ($row = $stmt->fetch()) {
            $username = ucfirst($row['username']);
            echo '<a href="/settings/">'.$username.'\'s Inventory</a>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body onscroll="toggleHeader()">
<div class="header">
    <img class="logo" src="../res/logo.png"/>
    <div class="dropdown-btn" onclick="toggleDropdown()">
        <div id="mainDropdown" class="dropdown-content">
            <a href="/">Home</a>
            <?php
                getAccountName($dbh);
            ?>
            <a href="/login">Login</a>
            <a href="/shop">Shop</a>
            <a href="/cart">Cart</a>
        </div>
    </div>
</div>

<div class="min-header">
    <a href="/">Home</a>
    <?php
        getAccountName($dbh);
    ?>
    <a href="/login">Login</a>
    <a href="/shop">Shop</a>
    <a href="/cart">Cart</a>
    <img class="top" src="../res/top.png" onclick="scrollToTop()"/>
</div>

<div class="content">
    <ul class="products">
        <?php
            getProducts($dbh);
        ?>
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