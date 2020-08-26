<?php

// Inclui o arquivo de conexão com o banco de dados
include_once("../php/conexao.php");

include "../config.php";
session_start();
 $_SESSION['nm_usuario'];
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: ".BASE."/index.php");
		exit;
		}else{
    

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

    <div class="container bg-dark my-3" id="orange">

        <div class="row">

            <div class="col-10 ml-auto mr-auto text-center my-3">


                <form method="post" action="inse_not.php" name="cadastro_not" enctype="multipart/form-data">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control" /><br><br>
                    <label>Nome para a Imagem:</label>
                    <input type="text" name="nm_imagem" class="form-control" /><br><br>
                    <label>Titulo:</label>
                    <input type="text" name="titulo" class="form-control" /><br><br>
                    <label>Tema:</label>
                    <input list="Tema" name="Tema" class="form-control" autocomplete="off">
                    <datalist id="Tema">
                       
                        <option value="Games">
                        <option value="Hqs">    
                        <option value="Anime">
                        <option value="Manga">

                    </datalist>

                    <label>Manchete:</label>
                    <textarea name="manchete" class="form-control" rows="10">

                        </textarea><br /> <br />
                    <label>Texto:</label>
                    <textarea name="texto" id="texto" class="form-control" rows="10">

                        </textarea>
                    <br /><br />
                    <label>Foto de exibição:</label>
                    <input type="file" class="form-control" name="foto" /><br /><br />
                    <input type="submit" class="btn btn-danger w-100" name="Enviar" value="Enviar" />
                </form>

            </div>
        </div>
    </div>


    <?php
        include DIR.'/include/footer.php';
    ?>


    </div>
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
    <script src="ck/ckeditor/ckeditor.js"></script>
    <script src="ck/ckfinder/ckfinder.js"></script>
    <script src="ck/javascript.js"></script>

</body>

</html>
<?php } ?>
