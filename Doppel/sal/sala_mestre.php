<?php

session_start();
include_once("../php/conexao.php");

include_once("../config.php");
 $_SESSION['nm_usuario'];
 $_SESSION['id']=$_GET["id"];
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: ../index.php");
		exit;
		}else{
   	       if( $_SESSION["nivel_da_conta"]==5){
         header("Location: ../admin/perfil_adm.php");
        
    }else{      
                $em=$_SESSION["email"];
                $sql = mysqli_query($link,"SELECT * FROM sala ORDER BY id_sl");
   	            $usuario = mysqli_fetch_object($sql);
               if(!isset($_GET["id"]))
                  {
                     header("Location:../sal/salas.php");
                  }
                  
                  else{
                       $nt =$_GET["id"]; 
                        $op = mysqli_query($link, "SELECT * FROM chat WHERE id_sl = '$nt'");
                       $nt_at = mysqli_fetch_object($op);

                                 $lk = mysqli_query($link,"SELECT * FROM salas WHERE id_sl = '$nt' AND email = '$em'  LIMIT 1");
                                $lk2 = mysqli_fetch_assoc($lk);
                            if($lk2 == NULL){
                                
                                
                                echo '<script>
                                  window.alert("Você ainda não tem nenhum personagem nesta sala!");
                                window.location.href="../perso/Criar_perso.php?cod='.$nt.'";
                                </script>';
                                
                            }else{
                                
                                
                         $nm_perso=$lk2['nm_do_perso'];
                                
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

                                ?>
</head>

<body>

     <?php
        include DIR.'/include/header.php';
    ?>

<!--info personagem-->

<div class='op' >

    <div id='final'>
     <?php
                             
$pers = mysqli_query($link,"SELECT * FROM persona WHERE sala='$nt' AND nm_do_perso='$nm_perso' ");
$perso = mysqli_fetch_object($pers);
   

$atri = mysqli_query($link,"SELECT * FROM atributos WHERE nm='$nm_perso' ");
$atrib = mysqli_fetch_object($atri);
                                
 
$proa = mysqli_query($link,"SELECT * FROM proficiencia WHERE  nm='$nm_perso' ");
                                
$prof = mysqli_fetch_object($proa);
                                

$inve = mysqli_query($link,"SELECT * FROM inventario WHERE  nm='$nm_perso' ");
$invet = mysqli_fetch_object($inve);
                                
                                                               
    echo"
    
    <table classe='tb' id='orange'>
    <tr>
        <th>Nome</th>
        <th>Classe</th>
        <th>Raça</th>
    </tr>
    <tr>
        <th>
            $perso->nm_do_perso
        </th>
        <th>
            $perso->nm_classe
        </th>
         <th>
            $perso->nm_especie
        </th>
    </tr>
    <tr>
       
        <th>
            Força: $atrib->forca<br>
        </th>
        <th>
           Destreza: $atrib->destreza<br>
        </th>
         <th>
            Constituição: $atrib->constisuicao<br>
        </th>
        <th>
            Inteligencia: $atrib->inteligencia<br>
        </th>
        <th>
            Sabedoria: $atrib->sabedoria<br>
        </th>
        <th>
            Carisma: $atrib->carisma<br>
        </th>
    </tr>
</table>
    
    "   ;                 
     
     
   
   ?> 
</div>
 </div>

<!--info personagem-->




    <div class="chat" id="content">
        <div  class="tm" id="lista">

        </div>



        <div class="form_chat">
            <form id="form-chat" method="post" action="">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control " autocomplete="off" />
                        <span class="input-group-btn">
                            <input type="submit" value="&rang;" class="btn btn-primary">
                            <input type="hidden" name="env" id="ev" value="envMsg" />
                        </span>
                    </div>
                </div>
            </form>
            
        </div>

        <?php if(isset($_POST['mensagem'])){
        
	$mgs = $_POST['mensagem'];
    $id = $_GET["id"];
    $nm_p =  $nm_perso;
		
	if($mgs=="D20" OR $mgs=="d20")
    {
        
        $dado = rand(1, 20);
        $mgs = "O valor rolado é de: $dado ";
        
        
    }else{
        if($mgs=="D12" OR $mgs=="d12")
        {
        $dado = rand(1, 12);
        $mgs = "O valor rolado é de: $dado ";
            
        }else{
            if($mgs=="D8" OR $mgs=="d8"){
            $dado = rand(1, 8);
        $mgs = "O valor rolado é de: $dado ";
           }else{
                if($mgs=="D6" OR $mgs=="d6"){
            $dado = rand(1, 6);
            $mgs = "O valor rolado é de: $dado ";
                
            } 
        }
        
    }
    }
	
    $result_usuario = "INSERT INTO chat(mensagem, nm_do_perso, id_sl) VALUES ('$mgs', '$nm_p','$id')";
    $resultado_usuario = mysqli_query($link, $result_usuario);
    
                  }
                            
              


?>
    </div>




    <!--modal-->


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
    <script type="text/javascript" src="loop_chat.js"></script>
</body>

</html>
<?php }}}}?>
