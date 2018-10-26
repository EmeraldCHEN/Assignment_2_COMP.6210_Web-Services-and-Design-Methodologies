<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Api extends Controller {
    public function __construct() {
           $this->rest = $this->model('_Api');
    }
    public function index() {
            
            $this->view('api/index', $data);
        }

}
?>