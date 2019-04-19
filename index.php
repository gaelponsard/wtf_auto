<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>wtf auto</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!------ emplacement du jeu sur l'éran ------->
  <div id="wtf_jeu">

    <!----- emplacement des infos du jeu----->
    <div class="info">SCORE : <span id="score">0</span></div>

    <!----- portion 1 du décor----->
    <img id="fond1" class="fond" src="assets/route.png">

    <!----- portion 2 du décor, évite d'avoir une zone blanche 
    lors du défilement d'image de droite à gauche ----->
    <img id="fond2" class="fond" src="assets/route.png">

    <!----- emplacement de la voiture bleue ------->
    <img id="vb" src="assets/vb.png">

    <!----- emplacement de Mad Traffic ------->
    <img id="mt" src="assets/mt.png">

    <!----- emplacement de Mad Traffic ------->
    <img id="mt2" src="assets/mt2.png">

    <!----- emplacement de la 1ere maison ------->
    <img id="house_1" src="assets/house_1.png">

    <!----- emplacement du réverbère ------->
    <img id="lights" src="assets/lights.png">

    <!----- emplacement du nuage ------->
    <img id="cloud" src="assets/cloud.png">

    <!----- emplacement du supporter ------->
    <img id="supporter" src="assets/supporter.gif">


  </div>

  <!------ PARTIE AUDIO PAS ENCORE FONCTIONNELLE ------>
  <audio preload="auto" id="son">
    <source src="beep.mp3" type="audio/mp3">
    <source src="beep.ogg" type="audio/ogg"></audio>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/jeu.js" type="text/javascript"></script>
</body>

</html>