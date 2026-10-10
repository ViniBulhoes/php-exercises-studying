<?php
    echo 'PHP versão: ' . PHP_VERSION . '<br>';
    print '<br>';
    echo 'Echo: Serve para mostrar uma mensagem na tela<br>';
    print 'Print: Mesma função que o Echo<br>';
    print '<br>';
    echo'var_dump exibe conteúdo e mostra tipo da váriavel<br>';
    var_dump('Exemplo');
    print '<br>';

    echo '<br> Para definir uma váriavel usamos $ e o nome dela<br>';    

    $nome = 'Vinicius'; //string
    $idade = 20; //int
    $valor = 25.9; //float
    $booleana = false; //boolean
    
    var_dump($nome);
    var_dump($idade);
    var_dump($valor);
    var_dump($booleana);

    echo $nome . ' idade:' . $idade;

    echo '<br>';

    $a = 10;
    $b = 5;

    var_dump($a != $b);
?>