<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Created by WhoAmI
 */

class Aluno {

    public $nome;
    public $senha;
    public $email;

    function __construct($nome, $senha, $email) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    
    
}
