CREATE PROCEDURE spTestModify (IN strUsername VARCHAR(50), strNewUsername VARCHAR(50)) 

BEGIN 
	UPDATE tblTest
	SET Username = strNewUsername
	WHERE Username = strUsername;
END//