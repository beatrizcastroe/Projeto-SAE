<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($email)) {
    echo "ErroEmail";
    die();
}
if (empty($senha)) {
    echo "ErroSenha";
    die();
}

include "../Models/login_script.php"

?>


