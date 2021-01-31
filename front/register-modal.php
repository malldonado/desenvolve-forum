<!--START MODAL REGISTER-->

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <img class="img-logo-sing-in" src="../img/logo.png" alt="">
            <img class="sing-in-image" src="../img/sign-in.jpg" alt="">
            <div class="modal-header">
                <h5 class="modal-title-register" id="exampleModalLabel">Bem-vindo a Desenvouve</h5>
                <button type="button" class="close close-button-sign-in" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body modal-body-register">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-login" placeholder="Nome completo" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control input-login" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control input-login" placeholder="Senha" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control input-login" placeholder="Repita a senha" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <button href="confirmation-modal.php" type="button" class="btn btn-secondary button-sign-in" id="button-register" data-toggle="modal" data-target="#confirmation-modal">Registrar</button>
                <button type="button" class="btn btn-outline-light button-sign-google-facebook"><i
                            class="fab fa-google icon-social-media"></i>Acessar com Google</button>
                <button type="button" class="btn btn-outline-light button-sign-google-facebook"><i
                            class="fab fa-facebook-f icon-social-media"></i>Acessar com Facebook</button>
                <p href="login-modal.php" class="p-sign-in">Acessar sua conta <span id="modal-register" data-toggle="modal" data-target="#register-modal">Acessar</span></p>
                <p href="forget.php" class="p-sign-in"><span>Esqueceu sua senha?</span></p>
            </div>
        </div>
    </div>
</div>

<!--END MODAL REGISTER-->
