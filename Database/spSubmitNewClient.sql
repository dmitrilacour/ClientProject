DELIMITER //

CREATE PROCEDURE `spSubmitNewClient`(IN `strFirstName` VARCHAR(50), IN `strLastName` VARCHAR(50), IN `strStreet` VARCHAR(100), IN `strCity` VARCHAR(50), IN `strState` VARCHAR(2), IN `strZip` VARCHAR(5), IN `strPhonePrimary` VARCHAR(12), IN `strPhoneAlternative` VARCHAR(12), IN `strEmailPrimary` VARCHAR(100), IN `strEmailAlternative` VARCHAR(100), IN `boolAustinEnergy` TINYINT(1), IN `boolTexasGas` TINYINT(1), IN `boolCityLimits` TINYINT(1), IN `datAuditDate` DATE, IN `strAuditor` VARCHAR(100))
BEGIN
		DECLARE intClientID int(11);
		DECLARE intAuditID int(11);
		
    	INSERT INTO tblClientProfile (`FirstName`, `LastName`, `Street`, `City`, `State`, `Zip`, `PhonePrimary`, `PhoneAlternative`, `EmailPrimary`, `EmailAlternative`, `AustinEnergy`, `TexasGas`, `CityLimits`) VALUES (strFirstName, strLastName, strStreet, strCity, strState, strZip, strPhonePrimary, strPhoneAlternative, strEmailPrimary, strEmailAlternative, boolAustinEnergy, boolTexasGas, boolCityLimits);
        
        SELECT ClientID INTO intClientID FROM tblClientProfile WHERE Street = strStreet AND Zip = strZip;
        
        INSERT INTO `tblScheduledAudits` (`AuditDate`, `ClientID`, `Auditor`) VALUES (datAuditDate, intClientID, strAuditor);
        
        SELECT AuditID INTO intAuditID FROM tblScheduledAudits WHERE AuditDate = datAuditDate AND ClientID = intClientID;
        
        INSERT INTO `tblAudit`(`AuditID`, `ClientID`) VALUES (intAuditID, intClientID);
        
        SELECT ClientID as Client from tblClientProfile WHERE ClientID = intClientID;
    END
    //

DELIMITER ;