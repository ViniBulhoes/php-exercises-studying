<?php

// Laço for para contar i até 10

    $i = 0;

    for ($i = 0; $i <= 10; $i++) {
      echo "$i <br>";
    };
    
// Enquanto i for menor que 10, o while continua

    $i = 1;

    while ($i <= 10) {
        echo "$i <br>";
        $i++;
    }

// Array

    $sistemas = ["React", "Vue", "Tailwind"];

    $usuario = [
        "nome" => "Vinicius",
        "cargo" => "Desenvolvedor Júnior"
    ];

    echo 'Seu nome e cargo são: ' . $usuario["nome"] . ' e ' .  $usuario["cargo"] . ' você sabe os sistemas: ' . $sistemas;

// Controle e iteração

    foreach ($usuario as $chave => $valor) {
        echo $chave . ": " . $valor . "\n";
    };

PDO (PHP Data Objects)

// Conexão
    $pdo = new PDO("mysql:host=localhost;dbname=empresa", "usuario", "senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert
    $stmt = $pdo->prepare("INSERT INTO funcionarios (nome, setor) VALUES (:nome, :setor)");
    $stmt->execute(['nome' => 'Ana', 'setor' => 'TI']);

// Read
    $stmt = $pdo->query("SELECT * FROM funcionarios WHERE status = 'ativo'");
    $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Update
    $stmt = $pdo->prepare("UPDATE funcionarios SET salario = :salario WHERE id = :id");
    $stmt->execute(['salario' => 3500, 'id' => 1]);

// Delete
    $stmt = $pdo->prepare("DELETE FROM funcionarios WHERE id = :id");
    $stmt->execute(['id' => 5]);

?>