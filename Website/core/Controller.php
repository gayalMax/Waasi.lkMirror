<?php

/**
 *   *********load_model($model)**************
 * 
 * if $model = "users";
 * this function will instetiate Users($table) object
 * and pass the $table as users. 
 */
class Controller extends Application {
    protected $_controller, $_action;
    public $view;

    public function __construct($controller, $action) {
        parent::__construct();
        $this->_controller = $controller;
        $this->_action = $action;
        $this->view = new View();
    }

    protected function load_model($model) {
        if(class_exists($model)) {
            $this->{$model.'Model'} = new $model(strtolower($model));           // create a object of it self, if $model = user instantiating a register return a userModel object
            
        }
    }
}  