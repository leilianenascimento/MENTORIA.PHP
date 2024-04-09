<?php
// a criar de três arquivos PHP que manipulam dados de pessoas (nome, idade e saldo em conta). Esses arquivos devem ser capazes de ordenar esses dados com base na idade ou no saldo das pessoas. Além disso, é mencionada a inclusão de uma função que permite a alteração do saldo. O objetivo é criar um sistema básico de gerenciamento de dados de pessoas com funcionalidades de leitura, ordenação e modificação de saldo. 


$dadospessoais = [
['nome' => 'Maria', 'idade' => 30, 'saldo'=> 500],
['nome' => 'Joao', 'idade' =>20, 'saldo' => 200],
['nome' => 'Aline', 'idade' =>20, 'saldo' => 2000],
['nome' => 'Leila', 'idade' =>25, 'saldo' => 1000],

];

echo "<pre>";
print_r($dadospessoais);
echo "</pre>";
echo"<hr>";

