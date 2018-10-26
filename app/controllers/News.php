<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class News extends Controller {

      public function __construct() {
        $this->posts = $this->model('_News'); //call the model 
      }

      public function index() {

        // call the view   
        $this->view('news/index', $data);
    }
  }