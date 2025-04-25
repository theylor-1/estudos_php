<?php
include_once 'helpers.php';  // Inclui o arquivo com a lógica da função

// Verifica se a hora foi enviada via formulário
if (isset($_POST['hora'])) {
    $hora = $_POST['hora'];  // Pega a hora enviada pelo formulário
    echo saudacao($hora);  // Chama a função saudacao e exibe o resultado
} else {
    // Caso não tenha enviado a hora, exibe o formulário
    echo '
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <form method="POST" action="">
        <label for="hora">Digite a hora (0-23): </label>
        <input type="number" id="hora" name="hora" min="0" max="23" required>
        <input type="submit" value="Ver saudação">
    </form>
    ';
}
?>