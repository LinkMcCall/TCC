<?php

include "../config.php";
session_start();

include_once("../php/conexao.php");
 $_SESSION['nm_usuario'];
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: ../index.php");
		exit;
		}else{
   	if( $_SESSION["nivel_da_conta"]==0)
    {
         header("Location: ../usu/perfil_usuario.php");
        
        
        }else{


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
    
    <?php
        include DIR.'/include/carousel.php';
    ?>

    <div class="container black my-3" id="orange">

        <?php
            include DIR.'/include/noticias.php';
          ?>

    </div>


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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo BASE; ?>node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASE; ?>js/icones.js"></script>
    <script src="<?php echo BASE; ?>node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?php echo BASE; ?>node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>
<?php }}?>