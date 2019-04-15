<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wtf auto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
SCORE : <span id="info">0</span>

<div id="WTF Auto">

  <img id="fond1" class="fond" src="assets/route.png">

  <img id="vr" src="assets/vb.png">


</div>

<audio preload="auto" id="son"><source src="beep.mp3" type="audio/mp3"><source src="beep.ogg" type="audio/ogg"></audio>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>

function deplace()

{

  $('.fond').animate({

    right: '-=360'

  },

  1000,

  'linear',

  function(){

    $('.fond').css('right', 0);

    deplace();

  });

}

  <script>
</body>
</html>