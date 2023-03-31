<?php
require "database.php";
//de sql query
$sql = "SELECT * FROM lebanese_keuken";
//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/footer.css" />   
</head>
<body>
    <header>
        <img class="logo" src="/images/logo.png" />
        <nav>
          <?php include 'nav.php'?>
        </nav>
    </header> 
    <img class="banner" src="/images/banner1.png" />
    <div class="flex-container">

      <?php foreach ($all_recepten as $recept) : ?>

      <div class="recept-blok">
         <a href="recept.php?id=<?php echo $recept['recepten_id'] ?>">
          <div class="naam">
            
            <h3>
             <?php echo $recept["naam"] ?>
            </h3>
          </div>
          <img src="images/<?php echo $recept["plaatje"] ?>">
      </div>
        </a>
        <?php endforeach?>
      </div>
</body>


<footer>
<?php include 'footer.php'?>

</footer>

</html>