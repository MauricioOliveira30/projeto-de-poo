<?php 
class Crud{
    private $conexao;
    private $nome;
    private $email;

    public function __construct(Conexao $conexao, Model $nome,Model $email){
        $this->conexao = $conexao->conectar();
        $this->nome = $nome;
        $this->email = $email;
    }
    public function inserir(){
        $query = 'insert into tblusuarios(nome,email) values (:nome,:email)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->nome->__get('nome'));
        $stmt->bindValue(':email',$this->email->__get('email'));
        $stmt->execute();
    }
}