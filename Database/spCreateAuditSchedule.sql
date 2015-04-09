DELIMITER //

CREATE PROCEDURE `spCreateAuditSchedule`()
BEGIN
		SELECT AuditID AS ID, AuditDate AS Date, CONCAT(FirstName, ' ', LastName) AS Client, Auditor, Status, tblClientProfile.ClientID FROM `tblClientProfile` JOIN `tblScheduledAudits` ON tblClientProfile.ClientID = tblScheduledAudits.ClientID ORDER BY AuditDate, Client;
	END
	//

DELIMITER ;