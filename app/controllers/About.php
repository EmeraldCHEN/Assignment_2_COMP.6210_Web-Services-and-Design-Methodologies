<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class About extends Controller {

      public function __construct() {
        $this->posts = $this->model('_About'); //call the model 
      }

      public function index() {

        // call the view   
        $this->view('about/index', $data);
    }
  }