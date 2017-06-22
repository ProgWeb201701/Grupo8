<?php

/*
 * Created by WhoAmI
 */

class ConexaoBanco {

     protected $host = "localhost";
     protected $usuario = "root";
     protected $senha = "";
     protected $banco = "gerenciadortcc";
    private $mysqli;

    function requisicoesBanco($query) {
        $this->Abrir();
        $re = $this->mysqli->query($query);
        $this->Fechar();
        return $re;
    }

    public function Abrir() {
        $this->mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
    }

    public function Fechar() {
        $this->mysqli->close();
    }

}
