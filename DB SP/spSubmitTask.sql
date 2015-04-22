DELIMITER //

CREATE PROCEDURE `spSubmitTask`(IN `intJobID` INT(11), IN `strTitle` VARCHAR(250), IN `strDescription` TEXT, IN `strDuration` TINYINT(4), IN `strPeople` TEXT, IN `strSupplies` TEXT)
BEGIN
		
    	INSERT INTO tblTask (`JobID`, `Title`, `Description`, `Duration`, `People`, `Supplies`) VALUES (intJobID, strTitle, strDescription, strDuration, strPeople, strSupplies);
        
    END
    //

DELIMITER ;