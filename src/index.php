<?php
namespace Sobreira\DesafioAstrotech;
require_once __DIR__ . '/../vendor/autoload.php';

use Sobreira\DesafioAstrotech\Venda\Venda;
use Sobreira\DesafioAstrotech\Venda\Produto;
use Sobreira\DesafioAstrotech\Venda\Categoria;

$produto1 = new Produto('Produto 1', 100, new Categoria('Notebook', 0.06));
$produto2 = new Produto('Produto 2', 200, new Categoria('Smartphone', 0.08));
$produto3 = new Produto('Produto 3', 200, new Categoria('Eletrodoméstico', 0.10));
$arrayProdutos = [$produto1, $produto2, $produto3];

$venda = new Venda();
$venda->adicionarPedido($arrayProdutos);
$resultVenda = $venda->gerarRelatorioVenda();

foreach ($resultVenda as $key => $relatorio) {
    echo $key . ': ' . $relatorio . PHP_EOL;
}