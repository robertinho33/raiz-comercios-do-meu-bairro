<?php

namespace App\http; 

class Response{

    /**
     * Código do Status HTTP
     * @var integer
     */
    private $httpCode = 200; 
    
    /**
     * ☻Cabeçalho do Response     
     * @var array
     */
    private $headers = []; 

    /**
     * Tipo de coteudo retornado
     * @var array
     */
    private $contentType = 'text/html'; 

    /**
     * Coteúdo da Response
     * @var mixed
     */
    private $content; 
    
    /**
     * Método responsável por definir a classe e retortornar os valores
     * @param integer $httpCode
     * @param mixed $content
     * @param  $contentType
     */
    public function __construct($httpCode,$content,$contentType = 'text/html'){
        $this->httpCode    = $httpCode; 
        $this->content     = $content; 
        $this->setContentType($contentType);
    } 
    
    /**
     *Metodo responsável por alterar o contentType do Response  método HTTP
     *@return sntrig $contentType
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }
   
    /**
     *Metodo responsável por por add um registro o cabeçalho   
     *@return sntrig
    */
    public function addHeader($kes,$value){
        $this->headers[$kes] = $value; 
    }

   
}
 
?>