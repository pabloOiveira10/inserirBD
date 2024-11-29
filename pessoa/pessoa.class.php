<?php
class Pessoa{
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $pdo;

    function __construct(){
        $dsn = "mysql:dbname=pessoa;host=localhost";
        $user = "root";
        $pass = "";

        try{
            $this->pdo = new PDO($dsn, $user, $pass);
        }catch (\Throwable $th){
            echo"
            <script>
                alert('Banco insisponivel! tente mais tarde')        
            </script>";
        }
    }

    function inserirPessoa($nome, $email, $telefone){
        $sql = "INSERT INTO pessoas SET nome = :n, email = :e, telefone = :t";
        $sql = $this->pdo->prepare($sql);
        $sql-> bindValue(":n", $nome);
        $sql-> bindValue(":e", $email);
        $sql-> bindValue(":t", $telefone);

        return $sql -> execute();
    }


    function getId(){
        $this->Id = $id;
    }

    function getNome(){
        $this->Nome = $nome;
    }

    function getEmail(){
        $this->Email = $email;
    }

    function getTelefone(){
        $this->Telefone = $telefone;
    }
}

