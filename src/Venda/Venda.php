<?php
namespace Sobreira\DesafioAstrotech\Venda;

class Venda
{
    private array $totalProdutos;

    public function adicionarPedido(array $produto): void
    {
      $this->totalProdutos = $produto;
    }
    private function calcularTotalBruto(): float
    {
      $totalBruto = 0;
        foreach ($this->totalProdutos as $produto) {
            $totalBruto += $produto->preco;
        }
      return $totalBruto;
    }
    private function calcularImpostos(): float
    {
      $totalImpostos = 0;
        foreach ($this->totalProdutos as $produto) {
            $totalImpostos += $produto->preco * $produto->categoria->taxaImposto;
        }
      return $totalImpostos;
    }
    private function calcularTotalLiquido(): float
    {
        return $this->calcularTotalBruto() + $this->calcularImpostos();
    }
    public function gerarRelatorioVenda(): array
    {
        return [
            'numeroDePedidos' => count($this->totalProdutos),
            'totalBruto' => $this->calcularTotalBruto(),
            'impostos' => $this->calcularImpostos(),
            'totalLiquido' => $this->calcularTotalLiquido(),
        ];
    }
}