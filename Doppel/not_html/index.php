<?php

session_start();
include_once("../config.php");
 $_SESSION['nm_usuario'];
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: ../index.php");
		exit;
		}else{
   	if( $_SESSION["nivel_da_conta"]==5){
         header("Location: ../admin/perfil_adm.php");
        
    }else{
      
  $date = date('Y-m-d H:i');
$datem = date('Y-m-d H:i', strtotime('-30 days')); 	
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


    <div class="container black my-3 ff" id="orange">
          <?php
            include DIR.'/include/noticias.php';
          ?>
    </div>
    <?php
        include DIR.'/include/footer.php';
    ?>
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo BASE; ?>node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASE; ?>js/icones.js"></script>
    <script src="<?php echo BASE; ?>node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?php echo BASE; ?>node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo BASE; ?>js/Script.js"></script>


</body>

</html>
<?php }}?>
