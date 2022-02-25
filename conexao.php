<?php 

class Conexao{
    private $host='localhost';
    private $user='root';
    private $senha='';
    private  $db='bdos';


    public function conectar(){
        try{
            $conexao= new PDO(
                 "mysql:host=$this->host;dbname=$this->db",
                 "$this->user",
                 "$this->senha"
            );
            return $conexao;
        }catch(PDOException $e){
            echo 'Mensagem'.$e->getMessage();
        }
    }



}



