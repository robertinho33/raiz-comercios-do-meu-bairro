<?php

namespace App\Cotroller\Pages;

use \App\Utils\View;

class Home{

/**
*Metodo responsável por retorar o conteúdo(view da nossa página)
*@return sntrig
*/
    public static function getHome(){
      return View::render('pages/home',[
      'name' =>'comercios do meu bairro',
      'description' =>'nosso site https://alphaglam.com.br',
      'stie' =>'nosso site https://alphaglam.com.br'

    ]);
    }

  }

?>
