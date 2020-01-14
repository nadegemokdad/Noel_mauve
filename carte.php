<?php
if(isset($_GET["id"])){
    $dsn="mysql:host=localhost;dbname=nadegem_cartevoeux;charset=utf8;";
    $bdd = new PDO($dsn, 'nadegem' , 'liOm3ZJR/n3tlw==');
    $stmt="SELECT message FROM carte_voeux WHERE id=?;";
    $query=$bdd->prepare($stmt);
    $query->execute([$_GET["id"]]); 
    $message = $query->fetch(PDO::FETCH_ASSOC)["message"];
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/christmas_letter.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

        <div class="background"></div>
        <div class="snow"></div>
        <div class="anim">
        <img src="img/reindeer_min.png" alt=" traineau">
        </div>
        <h1 class="text_anim">Joyeux Noël et Bonne Année</h1>
        <p class="mess">" <?php  echo $message ?>"</p>
        <a href="index.php" class="share">Partagez!</a>    
        
        
      
<script src="script.js"></script>

</body>
</html>

        
            