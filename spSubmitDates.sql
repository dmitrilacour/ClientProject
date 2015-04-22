DELIMITER //

CREATE PROCEDURE `spSubmitDates`(

    DATE dateInitialVisit date(11),
    DATE dateProposalSent date(11),
	DATE dateFollowedUp date(11),
	DATE dateCalledAgain date(11),
	DATE dateProposalAccepted date(11),
	DATE datePermitPulled date(11),
	DATE dateEnteredinPS date(11),
	DATE dateAEVerification date(11),
	DATE dateJobScheduled date(11),
	DATE dateJobCompleted date(11),
	DATE dateQCCheckUp date(11),
	DATE dateAEFinalInspection date(11),
    )
BEGIN
    	INSERT INTO tbljobtracking
        SET InitialVisit = dateInitialVisit, ProposalSent = dateProposalSent, FollowedUp = dateFollowedUp, CalledAgain = dateCalledAgain, ProposalAccepted = dateProposalAccepted, PermitPulled = datePermitPulled, EnteredinPS = dateEnteredinPS, AEVerification = dateAEVerification, JobScheduled = dateJobScheduled, JobCompleted = dateJobCompleted, QCCheckup = dateQCCheckUp, AEFinalInspection = dateAEFinalInspection
       
    END
    //

DELIMITER ;