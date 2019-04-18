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

    <img id="mt" src="assets/mt.png">
    <!----- emplacement de Mad Traffic ------->

    <img id="house_1" src="assets/house_1.png">
    <!----- emplacement de la 1ere maison ------->

    <img id="lights" src="assets/lights.png">
    <!----- emplacement du réverbère ------->

  </div>

  <audio preload="auto" id="son">
    <source src="beep.mp3" type="audio/mp3">
    <source src="beep.ogg" type="audio/ogg"></audio>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    $(function () {

      var ok = 1;

      /*function deplace()*/

      {
        $('#mt').animate({
          /*********** l'objet se déplace sur une largeur total de 1380px
          (1280px=largeur du fond, right:-100px = emplacement de l'objet)
          en 4059 millisecondes ****************************************/
          left: '-=1380'
        }, 4059, 'linear', function () {

          var mtX = 1280;
          /* l'objet apparaît sur l'ordonnée horizontale de 1280px */

          var mtY = Math.floor(Math.random() * 160) + 400;
          /* l'ordonnée verticale est choisie aléatoirement entre 400px et 160px*/

          $('#mt').css('top', mtY);
          /* l'ordonnée Y démarre en haut*/

          $('#mt').css('left', mtX);
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
        /*** les 4 lignes ci-dessous placent les coordonnées des objets dans des variables.
        La fonction parseInt() permet de lire et de mémoriser les coordonnées sous une forme entière ***/
        vbX = 10;
        vbY = parseInt($('#vb').css('top'));

        vmtX = parseInt($('#vmt').css('left'));
        vmtY = parseInt($('#vmt').css('top'));



        /*** Si une collision se trouve dans la fourchette autorisée...***/
        if (((vmtX > vbX) && (vmtX < (vbX + 150)) && (vmtY > vbY) && (vmtY < (
            vbY + 66)) && (ok == 1)) ||
          ((vbX > vmtX) && (vbX < (vmtX + 150)) && (vmtY > vbY) && (vmtY < (vbY +
            66)) && (ok == 1)))

        /*** alors 1 sera acrémenté à #score et #son activera la lecture ***/
        {

          $('#son')[0].play();

          collision = parseInt($('#score').text()) + 1;

          $('#score').text(collision);

          ok = 0;

        }

      }

      deplace();

      setInterval(collision, 20);


    });
  </script>
</body>

</html>