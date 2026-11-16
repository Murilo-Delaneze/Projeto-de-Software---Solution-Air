<?php

require_once "Conexao.php";

class ProdutoDAO{
    // Cria um atributo private da conexão
    private $conexao;

    // No método construtor fazemos a conexão com o banco
    public function __construct(){
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    // Método de listar todos os dados do banco
    public function listar(){
        // Select no banco de dados
        $sql = "SELECT * FROM produtos";

        // Chamando um método da classe PDO
        $comando = $this->conexao->query($sql);

        // Retorna a listagem completa em formato de array
        return $comando->fetchAll();
    }

    // Método de cadastro no banco de dados
    public function cadastrar($nome, $preco, $quantidade){
        // Cria o comando insert no banco
        $sqlInsert = "INSERT INTO produtos
        (nome, preco, quantidade)
        VALUES (:nome, :preco, :quantidade)";

        // Prepara a execução do comando SQL
        $comandoInsert = $this->conexao->prepare($sqlInsert);

        // Executa o comando passando os valores
        $comandoInsert->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        ]);
    }
}

?>