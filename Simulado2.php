<?php

// Módulo 1: Arrays e Manipulação de Dados
// Exercício R1.1
// Imagine que você recebeu uma lista de preços de produtos de um e-commerce em um array:

    // $precos = [100, 250, 80, 500, 120];

// Escreva um trecho de código usando um laço foreach que percorra esse array e aplique um aumento de 10% (* 1.1) em cima de cada valor.

// Dica: Lembre-se do que conversamos sobre referências (&) se quiser alterar o valor de dentro do array original no próprio laço!

    // foreach($precos as &$valor) {
    //     $valor = $valor * 1.1;
    // }
    // echo $valor;


// Módulo 2: Banco de Dados e Segurança (PDO)
// Exercício R2.1
// Os entrevistadores adoram perguntar sobre segurança em banco de dados para evitar ataques de SQL Injection.

// Como você faria uma consulta de inserção (INSERT) segura no banco de dados utilizando PDO e Prepared Statements para 
// cadastrar um novo usuário com $nome e $email? Escreva o esqueleto desse código.

    // $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
    // $stmt->execute(['nome' => 'Ana', 'email' => 'ana@email.com']);


// Módulo 3: Funções e Validações
// Exercício R3.1
// Escreva uma função chamada verificarIdade que:

// Receba um parâmetro numérico chamado $idade.

// Retorne a string "Maior de idade" se a idade for maior ou igual a 18.

// Retorne a string "Menor de idade" caso contrário.

    // function verificarIdade ($idade) {
    //     if ($idade >= 18) {
    //         return "Maior de idade";
    //     } else {
    //         return "Menor de idade";
    //     }
    // }

    // $teste = verificarIdade(20);
    // echo $teste;


// Módulo 4: POO Avançada (Herança)
// Exercício R4.1
// Lembra quando falamos que a classe filha herda os poderes da classe pai?

// Crie uma classe pai chamada Funcionario que tenha os atributos $nome e $salario, e um construtor para recebê-los.

// Depois, crie uma classe filha chamada Gerente que herde de Funcionario (usando extends), mas que adicione um novo atributo
// próprio chamado $bonus. O construtor do Gerente deve usar o parent::__construct() para aproveitar o nome e o salário do pai!

    Class Funcionario {
        public $nome;
        public $salario;

        public function __construct($nome, $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }
    }

    class Gerente extends Funcionario {
        public $bonus;

        public function __construct($nome, $salario, $bonus) {
            parent::__construct($nome, $salario);
            $this->bonus = $bonus;
        }
    }

    $meuGerente = new Gerente("Marcos", 5000, 1200);

    echo "Nome: " . $meuGerente->nome . "<br>";
    echo "Salário: R$" . $meuGerente->salario . "<br>";
    echo "Bônus: R$" . $meuGerente->bonus . "<br>";


?>