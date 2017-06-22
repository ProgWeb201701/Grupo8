<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario {

    public $nomeCompleto;
    public $senha;
    public $email;
    public $nomeUsuario;

    function __construct($nomeCompleto, $senha, $email, $nomeUsuario) {
        $this->nomeCompleto = $nomeCompleto;
        $this->senha = $senha;
        $this->email = $email;
        $this->nomeUsuario = $nomeUsuario;
    }

    function setNomeCompleto($nomeCompleto) {
        $this->nomeCompleto = $nomeCompleto;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

}
