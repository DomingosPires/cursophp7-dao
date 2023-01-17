<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo '<pre>';
echo json_encode($usuarios);*/

/* //////////////////////////// */
/*      MOSTRA USER BY ID       */
/* //////////////////////////// */

/*$root = new Usuario();
$root->loadById(4);

echo '<pre>';
echo $root;

/* //////////////////////////// */
/*     MOSTRA TODOS OS USERS    */
/* //////////////////////////// */

/*$list = Usuario::getList();

echo '<pre>';
echo json_encode($list);*/

/* //////////////////////////// */
/*     MOSTRA USERS BY LOGIN    */
/* //////////////////////////// */

/*$search = Usuario::search("Pi");

echo '<pre>';
echo json_encode($search);*/

/* //////////////////////////////////////// */
/*     MOSTRA USERS USANDO LOGIN E SENHA    */
/* //////////////////////////////////////// */

$usuario = new Usuario();

$usuario->userLogin("Domingos","1234567890");

echo '<pre>';
echo json_encode($usuario);



?>