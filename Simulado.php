<?php

// Módulo 1: Tipagem, Comparações e Referências (As Pegadinhas)
// Vamos começar testando se você pegou os detalhes mais finos que os entrevistadores adoram usar para testar candidatos.

// Exercício 1.1 (Comparação Estrita vs Frouxa)
// Olhe o código abaixo e responda: O que cada um dos var_dump vai retornar (true ou false) e por quê?

    $a = 0;
    $b = "0";

    var_dump($a == $b); // True, o PHP vai mudar a leitura de string para número na comparação e vai ler 0 nos dois
    var_dump($a === $b); // False, A comparação agora é forte e vai encontrar que é diferente

// Exercício 1.2 (O Perigo do &)
// Se você rodar o código abaixo, qual será o valor final impresso pelo print_r? Tente deduzir sem rodar no computador:

    $numeros = [10, 20, 30];

    foreach ($numeros as &$valor) {
        // Apenas passamos pelo array com referência
    }

    foreach ($numeros as $valor) {
        // Segundo laço sem o &
    }

    print_r($numeros); // O valor impresso será [10, 20, 20]


// Módulo 2: Funções e Regras de Negócio
// Vamos testar a criação de funções com parâmetros, validações lógicas e retornos.

// Exercício 2.1
// Imagine que você está desenvolvendo a regra para aplicar um desconto em um sistema de e-commerce.
// Escreva uma função em PHP chamada calcularDesconto que atenda aos seguintes requisitos:

// 1. Receba dois parâmetros: $preco (o valor original do produto) e $vip (um booleano true ou false indicando se o cliente é VIP).

// 2. Se o cliente for VIP (true), o produto ganha 20% de desconto.

// 3. Se não for VIP, o produto ganha 5% de desconto.

// 4. A função deve retornar o valor final calculado com o desconto aplicado (usando return).

    function calcularDesconto ($preco, $vip) {
        if ($vip == true) {
            $preco = $preco * 0.8;
        } else {
            $preco = $preco * 0.95;
        }

        return $preco;
    };

    $valorFinal = calcularDesconto(10, true);
    echo "<br>Valor final com desconto: R$ " . $valorFinal . "<br>"; 


// Módulo 3: Programação Orientada a Objetos (POO)
// Agora vamos testar a criação de classes, construtores e manipulação de estado de objetos, que foi o que praticamos recentemente.

// Exercício 3.1
// Crie uma classe em PHP chamada Carro que atenda aos seguintes requisitos:

// Dois Atributos públicos: $modelo e $velocidadeAtual (começa em 0 por padrão).

// Método Construtor (__construct): Deve receber apenas o $modelo e atribuí-lo ao atributo da classe. 
// A $velocidadeAtual pode começar em 0 direto.

// Método acelerar($quanto): Deve somar o valor recebido à $this->velocidadeAtual.

// Método frear($quanto): Deve subtrair o valor recebido da $this->velocidadeAtual 
// (garantindo que a velocidade não fique negativa, se quiser incrementar essa validação, ou apenas fazendo a subtração básica).

    class Carro {
        public $modelo;
        public $velocidadeAtual;

        public function __construct($modeloEscolhido) {
            $this->modelo = $modeloEscolhido;
            $this->velocidadeAtual = 0;
        }

        public function acelerar($quanto) {
            $this->velocidadeAtual = $this->velocidadeAtual + $quanto;
        }

        public function frear($quanto) {
            $this->velocidadeAtual = $this->velocidadeAtual - $quanto;
        }

    }

    $meuCarro = new Carro("Audi");

    echo " Modelo: " . $meuCarro->modelo . "<br>";
    echo "Velocidade inicial: " . $meuCarro->velocidadeAtual . "km/h<br>";

    $meuCarro -> acelerar(30);
    echo "Velocidade atual: " . $meuCarro->velocidadeAtual . "km/h<br>";

    $meuCarro -> frear(10);
    echo "Velocidade atual: " . $meuCarro->velocidadeAtual . "km/h<br>";

?>