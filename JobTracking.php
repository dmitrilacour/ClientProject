<!--header-->
<?php include 'includes/Header.php';?>
<!-- Page Content -->
 

    
<!--page header-->
<div class="col-lg-12">
	<h1 class="page-header">Job Tracking</h1>
</div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jobs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                                                                     										
							<div class='form-group'>Initial Visit:
								<input class="form-control" type="date" name="txtInitialVisit" placeholder="Audit Date" required>
							</div>	
							<div class='form-group'>Proposal Sent:
								<input class="form-control" type="date" name="txtProposalSent" placeholder="Audit Date" required>
							</div>
							<div class='form-group'>Followed Up:
								<input class="form-control" type="date" name="txtFollowedUp" placeholder="Audit Date" required>
							</div>
							<div class='form-group'>Called Again:
								<input class="form-control" type="date" name="txtCalledAgain" placeholder="Audit Date" required>
							</div>
							<div class='form-group'>Proposal Accepted:
								<input class="form-control" type="date" name="txtProposalAccepted" placeholder="Audit Date" required>
							</div>										
							<div class='form-group'>Permit Pulled:
								<input class="form-control" type="date" name="txtPermitPulled" placeholder="Audit Date" required>
							</div>	
							<div class='form-group'>Entered in PS:
								<input class="form-control" type="date" name="txtEnteredinPS" placeholder="Audit Date" required>
							</div>		
							<div class='form-group'>AE Verification:
								<input class="form-control" type="date" name="txtAEVerification" placeholder="Audit Date" required>
							</div>		
							<div class='form-group'>Job Scheduled:
								<input class="form-control" type="date" name="txtJobScheduled" placeholder="Audit Date" required>
							</div>		
							<div class='form-group'>Job Completed:
								<input class="form-control" type="date" name="txtJobCompleted" placeholder="Audit Date" required>
							</div>
							<div class='form-group'>QC Check Up:
								<input class="form-control" type="date" name="txtQCCheckUp" placeholder="Audit Date" required>
							</div>
							<div class='form-group'>AE Final Inspection::
								<input class="form-control" type="date" name="txtAEFinalInspection" placeholder="Audit Date" required>
							</div>
                                
								<input class="btn btn-default" type="Submit" name="btnSubmitDates" value="TestScript.php" />

</div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
   	
		<!--include footer-->
<?php include 'includes/footer.php';?>
		