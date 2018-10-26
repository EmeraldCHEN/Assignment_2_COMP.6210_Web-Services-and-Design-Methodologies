<?php
  
  class _Contact {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
       // static data
    public function title() {
      return "ALL Contact Info";
    }
      
    public function getAllContact() {
      $this->db->query('SELECT * FROM tbl_usersContact');
      return $this->db->resultSet();
    }
      
    public function addContact($fn,$ln,$email,$cno,$country,$sbj,$msg){
        
            $this->db->query('INSERT INTO  tbl_usersContact (FNAME, LNAME, EMAIL,CONTACTNO,COUNTRY,CSUBJECT,MSG) VALUES 
            (:fn, :ln, :email,:cno,:country,:sbj,:msg)');
            
        //Convert data for db
           
            $this->db->bind(':fn', $fn);
            $this->db->bind(':ln', $ln);
            $this->db->bind(':email', $email);
            $this->db->bind(':cno', $cno);
            $this->db->bind(':country', $country);
            $this->db->bind(':sbj', $sbj);
            $this->db->bind(':msg', $msg);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
  }
?>












