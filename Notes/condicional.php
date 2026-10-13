<?php

    function saudacao ($nome, $idade) {
        return "Olá, $nome, você tem $idade anos";
    }

    echo saudacao("Vinicius", 20);
    print '<br>';

    $nome = 'Vinicius'; 

    if ($nome == 'Vinicius') {
        echo 'O seu nome é Vinicius';
    } else if ($nome == 'Felipe') {
        echo 'O seu nome é Felipe';
    } else { 
        echo 'O seu nome não é Vinicius nem Felipe';;
    }


    
    $nome = 'Vinicius';

    switch ($nome) {
        case 'Vinicius': echo 'Seu nome é Vinicius'; break;
        case 'Felipe': echo 'Seu nome é Felipe'; break;
        case 'Lucas': echo 'Seu nome é Lucas'; break;
        default: echo 'O seu nome não é nem Vinicius, nem Felipe e nem Lucas';
    };

?>