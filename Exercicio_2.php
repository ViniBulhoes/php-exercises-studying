<?php

// Exercício 2

// Trazendo a lógica para o Banco de Dados (CRUD - Read)

// No dia a dia, raramente trazemos todos os dados para a memória para filtrar no PHP. 
// O padrão é já pedir para o banco de dados trazer a informação filtrada.

// Imagine que esses dados estão em uma tabela MySQL chamada 
// funcionarios com as colunas id, nome, ativo (0 ou 1) e salario.

    // $funcionarios = [
    //     ["id" => 1, "nome" => "Ana", "ativo" => true, "salario" => 3500],
    //     ["id" => 2, "nome" => "Carlos", "ativo" => false, "salario" => 4200],
    //     ["id" => 3, "nome" => "Beatriz", "ativo" => true, "salario" => 2800],
    //     ["id" => 4, "nome" => "Diego", "ativo" => true, "salario" => 5100]
    // ];

// Escreva para mim qual seria a query SQL (SELECT) para buscar exatamente esses mesmos
// dados (apenas o nome das pessoas que estão ativas e têm salário menor que 4000).

   $sql = "SELECT nome FROM funcionarios WHERE ativo = 1 AND salario < 4000"; 

?>