<?php

// Desafio 11: Validador de Maioridade para Cadastro

// O Cenário:
// Você está criando a função que valida o cadastro de novos usuários em um sistema. 
// A regra da empresa diz que o usuário só pode se cadastrar se tiver 18 anos ou mais.

// Sua tarefa:
// Escreva uma função em PHP chamada validarIdade.

// Regras para construir a função:

// Ela deve receber um parâmetro: $idade.
// Dentro dela, faça um if para verificar se a $idade é maior ou igual a 18.
// Se for maior ou igual a 18, a função deve retornar a palavra booleana true.
// Se for menor, deve retornar false.
// (Dica: Lembre-se que funções usam return para devolver o resultado para quem as chamou).

// Escreva o bloco da sua função e, se quiser testar, pode mandar também uma linha chamando a função para ver se ela aprova uma idade (ex: 20 anos) ou bloqueia (ex: 16 anos)!

    function validarIdade($idade) {
        if ($idade >= 18) {
            echo "Acesso liberado! <br>";  
            return true;
        } else {
            echo "Acesso bloqueado! <br>";
            return false;
        }
    } 

    $login = validarIdade (21);

?>