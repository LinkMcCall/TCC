
    <div class="modal fade back  " id="siteModalCd" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered " id="orange" role="document">
            <div class="modal-content bg-dark" id="orange">
                <div class="modal-header">
                    <h2 class="modal-title tempo" id="orange">Cadastrar</h2>
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
                                        <input type="text" name="nm_usuario" class="form-control" required id="nm_usuario" autocomplete="off" placeholder="Nick"><br>
                                        <input type="email" name="email" class="form-control" required id="email" autocomplete="off"placeholder="Email"><br>
                                        <input type="password" name="senha" class="form-control" required id="senha" autocomplete="off" placeholder="Senha"><br>
                                        <input type="password" name="confirmasenha" class="form-control" required id="confirmasenha" autocomplete="off" placeholder="Confirmar Senha">
                                        <br>
                                        <button type="submit" class="text-white btn btn-secondary  bot-modal mr-auto  tempo" id="orange">Enviar</button>
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="text-white btn btn-secondary  bot-modal ml-auto tempo" data-dismiss="modal">Fechar</button>


                </div>
            </div>
        </div>


    </div>

    <div class="modal fade back" id="siteModalLg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered " id="orange" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h2 class="w-100  modal-title tempo" id="orange">Logar</h2>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>

                </div>
                <div class="modal-body back ">

                    <div class="container-fluid back ">

                        <div class="row">
                            <div class="w-100">

                                <div class="form-group ">
                                    <form method="POST" action="php/valida.php" name="login">
                                        <br><br>
                                        <input type="email" name="email" class="form-control" required id="email" autocomplete="off" placeholder="Email"><br>
                                        <input type="password" name="senha" class="form-control" required id="senha"placeholder="Senha">
                                        <br>
                                        <div class="d-flex justify-content-center">
                                        <button type="submit" class="text-white btn btn-secondary  bot-modal  mr-auto tempo" id="orange">Entrar</button>
                                            </div>
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="text-white btn btn-secondary  bot-modal  ml-auto tempo" data-dismiss="modal">Fechar</button>


                </div>
            </div>
        </div>


    </div>

