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
</head>
<body>
    <?php echo $recept['naam'] ?>
    <img src="images/<?php echo $recept["plaatje"] ?>">
</body>
</html>