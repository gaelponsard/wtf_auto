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


  <div id="wtf_jeu">
    <!------ emplacement du jeu sur l'éran ------->
    <div class="info">SCORE : <span id="score">0</span></div>
    <!----- emplacement des infos du jeu----->

    <img id="fond1" class="fond" src="assets/route.png">
    <!----- portion 1 du décor----->
    <img id="fond2" class="fond" src="assets/route.png">
    <!----- portion 2 du décor----->
    <img id="vb" src="assets/vb.png">
    <!----- emplacement de la voiture bleue ------->


  </div>

  <audio preload="auto" id="son">
    <source src="beep.mp3" type="audio/mp3">
    <source src="beep.ogg" type="audio/ogg"></audio>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    $(function () {

      var ok = 1;

      function deplace()

      {
        $('.fond').animate({
            left: '-=360'
          }, 1000,
          'linear',
          function () {

            $('.fond').css('left', 0);

            deplace();

          });

      };

      $(document).keydown(function (e) {

        if (e.which == 40)

        {

          vjX = parseInt($('#vb').css('top'));

          if (vbY < 70)

            $('#vb').css('top', vbY + 30);

        }

        if (e.which == 38)

        {

          vbY = parseInt($('#vb').css('top'));

          if (vbY > 350)

            $('#vb').css('top', vbY - 30);

        }

      });
      deplace();
    });
  </script>
</body>

</html>