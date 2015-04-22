CREATE PROCEDURE spTestDelete (IN strUsername VARCHAR(50)) 

BEGIN 
	DELETE FROM tblTest 
	WHERE Username = strUsername; 
END