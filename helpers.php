<?php

function saudacao($hora) {
    if ($hora >= 0 && $hora < 6) {
        $saudacao = 'Boa madrugada'; 
    } elseif ($hora >= 6 && $hora < 12) {
        $saudacao = 'Bom dia';
    } elseif ($hora >= 12 && $hora < 18) {
        $saudacao = 'Boa tarde';
    } else {
        $saudacao = 'Boa noite';
    }

    return $saudacao;
}

?>