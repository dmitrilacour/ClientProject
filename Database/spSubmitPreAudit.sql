DELIMITER //

CREATE PROCEDURE `spSubmitPreAudit`(
    IN intClientID int(11),
    IN intFirstSF int(11),
    IN intSecondSF int(11),
    IN intAtticSF int(11),
    IN intTotalSF int(11),
    IN intYearBuilt int(4),
    IN intCeilingHeight int(11)
    )
BEGIN
    	UPDATE tblAudit, tblScheduledAudits
        SET FirstFloorSF = intFirstSF, SecondFloorSF = intSecondSF, AtticSF = intAtticSF, TotalSF = intTotalSF, YearBuilt = intYearBuilt, CeilingHeight = intCeilingHeight, tblScheduledAudits.Status = 'Audit'
        WHERE tblAudit.ClientID = intClientID AND tblScheduledAudits.ClientID = intClientID;
    END
    //

DELIMITER ;