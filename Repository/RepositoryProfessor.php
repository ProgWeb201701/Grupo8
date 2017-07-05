<?php
include '../professor.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professor
 *
 * @author junin
 */
class RepositoryProfessor
{
    public function create($dados){
        $professor = new professor($dados[0],$dados[1],$dados[2],$dados[3]);
        return $professor;
        
    }
}