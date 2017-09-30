<?php 

require_once("config.php");

// Carrega um usuário
// $root = new Usuario();
// $root->loadbyId(4);
// echo $root;

// Carrega uma lista de usuários
//$lista = Usuario::getList();

// echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search('reyson');

//echo json_encode($search);

// carrega um usuario usando o login e a senha
$usuario = new Usuario();

$usuario->login('reyson', '0sn0f@');

echo $usuario;