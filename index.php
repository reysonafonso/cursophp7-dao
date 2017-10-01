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
//$usuario = new Usuario();
//$usuario->login('reyson', '0sn0f@');
//echo $usuario;


// Criando um novo usuario
// $aluno = new Usuario("leticia","leticianismo");

//$aluno->setDeslogin('suelen');
//$aluno->setDessenha('sussuca');

// $aluno->insert();

// echo $aluno;

/* Alterar um usuario
$usuario = new Usuario();
$usuario->loadbyId(4);

$usuario->update("Denis", "denis120676");

echo $usuario;

*/

$usuario = new Usuario();
$usuario->loadbyId(5);
$usuario->delete();
echo $usuario;

