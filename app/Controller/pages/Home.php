<?php

namespace App\Cotroller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

/**
*Metodo responsável por retorar o conteúdo(view da nossa página)
*@return sntrig
*/
public static function getHome(){
  //Organização
  $obOrganization = new Organization;
  
  //View da Home
      $content = View::render('pages/home',[
      'name' =>$obOrganization->name,
      'description' =>$obOrganization->description,
      'site' =>$obOrganization->site
    ]);

    //Retora a view da página
    return parent::getPage('comercios-do-meu-bairro', $content);
    }

  }    

?>
