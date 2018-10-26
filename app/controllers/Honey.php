<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Honey extends Controller {

      public function __construct() {
        $this->honey = $this->model('_Honey'); //call the model  
      }

      public function umf_5() {        

            $id = myTryParse(URLROOT);
            
            $umf5 = $this->honey->getSingleUMF5($id);  
            $data = [
                'honey' => $umf5
            ];
          
          
        // call the view  honey/umf5 
            $this->view('honey/umf_5', $data);
       }
        
        
        public function umf_8() {        

            $id = myTryParse(URLROOT);
            
            $umf8 = $this->honey->getSingleUMF8($id);  
            $data = [
                'honey' => $umf8
            ];
          
          
        // call the view  honey/umf8 
            $this->view('honey/umf_8', $data);
        }
        
        
        
      public function umf_10() {        

            $id = myTryParse(URLROOT);
            
            $umf10 = $this->honey->getSingleUMF10($id);  
            $data = [
                'honey' => $umf10
            ];
        // call the view  honey/umf10 
        $this->view('honey/umf_10', $data);
      }
              
        
    
      public function umf_15() { 
          
           $id = myTryParse(URLROOT);
            
            $umf15 = $this->honey->getSingleUMF15($id);  
            $data = [
                'honey' => $umf15
            ];

        // call the view : umf15
           $this->view('honey/umf_15', $data);
      }
        
      public function umf_16() { 
          
           $id = myTryParse(URLROOT);
            
            $umf16 = $this->honey->getSingleUMF16($id);  
            $data = [
                'honey' => $umf16
            ];

        // call the view : umf16
           $this->view('honey/umf_16', $data);
      }
        
    
       public function umf_18() { 
          
           $id = myTryParse(URLROOT);
            
            $umf18 = $this->honey->getSingleUMF18($id);  
            $data = [
                'honey' => $umf18
            ];

        // call the view : umf18
           $this->view('honey/umf_18', $data);
       }
              
        
      
       public function umf_20() {        
           
            $id = myTryParse(URLROOT);
            
            $umf20 = $this->honey->getSingleUMF20($id);  
            $data = [
                'honey' => $umf20
            ];
        
           // call the view : umf20
        $this->view('honey/umf_20', $data);
       }
        
        
        
        
        public function mgo_550() {        
           
            $id = myTryParse(URLROOT);
            
            $mgo = $this->honey->getSingleMGO($id);  
            $data = [
                'honey' => $mgo
            ];
        
           // call the view : mgo_550
            $this->view('honey/mgo_550', $data);
       }
   
        
        
        
      public function plain() {        
            
            $id = myTryParse(URLROOT);
            
            $plain = $this->honey->getSinglePlain($id);  
            $data = [
                'honey' => $plain
            ];
          
        // call the view : plain_manuka_honey   
        $this->view('honey/plain_manuka_honey', $data);
      }
    
      public function blend() {        

            $id = myTryParse(URLROOT);
            
            $blend = $this->honey->getSingleBlend($id);  
            $data = [
                'honey' => $blend
            ];
          
        // call the view : manuka_blend_honey   
        $this->view('honey/manuka_blend_honey', $data);
      }
  }

?>