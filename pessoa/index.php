<?php

require 'pessoa.class.php';

$pessoa = new Pessoa();
$pess = $pessoa->inserirPessoa("Fabio Claret", "fabioclaret@gmail.com", "11919943");

if ($pess) {
    echo"
    <script>
        alert('Pessoa inserida com sucesso!')        
    </script>";
}else{
    echo"
    <script>
        alert('Erro ao tentar inserir')        
    </script>";
}