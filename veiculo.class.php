<?php

class veiculo{
    var $fabricante;
    var $modelo;
    var $modeloDisp;
    var $ano;
    var $cor;
    var $cilindradas;
    var $motoresDisp;
    var $portas;

    public function alterarCor($cor){
        $this -> cor = $cor; 
    }
    public function getModeloDisp(){
        foreach ($modelo as $value){
            echo "$value <br>";
        }
    }
    public function alterarModelo(){
        
    }
    public function alterarMotor(){
        
    }
    public function salvar(){

    }
}

?>