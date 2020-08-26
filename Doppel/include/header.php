  
    <nav class="navbar navbar-expand-lg  navbar-dark " id="header" style=" background-color: rgb(19,19,19,0.6);">

        <div class="container">



            <a class="navbar-brand h1 nb-0 t-sm-4 p-0 m-0 " href="<?php echo BASE; ?>index.php"><img class="icon_header" src="<?php echo BASE;?>imgs/icon.png" alt="shovel-knight-font" border="0"></a>




            <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse   text-center" id="navbarSite">
                <div class=" hmr-md-5 hmr-sm-0 ml-auto ">
                    <ul class=" navbar-nav ml-auto hpr-md-3 hpr-sm-0 xc my-auto ">
                        <li class="nav-item   hmr-md-3 hmr-sm-0 cool-link1 p-l-2 my-auto mr-1">
                            <a class="nav-link " id="orange" href="<?php echo BASE; ?>not_html/index.php" style="color: #FF611A !important; ">
                                <i class="icon-news  icon-nav" style="color: #FF611A !important; "></i>
                            News</a>
                        </li>

                        <li class="nav-item  hmr-md-3 hmr-sm-0  cool-link2 my-auto mr-1">  
                        <a class="nav-link " id="blue" href="<?php echo BASE; ?>sal/salas.php" style="color:  #00F8FF !important;" >

                        <i class="icon-axe  icon-nav2" style="color: #00F8FF !important; "></i>
                          Salas
                          </a>

                        </li>
                        <li class="nav-item  hmr-md-3 hmr-sm-0 cool-link3 my-auto mr-1">
                            <a class="nav-link " id="green" href="<?php echo BASE; ?>perso/persons.php" style="color: #16DC5B !important; ">
                            <i class="icon-dnd  icon-nav3" style="color: #16DC5B !important; "></i>
                            Personagens</a>
                        </li>
                        <li class="nav-item  hmr-md-3 hmr-sm-0 cool-link4 my-auto ">
                            <a class="nav-link " id="gold" href="<?php echo BASE; ?>help/ajuda.php" style="color: #FFD700 !important; ">
                                <i class="icon-aj  icon-nav4" style="color: #FFD700 !important; "></i>
                            Ajuda</a>
                        </li>



                    </ul>
                </div>

                <?php
                if(!isset( $_SESSION["nivel_da_conta"])){
                   echo ' <ul class="navbar-nav ">

                    <li class="nav-item dropdown cool-link5">

                        <a class="nav-link dropdown-toggle component-active-bg " href="#" data-toggle="dropdown" id="navDrop" style="color: #FF611A !important; ">
                            <i class="icon-user i-c-u" style="font-size:36px;color: #FF611A !important"; "></i>
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#siteModalLg">Entrar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#siteModalCd">Cadastrar</a>

                        </div>
                    </li>

                </ul>';
                }
                else if($_SESSION["nivel_da_conta"]  == 5){
                    echo '<ul class="navbar-nav ">

                    <li class="nav-item dropdown cool-link5">

                        <a class="nav-link dropdown-toggle component-active-bg xc" href="#" data-toggle="dropdown" id="navDrop" style="color: #FF611A !important; ">
                            Ola! '. $_SESSION['nm_usuario'] .'
                        </a>
                        <div class="dropdown-menu  ">
                            <a class="dropdown-item" href="'.BASE.'admin/criar_not.php">Criar notícia</a>
                            <a class="dropdown-item" href="'.BASE.'admin/criar_pod.php">Criar Podcast</a>
                            <a href="'.BASE.'crud/pagina-alterar.php" class="dropdown-item">Atualizar</a>
                            <a href="'.BASE.'crud/pagina-excluir.php" class="dropdown-item">Deletar</a>
                            <a href="'.BASE.'crud/pagina-listagem-dados.php" class="dropdown-item">Listar</a>
                            <a href="'.BASE.'crud/pagina-cadastro.php" class="dropdown-item">Inserir</a>
                            <a href="'.BASE.'dnd/criar_rg.php" class="dropdown-item">Regras</a>
                            <form action="'.BASE.'crud/sair.php">
                                <input type="submit" value="Sair" name="Sair" class="dropdown-item">
                            </form>


                        </div>
                    </li>

                </ul>';

                }
                else{
                    echo '<ul class="navbar-nav ">

                    <li class="nav-item dropdown ">

                        <a class="nav-link dropdown-toggle component-active-bg xc" href="#" data-toggle="dropdown" id="navDrop" style="color: #FF611A !important; ">
                            Ola! '. $_SESSION['nm_usuario'] .'
                        </a>
                        <div class="dropdown-menu  ">
                            <a class="dropdown-item" href"'.BASE.'crud/sair.php">Sair</a>
                        </div>
                    </li>

                </ul>';
                }
                ?>

            </div>
        </div>


    </nav>
