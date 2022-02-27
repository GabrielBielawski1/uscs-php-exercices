<?php

$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

if ($email == 'aluno@uscs.edu.br' && $senha == "aluno@uscs"){
    echo "Dados corretos!";
}else{
    echo "Dados inválidos!!!";
}

?>