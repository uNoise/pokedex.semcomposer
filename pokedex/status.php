<?php

class status

{
    public $id, $descricao;


    public function cadastrar ($id, $descricao)
    {
        $this->id = $id;
        $this->descricao = $descricao;

    }
    public function imprimir ()

    {
        $r = 'produto id:' . $this->id . ' | ';
        $r.= 'pruduto descricao:' . $this->descricao . '<br>';

        return $r;
    }

}