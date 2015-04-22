CREATE PROCEDURE spTestDB (IN strUsername VARCHAR(50)) 

BEGIN 
	INSERT INTO tblTest (Username) 
	VALUES (strUsername); 
END//