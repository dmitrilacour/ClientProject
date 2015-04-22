DELIMITER //

CREATE PROCEDURE `spUpdateTaskStatus`(IN `intTaskID` INT(11), IN `strStatus` VARCHAR(50))
BEGIN
		
    	UPDATE tblTask SET `Status` = strStatus WHERE `TaskID` = intTaskID;
        
    END
    //

DELIMITER ;