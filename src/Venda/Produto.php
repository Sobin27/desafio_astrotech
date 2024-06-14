<?php
namespace Sobreira\DesafioAstrotech\Venda;

class Produto
{
    public function __construct(
        public string  $nome,
        public float $preco,
        public Categoria $categoria,
    )
    { }
}