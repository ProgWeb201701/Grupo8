<?php

/*
 * Created by WhoAmI
 */

class Conexao {

    var $host = "servidor";
    var $usuario = "usuario";
    var $senha = "senha";
    var $banco = "banco";
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
