<?php

class Model{
    private $idusuario;
    private $nome;
    private $email;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
        return $this;
    }
}