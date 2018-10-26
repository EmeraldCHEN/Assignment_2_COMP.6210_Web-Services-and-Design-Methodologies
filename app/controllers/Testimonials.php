<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Testimonials extends Controller {

      public function __construct() {
        $this->posts = $this->model('_Testimonials'); //call the model 
      }

      public function index() {

        // call the view   
        $this->view('testimonials/index', $data);
    }
  }