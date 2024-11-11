<?php

namespace App\http; 

class Request{

     /**
     * Método HTTP da requisição * 
     * @var string
     */
    private $httpMethod; 
    
    /**
     * URI da pácina * 
     * @var string
     */
    
     private $uri; 
    /**
     * Método HTTP da requisição * 
     * @var array
     */
    private $queryParams = []; 

    /**
     * Variáveis recebidas do post da página 
     * @var array
     */
    
    private $postVars = []; 
    /**
     * Cabeçalho da requisição
     * @var array
     */
    private $headers = []; 

    /**
     * Cosntrutor da classe
     */
    public function __construct(){
    $this->queryParams  = $_GET ?? []; 
    $this->postVars     = $_GET ?? []; 
    $this->headers      = getallheaders (); 
    $this->httpMethod   = $__SERVER ['REQUEST_METHOD'] ?? ''; 
    $this->uri          = $__SERVER ['REQUEST_URI'] ?? ''; 
    }   

    /**
    *Metodo responsável por retorar o método HTTP
    *@return sntrig
    */
    public function getHttpMethod(){
        return $this->httpMethod; 
    }
   
    /**
    *Metodo responsável por retorar  uri
    *@return sntrig
    */
    public function geturi(){
        return $this->uri; 
    }

    /**
    *Metodo responsável por retorar o  headers
    *@return sntrig
    */
    public function getheaders(){
        return $this->headers; 
    }

    /**
    *Metodo responsável por retorar os parametros
    *@return sntrig
    */
    public function getQueryParams(){
        return $this->queryParams; 
    }
    
    /**
    *Metodo responsável por retorar as variáveis do POST
    *@return sntrig
    */
    public function getPostVars(){
        return $this->postVars; 
    }
}
 
?>