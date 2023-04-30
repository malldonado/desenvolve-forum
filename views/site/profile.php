<?php 
      require_once("partials/header.php");
?>

<div class="container">
    <div class="row profile">
        <div class="col-lg-3 profile">
            <img class="rounded-circle" src="../img/perfil.svg" alt="Generic placeholder image" width="140" height="140">
            <h5 class="title-profile">Pedro Alves</h5>
            <p>Desenvolvedor Front-end Junior</p>
            <a class="btn btn-outline-success" href="user.php">Detalhes</a>
        </div>

        <div class="col-md-9 questions">

            <h5>Históricos de dúvidas</h5>

            <div class="row">

                <div class="col-md-12 item-question">
                    <a href="response.php">
                        <h6> Erro de API 500 do Google Drive no plug-in Wordpress </h6>
                    </a>
                    <p> Gostaria de ajuda sobre como depurar um erro 500 que vem de uma solicitação AJAX. Eu desenvolvi um plugin para Wordpress que cria uma pasta e carrega arquivos para o Google Drive. Estava funcionando muito bem em um ... </p>
                    <span class="votes">0 votos</span> <span class="responses">0 Perguntas</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
      require_once("partials/login-modal.php");
      require_once("partials/register-modal.php");
      require_once("partials/confirmation-modal.php");
      require_once("partials/start-pagination.php");
      require_once("partials/footer.php");
?>
