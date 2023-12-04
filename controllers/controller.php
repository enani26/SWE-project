<?php
abstract class Controller
{
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }
    abstract public function ShowLoginForm(){

     }
     abstract public function login(){

     }
     abstract 
    }
?>