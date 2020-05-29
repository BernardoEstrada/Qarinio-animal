<?php
    include '_header.html';
    include '_navbar.html';
    if(checkPriv("adoptar")):
?>

<div class="uk-container uk-margin uk-margin-large-bottom">
    <h1 class="uk-text-center">Gestionar Solicitudes de Adopción</h1>
    <hr class="uk-divider-icon">
    <h5 class="uk-margin-remove-bottom">Haz clic sobre cada elemento de tu solicitud para obtener más información.</h5>

    <div id = "tablaSolicitudes">
        <div class="uk-position-center uk-position-relative uk-margin-xlarge-top" uk-spinner="ratio: 2">

        </div>
    </div>
</div>

<div class = "uk-modal-container" id = "formulario">
<div class = "uk-modal-container" id = "pago">
</div>

<?php
else:
    http_response_code(404);
    header("location:error");
    endif;
    include '_footer.html';
?>

<script type="text/javascript">
    muestraSolicitudes();

</script>
