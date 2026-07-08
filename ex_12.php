<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho</title>
</head>
<body>
    <h2>Pesquisa de Produtos</h2>

    <form method="POST">
        <label for="pesquisa">Produto:</label> 
        <input type="text" name="pesquisa">
        <br>
        <button type="submit">Entrar</button>

    </form>
    <br>
</body>
</html>

<?php

$estoque = [
    ["nome" => "Leite Tirol", "preco" => 4.50],
    ["nome" => "Arroz Branco", "preco" => 24.00],
    ["nome" => "Cebola 1kg", "preco" => 6.90],
    ["nome" => "Macarrão", "preco" => 12.99],
    ["nome" => "Brinquedo", "preco" => 29.50],
    ["nome" => "Sofá", "preco" => 199.00],
    ["nome" => "Maçã", "preco" => 10.50],
    ["nome" => "Computador", "preco" => 200.00],
    ["nome" => "Globgogabgalab", "preco" => 67.67],
    ["nome" => "Boneco", "preco" => 3.50],
];
function analisarProdutos($Produtos){
    $precos = array_column($Produtos, 'preco');
    $produtoCaro = max($precos);
    $produtoBarato = min($precos);

    $mediaPrecos = array_sum($precos) / count($Produtos);
echo "<br>";
print_r($Produtos);
echo "<br>";
echo "<br>";
    return [$produtoCaro, $produtoBarato, $mediaPrecos];
}



    if ($_SERVER["REQUEST_METHOD"] == "POST") { //if para executar no envio do formulário

    $pesquisa = $_POST["pesquisa"];

    $itens = array_column($estoque, 'nome');


    $itemProcurado = "Nenhum Produto Encontrado";
    $pesquisa = strtolower($pesquisa);

    foreach ($itens as $item){
        $item = strtolower($item);
        $similaridade = similar_text($item, $pesquisa, $porcentagem);
        if($porcentagem > 50){
            $itemProcurado = $item;
        }
    }
    echo "Pesquisa: $itemProcurado <br>";
    
}



$resultado = analisarProdutos($estoque);
echo "O produto mais caro é: $resultado[0]<br>";
echo "O produto mais barato é: $resultado[1]<br>";
echo "a média de preço é: $resultado[2]<br>";

