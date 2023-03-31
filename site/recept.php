<?php
require "database.php";

$id = $_GET["id"];

$sql = "SELECT * from lebanese_keuken where recepten_id = $id";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

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
<div class="Naam">
    <?php echo $recept['naam'] ?>
</div>
<div class="Foto">
    <img src="images/<?php echo $recept["plaatje"] ?>">    
</div>
<div class="gerecht">
</div>


<div class="afkoeltijd">

</div>

<div class="introductie">

</div>

<div class="ingredienten">

</div>

<div class="bereidingstijd">

</div>

<div class="personen">

</div>

<div class="moeilijk">

</div>

</body>
<footer>
<?php include 'footer.php'?>
</footer>
</html>