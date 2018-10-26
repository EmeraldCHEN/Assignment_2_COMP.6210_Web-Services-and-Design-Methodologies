<?php

    include(APPROOT . '/helper/helperfunctions.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require APPROOT.'/vendor/phpmailer/phpmailer/src/Exception.php';
    require APPROOT.'/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require APPROOT.'/vendor/phpmailer/phpmailer/src/SMTP.php';

    class Contact extends Controller {

      public function __construct() {
        $this->contact = $this->model('_Contact'); //call the model 
      }

      public function index() {

        $title = $this->contact->title();
              
        $contact = $this->contact->getAllContact();
  
        // add data or variables to the array using key-value pairs  
        $data = ['title' => $title,
                 'contact' => $contact];

        // call the view   
        $this->view('contact/index', $data);
    }
        
     /*************    Add users' contact info  **************************************/  
        
      public function addContact() {
            
         // variables for data or model functions go here
           $contact = $this->contact->getAllContact();
        
          // add data or variables to the array using key-value pairs  
           $data = ['title' => $title,
                    'contact' => $contact
            ];
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['contactno'])
               && !empty($_POST['country']) && !empty($_POST['csubject']) && !empty($_POST['msg'])){  
                if($this->contact->addContact($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['contactno'], $_POST['country'], $_POST['csubject'], $_POST['msg'])){
                    $data = [
                        'title' => "Thank you for your message! ALL Contact Info as belows"
                    ];
                    //How to use stack overflow :-) => https://stackoverflow.com/a/4963763
                    //Composer, install this => composer update
                    //                          composer require phpmailer/phpmailer
                    $mail = new PHPMailer(true);
                    //Send mail using gmail
                    $mail->IsSMTP(); // telling the class to use SMTP
                    $mail->SMTPAuth = true; // enable SMTP authentication
                    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
                    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
                    $mail->Port = 465; // set the SMTP port for the GMAIL server
                    $mail->Username = GUSER; // Set the Constant in helper/startup.php
                    $mail->Password = GPASS; // Set the Constant in helper/startup.php
                    //Typical mail data
                    $mail->AddAddress($_POST['email'], 'Emerald');
                    $mail->SetFrom($_POST['email'], 'Emerald');
                    $mail->Subject = "A message from FMH. DO NOT REPLY";
                    $mail->Body = "Thank you to contact us :) We are looking forward to your next visit to the Official Website of FMH :)";
                    try{
                        $mail->Send();
                        header("Location: ".URLROOT."contact/index");
                    } catch(Exception $e){
                        //Something went bad
                        echo "<h1>Fail - </h1>" . $mail->ErrorInfo;
                    }
                } 
            } 
          
            $this->view('contact/index', $data);
        }
        
  }
?>






















