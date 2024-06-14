<?php
namespace Sobreira\DesafioAstrotech\Venda;

class Categoria
{
    public function __construct(
        public string $nome,
        public float $taxaImposto,
    )
    { }
}