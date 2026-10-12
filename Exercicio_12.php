<?php

// Desafio 12: Instanciando e Usando Objetos (POO)

// Com base no conceito de Programação Orientada a Objetos que acabamos de ver, vamos praticar a criação de objetos.

// Aqui está a nossa classe Funcionario de novo como referência:

class Funcionario {
    public $nome;
    public $cargo;

    public function __construct($nomeRecebido, $cargoRecebido) {
        $this->nome = $nomeRecebido;
        $this->cargo = $cargoRecebido;
    }

    public function apresentar() {
        return "Olá, meu nome é " . $this->nome . " e sou " . $this->cargo . ".";
    }
}

// Sua tarefa:
// Escreva o código em PHP que faça duas coisas:

// Instancie (crie) um novo objeto da classe Funcionario para um funcionário 
// chamado "Carlos", com o cargo "Analista de Suporte", guardando o resultado em uma variável chamada $funcionario2.

// Chame o método apresentar() desse objeto recém-criado e exiba o resultado na tela usando o echo.

    $funcionario2 = new Funcionario("Carlos", "Analista de Suporte");

    echo $funcionario2 -> apresentar();

?>