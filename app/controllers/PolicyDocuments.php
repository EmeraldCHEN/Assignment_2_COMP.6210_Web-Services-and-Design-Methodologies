<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class PolicyDocuments extends Controller {

      public function __construct() {
        $this->posts = $this->model('_PolicyDocuments'); //call the model 
      }

      public function index() {

        // call the view   
        $this->view('policydocuments/index', $data);
    }
  }