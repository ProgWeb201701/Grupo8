<?php

/*
 * Created by WhoAmI
 */

class ConexaoBanco {

    protected $host = "localhost";
    protected $usuario = "root";
    protected $senha = "";
    protected $banco = "gerenciadortcc";
    protected $link;
    protected $result;

    function connect() {
        $this->link = mysql_connect($this->host, $this->usuario, $this->senha);
        if (!$this->link) {
            echo "Falha na conexão com o Banco de Dados!<br />";
            echo "Erro: " . mysql_error();
            die();
        } else if (!mysql_select_db($this->banco, $this->link)) {
            echo "O Bando de Dados solicitado não pode ser aberto!<br />";
            echo "Erro: " . mysql_error();
            die();
        }
    }

    function executeQuery($query) {
        $this->connect();
        $this->query = $query;
        if ($this->result = mysql_query($this->query)) {
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

    function disconnect() {
        return mysql_close($this->link);
    }

}
