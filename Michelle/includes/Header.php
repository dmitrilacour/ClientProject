<?php

// REALLY YOU NEED THIS ENTIRE PHP SECTION!
// REALLY YOU NEED THIS ENTIRE PHP SECTION!
// REALLY YOU NEED THIS ENTIRE PHP SECTION!


//DB Credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbGreenSquads";

// Define connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">


<head>

    
<meta charset="utf-8">
    
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<meta name="description" content="">
    
<meta name="author" content="">

    
<title>Go Green Squads</title>

    

<!-- Bootstrap Core CSS -->
    
<link href="/Michelle/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    
<!-- MetisMenu CSS -->
    
<link href="/Michelle/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    
<!-- Custom CSS -->
    
<link href="/Michelle/dist/css/sb-admin-2.css" rel="stylesheet">

    
<!-- Custom Fonts -->
    
<link href="/Michelle/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
<!--[if lt IE 9]>
        
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->


</head>



<body>

    

<div id="wrapper">

        
<!-- Navigation -->
        
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
<div class="navbar-header">
                
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    
<span class="sr-only">Toggle navigation</span>
                    
<span class="icon-bar"></span>
                    
<span class="icon-bar"></span>
                    
<span class="icon-bar"></span>
                
</button>
                
<a href="index.html"> <img src="/dist/images/logo.jpg" alt="Home" height=50 and width =100><b>Go Green Squads</b></a>
            
</div>
            

<!-- /.navbar-header -->

            
<ul class="nav navbar-top-links navbar-right">
                

<!-- /.dropdown -->
 
 
<!-- /.dropdown -->
 
<li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i></a>
    

<ul class="dropdown-menu dropdown-user">

<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
</li>

<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li>

<li class="divider"></li>

<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        
</li>
                    

</ul>
                   
 <!-- /.dropdown-user -->
  
</li>
                

<!-- /.dropdown -->
            
</ul>
            
<!-- /.navbar-top-links -->

            
<div class="navbar-default sidebar" role="navigation">
 
 <div class="sidebar-nav navbar-collapse">
  
 <ul class="nav" id="side-menu">
 <li></li>
<!--<li class="sidebar-search">
 

<div class="input-group custom-search-form">
 
 <input type="text" class="form-control" placeholder="Search...">
 
<span class="input-group-btn">
 
<button class="btn btn-default" type="button">
 
<i class="fa fa-search"></i>

</button>
 
</span>
  
</div>
 </li>
 <!-- /input-group -->
 
<li> <a href="../index1.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>  </li>
 
	<li><a href="../CustomerInfo.php"><i class="fa fa-bar-chart-o fa-fw"></i> Customer Information<span class="fa arrow"></span></a>
	 
		 <ul class="nav nav-second-level">
	 
			<li><a href="../InitialCallForm.php">Add Customer</a></li>
			<li><a href="../ScheduledAudits.php">Edit Existing Customer</a></li>
		</ul>
	</li>
<!-- /.nav-second-level -->
 

  
	<li> <a href="../DataCollectSearch.php"><i class="fa fa-table fa-fw"></i> Data Collection</a> </li>
 
<li><a href="ManageUsers.php"><i class="fa fa-edit fa-fw"></i> Manage Users</a> </li>
 
	<!--<li>
<a href="../CustomerProfile.php"><i class="fa fa-wrench fa-fw"></i> Customer Profile<span class="fa arrow"></span></a>
   
<ul class="nav nav-second-level">
 
	<li>
<a href="../CustomerProfile.php">Customer Profile for realz</a>
</li>
	<li>
<a href="buttons.html">Buttons</a></li>

	<li>
<a href="notifications.html">Notifications</a></li>

	<li>
<a href="typography.html">Typography</a></li>

	<li>
<a href="icons.html"> Icons</a></li>
	<li><a href="grid.html">Grid</a>
</li>
</ul>
                            
<!-- /.nav-second-level --

 </li>-->
 
<!--<li>
<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>


<ul class="nav nav-second-level">

<li><a href="#">Second Level Item</a></li>
<li><a href="#">Second Level Item</a></li>
<li>
<a href="#">Third Level <span class="fa arrow"></span></a>

	<ul class="nav nav-third-level">

		<li>
<a href="#">Third Level Item</a>
</li>
		<li><a href="#">Third Level Item</a></li>
		<li>
<a href="#">Third Level Item</a></li>
		<li><a href="#">Third Level Item</a>
</li>
	</ul>

<!-- /.nav-third-level --
</li>

</ul>

<!-- /.nav-second-level --
</li>

<li class="active">
<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
 
	<ul class="nav nav-second-level">

		<li>
<a class="active" href="blank.html">Blank Page</a>
</li>
		<li><a href="login.html">Login Page</a></li>

	</ul>

<!-- /.nav-second-level --
</li>

</ul>-->

</div>

<!-- /.sidebar-collapse -->
</div>
           
 <!-- /.navbar-static-side -->

</nav>



<!-- Page Content -->
 
       <div id="page-wrapper">
  
          <div class="container-fluid">
 
               <div class="row">

                
                    
