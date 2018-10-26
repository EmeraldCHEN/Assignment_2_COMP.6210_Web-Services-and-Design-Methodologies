use containerdb;

CREATE TABLE IF NOT EXISTS tbl_usersFeedback (

    ID INT(11) AUTO_INCREMENT,
    FNAME VARCHAR(20) NOT NULL,
    LNAME VARCHAR(30) NOT NULL,   
    EMAIL VARCHAR(30) NOT NULL,
    CONTACT VARCHAR(20) NOT NULL,
    COMMENTS VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

INSERT INTO tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) 
VALUES ('Bob', 'Taylor', 'bob@gmail.com','0210293455','Some message...');
INSERT INTO tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) 
VALUES ('May','Chen','maymay@gmail.com','07236781','Honey is great! Will recommend to my friend.');
INSERT INTO tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) 
VALUES ('Ben','Smith','ben2000@gmail.com','07856743','Disppointed for the delay...');
INSERT INTO tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) 
VALUES ('Jack','Street','jack@gmail.com','0215673489','Happy to get the honey. Thank you!');
INSERT INTO tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) 
VALUES ('Lynda', 'Green','lg@gmail.com','022678345','Wrong product was received. Upset!');
INSERT INTO tbl_usersFeedback (FNAME, LNAME, EMAIL,CONTACT,COMMENTS) 
VALUES ('Yu','hua','yuhua@gmail.com','0086-1892346744','When can I receive the honey after ordering online?');