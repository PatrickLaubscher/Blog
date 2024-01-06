<?php

namespace App;

class App {

    public $title = "The Big Blog";
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            return self::$_instance = new App();
        } 
        return self::$_instance;
    }



}