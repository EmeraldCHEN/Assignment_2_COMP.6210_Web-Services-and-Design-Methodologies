<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class FAQ extends Controller {

      public function __construct() {
        $this->posts = $this->model('_FAQ'); //call the model 
      }

      public function index() {

        // call the view   
        $this->view('FAQ/index', $data);
    }
  }