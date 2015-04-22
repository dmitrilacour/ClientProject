	<!--header-->
<?php include 'includes/HeaderTest.php';?>

<!--page header-->
	<div class="col-lg-12">
        <h1 class="page-header">User Management</h1>
	</div>
	<p class="lead">Add a new user to the user database.</p>
    <input class="btn btn-primary btn-lg" type="button" name="btnAddUser" value="Add User" onclick="location.href='AddUserForm.php'">
	
	<br><Br>
	<p>Can we put the table for existing users here? Then you wouldn't need to build a separate page or have the second button (see scheduled audits for details)</p>

	 <p class="lead">Select an existing user from the user database to modify or delete.</p>
	

	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modify Employees
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


	<!--include footer-->
<?php include 'includes/footer.php';?>