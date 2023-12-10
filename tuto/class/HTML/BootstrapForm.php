<?php 

namespace Tutoriel\HTML;

class BootstrapForm extends Form {

    /**
     * @param $html string code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }


    /**
     * @param $name string nom de la valeur
     * @return string
     */
    public function input($name){
        return $this->surround(
            '<label>' . $name . '</label>
            <input type="text" 
            name="' . $name . '" 
            placeholder="' . $name . '"
            value="' . $this->getValue($name) . '" 
            class="form-control">
            </input>'
        );
    }

        /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
        
    }

    

}



?>