<?php

// Desafio 10: Criando Funções e Retornando Valores

// O Cenário:

// No dia a dia, nós não escrevemos a mesma regra de negócio solta várias vezes. 
// Nós empacotamos essa regra dentro de uma Função para poder reutilizá-la em qualquer 
// lugar do sistema, apenas passando os parâmetros.

// Sua tarefa:

// Escreva uma função no PHP chamada calcularSalarioLiquido.
// Essa função deve:

// Receber dois parâmetros: o $salarioBruto e o $desconto.
// Fazer o cálculo matemático subtraindo o desconto do salário bruto.
// Usar a palavra-chave return para devolver o resultado final (não use echo dentro da função).
// Como a estrutura de uma função funciona no PHP:

// function nomeDaFuncao($parametro1, $parametro2) {
//     // Sua lógica vai aqui
    
//     // O return devolve o valor para quem chamou a função
//     return $resultado;
// }

// Escreva apenas o bloco da função que faz esse cálculo e retorna o valor final.

    function calcularSalarioLiquido($salarioBruto, $desconto) {
        $resultado = $salarioBruto - $desconto;
        return $resultado;
    }

    $pagamentoVinicius = calcularSalarioLiquido(3500, 300);
    echo "Vinicius vai receber: " . $pagamentoVinicius;
?>