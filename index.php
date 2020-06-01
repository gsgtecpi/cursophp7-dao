<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios); // criando arquivo json


//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("gi");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "54321");
//echo $usuario;


//criando novo usuario fazendo via procedure 
//$aluno = new Usuario("aluno", "aluno123");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("aluno123");

//$aluno->insert();

//echo $aluno;


// atualizanddo usuario metodo Update
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor", "prof123");

echo $usuario;



?>