<?php

// Desafio 9: Lógica de Autenticação

// O Cenário:

// Você está fazendo o backend da tela de login. 
// O usuário digitou o e-mail e a senha no formulário HTML, e o sistema trouxe do 
// banco de dados a lista de usuários cadastrados para você conferir.

// Aqui estão os dados simulados:

// O que o usuário digitou no formulário
    $emailDigitado = "vinicius@empresa.com";
    $senhaDigitada = "123456";

// O que veio do banco de dados
    $usuarios = [
    ["email" => "ana@empresa.com", "senha" => "senha123", "nome" => "Ana"],
    ["email" => "vinicius@empresa.com", "senha" => "123456", "nome" => "Vinicius Porto"],
    ["email" => "carlos@empresa.com", "senha" => "qweasdzxc", "nome" => "Carlos"]
    ];

// Sua tarefa:
// Escreva o código PHP para verificar se o usuário pode entrar no sistema.

// Passo a passo sugerido:
// Crie uma variável de controle antes do laço para guardar se o login deu certo
// (ex: $autenticado = false;) e outra para guardar o nome de quem logou (ex: $nomeLogado = "";).

// Faça o foreach para percorrer a lista de $usuarios.

// Use o if para checar duas coisas ao mesmo tempo (lembra do &&?): se o $emailDigitado 
// é igual ao email do usuário no array, e se a $senhaDigitada é igual à senha dele.

// Se a condição bater, mude o $autenticado para true e guarde o nome dele na variável $nomeLogado.

// Dica de ouro: Quando achamos a pessoa, não precisamos continuar rodando o laço. 

// Você pode usar o comando break; dentro do if para parar o foreach imediatamente e economizar processamento!

// Fora do laço, faça um if avaliando a variável $autenticado. Se for verdadeira, dê boas-vindas
// com o nome da pessoa. Se for falsa (ou seja, else), mostre a mensagem "E-mail ou senha incorretos".

$autenticado = false;
$nomeLogado = "";

    foreach ($usuarios as $login) {
        if ($emailDigitado == $login["email"] && $senhaDigitada == $login["senha"]) {
            $autenticado = true;
            $nomeLogado = $login["nome"];
            break;
        }
    }

    if ($autenticado == true) {
        echo "Boas vindas: " . $nomeLogado . "<br>";
    } else {
        echo "E-mail ou senha incorretos";
    }

?>