function checkAddUser() {
  var elt = document.getElementById("frmAddUser");
  
  var txtUsername = elt.txtUsername.value;
  var txtPassword = elt.txtPassword.value;
  var txtConfirmPassword = elt.txtConfirmPassword.value;
  var txtFirstName = elt.txtFirstName.value;
  var txtLastName = elt.txtLastName.value;
  var txtTitle = elt.txtTitle.value;
  var txtSupervisor = elt.txtSupervisor.value;
  var txtEmail = elt.txtEmail.value;
  var txtPhone = elt.txtPhone.value;
  var datDateAdded = elt.datDateAdded.value;
  var ddlPrivilegeLevel = elt.ddlPrivilegeLevel.value;
  
  //check if any fields have been left blank  
  if (txtUsername == "" || txtUsername == null) {
    alert("Please provide a username.");
    return false;
  } 
  
  if (txtPassword == "" || txtPassword == null) {
    alert("Please provide a password.");
    return false;
  } 
  
  if (txtConfirmPassword == "" || txtConfirmPassword == null) {
    alert("Please confirm the password.");
    return false;
  } 
  
  if (txtFirstName == "" || txtFirstName == null) {
    alert("Please provide a first name.");
    return false;
  } 
  
  if (txtLastName == "" || txtLastName == null) {
    alert("Please provide a last name.");
    return false;
  } 
  
  if (txtSupervisor == "" || txtSupervisor == null) {
    alert("Please provide supervisor's username.");
    return false;
  } 
  
  if (txtEmail == "" || txtEmail == null) {
    alert("Please provide an email.");
    return false;
  }
  
  /* 
  if (txtPhone == "" || txtPhone == null) {
    alert("Please provide a phone number.");
    return;
  } 
  */
  
  //Need to validate if a username already exists in the database. This requires php.
  //Need to validate if the supervisor username. This requires php.
  //Email format validation
  //Phone format validation
  //Date and privilege fields should be automatically completed.
  
  if (txtPassword != txtConfirmPassword) {
    alert ("Password confirmation is incorrect.");
	return false;
  }
    
}

function testCheck() {
  var elt = document.getElementById("frmAddUser");
  var txtUsername = elt.txtUsername.value;

  if (txtUsername == "" || txtUsername == null) {
    alert("Please provide a username.");
    return false;
  } 

}