<?php 

require_once("class/Produto.php");

$livro = new Produto();

$livro->nome = "Livro de PHP";
$livro->preco = 30.0;
$livro->descricao = "Livro de PHP e OO";
$livro->usado = false;
$livro->vcategoria_id = 1;


 ?>