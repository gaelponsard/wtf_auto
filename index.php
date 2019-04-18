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

    <!----- emplacement de la 1ere maison ------->
    <img id="house_1" src="assets/house_1.png">

    <!----- emplacement du réverbère ------->
    <img id="lights" src="assets/lights.png">

    <!----- emplacement du nuage ------->
    <img id="cloud" src="assets/cloud.png">

    <!----- emplacement du supporter ------->
    <img id="supporter" src="assets/supporter.gif">


  </div>

  <audio preload="auto" id="son">
    <source src="beep.mp3" type="audio/mp3">
    <source src="beep.ogg" type="audio/ogg"></audio>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    $(function () {

      var ok = 1;

      function deplace() {

        /******************* ANIMATION DU DECOR ***********************/
        $('.fond').animate({

          /*** le fond se déplace sur une largeur total de 544px vers la gauche
          en 1600 millisecondes.
          (deux images sont utilisées pour éviter une zone blanche ***/
          left: '-=544'
        }, 1600, 'linear', function () {

          $('.fond').css('left', 0);

          deplace();

        });

        /******************* ANIMATION DE MAD TRAFFIC (le feu tricolore)********************/
        $('#mt').animate({

          /*l'objet se déplace sur une largeur total de 1380px
          (1280px=largeur du fond, right:-100px = emplacement de l'objet)
          en 2559 millisecondes ****************************************/
          left: '-=1380'
        }, 2559, 'linear', function () {

          /* l'objet apparaît sur l'ordonnée horizontale pendant 1280px */
          var mtX = 1280;

          /* sur l'ordonnée verticale l'objet est placé aléatoirement entre 400px et 160px*/
          var mtY = Math.floor(Math.random() * 160) + 400;

          /* coordonnée Y de Mad traffic */
          $('#mt').css('top', mtY);

          /* coordonnée X de Mad Traffic */
          $('#mt').css('left', mtX);


          ok = 1;

          });





        /*************************** ANIMATION DE LA MAISON ************************/
        $('#house_1').animate({
                  
          /*l'objet se déplace sur une largeur total de 1480px
          (1280px=largeur du fond + 200px = largeur de l'objet)
          en 5559 millisecondes ****************************************/
          left: '-=1480'
        }, 5559, 'linear', function () {

          /* l'objet apparaît sur l'ordonnée horizontale pendant 1280px */
          var house_1X = 1280;

          /* l'objet apparaît sur l'ordonnée verticale à un top de 245px */
          var house_1Y = 245;

          /* coordonnée Y de la maison */
          $('#house_1').css('top', house_1Y);

          /* coordonnée X de la maison */
          $('#house_1').css('left', house_1X);


          ok = 1;

          });



        /*************************** ANIMATION DU REVERBERE ************************/
        $('#lights').animate({
                  
          /*l'objet se déplace sur une largeur total de 1480px
          (1280px=largeur du fond + 200px = largeur de l'objet)
          en 4408 millisecondes ****************************************/
          left: '-=1480'
        }, 4408, 'linear', function () {
        
          /* l'objet apparaît sur l'ordonnée horizontale pendant 1280px */
          var lightsX = 1280;
        
          /* l'objet apparaît sur l'ordonnée verticale à un top de 255px */
          var lightsY = 255;
        
          /* coordonnée Y du réverbère */
          $('#lights').css('top', lightsY);
        
          /* coordonnée X du réverbère */
          $('#lights').css('left', lightsX);
        
        
          ok = 1;
        
          });


        /*************************** ANIMATION DU NUAGE ************************/
        $('#cloud').animate({
                  
          /*l'objet se déplace sur une largeur total de 1480px
          (1280px=largeur du fond + 200px = largeur de l'objet)
          en 30000 millisecondes ****************************************/
          left: '-=1480'
        }, 30000, 'linear', function () {
                
          /* l'objet apparaît sur l'ordonnée horizontale pendant 1280px */
          var cloudX = 1280;
                
          /* l'objet apparaît sur l'ordonnée verticale à un top de 255px */
          var cloudY = 50;
                
          /* coordonnée Y du réverbère */
          $('#cloud').css('top', cloudY);
                
          /* coordonnée X du réverbère */
          $('#cloud').css('left', cloudX);
                
                
          ok = 1;
                
          });


        /*************************** ANIMATION DU SUPPORTER ************************/
        $('#supporter').animate({
                  
          /*l'objet se déplace sur une largeur total de 1480px
          (1280px=largeur du fond + 200px = largeur de l'objet)
          en 4408 millisecondes ****************************************/
          left: '-=1480'
        }, 4108, 'linear', function () {
                
          /* l'objet apparaît sur l'ordonnée horizontale pendant 1280px */
          var supporterX = 1280;
                
          /* l'objet apparaît sur l'ordonnée verticale à un top de 255px */
          var supporterY = 362;
                
          /* coordonnée Y du réverbère */
          $('#supporter').css('top', supporterY);
                
          /* coordonnée X du réverbère */
          $('#supporter').css('left', supporterX);
                
                
          ok = 1;
                
          });     

      };

      /*************************** ANIMATION DE LA VOITURE ************************/
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

      /******************************* GESTION DES COLLISIONS *****************************/
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