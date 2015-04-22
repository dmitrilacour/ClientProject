<?php

// Delete previous Client cookie
	$CookieName = 'ClientID';
	$CookieValue = '';

	setcookie($CookieName, $CookieValue, time() - 1800);

// Include Header
	include 'includes/Header.php';
	
// Get Search criteria from form
	$strFirstNameCriteria = $_POST["txtFirstName"];
	$strLastNameCriteria = $_POST["txtLastName"];
	$strAuditDateCriteria = $_POST["txtAuditDate"];
	$strAuditorCriteria = $_POST["txtAuditor"];
	$strAuditStatusCriteria = $_POST["ddlAuditStatus"];


// Use spCreateAudit Schedule

	//Make SQL statement
	
		$sql = "SELECT AuditID AS ID, AuditDate AS 'Date', CONCAT(FirstName, ' ', LastName) AS Client, Auditor, Status, tblClientProfile.ClientID FROM `tblClientProfile` JOIN `tblScheduledAudits` ON tblClientProfile.ClientID = tblScheduledAudits.ClientID WHERE AuditDate LIKE CONCAT('%', '".$strAuditDateCriteria."', '%') AND FirstName LIKE CONCAT('%', '".$strFirstNameCriteria."', '%') AND LastName LIKE CONCAT('%', '".$strLastNameCriteria."', '%') AND Auditor LIKE CONCAT('%', '".$strAuditorCriteria."', '%') AND Status LIKE CONCAT('".$strAuditStatusCriteria."', '%') ORDER BY AuditDate, Client;";

	// Run query
	
		$result = $conn->query($sql);
	
	// Adapt result set
	
		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

?>


<div id='frmSearch'>
	<h1>Search</h1>
		
	<form name="frmClientProfile" method="post" action="ScheduledAudits.php">
		<div class="form-group">
			<label>First Name:</label>
			<input class="form-control" type="text" id="txtFirstName" name="txtFirstName" placeholder="First Name" value="<?php echo $strFirstNameCriteria ?>">
		</div>
		
		<div class="form-group">
			<label>Last Name:</label>
			<input class="form-control" type="text" id="txtLastName" name="txtLastName" placeholder="Last Name" value="<?php echo $strLastNameCriteria ?>" >
		</div>
		
		<div class="form-group">
			<label>Audit Date:</label>
			<input class="form-control" type="date" id="txtAuditDate" name="txtAuditDate" placeholder="Audit Date" value="<?php echo $strAuditDateCriteria ?>" >
		</div>
		
		<div class="form-group">
			<label>Auditor:</label>
			<input class="form-control" type="text" id="txtAuditor" name="txtAuditor" placeholder="Auditor" value="<?php echo $strAuditorCriteria ?>" >
		</div>	
		
		<div class="form-group">
			<label>Audit Status:</label>
			<select id="ddlAuditStatus" name="ddlAuditStatus" id="txtFirstName" id="ddlAuditStatus" class="form-control">
				<option value="" selected>Select</option>
				<option value="Pre Audit" <?php if ($strAuditStatusCriteria === "Pre Audit") echo 'selected="selected"'; ?> >Pre Audit</option>
				<option value="Audit" <?php if ($strAuditStatusCriteria === "Audit") echo 'selected="selected"'; ?> >Audit</option>
				<option value="Completed" <?php if ($strAuditStatusCriteria === "Completed") echo 'selected="selected"'; ?> >Completed</option>
			</select>
		</div>
		
		<input class="btn btn-default" type="Submit" name="btnSearch" value="Search Audit Schedule" >
		<input class="btn btn-default" type="Submit" name="btnReset" value="Reset Audit Schedule" onclick="ClearFields()" >
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



<script type="text/javascript">

	function ClearFields() {
		document.getElementById("txtFirstName").value = ""
		document.getElementById("txtLastName").value = ""
		document.getElementById("txtAuditDate").value = ""
		document.getElementById("txtAuditor").value = ""
		document.getElementById("ddlAuditStatus").selectedIndex = 0
	}
	
	function form(intClientID, strAuditStatus) {
		txtClientID = document.getElementById("txtClientID")
		txtClientID.value = intClientID
		
		frmClientID = document.getElementById("frmClientID")
		
		if (strAuditStatus == "Pre Audit") {
			frmClientID.action="PreAuditForm.php"
		} else if (strAuditStatus == "Audit") {
			frmClientID.action="AuditForm.php"
		} else {
			frmClientID.action="CustomerProfile.php"
		}
		
		frmClientID.submit()
	}
</script>

<?php 

// Include Footer

	include 'includes/footer.php';
	
?>