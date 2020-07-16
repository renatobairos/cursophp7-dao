<?php 

require_once("config.php");


//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários por uma busca por login
//$search = Usuario::search("j");
//echo json_encode($search);

//Carrega usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Renan", "123");
//echo $usuario;


//Inclusão de aluno
//$aluno = new Usuario("Renan Aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

//Alteração de dados de alunos
//$usuario = new Usuario();
//$usuario->loadById(14);
//$usuario->update("Novo Professor", "XXXX");
//echo $usuario;

//Deletar um usuário
$usuario = new Usuario();
$usuario->loadById(17);
$usuario->delete();
echo $usuario;

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

?>