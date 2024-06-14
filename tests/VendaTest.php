<?php
use PHPUnit\Framework\TestCase;
use Sobreira\DesafioAstrotech\Venda\Categoria;
use Sobreira\DesafioAstrotech\Venda\Produto;
use Sobreira\DesafioAstrotech\Venda\Venda;

class VendaTest extends TestCase {

    public function testGerarResumoPedido() {

        // Arrange
        $produto1 = new Produto("Notebook Dell", 3000, new Categoria("Notebooks", 0.06));
        $produto2 = new Produto("iPhone", 5000, new Categoria("Smart Phones", 0.08));
        $produto3 = new Produto("Geladeira", 2000, new Categoria("Eletrodomésticos", 0.10));
        $arrayProdutos = [$produto1, $produto2,$produto3];

        $numero_pedidos_esperado = 3;
        $total_bruto_esperado = 10000;
        $impostos_esperado = 780;
        $total_liquido_esperado = 10780;

        // Act
        $venda = new Venda();
        $venda->adicionarPedido($arrayProdutos);
        $resumo = $venda->gerarRelatorioVenda();

        // Assert
        $this->assertIsArray($resumo);
        $this->assertEquals($numero_pedidos_esperado, $resumo['numeroDePedidos']);
        $this->assertEquals($total_bruto_esperado, $resumo['totalBruto']);
        $this->assertEquals($impostos_esperado, $resumo['impostos']);
        $this->assertEquals($total_liquido_esperado, $resumo['totalLiquido']);
    }

}
?>
