<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Signup extends Controller {

      public function __construct() {
        $this->signup = $this->model('_Signup'); //call the model 
      }

      public function index() {


        // call the view   
        $this->view('signup/index', $data);
    }
        
   
}
                   
?>
















