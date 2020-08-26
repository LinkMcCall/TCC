<?php

session_start();
include_once("../php/conexao.php");

include_once("../config.php");
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

    <div class="container black my-3" id="orange">

        <div class="row">

            <div class="col-12 text-center my-3">
                <h1 class="display-2">Salas</h1>
                <p>Venha ver nossas salas de rpg ja criadas e abertas.</p>
            </div>

        </div>
        <div class="row">
            <?php 
    if(!isset($_GET['categoria'])){
            echo'
                <div class="col-12 text-center my-3">
                    <a href="salas.php?categoria=Novas" class="mx-4">Novas</a>
                    <a href="salas.php?categoria=Mestres"  class="mx-4">Mestres</a>
                    <a href="salas.php?categoria=Populares"  class="mx-4">Populares</a>
                </div>

            </div>
            
            
            ';
       
                    
// Seleciona todos os usuários
$sql = mysqli_query($link,"SELECT * FROM sala ORDER BY id_sl");
 
// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
	// Exibimos a foto
	echo "
    <table border='1' class='d-flex p-1 mb-2 '>
            
     <tr class='col-sm-6 col-md-4 col-lg-5'>
    
    
                        <th style='padding: 10px; text-align: center;' id='orange' class='mx-5'>Nome</th>
                        <th style='padding: 10px; text-align: center;' id='orange' class='mx-5'>
    Mestre</th>
    
    </tr>
    ";
    // Exibimos o nome e email
	echo "
    <tr class='col-sm-6 col-md-4 col-lg-7 bd-2 mr-2'>
    <th style='padding: 10px; text-align: center;' id='orange' class='mx-5'><a href='../sal/sala_mestre.php?id=".$usuario->id_sl."' text-center id='orange'>$usuario->nm_sala </a> </th>
   
    ";
	echo "
    <th style='padding: 10px; text-align: center;' id='orange' class='mx-5'><a href='../sal/sala_mestre.php?id=".$usuario->id_sl."' text-center id='orange'>
    $usuario->nm_criador </a> </th>
     </a>
    </table>
    ";
} 
        

        
        }else{
    if($_GET['categoria'] =='Novas'){
            echo'
                  <div class="col-12 text-center my-3">
                    <a href="salas.php" class="mx-4">Novas</a>
                    <a href="salas.php?categoria=Mestres"  class="mx-4">Mestres</a>
                    <a href="salas.php?categoria=Populares"  class="mx-4">Populares</a>
                </div>


            </div>
            ';
              } else{
    
          if($_GET['categoria']=='Mestres'){
            echo'
                 <div class="col-12 text-center my-3">
                    <a href="salas.php?categoria=Novas" class="mx-4">Novas</a>
                    <a href="salas.php"  class="mx-4">Mestres</a>
                    <a href="salas.php?categoria=Populares"  class="mx-4">Populares</a>
                </div>


            </div>
            ';
            
        }else{
                 if($_GET['categoria']=='Populares'){
            echo'
                  <div class="col-12 text-center my-3">
                    <a href="salas.php?categoria=Novas" class="mx-4">Novas</a>
                    <a href="salas.php?categoria=Mestres"  class="mx-4">Mestres</a>
                    <a href="salas.php"  class="mx-4">Populares</a>
                </div>

            </div>
            ';     
       }
        }}}     
                ?>

            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Novas') {
    
        
        
// Seleciona todos os usuários
$sql = mysqli_query($link,"SELECT * FROM sala ORDER BY id_sl  ");
 
// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
	// Exibimos a foto
	echo "
    
      <div class='d-flex p-1 mb-2 '>      
     <div class='col-sm-6 col-md-4 col-lg-5'>
    <a href='../sal/sala_mestre.php?id=".$usuario->id_sl."' class='float-left' id='orange'>
    
    
    </div>
    ";
    // Exibimos o nome e email
	echo "
    <div class='col-sm-6 col-md-4 col-lg-7 bd-2 mr-2'>
    $usuario->nm_sala  
   
    ";
	echo "
    
    $usuario->nm_criador  
     </a> </div>
    </div>
    ";
} 
        
   
        
        
    }
        }
?>
            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Mestres') {
   
// Seleciona todos os usuários
$sql = mysqli_query($link,"SELECT * FROM sala ORDER BY nm_criador");
 
// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
	// Exibimos a foto
	echo "
    <div class='d-flex p-1 mb-2 '>
            
     <div class='col-sm-6 col-md-4 col-lg-5'>
    <a href='../sala/".$usuario->nm_sala."' class='float-left' id='orange'>
    
    
    </div>
    ";
    // Exibimos o nome e email
	echo "
    <div class='col-sm-6 col-md-4 col-lg-7 bd-2 mr-2'>
    $usuario->nm_sala  
   
    ";
	echo "
    
    $usuario->nm_criador  
     </a> </div>
    </div>
    ";
} 
        
   
        
        
    }
        }
?>

            <?php
    if(isset($_GET['categoria'])){
    if($_GET['categoria']=='Populares') {
   
// Seleciona todos os usuários
$sql = mysqli_query($link,"SELECT * FROM sala ORDER BY nm_sala ");
 
// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
	// Exibimos a foto
	echo "
    <div class='d-flex p-1 mb-2 '>
            
     <div class='col-sm-6 col-md-4 col-lg-5'>
    <a href='../sala/".$usuario->nm_sala."' class='float-left' id='orange'>
    
    
    </div>
    ";
    // Exibimos o nome e email
	echo "
    <div class='col-sm-6 col-md-4 col-lg-7 bd-2 mr-2'>
    $usuario->nm_sala  
   
    ";
	echo "
    
    $usuario->nm_criador  
     </a> </div>
    </div>
    ";
} 
   
        
        
    }
        }
?>

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

    <script src="<?php echo BASE; ?>node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASE; ?>js/icones.js"></script>
    <script src="<?php echo BASE; ?>node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?php echo BASE; ?>node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo BASE; ?>js/Script.js"></script>


</body>

</html>
<?php }?>
