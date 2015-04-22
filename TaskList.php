<?php

// Include Header
	include 'includes/Header.php';
	
// Get Job ID
	$intJobID = 1;

// Use spCreateTaskList

	//Make SQL statement
	
		$sql = "CALL spCreateTaskList('".$intJobID."');";

	// Run query
	
		$result = $conn->query($sql);
	
	// Adapt result set
	
		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

?>
	
	<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Order By
                        </div>
                        <div class="panel-body">
                        	<input class="btn btn-default" type="Button" name="btnTitleOrder" value="Title" onClick="TitleOrder();" />
                        	<input class="btn btn-default" type="Button" name="btnDescriptionOrder" value="Description" onClick="DescriptionOrder();" />
                        	<input class="btn btn-default" type="Button" name="btnDurationOrder" value="Duration" onClick="DurationOrder();" />
                        	<input class="btn btn-default" type="Button" name="btnStatusOrder" value="Status" onClick="StatusOrder();" />
                        </div>
                        <div class="panel-heading">
                            Results
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                            <form name="frmTaskList" id="frmTaskList" method="post" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th onClick="SelectAll();">Select Task</th>
                                            <th>Title</th>
											<th>Description</th>
											<th>Duration</th>
											<th>People</th>
											<th>Supplies</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php

										$i = 0;
										
										while ($i < count($set)) {
											$intTaskID = $set[$i][TaskID];
											$strTitle = $set[$i][Title];
											$strDescription = $set[$i][Description];
											$strDuration = $set[$i][Duration];
											$strPeople = $set[$i][People];
											$strSupplies = $set[$i][Supplies];
											$strStatus = $set[$i][Status];
										
											echo 
												"<tr onClick=''>
													<td><input type='checkbox' name='arrTask[]' value='".$intTaskID."'></td>
													<td>".$strTitle."</td>
													<td>".$strDescription."</td>
													<td>".$strDuration."</td>
													<td>".$strDuration."</td>
													<td>".$strSupplies."</td>
													<td>".$strStatus."</td>
												</tr>";
											
											$i++;
										}
										?>
                                        
                                    </tbody>
                                </table>
                                
                                
                                <input class="btn btn-default" type="Button" name="btnUnschedule" value="Unschedule Task" onClick="UnscheduleTask();" />
                                <input class="btn btn-default" type="Button" name="btnSchedule" value="Schedule Task" onClick="ScheduleTask();" />
                                <input class="btn btn-default" type="Button" name="btnBegin" value="Begin Task" onClick="BeginTask();" />
                                <input class="btn btn-default" type="Button" name="btnComplete" value="Complete Task" onClick="CompleteTask();" />
                                <input class="btn btn-default" type="Button" name="btnDelete" value="Delete Task" onClick="DeleteTask();" />
                                </form>
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



<script>
	
	function SelectAll() {
		
	}
	
	frmTaskList = document.getElementById("frmTaskList")
	
	function UnscheduleTask() {
		frmTaskList.action = "TaskUnscheduledStatus.php"
		frmTaskList.submit()
	}
	
	function ScheduleTask() {
		frmTaskList.action = "TaskScheduledStatus.php"
		frmTaskList.submit()
	}
	
	function BeginTask() {
		frmTaskList.action = "TaskInProgressStatus.php"
		frmTaskList.submit()
	}
	
	function CompleteTask() {
		frmTaskList.action = "TaskCompletedStatus.php"
		frmTaskList.submit()
	}
	
	function DeleteTask() {
		var response = confirm("Are you sure you want to delete these tasks?")
		
		if (response == true) {
			frmTaskList.action = "TaskDeleteStatus.php"
			frmTaskList.submit()
			}
	}
	
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
		
		frmClientID.submit();
	}
</script>

<?php 

// Include Footer

	include 'includes/footer.php';
	
?>