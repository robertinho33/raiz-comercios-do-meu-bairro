<?php

namespace App\Utils;

class View{

/**
 * Método responsável por retornar o conteúdo (view da nossa página)
 *@param strig $view
 *@return string
 */
private static function getCotentView($view) {
  $file = __DIR__.'/../../resources/view/'.$view.'.html';
  return file_exists($file) ? file_get_contents($file) : '';
}

  /**
   * Método responsável por retornar o conteúdo renderizado de uma view
   *@param strig $view
   *@param array $vars (string/numeric)
   *@return string
   */
  public static function render($view, $vars =[]) {
      //  Coteudo da view
      $contentView = self ::getCotentView($view);

      //Chaves do array
      $keys = array_keys($vars);
      $keys = array_map(function ($item){
      return '{{'.$item.'}}';
      },$keys);

      //Retorna o cuteúdo renderizado
      return str_replace ($keys, array_values($vars),$contentView) ;
  }

}
