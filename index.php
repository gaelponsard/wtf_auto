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
    <!----- portion 2 du décor, évite d'avoir une zone blanche 
    lors du défilement d'image de droite à gauche ----->

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
          /*********** l'objet se déplace sur une largeur total de 1380px
          (1280px=largeur du fond, right:-100px = emplacement de l'objet)
          en 4059 millisecondes ****************************************/
          left: '-=1380'
        }, 4059, 'linear', function () {

          var mad_trafficX = 1280;
          /* l'objet apparaît sur l'ordonnée horizontale de 1280px */

          var mad_trafficY = Math.floor(Math.random() * 160) + 400;
          /* l'ordonnée verticale est choisie aléatoirement entre 400px et 160px*/

          $('#mad_traffic').css('top', mad_trafficY);
          /* l'ordonnée Y démarre en haut*/

          $('#mad_traffic').css('left', mad_trafficX);
          /* l'ordonnée X démarre à gauche*/

          ok = 1;

        });
        $('.fond').animate({
            left: '-=544'
            /*** le fond se déplace sur une largeur total de 544px vers la gauche
            en 1600 millisecondes.
            (deux images sont utilisées pour éviter une zone blanche ***/
          }, 1600,
          'linear',
          function () {

            $('.fond').css('left', 0);

            deplace();

          });

      };

      /*************** déplacement de la voiture *******************/
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

      /*********** gestion des collisions**************/
      function collision()

      {

        vbX = parseInt($('#vb').css('left'));

        vmad_trafficX = parseInt($('#vmad_traffic').css('left'));

        vbY = 10;

        vmad_trafficY = parseInt($('#vmad_traffic').css('top'));

        if (((vmad_trafficX > vbX) && (vmad_trafficX < (vbX + 66)) && (vmad_trafficY > vbY) && (vmad_trafficY < (vbY + 150)) && (ok == 1))

          ||
          ((vbX > vmad_trafficX) && (vbX < (vmad_trafficX + 66)) && (vmad_trafficY > vbY) && (vmad_trafficY < (vbY + 150)) && (ok == 1)))

        {

          $('#son')[0].play();

          collision = parseInt($('#info').text()) + 1;

          $('#info').text(collision);

          ok = 0;

        }

      }

      deplace();

      setInterval(collision, 20);

      
    });
  </script>
</body>

</html>