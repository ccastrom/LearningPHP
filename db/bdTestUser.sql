CREATE DATABASE testUser;
USE testUser;
DROP DATABASE testUser;

CREATE TABLE userCred(
	 id INT PRIMARY KEY AUTO_INCREMENT,
     userName VARCHAR(30),
     pass VARCHAR(20)
);-- SELECT * FROM userCred

INSERT INTO userCred VALUES(NULL,'EzVanilla','navino13');
INSERT INTO userCred VALUES(NULL,'F09','123456');
INSERT INTO userCred VALUES(NULL,'Carl0s','contra123');