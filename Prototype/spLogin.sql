DELIMITER //

CREATE PROCEDURE spLogin(
    IN strUsername varchar(30),
    IN strPassword varchar(30)
    )
    
    BEGIN
    	DECLARE intMatches int(11);
    	
    	SELECT COUNT(*) INTO intMatches
    	FROM tblEmployees
        WHERE Username = strUsername AND tblEmployees.Password = strPassword;
        
        IF intMatches = 1 THEN
        	SELECT FirstName
        	FROM tblEmployees
        	WHERE Username = strUsername;
        END IF;
    END
//

DELIMITER ;