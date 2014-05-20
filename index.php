<?php
if (isset($_REQUEST['controlador'])) {
    $controlador = $_REQUEST['controlador'];
} else {
    $controlador = 'livro';
}
if (isset($_REQUEST['acao'])) {
    $acao = $_REQUEST['acao'];
} else {
    $acao = 'lista';
}
$controlador = $controlador . '_controlador';
require_once ('controlador/' . $controlador . '.php');
$obj = new $controlador;
call_user_func(array($obj, $acao));
