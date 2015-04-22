	<!--header-->
<?php 
  include 'includes/HeaderTest.php';
  session_start();
  $strUsername= $_SESSION["Username"];
  //$strUsername = $_GET["Username"];
?>

  <!--page header-->
  <div class="col-lg-12">
    <h1 class="page-header"><?php echo ($strUsername); ?></h1> 
  </div>

<!-- Upon page load, the fields should be populated by user population. They should all be disabled. -->	
    <form id="frmModifyUser" name="frmModifyUser" method="post" action="testModifyView.php" onsubmit="">
	  <div class="form-group">
	    <label>Username:</label>
	    <input class="form-control" type="text" name="txtUsername" value = "<?php echo ($strUsername); ?>" readonly>
	  </div>
	  
	  	  <!--If privilege level for delete is not high enough, alert message warns user that this is the case. -->
	  <input class="btn btn-primary btn-lg" type="Submit" name="btnModifyUser" value="Modify User">
	</form> 
	
	<form id="frmDeleteUser" name="frmDeleteUser" method="post" action="DeleteUser.php">
	  <!--If privilege level for delete is not high enough, alert message warns user that this is the case. If it is high enough, ask if user is sure about the delete. -->
	  <div class="form-group">
	    <input class="form-control" type="hidden" name="txtUsername" value = "<?php echo ($strUsername); ?>" readonly>
	  </div>
	  
	  <input class="btn btn-primary btn-lg" type="Submit" name="btnDeleteUser" value="Delete User">
	
	</form> 
	
	<!--include footer-->
<?php include 'includes/footer.php';?>