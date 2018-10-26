<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Login extends Controller {

      public function __construct() {
        $this->login = $this->model('_Login'); //call the model 
      }

      public function index() {


        // call the view   
        $this->view('login/index', $data);
    }
        
   
}
                   
?>
















