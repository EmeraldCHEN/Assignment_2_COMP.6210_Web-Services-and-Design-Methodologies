<?php
  
  class _Feedback {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
       // static data
    public function title() {
      return "ALL  Feedback Info";
    }
      
    // db data - select all data
    public function getAllFeedback() {
      $this->db->query('SELECT * FROM tbl_usersFeedback');
      return $this->db->resultSet();
    }
      // db data - insert data
    public function addFeedback($fn, $ln, $e, $cont, $cment) {
      
      //Adding data to database
      $this->db->query('INSERT INTO  tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) VALUES (:fn, :ln, :e,:cont, :cment)');

      //Binding Variables
      $this->db->bind(':fn', $fn);
      $this->db->bind(':ln', $ln);
      $this->db->bind(':e', $e);
      $this->db->bind(':cont', $cont);
      $this->db->bind(':cment', $cment);
      
      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }     
    
  }
?>








