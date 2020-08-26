<?php

session_start();
include_once("../php/conexao.php");

include_once("../config.php");
               
                     
$op = mysqli_query($link, "SELECT * FROM podcasts where id_pod = '1'");
$pod = mysqli_fetch_object($op);
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
$datem = date('Y-m-d H:i', strtotime('-30 days'));
      
// Seleciona todos os usuários
        
    
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo BASE; ?>node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>node_modules/bootstrap/compiler/bootstyle.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>style/style.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>style/animate.css">
    <title>DoppelNews</title>

</head>

<body>
    
    <?php
        include DIR.'/include/header.php';
    ?>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo BASE; ?>img/<?php echo $pod->img; ?>" alt="First slide">
      <div class="position-absolute footer-car blog-content animated fadeInUp" ata-animation="fadeInUp" data-delay="100ms">
        <h1 data-animation="fadeInUp" data-delay="400ms" style="animation-delay: 400ms;" class="look_car animated fadeInUp cool-link6"><?php echo $pod->nome_podcast; ?></h1><br>
        <p class="lead xc_car animated fadeInUp" data-animation="fadeInUp" data-delay="700ms" style="animation-delay: 700ms;">Podcast sobre <?php echo $pod->sobre; ?>.</p>
      </div>
    </div>
</div>
</div>
    

        

  

<iframe id="player_pc" src="player/player.php?pod=<?php echo $pod->nome_podcast?>&data=<?php echo $pod->date?>&nome=<?php echo $pod->titu_pod?>" style="height: 64%; border: 0px; width: 100%;">
</iframe>

    



     <?php
        include DIR.'/include/footer.php';
    ?>


   

    <script type="text/javascript">
        function validar() {
            var senha = cadastro.senha.value;
            var confirmasenha = cadastro.confirmasenha.value;
            if (senha != confirmasenha) {
                alert('Senhas diferentes');
                cadastro.confirmasenha.focus();
                return false;
            }

        }
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top");
          } else {
            header.classList.remove("fixed-top");
          }
        }

    </script>



 
    <script src="<?php echo BASE; ?>node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASE; ?>js/icones.js"></script>
    <script src="<?php echo BASE; ?>node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?php echo BASE; ?>node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo BASE; ?>js/Script.js"></script>

</body>

</html>