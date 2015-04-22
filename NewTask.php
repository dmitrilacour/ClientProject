<?php

// Get Task Counter
	if($_POST["txtCounter"] >= 1) {
		$intCounter = $_POST["txtCounter"];
	} else {
		$intCounter = 1;
	}
	
// Get Task Data
	for ($i = 1; $i <= $intCounter; $i++) {
		${"strTitle" . $i} = $_POST["txtTitle".$i];
		${"strDescription" . $i} = $_POST["txtDescription".$i];
		${"strDuration" . $i} = $_POST["txtDuration".$i];
		${"strPeople" . $i} = $_POST["txtPeople".$i];
		${"strSupplies" . $i} = $_POST["txtSupplies".$i];
		
	}

// Include Header
	include 'includes/Header.php';
	
?>

<form name="frmTaskList" id="frmTaskList" method="post" action="NewTask.php">

	<div class="div-left">
	
		<?php 
			for ($i = 1; $i <= $intCounter; $i++) {
    			echo 
    				"<h1>Task ".$i."</h1>
			
					<div class='form-group'>Title:
						<input class='form-control' type='text' name='txtTitle".$i."' placeholder='Title' value='".${"strTitle" . $i}."' required />
					</div>
			
					<div class='form-group'>Description:
						<input class='form-control' type='text' name='txtDescription".$i."' placeholder='Description' value='".${"strDescription" . $i}."' />
					</div>
				
					<div class='form-group'>Duration:
						<input class='form-control' type='text' name='txtDuration".$i."' placeholder='Duration' value='".${"strDuration" . $i}."' />
					</div>
				
					<div class='form-group'>People:
						<input class='form-control' type='text' name='txtPeople".$i."' placeholder='People' value='".${"strPeople" . $i}."' />
					</div>
				
					<div class='form-group'>Supplies:
						<input class='form-control' type='text' name='txtSupplies".$i."' placeholder='Supplies' value='".${"strSupplies" . $i}."' />
					</div>";
			} 
		?>

				<input type="text" name="txtCounter" id="txtCounter" value="<?php echo $intCounter ?>" style="visibility:hidden" >
				
		<!------------------
			Submit Button for frmClientProfile
		------------------->
			<input class="btn btn-default" type="Button" name="btnAddTask" value="Add Task" onClick="AddTask();" />
			<input class="btn btn-default" type="Button" name="btnRemoveTask" value="Remove Task" onClick="RemoveTask();" />
			<input class="btn btn-default" type="Button" name="btnSubmitProfile" value="Submit Task(s)" onClick="SubmitTask();"/>
		
	</div>
	
</form>

<script>

	function AddTask() {
		frmTaskList = document.getElementById("frmTaskList")
		
		txtCounter = document.getElementById("txtCounter")
		txtCounter.value = Number(txtCounter.value) + 1
		
		frmTaskList.submit()
		
	}
	
	function RemoveTask() {
		frmTaskList = document.getElementById("frmTaskList")
		
		txtCounter = document.getElementById("txtCounter")
		txtCounter.value = Number(txtCounter.value) - 1
		
		frmTaskList.submit()
		
	}
	
	function SubmitTask() {
		frmTaskList = document.getElementById("frmTaskList")
		frmTaskList.action = "SubmitTask.php"
		frmTaskList.submit()
	}

</script>

<?php

// Include Footer
	include 'includes/footer.php';
	
?>