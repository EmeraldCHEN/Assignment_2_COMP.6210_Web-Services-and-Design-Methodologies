use containerdb;

CREATE TABLE IF NOT EXISTS tbl_usersContact (

    ID INT(11) AUTO_INCREMENT,
    FNAME VARCHAR(20) NOT NULL,
    LNAME VARCHAR(30) NOT NULL,   
    EMAIL VARCHAR(60) NOT NULL,
    CONTACTNO VARCHAR(30) NOT NULL,
	COUNTRY VARCHAR(40) NOT NULL,
	CSUBJECT VARCHAR(55) NOT NULL,
    MSG VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

INSERT INTO tbl_usersContact (FNAME, LNAME, EMAIL,CONTACTNO,COUNTRY,CSUBJECT,MSG) 
VALUES ('May','Chen','maymay@gmail.com','07236781','UK','Order','I have ordered but ...... Add sth new...');
INSERT INTO tbl_usersContact (FNAME, LNAME, EMAIL,CONTACTNO,COUNTRY,CSUBJECT,MSG) 
VALUES ('Ben','Smith','ben2000@gmail.com','07856743','USA','Cancel Order','I want to cancle my ordere but ......');
INSERT INTO tbl_usersContact (FNAME, LNAME, EMAIL,CONTACTNO,COUNTRY,CSUBJECT,MSG) 
VALUES ('Jack','Street','jack@gmail.com','0215673489','NZ','Cancel Order','Could not reach your customer service online');
INSERT INTO tbl_usersContact (FNAME, LNAME, EMAIL,CONTACTNO,COUNTRY,CSUBJECT,MSG) 
VALUES ('Lynda', 'Green','lg@gmail.com','022678345','NZ','Wrong product','Wrong product was received...');
INSERT INTO tbl_usersContact(FNAME, LNAME, EMAIL,CONTACTNO,COUNTRY,CSUBJECT,MSG) 
VALUES ('Yu','hua','yuhua@126.com','0086-1892346744','China','honey', 'When can I receive the honey after ordering online?');
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    