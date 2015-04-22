	<!--header-->
<?php include 'includes/HeaderTest.php';?>

  <!--page header-->
  <div class="col-lg-12">
    <h1 class="page-header">An Individual User</h1> 
  </div>

<!-- Upon page load, the fields should be populated by user population. They should all be disabled. -->	
    <form name="frmAddUser" method="post" action="">
	  <div class="form-group">
	    <label>Username:</label>
	    <input class="form-control" type="text" name="txtUsername" disabled>
	  </div>
	  
	  <div class="form-group">
	    <label>Password:</label>
	    <input class="form-control" type="text" name="txtPassword" disabled>
	  </div>
	  
	  <div class="form-group">
	    <label>First Name:</label>
	    <input class="form-control" type="text" name="txtFirstName" disabled>
	  </div>
		
	  <div class="form-group">
   	    <label>Last Name:</label>
        <input class="form-control" type="text" name="txtLastName" disabled>
      </div>
		
      <div class="form-group">
  	    <label>Title:</label>
	    <input class="form-control" type="text" name="txtTitle" disabled> 
	  </div>
	  
	  <div class="form-group">
	    <label>Supervisor:</label>
	    <input class="form-control" type="text" name="txtSupervisor" disabled>
      </div>	
	  
      <div class="form-group">
  	    <label>Email:</label>
	    <input class="form-control" type="text" name="txtEmail" disabled> 
	  </div>
	  
	  <div class="form-group">
  	    <label>Phone:</label>
	    <input class="form-control" type="text" name="txtPhone" disabled> 
	  </div>
	  
      <div class="form-group">
  	    <label>Date Added:</label>
	    <input class="form-control" type="text" name="txtDateAdded" disabled> 
	  </div>
	  
	  <div class="form-group">
	    <label>Privilege Level:</label>
		<input class="form-control" type="text" name="txtPrivilegeLevel" disabled>
	  </div>
	  
	  <br>
	  
	  <!--If privilege level for delete is not high enough, alert message warns user that this is the case. -->
	  <input class="btn btn-primary btn-lg" type="submit" name="btnModifyUser" value="Modify User">
	  
	  <!--If privilege level for delete is not high enough, alert message warns user that this is the case. If it is high enough, ask if user is sure about the delete. -->
	  <input class="btn btn-primary btn-lg" type="submit" name="btnDeleteUser" value="Delete User">
	</form>
	
	<!--include footer-->
<?php include 'includes/footer.php';?>