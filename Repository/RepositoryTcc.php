<?php
    include '../tcc.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tcc
 *
 * @author junin
 */
class Repositorytcc
{
    public function create($dados){
        $tcc = new tcc($dados[0],$dados[1],$dados[2],$dados[3]);
        return $tcc;
        
    }
}