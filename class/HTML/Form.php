<?php

namespace Tutoriel\HTML;

use DateTime;

/** Class Form
 * Permet de générer un formulaire
 */

Class Form {

    /**
     * @var array données utilisées par le formulaire
     */
    private $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';


    /**
     * @param array $data
     */
    public function __construct($data = array()){
        $this->data = $data;
    }


    /**
     * @param $html string code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }


    /**
     * @param $index string index de la valeur à récupérer
     * @return string
     */
    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


    /**
     * @param $name string nom de la valeur
     * @return string
     */
    public function input($name){
        return $this->surround(
            '<input type="text" 
            name="' . $name . '" 
            placeholder="' . $name . '"
            value="' . $this->getValue($name) . '"
            >
            </input>'
        );
    }


    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
        
    }

}