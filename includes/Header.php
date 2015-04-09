<?php

// Redirect if User and Type not set

	if (!isset($_COOKIE['User']) and !isset($_COOKIE['UserType'])) {
		header( 'Location: LoginForm.php' );
	}


// DB Credentials

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
    
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    
<!-- MetisMenu CSS -->
    
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    
<!-- Custom CSS -->
    
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    
<!-- Custom Fonts -->
    
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                
<a href="index.php"> <img src="../dist/images/logo.jpg" alt="Home" height=50 and width =100><b>Go Green Squads</b></a>
            
</div>

            
<ul class="nav navbar-top-links navbar-right">

<li>
	Hello, <?php echo $_COOKIE['User'] ?>
</li>

<li>
	<a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
                

<!-- /.dropdown -->
            
</ul>
            
<!-- /.navbar-top-links -->

            
<div class="navbar-default sidebar" role="navigation">
 
 <div class="sidebar-nav navbar-collapse">
  
 <ul class="nav" id="side-menu">

<li> <a href="index.php"><i class="fa fa-home fa-fw"></i> Home </a>  </li>
<li> <a href="InitialCallForm.php"><i class="fa fa-plus fa-fw"></i> Add Customer</a> </li>
<li> <a href="ScheduledAudits.php"><i class="fa fa-calendar fa-fw"></i> Audit Schedule</a> </li>
<li> <a href="CustomerProfile.php"><i class="fa fa-refresh fa-fw"></i> Edit Client</a> </li>
 

</ul>
</div>

<!-- /.sidebar-collapse -->
</div>
           
 <!-- /.navbar-static-side -->

</nav>



<!-- Page Content -->
 
       <div id="page-wrapper">
  
          <div class="container-fluid">
 
               <div class="row">

                
                    
