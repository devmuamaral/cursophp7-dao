<?php

require_once("config.php");

//carrega 1 usuario

//$root = new Usuario();
//$root->loadById(16);
//echo $root;

//carrega lista de usuarios
//método getList é estático portanto nao precisa o objeto ser instanciado
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega lista buscando por login
//$search = Usuario::search("o");
//echo json_encode($search);

//Carrega um usuario usando login e senha

//$usuario = new Usuario();
//$usuario->login("new", "0000");

//echo $usuario;

//CRIANDO NOVO USUARIO 
/*
$aluno = new Usuario();


$aluno->insert();

echo $aluno;
*/

//Alterar um usuario
/*
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "senhaprof");

echo $usuario;
*/

//DELETA LINHA
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;


?>