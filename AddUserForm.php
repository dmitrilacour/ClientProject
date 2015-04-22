	<!--header-->
<?php include 'includes/HeaderTest.php';?>

	<script type="text/javascript" src="AddUser.js">
    </script>
  
  <!--page header-->
	<div class="col-lg-12">
	  <h1 class="page-header">Add User</h1> 
	</div>
	
	<p> * = Required Field </p>
	
    <form id="frmAddUser" name="frmAddUser" method="post" action="" onsubmit = "return checkAddUser()">
	  <div class="form-group">
	    <label>Username: *</label>
	    <input class="form-control" type="text" name="txtUsername" placeholder="Username">
	  </div>
	  
	  <div class="form-group">
	    <label>Password: *</label>
	    <input class="form-control" type="password" name="txtPassword" placeholder="Password">
	  </div>
	  
	  <div class="form-group">
	    <label>Confirm Password: *</label>
	    <input class="form-control" type="password" name="txtConfirmPassword" placeholder="Confirm Password">
	  </div>
	  
	  <div class="form-group">
	    <label>First Name: *</label>
	    <input class="form-control" type="text" name="txtFirstName" placeholder="First Name">
	  </div>
		
	  <div class="form-group">
   	    <label>Last Name: *</label>
        <input class="form-control" type="text" name="txtLastName" placeholder="Last Name">
      </div>
		
      <div class="form-group">
  	    <label>Title: *</label>
	    <input class="form-control" type="text" name="txtTitle" placeholder="Title"> 
	  </div>
	  
	  <div class="form-group">
	    <label>Supervisor: *</label>
	    <input class="form-control" type="text" name="txtSupervisor" placeholder="Supervisor's Username">
      </div>	
	  
      <div class="form-group">
  	    <label>Email: *</label>
	    <input class="form-control" type="text" name="txtEmail" placeholder='"user@domain"'> 
	  </div>
	  
	  <div class="form-group">
  	    <label>Phone:</label>
	    <input class="form-control" type="text" name="txtPhone" placeholder="(###) ###-####"> 
	  </div>
	  
      <div class="form-group">
  	    <label>Date Added:</label>
		<!-- Right now I don't have php so this won't work just yet -->
	    <input class="form-control" type="text" name="datDateAdded" value = "<?php echo date('m/d/Y'); ?>" disabled> 
	  </div>
	  
	  <div class="form-group">
	    <label>Privilege Level: *</label>
		  <select class="form-control" name="ddlPrivilegeLevel">
			<option value="Admin" selected="selected">Admin</option >
			<option value="Audit">Audit</option>
			<option value="Field">Field</option>
          </select>
	  </div>
	  
	  <br>
	   
	  <input class="btn btn-primary btn-lg" type="Submit" name="btnAddUser" value="Add User">
	</form>
	
	<!--include footer-->
<?php include 'includes/footer.php';?>