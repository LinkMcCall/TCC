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
      
   	
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstyle.css">
     <link rel="stylesheet" href="<?php echo BASE; ?>Fontawasome/Fontawasome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>style/style.css">
    <?php
    echo"
    <style>
     #foot{
            position: absolute; 
            bottom: 0;
        }
  

        .lock_not{
     
    width:428px;
    height: 277px;
    
}

.sidenav {
  height: 93%;
  width: 0px;
  position: fixed;
  z-index: 1;
  bottom: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        
        </style>
        
        ";
        ?>
    <title>DoppelNews</title>
</head>

<body>
<?php
    include DIR.'/include/header.php';
?>
<div class="d-flex container">
    <div>
      <div class="col-md-6 bg-dark mt-5 mb-5">
        <div class="d-flex pt-2 pb-2">
            <span class="pr-2 pt-1">Nome:</span><input type="text" value="<?php echo $in->nm_usuario?>" class="disabled form-control" disabled>
          </div>
            <p>Email: <?php echo $in->email ?></p>
            <p>Nivel do Usuario: </p>
      </div>
    </div>
    <div>
      <div class="col-md-6 bg-dark mt-5 mb-5">
        
    <div class="accordion mt-3" id="accordionExample">
      <h1>Seus Personagens:</h1>
    <div class="bg-dark">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
      </div>
    </div>
</div>
</div>

    <?php
        include DIR.'/include/footer.php';
    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>

     <script src="<?php echo BASE; ?>js/icones.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
     <script src="<?php echo BASE; ?>js/Script.js"></script>
    <script type="text/javascript">
    </script>
     <script type="text/javascript">
       /*  $('#te').click(function(){
          $('tbody>tr').toggleClass('d-none');
          $(this).toggleClass('d-none');
      }
      );*/
    </script>

    <!-- Modal -->
    <?php
     include DIR.'/include/modal.php';
    ?>
</body>

</html>
<?php } }?>
