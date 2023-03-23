<?php

require "database.php";


//de sql query
$sql = "SELECT * FROM recepten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <img class="logo" src="/images/logo.png" />
        <nav>
          <ul class="nav__links">
            <li><a href="index.php">contact</a></li>
            <li><a href="index.php">contact</a></li>
            <li><a href="index.php">contact</a></li>
          </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>
      </header> 
<div class="flex-container">
  <div>1<img class="logo" src="/images/logo.png" /></div>
  <div>2<img class="logo" src="/images/logo.png" /></div>
  <div>3<img class="logo" src="/images/logo.png" /></div>  
</div>
<div class="flex-container">
<div>1<img class="logo" src="/images/logo.png" /></div>
<div>2<img class="logo" src="/images/logo.png" /></div>
</div>
</body>
</html>