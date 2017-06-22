<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Created By WhoAmI
 */
        
class BancoDAO {

    function requisicoesBanco($query) {
        $cone_quisao = new Conexao();
        $cone_quisao->Abrir();
        $re = $cone_quisao->mysqli->query($query);
        $cone_quisao->Fechar();
        return $re;
    }

}
