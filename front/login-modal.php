<!-- START MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog desenvolve-modal-login" role="document">
        <div class="modal-content">
            <img class="sing-in-image" src="../img/sign-in.png" alt="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bem-vindo a Desenvouve</h5>
                <button type="button" class="close close-button-sign-in" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="login-modal.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control input-login" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control input-login" placeholder="Senha" id="basic-url" aria-describedby="basic-addon3" required>
                    </div>
                    <button href="" class="btn btn-secondary button-sign-in">Acessar</button>
                </form>
                <button type="button" class="btn btn-outline-light button-sign-google-facebook"><i
                            class="fab fa-google icon-social-media"></i>Acessar com Google</button>
                <button type="button" class="btn btn-outline-light button-sign-google-facebook"><i
                            class="fab fa-facebook-f icon-social-media"></i>Acessar com Facebook</button>
                <p class="p-sign-in">Ainda não tem uma conta?
                  <span href="register.php" id="modal-register" data-toggle="modal" data-target="#register-modal">Registrar</span>
                </p>
                <p href="forget.php" class="p-sign-in"><span>Esqueceu sua senha?</span></p>
            </div>
        </div>
    </div>
</div>

<!--END MODAL LOGIN-->
