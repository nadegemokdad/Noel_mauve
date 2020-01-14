<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="img/christmas_letter.ico" />
      <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css">

      <title>Document</title>
</head>

<body>

      <div class="snow"></div>


      <div id="formulaire">

            <form method="POST" action="formulaire_serveur.php">
                  <span class="titre_form"> Partagez à votre tour vos voeux! </span>

                  <div id="champs">
                        <div id="destinataire">
                              <label for="mail_dest"> A destination de : </label>
                              <input name="email_dest" type="email" id="email_dest" class="input_content" placeholder="e-mail du destinataire"> <br />
                        </div>
                        <div id="expediteur">
                              <label for="exp"> De la part de : </label>
                              <input name="exp" type="text" id="exp" class="input_content" placeholder="votre nom"><br />
                        </div>
                        <div id="zone_message">
                              <label for="message"> Message : </label>
                              <textarea name="message" type="text" id="message" placeholder=></textarea>
                        </div>

                  </div>
                  <div class="bouton">
                  <label for="button" class="envoi">Envoyez!</label>
                  <input type="submit" id="button" class="input-file" class="envoi">
                  </div>
            </form>

            <!-- <script src="script.js"></script> -->
</body>

</html>