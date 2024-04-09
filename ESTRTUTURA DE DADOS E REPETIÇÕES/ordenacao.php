<?php
$dadospessoais = [
['nome' => 'Maria', 'idade' => 30, 'saldo'=> 500],
['nome' => 'Joao', 'idade' =>20, 'saldo' => 200],
['nome' => 'Aline', 'idade' =>20, 'saldo' => 2000],
['nome' => 'Leila', 'idade' =>25, 'saldo' => 1000],

];
echo"<h2>Ordem alfabética</h2>";
asort($dadospessoais);

echo "<pre>";
print_r($dadospessoais);
echo "</pre>";
echo"<hr>";

echo"<h2>Ordem crescente idade</h2>";
usort($dadospessoais,function($idade1,$idade2){
if($idade1['idade'] == $idade2['idade']) return 0;

return $idade1['idade']< $idade2['idade'] ? -1 :1;
});

echo "<pre>";
print_r($dadospessoais);
echo "</pre>";
echo"<hr>";

echo"<h2>Ordem decrescente valores</h2>";
usort($dadospessoais,function($saldo1,$saldo2){
if($saldo1['saldo'] == $saldo2['saldo']) return 0;

return $saldo1['saldo'] > $saldo2['saldo'] ? -1 : 1;

});

echo "<pre>";
print_r($dadospessoais);
echo "</pre>";
echo"<hr>";