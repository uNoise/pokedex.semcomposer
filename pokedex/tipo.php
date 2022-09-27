<?php 

class tipo 
 {
    public $tipo1, $tipo2, $tamanho;

    public function  cadastrar  ( $tipo1, $tipo2, $tamanho)
    {

    $this->tipo1 = $tipo1;
    $this->tipo2 = $tipo2;
    $this->tamanho = $tamanho;
    }


    public function imprimir()

    {
        $r = 'Ler tipo1:' . $this->tipo1 . '<hr>';
        $r.= 'Ler Tipo2:' . $this->tipo2. '<br>';
        $r.= 'Ler tamanho:' . $this->tamanho. '<br>';

        return $r;
    }
}