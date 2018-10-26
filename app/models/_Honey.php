<?php
  
  class _Honey {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
      
        public function getSingleUMF5($id) {
                  
            $this->db->query("SELECT * FROM tbl_umf5");
            return $this->db->resultSet();
        }
      
        public function getSingleUMF8($id) {
               
            $this->db->query("SELECT * FROM tbl_umf8");
            return $this->db->resultSet();
        }
      
      
      
      
        public function getSingleUMF10($id) {
                   
            $this->db->query("SELECT * FROM tbl_umf10");
            return $this->db->resultSet();
        }
      
      
        public function getSingleUMF15($id) {
                  
            $this->db->query("SELECT * FROM tbl_umf15");
            return $this->db->resultSet();
        }
      
      
      
        public function getSingleUMF16($id) {
                  
            $this->db->query("SELECT * FROM tbl_umf16");
            return $this->db->resultSet();
        }
      
      
        public function getSingleUMF18($id) {
                  
            $this->db->query("SELECT * FROM tbl_umf18");
            return $this->db->resultSet();
        }
      
      
      
       public function getSingleUMF20($id) {
                  
            $this->db->query("SELECT * FROM tbl_umf20");
            return $this->db->resultSet();
        }
      
      
      
      
      
       public function getSingleMGO($id) {
                  
            $this->db->query("SELECT * FROM tbl_mgo");
            return $this->db->resultSet();
       }
      
      
       public function getSinglePlain($id) {
                  
            $this->db->query("SELECT * FROM tbl_plain");
            return $this->db->resultSet();
        }
      
      
       public function getSingleBlend($id) {
                  
            $this->db->query("SELECT * FROM tbl_blend");
            return $this->db->resultSet();
       }
      
          
    
  }
?>