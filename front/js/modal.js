$('#exampleModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('Welcome a Desenvouve ' /*+ recipient*/ )
    modal.find('.modal-body input').val(recipient)
})

jQuery(document).ready(function() {
    jQuery('#modal-register').on('click', function(e) {
        jQuery('#login-modal').modal('toggle')
        jQuery('.modal-backdrop.fade.show').hide();
    });

    jQuery('#modal-login').on('click', function(f) {
        jQuery('#login-modal').show();
        jQuery('.modal-backdrop.fade.show').show();
    });

    jQuery('#button-register').on('click', function(g) {
        jQuery('#register-modal').modal('toggle')
        jQuery('.modal-backdrop.fade.show').hide();
    });

    jQuery('#button-register').on('click', function(h) {
        jQuery('#confirmation-modal').show();
        jQuery('.modal-backdrop.fade.show').show();
    });
});

jQuery(document).ready(function() {
    jQuery('#toggleAlterarSenha').on('click', function(event) {
        event.preventDefault();
        jQuery('.caixaAlterarSenha').toggleClass('d-none');
    });
});

jQuery('#btn-responder').click(function() {
    jQuery('.campo-resposta').toggleClass('d-none');
});