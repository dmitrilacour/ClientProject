<?php

$pass = 'g0gr33nsQuAdz!';

if (isset($_COOKIE['password'])) {
	if ($_COOKIE['password'] != md5($pass)) {
		header('location: login.html');
	} else {
		echo "Success";
	}
} else {
	header('location: login.html');
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

    <title>Rough Prototype</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    	input {margin-bottom: 2%;}
    	#database {text-align: left;}
    </style>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Admin Input</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Audit Input</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Collected Data</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About this prototype</h1>
                    <p>This is a rough mock up to show design and functionality ideas to the team and client</p>
                    <a class="btn btn-default page-scroll" href="#about">Click here to begin</a>
                </div>
            </div>
        </div>
    </section>
    
    
<form name="TestInput" method="post" action="InsertDB.php">





    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Admin Input</h1>
                    
                            
                            
			<b>Name: <br>
			<input type="text" name="firstname" required placeholder="First Name"> <input type="text" name="lastname" required placeholder="Last Name">

			<br>
			Address:<br>
			<input type="text" name="street" required placeholder="Address"> <input type="text" name="city" required placeholder="City"> <input type="text" name="state" required placeholder="State" maxlenth="2"> <input type="text" name="zip" required placeholder="Zip Code"><br>

			Reason For Calling:<br>
			<textarea name="reasonforcall" rows="5" cols="40" placeholder="Brief description of reason" required></textarea> <br>

			Date For Audit:<br>
			<input type="date" name="auditdate" required> <br>
                </div>
            </div>
        </div>
        

        
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Audit Input</h1>
                    
      
        
        <h3>Building Envelope</h3>
        
        	Yes: <input type="radio" name="buildingenvelope" required value="1">
        	No: <input type="radio" name="buildingenvelope" value="0"> <br>
        	
        	Living Area Difficulty:<br>
        	<select required name="livingdifficulty">
        		<option value="" disabled selected>Select Difficulty</option>
				<option value="low">Low</option>
				<option value="med">Medium</option>
				<option value="high">High</option>
			</select> <br>
        	Attic Difficulty: <br>
        	<select required name="atticdifficulty">
        		<option value="" disabled selected>Select Difficulty</option>
				<option value="low">Low</option>
				<option value="med">Medium</option>
				<option value="high">High</option>
			</select> <br>
        	Need Smoke Detectors?
        	<input type="number" name="smokedetectors" min="0" max ="10" step="1" required placeholder="">
        
        <h3>Ductwork</h3>
        	Seal <br>
        	Yes: <input type="radio" name="seal" value="1" required>
        	No: <input type="radio" name="seal" value="0"> <br>
        	
        	Replace <br>
        	Yes: <input type="radio" name="replace" value="1" required>
        	No: <input type="radio" name="replace" value="0"> <br>
        	
        	Duct Type <br>
        	<select required name="ducttype">
        		<option value="none" disabled selected>Select Duct Type</option>
				<option value="a">Type A</option>
				<option value="b">Type B</option>
				<option value="c">Type C</option>
			</select> <br>
        
        <h3>Insulation</h3>
        	Yes/No: <br>
        	Yes: <input type="radio" name="insulation" value="1" required>
        	No: <input type="radio" name="insulation" value="0"> <br>
        	
        	Attic Square Feet: <br>
        	<input type="number" name="atticsf" min="0" step="1" required placeholder="Square Feet"> <br>
        	Existing depth: <br>
        	<input type="number" name="depth" min="0" step=".5" required placeholder="Inches"> <br>
        	Insulation Type <br></b>
        	<select required name="insulationtype">
        		<option value="none" disabled selected>Select Insulation Type</option>
				<option value="a">Type A</option>
				<option value="b">Type B</option>
				<option value="c">Type C</option>
			</select> <br>
        	
        	<input type="submit" value="Submit Client Data" name="submittest">
        
                </div>
            </div>
        </div>
        
        
    </section>
</form>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Collected Data</h1>
                </div>
            </div>
        </div>
        
        <p>Here is an example of what our database looks like</p>
        
        <pre id="database">
			
			
			<?php

			$servername = "localhost";
			$username = "root";
			$password = "852456ut!";
			$dbname = "Client";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT FirstName, LastName, Phone, Street, City, State, Zip, ReasonForCall, DateForAudit, BuildingEnvelope, LivingDifficulty, AtticDifficulty, NeedSmoke, DuctSeal, DuctReplace, DuctType, Insulation, AtticSF, InsulationDepth, InsulationType FROM Client";
			$result = $conn->query($sql);

			for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);



			print_r ($set);
			?>
</pre>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
