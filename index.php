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

    <img id="mad_traffic" src="assets/mad_traffic.png">
    <!----- emplacement de Mad Traffic ------->

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
        $('#mad_traffic').animate({
          left: '-=544'
        }, 1000, 'linear', function () {

          var mad_trafficX = 100;

          var mad_trafficY = Math.floor(Math.random() * 194) + 870;

          $('#mad_traffic').css('top',mad_trafficY);

          $('#mad_traffic').css('left',mad_trafficX);

          ok = 1;

        });
        $('.fond').animate({
            left: '-=544'
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

          vbY = parseInt($('#vb').css('top'));

          if (vbY < 550)

            $('#vb').css('top', vbY + 20);

        }

        if (e.which == 38)

        {

          vbY = parseInt($('#vb').css('top'));

          if (vbY > 400)

            $('#vb').css('top', vbY - 20);

        }

      });
      deplace();
    });
  </script>
</body>

</html>