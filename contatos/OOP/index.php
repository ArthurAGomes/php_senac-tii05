<?php

require_once 'usuarioDAO.php';

$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->getContatos();

print_r($usuarios);
?>