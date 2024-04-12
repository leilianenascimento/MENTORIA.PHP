<?php 
 /* /*$dadospessoais = [
    ['nome' => 'Maria', 'idade' => 30, 'saldo'=> 500],
    ['nome' => 'Joao', 'idade' =>20, 'saldo' => 200],
    ['nome' => 'Aline', 'idade' =>20, 'saldo' => 2000],
    ['nome' => 'Leila', 'idade' =>25, 'saldo' => 1000],
    
    ];
    
    /*function modificardados(&$dados, $nome,$valor){
        foreach ($dados as &$pessoa){
            if($pessoa['nome']=== $nome){
                $pessoa['saldo'] += $valor;
                return true;
            }            
        }
        return false;        
    }

    modificardados($dadospessoais, "Aline", -500);
    echo "<pre>";
    print_r($dadospessoais);
    echo "</pre>";*/

class DadosPessoais{
    public $nome;
    public $idade;
    public $saldo;
    public function setPessoa($nome, $idade,$saldo){
        $this->nome=$nome;
        $this->idade=$idade;
        $this -> saldo=$saldo;
    }
    public function getNome(){
        return $this->nome;
        
    }
}
$pessoas   = new DadosPessoais();

$pessoas->setPessoa("joao",30,1000);

echo"nome ". $pessoas->getnome()."<br>";



