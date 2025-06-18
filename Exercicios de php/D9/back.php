<?php
function converterParaMaiusculas($texto) {
    echo strtoupper($texto);
}

$texto = $_POST['palavra'];
converterParaMaiusculas($texto);
?>