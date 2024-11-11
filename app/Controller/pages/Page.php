<?php

namespace App\Cotroller\Pages;

use \App\Utils\View;

class Page{

/**
*Metodo responsável por retorar o topo da nossa página genérica
*@return sntrig
*/
private static function getHeader(){
  return View::render('pages/header');
}

/**
*Metodo responsável por retorar o rodapé da nossa página genérica
*@return sntrig
*/
private static function getFooter(){
  return View::render('pages/footer');
}

  /**
*Metodo responsável por retorar o conteúdo(view da nossa página genérica)
*@return sntrig
*/
public static function getPage($title,$content){
  return View::render('pages/page',[
 'title' => $title,
 'header' => self::getHeader(),
 'content' => $content,
 'footer' => self::getFooter()
 
    ]);
    }

  }
?>
