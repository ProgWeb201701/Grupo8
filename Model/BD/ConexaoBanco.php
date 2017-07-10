<?php

/*
 * Created by WhoAmI
 */

class ConexaoBanco
{

    protected $host = "localhost";
    protected $usuario = "root";
    protected $senha = "";
    protected $banco = "gerenciadortcc";
    protected $link;
    protected $result;

    function connect()
    {
        return $this->link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);
    }

    function executeQuery($query)
    {

        $this->query = $query;
        $this->result = mysqli_query($this->connect(), $query);
        if ($this->result) {
            $this->disconnect();
            return $this->result;
        } else {
            echo "Ocorreu um erro na execução da SQL";
            echo "Erro :" . mysql_error();
            echo "SQL: " . $query;
            die();
            disconnect();
        }
    }

    function disconnect()
    {
        return mysqli_close($this->link);
    }

    function lerTabela($tabela)
    {
        
        $sql = "SELECT * FROM $tabela;";
        $result = mysqli_query($this->connect(), $sql);
        mysqli_close($this->connect());
        return $result;
    }

    function lerLinha($query)
    {
        
        $result = mysqli_query($this->connect(), $query);
        $linha = mysqli_fetch_assoc($result);
        return $linha;
    }

}