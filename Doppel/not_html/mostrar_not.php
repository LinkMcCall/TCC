<?php

session_start();
include_once("../config.php");
               if(!isset($_GET["id"]))
                  {
                     header("Location:../usu/index.php");
                  }
                  
                  else{
                      $nt =$_GET["id"]; 
                  $op = mysqli_query($link, "SELECT * FROM noticias where id_noticia = '$nt'");
                       $nt_at = mysqli_fetch_object($op);
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Configurações de Compartilhamento -->

    <!--Twitter -->
    <meta name="twitter:site" content="@doppel" />
    <meta name="twitter:creator" content="@doppel" />
    <meta name="twitter:url" content="<?php echo " http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:domain" content="<?php echo BASE; ?>" />
    <meta name="twitter:title" content="<?php echo $nt_at->titu_not; ?>" />
    <meta name="twitter:description" content="<?php echo $nt_at->manchete; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo BASE." img/$nt_at->imgs" ?>" />


    <!--Facebook -->
    <meta property="og:title" content="<?php echo $nt_at->titu_not; ?>" />
    <meta property="og:description" content="<?php echo $nt_at->manchete; ?>" />
    <meta property="og:url" content="<?php echo " http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="<?php echo BASE." img/$nt_at->imgs" ?>" />

    <meta property="og:image:width" content="100%" />
    <meta property="og:image:height" content="100%" />
    <meta property="og:type" content="article" />
    <meta property="article:author" content="<?php echo $nt_at->nm_usuario ?>" />
    <meta property="article:section" content="<?php echo $nt_at->nm_usuario ?>">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="<?php echo BASE; ?>img/top.ico" type="image/x-icon" style="font-size:6em;" />
    <link rel="shortcut icon" href="<?php echo BASE; ?>img/top.ico" type="image/x-icon" style="font-size:6em;" />
    <link rel="stylesheet" href="<?php echo BASE; ?>node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>node_modules/bootstrap/compiler/bootstyle.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>node_modules/bootstrap/compiler/icons.svg">
    <link rel="stylesheet" href="<?php echo BASE; ?>Fontawasome/Fontawasome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>style/style.css">

    <style>

        .img-post{
            height: 600px;
            position: relative;
        }
        .img-post img {
            object-fit: cover;
        }
        .tema {
            width: 100%;
            border-bottom: 1px solid #000;
        }
        .bt-tema {
            padding: 15px 50px !important;
            border-radius: 0px;
        }
        .linha-la {
            background: #000;
            width: 5px;
            
        }
        .comp-redes-sociais {
            width: 100%;
        }
        .comp-redes-sociais .nav i {
            font-size: 34px;
            color: rgb(255, 97, 26);
        }
        .usu-postagem {
            border-bottom: 1px solid #000;
        }
        .foto-usu {
            width: 110px;
            height: 120px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #fff;
        }
        
        .post-popu {
            height: 150px;
        }
        
        .post-popu:hover img {
            opacity: 0.22;
        }
        
        .post-popu:hover  .titulo-post {
            display: block;
        }
        
        .titulo-post {
            z-index: 1;
            bottom: 0;
            display: none;
        }
        
        .picture-22 {
    width: 100%;
    height: 100%;
    max-width: 100%;
    object-fit: cover;
    -moz-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
        
        .picture-22:hover {
    -moz-transform: scale(1.05);
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
}
        
        .hr {
            background: #000;
        }

        </style>

    <title>DoppelNews</title>
</head>

<body>
    <?php
      include DIR."/include/header.php"                     
    ?>
    <div class="img-post">
        <img src="../img/<?php echo $nt_at->imgs?>" class="d-block w-100 h-100">
    </div>


    <div class="container black my-3 p-4 " id="orange">
        <div class="d-flex">
            <div class="col-md-9 border border-bottom-0 border-top-0 border-left-0">
                <div class="tema d-flex">
                    <button class="btn-tema  bot-tema" id="black">
                        <?php echo $nt_at->tema ?></button>
                    <div class="linha-la"></div>
                </div>
                <div class="row">

                    <div class="text-white col-12 text-center my-3 titu_not">
                        <h1>
                            <?php echo  $nt_at->titu_not; ?>
                        </h1>
                    </div>

                </div>
                <div class="w-100 d-flex">
                    <p class="text-secondary ml-auto tempo_not cool-link8">
                        <?php 
                        setlocale( LC_ALL, 'pt_BR', 'portuguese');
                        $tempo = $nt_at->date;
                        $tempo = new datetime($tempo);
                        $tempod = $tempo->format('d');
                        $tempom = $tempo->format('m');
                        $tempom = strftime( '%B', $tempom);
                        $tempoy = $tempo->format('Y');
                        $hor = $tempo->format('h');
                        $min = $tempo->format('i');

                        echo $tempod." de ".$tempom." de ".$tempoy." às ".$hor."h".$min;

                    ?>
                    </p>
                </div>
                <hr class="bg-secondary p-0 m-0" />
                <div class="row">
                    <?php 

    // Seleciona todos os usuários

    // Exibe as informações de cada usuário

        // Exibimos a foto
        echo "
        <div class='d-flex p-1 mb-2 text-white '>


        ";
        // Exibimos o nome e email
        echo '
        <div class="col-sm-10 col-md-8 col-lg-12">
        <div class="noticia">
        '
        .$nt_at->noticia_texto.'
        </div>
         <div class="usu-postagem pt-2 pb-2 d-flex w-100 mt-5 border border-right-0 border-left-0 criador">
                        <div class="col-md-8 p-0 d-flex ">
                            <div class="n-usu pl-3  cool-link9">
                                <p>Publicado por '.$nt_at->nm_usuario.'</p>
                            </div>
                        </div>
                        <div class="comp-redes-sociais col-md-4 pl-2 pr-0 ml-auto">
                            <p class="text-white">Compartilhe nas Redes Sociais</p>
                            <ul class="nav  p-0 col-md-12" id="orange">
                                <li class="nav-item pl-0 mr-auto"><a href="" class="nav-link pl-0"><i class="icon-face  icon-rede2" style="color: #FF611A !important; "></i></a></li>
                                <li class="nav-item pl-0 ml-auto mr-auto"><a href="" class="nav-link pl-0"><i class="icon-ins  icon-rede" style="color: #FF611A !important; "></i></a></li>
                                <li class="nav-item pl-0 ml-auto"><a href="" class="nav-link pl-0"><i class="icon-tw  icon-rede" style="color: #FF611A !important; "></i></a></li>
                            </ul>
                        </div>
                    </div>
        </div>
        </div>
        ';
?>


                </div>
            </div>
            <div class="col-md-3 post">
                <h2>Post Recentes</h2>
                <hr class="w-100 hr" />
                <div class="w-100">
                    <?php 
                      $notp = mysqli_query($link, "select * from noticias ORDER BY date desc LIMIT 4");
                      
                      while ($re = mysqli_fetch_object($notp)) {
                          echo '
                            <div class="col-md-12 d-flex p-0 mt-4 mb-4 ">
                                <div class="col-md-12 p-0 post-popu">
                                    <img src="'.BASE.'/img/'.$re->imgs.' " class="w-100 img-fluid  picture-22 lock_not rounded">
                                    <div class="titulo-post position-absolute p-2">
                                        <p>'.$re->titu_not.'</p>
                                    </div>
                                </div>
                            </div>
                          
                          ';
                      }
                    ?>
                </div>
            </div>
        </div>

    </div>

    <?php
        include DIR.'include/footer.php';              
    ?>
   <!--Modal -->
   <?php
      include DIR.'include/modal.php';                
    ?>
    <!--script-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo BASE; ?>node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASE; ?>js/icones.js"></script>
    <script src="<?php echo BASE; ?>node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?php echo BASE; ?>node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo BASE; ?>js/Script.js"></script>
</body>

</html>



<?php }?>