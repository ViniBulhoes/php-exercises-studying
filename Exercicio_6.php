<?php

// Desafio 6: Calculadora de Carrinho de Compras

// O Cenário:
// Você está desenvolvendo o backend de um e-commerce. 
// O aplicativo enviou para você os itens que o cliente colocou no carrinho no formato de um array associativo.

// A loja está com uma promoção ativa: todos os produtos da categoria "Eletrônicos" têm 10% de desconto.
// Aqui estão os dados que chegaram para você:

    $carrinho = [
    ["produto" => "Mouse", "categoria" => "Eletrônicos", "quantidade" => 2, "preco" => 50],
    ["produto" => "Teclado", "categoria" => "Eletrônicos", "quantidade" => 1, "preco" => 100],
    ["produto" => "Caderno", "categoria" => "Papelaria", "quantidade" => 3, "preco" => 20],
    ["produto" => "Cadeira", "categoria" => "Móveis", "quantidade" => 1, "preco" => 500]
    ];

// Sua tarefa:
// Escreva o código PHP para calcular o valor total final que o cliente deve pagar.
// Regras que você precisa aplicar no código:

// Crie uma variável (ex: $total = 0;) antes do laço para ir somando os valores.
// Itere sobre o array $carrinho.

// O valor base de cada item é a quantidade multiplicada pelo preco.

// Se a categoria do produto for "Eletrônicos", aplique um desconto de 10% sobre o valor 
// base desse item (ou seja, ele vai custar apenas 90% do valor, ou multiplique por 0.9).

// Some o valor final do item à variável $total.
// Tente escrever a lógica usando o foreach e o if.

    $total = 0;

    foreach ($carrinho as $item) {

        $valorbase = $item["preco"] * $item["quantidade"];

        if ($item["categoria"] == "Eletrônicos") {
            
            $valorfinal = $valorbase * 0.9;

            echo "Desconto de 10% aplicado no item: " . $item["produto"] . "<br>";

            $total = $total + $valorfinal;

        } else {

            echo "Sem desconto aplicado no item: " . $item["produto"] . "<br>";

            $total = $total + $valorbase;
        }
        echo "Total: " . $total . "<br>";
    }



?>