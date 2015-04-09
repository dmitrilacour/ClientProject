<?php

// Include Header
	include 'includes/Header.php';


// Use spCreateAudit Schedule

	//Make SQL statement
	
		$sql = "CALL spCreateAuditSchedule";

	// Run query
	
		$result = $conn->query($sql);
	
	//Adapt result set
	
		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

?>


<div id='frmSearch'>
	<h1>Search</h1>
		
	<form name="frmClientProfile" method="post" action="ScheduledAudits.php">
		<div class="form-group">
			<label>First Name:</label>
			<input class="form-control" type="text" name="txtFirstName" placeholder="First Name" >
		</div>
		
		<div class="form-group">
			<label>Last Name:</label>
			<input class="form-control" type="text" name="txtLastName" placeholder="Last Name" >
		</div>
		
		<div class="form-group">
			<label>Audit Date:</label>
			<input class="form-control" type="date" name="txtAuditDate" placeholder="Audit Date" >
		</div>
		
		<div class="form-group">
			<label>Auditor:</label>
			<input class="form-control" type="text" name="txtAuditor" placeholder="Auditor" >
		</div>	
		
		<div class="form-group">
			<label>Audit Status:</label>
			<select name="ddlAuditStatus" id="ddlAuditStatus" class="form-control">
				<option value="">Select</option>
				<option value="PreAudit">PreAudit</option>
				<option value="Scheduled">Scheduled</option>
				<option value="Complete">Complete</option>
			</select>
		</div>
		
		<input class="btn btn-default" type="Submit" name="btnSearch" value="Search Audit Schedule" >
		<br><br><br>
		
	</form>
</div>
	
	<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Results
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Audit ID</th>
											<th>Audit Date</th>
											<th>Audit Client</th>
											<th>Auditor</th>
											<th>Audit Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php

										$i = 0;
										
										while ($i < count($set)) {
											$intAuditID = $set[$i][ID];
											$strAuditDate = $set[$i][Date];
											$strClient = $set[$i][Client];
											$strAuditor = $set[$i][Auditor];
											$strStatus = $set[$i][Status];
											$strClientID = $set[$i][ClientID];
										
											echo 
												"<tr onclick=\"form(".$strClientID.", '".$strStatus."'); \">
													<td>".$intAuditID."</td>
													<td>".$strAuditDate."</td>
													<td>".$strClient."</td>
													<td>".$strAuditor."</td>
													<td>".$strStatus."</td>
													<td style='display:none' id=".intAuditID.">".$strClientID."</td>
												</tr>";
											
											$i++;
										}
										?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive 
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	
		
	<form name="frmClientID" id="frmClientID" method="post" >
			<input type="text" name="txtClientID" id="txtClientID" style="visibility:hidden" >
	</form>



<script>
	function form(intClientID, strAuditStatus) {
		txtClientID = document.getElementById("txtClientID")
		txtClientID.value = intClientID
		
		sessionStorage.ClientID = intClientID
		
		frmClientID = document.getElementById("frmClientID")
		
		if (strAuditStatus == "Pre Audit") {
			frmClientID.action="PreAuditForm.php"
		} else if (strAuditStatus == 'Audit') {
			frmClientID.action="AuditForm.php"
		} else {
			frmClientID.action="CustomerProfile.php"
		}
		
		document.getElementById("frmClientID").submit();
	}
</script>

<?php 

// Include Footer

	include 'includes/footer.php';
	
?>