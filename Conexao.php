<?php

class Conexao{
    // IP do banco de dados
    private string $servidor = "localhost";
    // Nome da Database
    private string $banco = "aula_pdo";
    // Usuario para fazer login do banco
    private string $usuario = "root";
    // Senha para fazer login no banco
    private string $senha = "";

    // Método de conexão
    public function conectar(){
        // Configuração padrão de banco MySQL / MariaDB
        $dns = "mysql:host=$this->servidor;
        dbname=$this->banco;
        charset=utf8mb4;";

        // Criando objeto da classe PDO
        $conexao = new PDO(
            $dns, 
            $this->usuario,
            $this->senha,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        // Retorna o Objeto da Conexão
        return $conexao;
    }
}

?>