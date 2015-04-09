DELIMITER //

DROP PROCEDURE IF EXISTS spSubmitNewClient //

DELETE FROM tblClientProfile WHERE FirstName = 'Test' //

CREATE PROCEDURE spSubmitNewClient(
    IN strFirstName varchar(50), 
    IN strLastName varchar(50),
    IN strStreet varchar(100),
    IN strCity varchar(50),
    IN strState varchar(2),
    IN strZip varchar(5),
    IN strPhonePrimary varchar(12),
    IN strPhoneAlternative varchar(12),
    IN strEmailPrimary varchar(100),
    IN strEmailAlternative varchar(100),
    IN boolAustinEnergy tinyint(1),
    IN boolTexasGas tinyint(1),
    IN boolCityLimits tinyint(1),
    IN datAuditDate date,
    IN strAuditor varchar(100)
    )
    
	BEGIN
		DECLARE intClientID int(11);
		DECLARE intAuditID int(11);
		
    	INSERT INTO tblClientProfile (`FirstName`, `LastName`, `Street`, `City`, `State`, `Zip`, `PhonePrimary`, `PhoneAlternative`, `EmailPrimary`, `EmailAlternative`, `AustinEnergy`, `TexasGas`, `CityLimits`) VALUES (strFirstName, strLastName, strStreet, strCity, strState, strZip, strPhonePrimary, strPhoneAlternative, strEmailPrimary, strEmailAlternative, boolAustinEnergy, boolTexasGas, boolCityLimits);
        
        SELECT ClientID INTO intClientID FROM tblClientProfile WHERE Street = strStreet AND Zip = strZip;
        
        INSERT INTO `tblScheduledAudits` (`AuditDate`, `ClientID`, `Auditor`) VALUES (datAuditDate, intClientID, strAuditor);
        
        SELECT AuditID INTO intAuditID FROM tblScheduledAudits WHERE AuditDate = datAuditDate AND ClientID = intClientID;
        
        INSERT INTO `tblAudit`(`AuditID`, `ClientID`) VALUES (intAuditID, intClientID);
    END
//

DELIMITER ;


























