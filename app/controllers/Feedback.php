<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Feedback extends Controller {

      public function __construct() {
        $this->feedback = $this->model('_Feedback'); //call the model 
      }

      public function index() {

        $title = $this->feedback->title();
              
        $feedback = $this->feedback->getAllFeedback();
  
        // add data or variables to the array using key-value pairs  
        $data = ['title' => $title,
                'feedback' => $feedback];

        // call the view   
        $this->view('feedback/index', $data);
    }
        
     /*************    ADD FEEDBACK  ************************************/       
        
        public function addFeedback() {
            $data = [];
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['message'])) {
                 if($this->feedback->addFeedback($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['contact'], $_POST['message']))
                                    //  $_POST['message'] NOT $_POST['comments']  -_-||
                 
                 {
                    $data = [
                             'title' => "Thank you for your feedback !" ];
                 }
            }
            $this->view('feedback/index', $data);
        }
}
                   
?>














