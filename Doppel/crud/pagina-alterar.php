<?php

include "../config.php";
session_start();

include_once("../php/conexao.php");
 $_SESSION['nm_usuario'];
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: ../index.php");
		exit;
		}else{
		
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstyle.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>style/style.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>style/animate.css">
    <title>DoppelNews</title>
    
</head>

<body>

   <?php
        include DIR.'/include/header.php';
    ?>

    <div class="container bg-dark my-3" id="orange">

        <div class="row">

            <div class="col-12 text-center my-3">

                <h2>Alteração</h2>
                <form action="../crud/alterar_v.php" method="POST">
                    <label>ID Email:</label>
                    <input type="email" name="id"><br><br>

                    <label>Novo Nome de Usuario:</label>
                    <input type="text" name="nm_usuario"><br><br>

                    <label>Nova senha:</label>
                    <input type="password" name="senha"><br><br>

                    <label>Confirmar nova senha:</label>
                    <input type="password" name="confirmasenha"><br><br>

                    <input type="submit" value="Alterar">
                </form>
            </div>
        </div>
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

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>

<?php }?>
