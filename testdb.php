	<!--header-->
<?php include 'includes/HeaderTest.php';?>

	<script type="text/javascript" src="AddUser.js">
    </script>
  
  <!--page header-->
	<div class="col-lg-12">
	  <h1 class="page-header">Test Database</h1> 
	</div>
	
    <form id="frmAddUser" name="frmAddUser" method="post" onsubmit="return testCheck()" action="test.php" >
	  <div class="form-group">
	    <label>Username:</label>
	    <input class="form-control" type="text" name="txtUsername" placeholder="Username">
	  </div>
	  
	  <br>
	   
	  <input class="btn btn-primary btn-lg" type="Submit" name="btnAddUser" value="Add User">
	</form>
	
	<!--include footer-->
<?php include 'includes/footer.php';?>