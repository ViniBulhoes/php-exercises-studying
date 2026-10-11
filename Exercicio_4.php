<?php

//  Exercício 4: Atualizando dados (CRUD - Update)
//  Avançando para o U do CRUD. O Roberto passou no período de experiência e recebeu um aumento!

// A situação:
// O salário do Roberto precisa subir de 3200 para 3500.

// Sua tarefa:
// Escreva a instrução SQL (UPDATE) para alterar o salário.
// Atenção à regra de ouro do UPDATE no banco de dados: você não quer atualizar o salário da empresa inteira sem querer, então lembre-se de usar a cláusula que restringe quem será atualizado (use o nome dele como referência para este exercício).

    $sql = UPDATE funcionarios SET salario = 3500 WHERE name = 'Roberto'

?>