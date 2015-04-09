DELIMITER //

CREATE FUNCTION spLoginFUNC(
    IN strUsername varchar(30),
    IN strPassword varchar(30)
    )
    
    RETURNS tinyint(1), varchar(50)
    
    BEGIN
    	DECLARE intMatches int(11);
    	
    	SELECT COUNT(*) INTO intMatches
    	FROM tblEmployees
        WHERE Username = strUsername AND tblEmployees.Password = strPassword;
        
        IF intMatches = 1 THEN
        	SELECT FirstName
        	FROM tblEmployees
        	WHERE Username = strUsername;
        	
        	RETURN 1, FirstName
        END IF;
    END
//

DELIMITER ;