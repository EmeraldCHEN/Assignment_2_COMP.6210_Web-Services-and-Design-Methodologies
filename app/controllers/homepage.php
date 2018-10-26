<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class homepage extends Controller {

      public function __construct() {
        $this->homepage = $this->model('_homepage'); //call the model  
      }

      public function index() {        

        // call the view   
        $this->view('homepage/index', $data);
    }
  }