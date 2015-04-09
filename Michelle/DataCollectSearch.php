
<?php include 'includes/Header.php';?>
<!-- Page Content -->
 

    
<!--page header-->
<div class="col-lg-12">
  
                      <h1 class="page-header">Data Collection</h1>
  
                  </div>
<!--start page content here-->
<p class="inst">some type of selection here (both search and list sorted by alpha?)<br/>
information posts back to same page.<br>
name is posted to table along with other basic info (resuse code from edit existing customer?)<br/>
name is a hyper link to customer data collection page<br/>
use URL variable to accomplish this.<br/><br/></p>

<!--name search-->
<div> 
<p> Please enter criteria to search on. Name does not have to be completely spelled out.</p> 
<div class="form-group">
  <label>First Name</label>
  <input class="form-control" placeholder="Enter text">
</div>
<div class="form-group">
  <label>Last Name</label>
  <input class="form-control" placeholder="Enter text">
</div>
<!--takes you to customer data collection page-->
<button type="submit" class="btn btn-default" onClick="location.href='../CustomerProfile.php'" >Search</button>
</div>
<!--include footer-->
<?php include 'includes/footer.php';?>