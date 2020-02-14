<?php

require "Poke.php";


$Pok1 = new Pok("Pikachu", "pika!pika!",'img/pikachu.png', 35, 55);
$Pok2 = new Pok("Carapuce", "cara!cara!",'img/Carapuce.png',44, 48);
$Pok3 = new pok("Drakofeu", "drako!",'img/dracaufeu.png', 78, 84);
$Pok4 = new pok("Tortank", "tortank",'img/tortank.png', 79, 83);


?>

<!DOCTYPE html>
<html>

<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="container fluid">
      <div class="row">
        <div class="col-xs-12">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/2000px-International_Pok%C3%A9mon_logo.svg.png" class="img-fluid" alt="Responsive image">
        </div>
      </div>
   </div> 
   <div class="container">

<div class="row">

    <div class col-4>

        <img data-name="<?php echo $pok1->getName()   ?>" class="avatar" src="<?php echo $pok1->getAvatar(); ?>">
    </div>
    <div class col-4>

        <img data-name="<?php echo $pok2->getName()   ?>" class="avatar" src="<?php echo $pok2->getAvatar(); ?>">
    </div>
    <div class col-4>

        <img data-name="<?php echo $pok3->getName()   ?>" class="avatar" src="<?php echo $pok3->getAvatar(); ?>">
    </div>
</div>

</div>

<script src="js/app.js"></script>
</body>

</html>



