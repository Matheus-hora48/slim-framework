<?php

namespace MyApp\controllers;  

class home{

  //protected $container;

  public function __construct($view){
    $this->view = $view;
  }

  public function index($request, $response) {

    //$r = $this->container->get('request');
    var_dump($this->view);
    return $response->write('Teste index');
  }
}

?>