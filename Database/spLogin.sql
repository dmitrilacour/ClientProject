DELIMITER //

CREATE PROCEDURE `spLogin`(IN `strUsername` VARCHAR(30), IN `strPassword` VARCHAR(30))
BEGIN
    	DECLARE intMatches int(11);
    	
    	SELECT COUNT(*) INTO intMatches
    	FROM tblEmployees
        WHERE Username = strUsername AND tblEmployees.Password = strPassword;
        
        IF intMatches = 1 THEN
        	SELECT FirstName as Name, EmployeeType as Type
        	FROM tblEmployees
        	WHERE Username = strUsername;
        END IF;
    END
    //

DELIMITER ;