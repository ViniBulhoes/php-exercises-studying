<?php

// Introdução à Programação Orientada a Objetos (POO) em PHP

// As empresas hoje em dia raramente usam PHP "solto" (procedural). 
// Quase todos os sistemas modernos e frameworks (como Laravel) utilizam POO. 
// Para a sua entrevista de júnior, você precisa entender o vocabulário básico e como a estrutura funciona.

// O que é uma Classe e um Objeto?
// Classe: É a "planta baixa" ou o "molde" (por exemplo, a planta de uma casa).

// Objeto: É a casa construída baseada naquela planta (você pode construir várias casas diferentes usando a mesma planta).
// No PHP, criamos a classe usando a palavra class, e dentro dela colocamos Atributos (as variáveis/características) 
// e Métodos (as funções/comportamentos).

// Exemplo Prático: A Classe Funcionario

 class Funcionario {
    // 1. Atributos (as características)
    public $nome;
    public $cargo;

    // 2. O Construtor (método especial que roda automaticamente quando criamos o objeto)
    public function __construct($nomeRecebido, $cargoRecebido) {
        $this->nome = $nomeRecebido;   // O '$this' aponta para o objeto atual
        $this->cargo = $cargoRecebido;
    }

    // 3. Método (uma função dentro da classe)
    public function apresentar() {
        return "Olá, meu nome é " . $this->nome . " e sou " . $this->cargo . ".";
    }
 }

 // Criando (instanciando) um Objeto baseado na Classe
 $funcionario1 = new Funcionario("Vinicius", "Desenvolvedor Júnior");

 // Chamando o método do objeto
 echo $funcionario1->apresentar(); 
 // Vai imprimir: Olá, meu nome é Vinicius e sou Desenvolvedor Júnior.

?>