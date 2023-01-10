<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo '<pre>';
echo json_encode($usuarios);*/

$root = new Usuario();

$root->loadById(4);
echo '<pre>';
echo $root;



?>