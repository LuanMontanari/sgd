<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function convertDate($date) {
    if(preg_match("/^[0-9]{4}(\/|-|.)(0[1-9]|1[0-2])(\/|-|.)(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)){
        return substr($date, 8, 2).substr($date, 7,1).substr($date, 5,2).substr($date, 4,1).substr($date, 0,4);
        // Result: '25/11/1989' - OR - '25-11-1989' - OR - '25.11.1989'
    }

    // $date = '25/11/1989'
    // $date = '25-11-1989'
    // $date = '25.11.1989'
    if(preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])(\/|-|.)(0[1-9]|1[0-2])(\/|-|.)[0-9]{4}$/", $date)){
        return substr($date, 6, 4).substr($date, 5,1).substr($date, 3,2).substr($date, 2,1).substr($date, 0,2);
        // Result: '1989/11/25' - OR - '1989-11-25' - OR - '1989.11.25'
    }
} 

function traduz_data_para_branco($data) {
  if ($data == '') {
    return '';
  }

  $dados = explode('/', $data);

  $data_mysql = "{$dados['2']}-{$dados['1']}-{$dados['0']}";

  return $data_mysql;
}

function traduz_data_para_exibir($data) {
  if ($data == '' or $data == '0000-00-00') {
    return '';
  }

  $dados = explode ('-', $data);

  $data_exibir = "{$dados['2']}/{$dados['1']}/{$dados['0']}";

  return $data_exibir;
}
