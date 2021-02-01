<?php require_once("header.php");
?>

<div class="container">
    <div class="row justify-content-center" id="perfil">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h2 class="h3 mb-4 page-title">Perfil</h2>
            <div class="my-4">
                <form>
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-4">
                            <div class="avatar avatar-xl">
                                <img src="../img/perfil.svg" alt="..." class="img-fluid rounded-circle" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1 mt-2">Heber Gustavo</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">Administrador</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <p class="small mb-0 text-muted">(19) 9.8708-7683</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Nome</label>
                            <input type="text" id="firstname" class="form-control" placeholder="João" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Sobrenome</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Kleber" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="joao_kleber@gmail.com" />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress5">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress5" placeholder="Rua Russia, 2210 - Jardim Europa, SBO" />
                    </div>
                    <div class="form-row linhaAlterarSenha">
                        <button class="btn btn-success btn-sm mr-1" id="toggleAlterarSenha">Alterar senha</button>
                    </div>
                    <div class="caixaAlterarSenha d-none">
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="novaSenha">Nova senha</label>
                                <input type="password" id="novaSenha" class="form-control" placeholder="******" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmarSenha">Confirmar senha</label>
                                <input type="password" id="confirmarSenha" class="form-control" placeholder="******" />
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("login-modal.php");
      require_once("register-modal.php");
      require_once("confirmation-modal.php");
      require_once("start-pagination.php");
      require_once("footer.php");
?>
