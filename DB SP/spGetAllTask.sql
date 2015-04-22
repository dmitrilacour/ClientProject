DELIMITER //

CREATE PROCEDURE `spCreateTaskList`(IN `intJobID` INT(11))
BEGIN
		
    	SELECT `Title`, `Description`, `Duration`, `People`, `Supplies` FROM tblTask WHERE `JobID` = intJobID;
        
    END
    //

DELIMITER ;