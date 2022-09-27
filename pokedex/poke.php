<?php

class poke

{
    public $nome, $level, $hp;

    public function cadastrar ($nome, $level, $hp)
    {
        $this->nome = $nome;
        $this->level =$level;
        $this->hp =$hp;
    }

    public function imprimir ()
    
    {
        $r = 'nome:' . $this->nome . '<br>';
        $r.= 'level:' . $this->level . '<br>';
        $r.= 'hp:' . $this->hp . '<br>';

        return $r;
    }

    }

