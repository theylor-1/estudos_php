<?php

$hora = null;
function saudacaoIf($hora)
{
    if ($hora >= 0 && $hora < 6) {
        echo 'Boa madrugada';
    }
    if ($hora >= 6 && $hora < 12) {
        echo 'Bom dia';
    }
    if ($hora >= 12 && $hora < 18) {
        echo 'Boa tarde';
    }
    if ($hora >= 18 && $hora < 23) {
        echo 'Boa noite';
    }
}

function saudacaoIfelse($hora)
{
    if ($hora >= 0 && $hora < 12) {
        echo 'Bom dia!';
    } else {
        echo 'Boa noite!';
    }
}

function saudacaoElseIf($hora)
{
    if ($hora >= 0 && $hora < 6) {
        echo 'madrugada';
    } elseif ($hora >= 6 && $hora < 12) {
        echo 'dia';
    } elseif ($hora >= 12 && $hora < 18) {
        echo 'tarde';
    } elseif ($hora >= 18 && $hora < 23) {
        echo 'noite';
    } else {
        echo 'hora inválida';
    }
}
function saudacaoBreak($hora)
{
    switch ($hora) {
        case 1:  // Manhã
            echo 'Manhã';
            break;
        case 2: // Tarde
            echo 'Tarde';
            break;
        case 3: // Noite
            echo 'Noite';
            break;
        default:
            echo 'Valor inválido';
    }
}