<?php

// Inclui o arquivo de conexão com o banco de dados
include_once("../php/conexao.php");

session_start();
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
    <title>Doppel</title>
<style>
.picture_top {
height: 266px;
width: 100%;
overflow: hidden;
}
    
.slide-w {
height: 266px;
width: 100%;
overflow: hidden;
}
    
.slide-w2 {
height: 545px;
width: 100%;
overflow: hidden;
}

.picture {
width: 100%;
height: 100%;
max-width: 100%;
object-fit: cover;
-moz-transition: all 0.3s;
-webkit-transition: all 0.3s;
transition: all 0.3s;
}

.picture:hover {
-moz-transform: scale(1.1);
-webkit-transform: scale(1.1);
transform: scale(1.1);
}

.featured__head {
flex-direction: column;
}

.featured__head {
display: flex;
}

.featured__head {
width: 100%;
}
.tempo {
font-size: 1.01rem;
letter-spacing: 1.3px;
color: #8c8c96;
font-weight: 600;
}

.tema {
font-size: 1.01rem;
font-weight: 600;
letter-spacing: 1.3px;
}
.titulo {
font-size: 1.35rem;
font-weight: 700;
color: #fff;
}

.titulo:hover {
color: #8c8c96;
}

.link_titulo:hover {
text-decoration: none;
color: #8c8c96;
}

.manchete {
color: #8c8c96;
font-weight: 600;
    
}
    
    .close {
        color: white;
    }
    
    .close:hover {
        font-size: 30px;
        color: white;
    }
#header.fixed-top {
     -webkit-animation-name: logo; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 0.3s; /* Safari 4.0 - 8.0 */
    animation-name: logo;
    animation-duration: 0.3s;
}


@-webkit-keyframes logo {
    0%   {opacity: 0.1}
    25%  {opacity: 0.3}
    50%  {opacity: 0.5}
    75%  {opacity: 0.7}
    100% {opacity: 1}
}

/* Standard syntax */
@keyframes example logo {
    0%   {opacity: 0.1}
    25%  {opacity: 0.3}
    50%  {opacity: 0.5}
    75%  {opacity: 0.7}
    100% {opacity: 1}
}
    .bot-modal {
        width: 80%;
        margin: auto !important;
        border: 2px solid #ffffff;
        background: #343a40 !important;
    }
    
    
    .bt-menu {
        border: 2px solid white !important;
    }
.bt-menu:hover {
text-decoration: none;
border: 2px solid #FF550A !important;
}  
    
    .bt-menu-active {
        background: #FF550A;
        border: 2px solid #FF550A !important;
    }
    
    
    .bt-bot {
            border-radius: 5px;
       border: 2px solid #FF550A;
    }
    .bt-bot2:hover {
        text-decoration: none;
        border: 2px solid #FF550A !important;
    }
    .bt-bot2 {
        border: 2px solid #fff !important;
    }
    .bt-bot3 {
        border: 2px solid #FF550A;
        
    }
    
    .c-md-4, .cw-md-4 {
    position: relative;
    width: 100%;
    }
    
    @media (min-width: 768px) {
        .c-md-4 {
        flex: 0 0 40.8333333333%;
    max-width: 40.8333333333%;
        }
         .cw-md-4 {
        flex: 0 0 32.8333333333%;
    max-width: 32.4033333333%;
        }
    }
    .fot {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.4);
    }
    .tag {
        font-weight: 500 !important;
    }
    .fot h2 {
        font-size: 1.5rem;
        line-height: 100%;
    }
    .n-footer {
        color: white;
    }
    .n-footer:hover {
        text-decoration: none;
        color: #FF550A;
    }


     .s-footer {
        color: white;
    }
    .s-footer:hover {
        text-decoration: none;
        color: #17A2B8;
    }

     .p-footer {
        color: white;
    }
    .p-footer:hover {
        text-decoration: none;
        color: #23FFA8;
    }

     .j-footer {
        color: white;
    }
    .j-footer:hover {
        text-decoration: none;
        color:  #FFD700;
    }

    .c-footer {
        color: white;
    }
    .c-footer:hover {
        text-decoration: none;
        color:  #9924E3;
    }


    .icon_header{

        position: absolute;
        z-index: 1;
        top: 18px;
        padding-left: 10px;

    }


    .icon-rede{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:30px;
    line-height:25px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.10px;
    width:20px;
    -webkit-box-direction:normal;
    margin-right: 10px;

   }
   .icon-rede2{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:25px;
    line-height:15px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.10px;
    width:10px;
    -webkit-box-direction:normal;
    margin-right: 10px;
    margin-left: 5px;

   }

   .icon-nav{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:25px;
    line-height:25px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:20px;
    -webkit-box-direction:normal;

   }
      .icon-nav2{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:21px;
    line-height:21px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:15px;
    -webkit-box-direction:normal;

   }

    .icon-foon{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:35px;
    line-height:35px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:30px;
    -webkit-box-direction:normal;
    margin-right: 5px;

   }


     .icon-foo{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:32px;
    line-height:32px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:27px;
    -webkit-box-direction:normal;
    margin-right: 5px;

   }

       .icon-foo2{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:25px;
    line-height:25px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:20px;
    -webkit-box-direction:normal;
    margin-right: 5px;

   }

     .icon-foo3{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:28px;
    line-height:28px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:24px;
    -webkit-box-direction:normal;
    margin-right: 5px;

   }
    .icon-food{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:32px;
    line-height:32px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:30px;
    -webkit-box-direction:normal;
    margin-right: 5px;

   }

   .i-c-u{

    box-sizing:border-box;
    cursor:pointer;
    display:inline-block;
    font-family:fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size:35px;
    line-height:35px;
    list-style-type:none;
    overflow-x:visible;
    overflow-y:visible;
    text-align:left;
    text-size-adjust:100%;
    vertical-align:-1.30px;
    width:35px;
    -webkit-box-direction:normal;

   }
 
 
</style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" id="header">

        <div class="container">



            <a class="navbar-brand h1 nb-0 " href="perfil_usuario.php"><img class="icon_header" src="https://fontmeme.com/permalink/190305/0eb976136a89b8201ce88e895da63745.png" alt="shovel-knight-font" border="0"></a></a>




            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse   text-center" id="navbarSite">
                <div class=" mr-5 ml-auto">
                    <ul class=" navbar-nav ml-auto mr-5  ">
                        <li class="nav-item   mr-3">
                            <a class="nav-link " id="orange" href="../not_html/news.php">
                                <i class="icon-news  icon-nav"></i>
                            News</a>
                        </li>

                        <li class="nav-item  mr-3 ">  
                        <a class="nav-link " id="blue" href="../sal/salas.php">

                        <i class="icon-axe  icon-nav"></i>
                          Salas
                          </a>

                        </li>
                        <li class="nav-item  mr-3">
                            <a class="nav-link" id="green" href="../perso/persons.php">
                            <i class="icon-dnd  icon-nav"></i>
                            Personagens</a>
                        </li>
                        <li class="nav-item  mr-3">
                            <a class="nav-link" id="gold" href="../help/ajuda.php">
                                <i class="icon-aj  icon-nav2"></i>
                            Ajuda</a>
                        </li>



                    </ul>
                </div>


                <ul class="navbar-nav ">

                    <li class="nav-item dropdown dropright">

                        <a class="nav-link dropdown-toggle component-active-bg " href="#" data-toggle="dropdown" id="navDrop">
                            <i class="icon-user i-c-u" style="font-size:36px;color:#ff550a;"></i>
                        </a>
                        <div class="dropdown-menu mr-2">
                            <a class="dropdown-item" href="../sal/salas.php">Salas</a>
                            <a class="dropdown-item" href="../perso/persons.php">Personagens</a>

                            <form action="../crud/sair.php">
                                <input type="submit" value="Sair" name="Sair" class="dropdown-item">
                            </form>

                        
                        </div>
                    </li>

                </ul>

            </div>
        </div>


    </nav>

            <div class="container bg-dark my-3" id="orange">

        <div class="row">

            <div class="col-10 ml-auto mr-auto text-center my-3">


                <form method="post" action="inse_pod.php" name="cadastro_pod" enctype="multipart/form-data">
                    
                    <label>Titulo:</label>
                    <input type="text" name="titulo" class="form-control" /><br><br>
                    
                    <label>Podcast:</label>
                    <input type="file" class="form-control" name="pod" /><br /><br />

                    <label>Imagem:</label>
                    <input type="file" class="form-control" name="imgs" /><br /><br />
                    <input type="submit" class="btn btn-danger w-100" name="Enviar" value="Enviar" />
                </form>

            </div>
        </div>
    </div>


    <footer class="col-lg-12  col-sm-9 text-center">
       <div class="container p-0">
        <div class="row mn-2 bg-dark">
            <div class="col-lg-2 bg-dark">
                <ul class="list-group bg-dark text-left nav flex-column p-0" >
                    <li class="pl-0 pb-2 pt-2 bg-dark bt-bot3   border-left-0 border-right-0 border-top-0 text-white">
                        <h4><a href="#noticias" class="n-footer"><i class="icon-news  icon-foon"></i> News</a></h4>
                    </li>
                    <li class="pr-2 pt-2 pb-2 bg-dark" id="orange"><a href="#" class="n-footer">Games</a></li>
                    <li class="pr-2 pt-2 pb-2 bg-dark" id="orange"><a href="#" class="n-footer">Anime</a></li>
                    <li class="pr-2 pt-2 pb-2 bg-dark" id="orange"><a href="#" class="n-footer">Hqs</a></li>
                    <li class="pr-2 pt-2 pb-2 bg-dark" id="orange"><a href="#" class="n-footer">Mangas</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark text-left nav flex-column p-0">
                    <li class="pl-0 pb-2 pt-2 bg-dark bt-bot3   border-left-0 border-right-0 border-top-0 text-white">
                        <h4 class="s-footer"> <i class="icon-axe  icon-foo"></i>Salas</h4>
                    </li>
                    <li class="pr-2 pt-2 pb-2 bg-dark" id="orange"><a href="#" class="s-footer">Novas</a></li>
                    <li class="pr-2 pt-2 pb-2 bg-dark" id="orange"><a href="#" class="s-footer">Populares</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a href="#" class="s-footer">Mestres</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a href="#" class="s-footer">Sorte</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark text-left nav flex-column p-0">
                    <li class="pl-0 pb-2 pt-2 bg-dark bt-bot3   border-left-0 border-right-0 border-top-0 text-white">
                        <h4 class="p-footer"><i class="icon-dnd  icon-food"></i> Heróis</h4>
                    </li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a href="#" class="p-footer" >Meus</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a href="#" class="p-footer">Melhores</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a href="#" class="p-footer">Exemplos</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a href="#" class="p-footer">Populares</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark text-left nav flex-column p-0">
                    <li class="pl-0 pb-2 pt-2 bg-dark bt-bot3   border-left-0 border-right-0 border-top-0 text-white">
                        <h4 class="j-footer"><i class="icon-aj  icon-foo2"></i> Ajuda</h4>
                    </li>
                    <li class="pr-2 pt-2 pb-2 bg-dark"><a class="j-footer" href="help/Ajuda.php?categoria=DnD">D&amp;D</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a class="j-footer" href="help/Ajuda.php?categoria=DnD">Livros</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a class="j-footer" href="help/Ajuda.php?categoria=Coment">Fale Conosco</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark"><a class="j-footer" href="help/Ajuda.php?categoria=Pergunt">Perguntas</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark text-left nav flex-column p-0" id="back-bg">
                    <li class="pl-0 pb-2 pt-2 bg-dark bt-bot3   border-left-0 border-right-0 border-top-0 text-white" id="orange">
                        <h4 class="j-footer"><i class="icon-aj  icon-foo2"></i> Sobre Nos</h4>
                    </li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="j-footer" href="">Facebook</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="j-footer" href="">Instagram</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="j-footer" href="">Twitter</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="j-footer" href="">Sobre Nos</a></li>

                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark text-left nav flex-column p-0" id="back-bg">
                    <li class="pl-0 pb-2 pt-2 bg-dark bt-bot3   border-left-0 border-right-0 border-top-0 text-white" id="orange">
                        <h4 class="c-footer"><i class="icon-ushp  icon-foo3"></i> Contatos</h4>
                    </li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="c-footer" href=""><i class="icon-face  icon-rede2"></i> Facebook</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="c-footer" href=""><i class="icon-ins  icon-rede"></i>Instagram</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="c-footer" href=""><i class="icon-tw  icon-rede"></i>Twitter</a></li>
                    <li class="pr-2 pt-2 pb-2  bg-dark" id="orange"><a class="c-footer" href="help/Ajuda.php?categoria=hl"><i class="icon-em  icon-rede"></i>E-mail</a></li>

                </ul>
            </div>
        </div>
        <div class="container mt-2" >
            <a href="" id="orange"> © 2017-2018-2019 Doppel | Vitor Bazilio | Felipe Antenori | Willberson Laurentino | Versão 2.0 <br></a>
            <a href="help/dir_aut.php" id="orange"> Todas as imagens de filmes, séries e etc são marcas registradas dos seus respectivos proprietários.</a>
        </div>
        </div>
    </footer>


    <!--modal-->

    <div class="modal fade back  " id="siteModalCd" tabindex="-1" role="dialog">
        <div class="modal-dialog " id="orange" role="document">
            <div class="modal-content bg-dark" id="orange">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>

                </div>
                <div class="modal-body back ">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-6">

                                <div class="form-group">

                                    <form method="POST" action="php/inserir.php" name="cadastro">
                                        <br><br>
                                        <label>Nick:</label><input type="text" name="nm_usuario" class="form-control" required id="nm_usuario" autocomplete="off">
                                        <label>Email:</label><input type="email" name="email" class="form-control" required id="email" autocomplete="off">
                                        <label>Senha:</label><input type="password" name="senha" class="form-control" required id="senha" autocomplete="off">
                                        <label>Confirmar Senha:</label><input type="password" name="confirmasenha" class="form-control" required id="confirmasenha" autocomplete="off">
                                        <br>
                                        <button type="submit" class="btn btn-dark form-inline" id="orange">Enviar</button>
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>


                </div>
            </div>
        </div>


    </div>

    <div class="modal fade back" id="siteModalLg" tabindex="-1" role="dialog">
        <div class="modal-dialog " id="orange" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h3 class="w-100 text-center modal-title">Logar</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>

                </div>
                <div class="modal-body back ">

                    <div class="container-fluid back ">

                        <div class="row">
                            <div class="w-100">

                                <div class="form-group">
                                    <form method="POST" action="php/valida.php" name="login">
                                        <br><br>
                                        <label>Email:</label><input type="email" name="email" class="form-control" required id="email" autocomplete="off">
                                        <label class="mt-2">Senha:</label><input type="password" name="senha" class="form-control" required id="senha">
                                        <br>
                                        <div class="d-flex justify-content-center">
                                        <button type="submit" class="text-white btn btn-secondary  bot-modal ml-auto mr-auto" id="orange">Entrar</button>
                                            </div>
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>


                </div>
            </div>
        </div>


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
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../js/icones.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>
<?php }?>