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
    private $mysqli;

    function requisicoesBanco($query)
    {
        $this->Abrir();
        $re = $this->mysqli->query($query);
        $this->Fechar();
        return $re;
    }

    public function Abrir()
    {
        $this->mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
    }

    public function Fechar()
    {
        $this->mysqli->close();
    }

    public function select($query)
    {
        
        $link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        mysqli_close($link);
        return $row;
    }

}