<?php

class saida
{
    public $poke, $status, $tipo;

    public function cadastrar(poke $poke, status $status, tipo $tipo)
    {
        $this -> poke = $poke;
        $this -> status = $status;
        $this -> tipo = $tipo;

    }

    public function imprimir ()
    {
        $r = $this ->poke->imprimir();
        $r.= $this ->status->imprimir ();
        $r.= $this ->tipo->imprimir ();

        return $r;

    }

}