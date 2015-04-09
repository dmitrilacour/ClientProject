<?php include '/Michelle/includes/Header.php';?>
<!-- Page Content -->
 

    
<!--page header-->
<div class="col-lg-12">
  
                      <h1 class="page-header">Customer Data</h1>
  
                  </div>
<!--start page content here-->

     <!-- /.row -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Customer Information 
                        </div>
                        <div class="panel-body">
                            <p>
                            <b>First Name:</b>Jane<br/>
                            <b>Last Name:</b> Doe<br/>
                            <b>Phone1:</b>512-971-9225<br/>
                            <b>Phone2:</b>_______________<br/>
                            <b>Address:</b>123 Main St<br/>
                            <b>City:</b>Austin<br/>
                            <b>Zip:</b>78777<br/>
                            <b>Email:</b>JaneDoe@gmail.com<br/>
                            </p>
                        </div>
                        <div class="panel-footer">
                            <p class="inst">(maybe a link to take them to the edit customer?)</p>
                        </div>
                    </div>
                </div>
                          <!-- /.col-lg-6 -->
             
               <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Collection
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">Ductwork</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">Insulation</a>
                                </li>
                                <li><a href="#settings-pills" data-toggle="tab">HVAC</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
                                    <!--tab header-->
                                    <h4>Building Envelope</h4>
                                    <!--start form-->
                                    <form>
                                    <p> Building envelopes are ..... Please complete the form for building envelopes</p>
                                    <div class="form-group">
                                            <label>Building Envelope?</label>
                                            <select name="envelope" id="envelope" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Enter Ceiling Height</label>
                                            <input class="form-control" placeholder="Enter Height in Feet">
                                    </div>
                                    <div class="form-group">
                                            <label>Foundation</label>
                                            <select name="foundation" id="foundation" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Slab">Slap</option>
                                                <option value="Pier">Pier</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Living Area Difficulty</label>
                                            <select name="foundation" id="foundation" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Some Restriction">Some Restriction</option>
                                                <option value="Some Restriction">Small/Difficult to Maneuver</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Living Area Leakiness</label>
                                            <select name="leakiness" id="leakiness" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Some Leakiness">Some Leakiness</option>
                                                <option value="Lots of Leaks">Lots of Leaks</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Attic Area Difficulty</label>
                                            <select name="attic" id="attic" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Some Restriction">Some Restriction</option>
                                                <option value="Some Restriction">Small/Difficult to Maneuver</option>
                                            </select>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Number of Doors</label>
                                        <input name="doors" id="doors"class="form-control" placeholder="Enter # of Doors">
                                    </div>
                                    <div class="form-group">
                                        <label>Number of Jambs/Sweeps</label>
                                        <input name="jambs" id="jambs"class="form-control" placeholder="Enter # of Jambs/Sweeps">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Number of Bathrooms</label>
                                        <input name="bathrooms" id="bathrooms"class="form-control" placeholder="Enter # of Bathrooms">
                                    </div>
                                    <div class="form-group">
                                                <label>Add Ons Needed?</label>
                                                <textarea class="form-control" rows="3" placeholder="Smoke Detectors, CO Detectors, FirePlace Ballons, etc."></textarea>
                                            </div>
                                     <div class="form-group">
                                                <label>Notes For Contractor</label>
                                                <textarea class="form-control" rows="3" placeholder="Move Items Under Sinks, Remove Attic 			Items, CFLs, Power Strips, etc."></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-default">Submit Button</button>
                                      <button type="reset" class="btn btn-default">Reset Button</button>
                                       </form> 
                                        
                           </div>  
                                <!--ductwork tab-->
                           <div class="tab-pane fade" id="profile-pills">
                                	<!--tab header-->
                                    <h4>Ductwork</h4>
                                    <!--start form-->
                                    <form>
                                    <p>Duct work is for ..... Please complete the form for ductwork</p>
                                    <div class="form-group">
                                            <label>Seal?</label>
                                            <select name="seal" id="seal" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Replace Ducts?</label>
                                            <select name="replace" id="replace" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                    </div>
                                    <!--duct type ddl-->
                                    <div class="form-group">
                                            <label>Duct Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Duct Board">Duct Board</option>
                                                <option value="Grey Flex">Grey Flex</option>
                                                <option value="Silver Flex">Silver Flex</option>
                                                <option value="Metal">Metal</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Duct Location</label>
                                            <select name="location" id="location" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Attic">Attic</option>
                                                <option value="Crawl Space">Crawl Space</option>
                                                <option value="Furrdowns">Furrdowns</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Duct Condition</label>
                                            <select name="condition" id="condition" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Poor">Poor</option>
                                                <option value="Fair">Fair</option>
                                                <option value="Good">Good</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Duct R-Value</label>
                                            <select name="value" id="value" class="form-control">
                                            	<option value="">Select</option>
                                                <option value="R-2">R-2</option>
                                                <option value="R-4">R-4</option>
                                                <option value="R-6">R-6</option>
                                                <option value="R-8">R-8</option>
                                            </select>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Number of Supplies</label>
                                        <input name="supplies" id="supplies"class="form-control" placeholder="Enter # of Supplies">
                                    </div>
                                    <div class="form-group">
                                                <label>Add Ons Needed?</label>
                                                <textarea id="ductadd" name="ductadd"class="form-control" rows="3" placeholder="Registers, filters, etc."></textarea>
                                            </div>
                                     <div class="form-group">
                                                <label>Notes For Contractor</label>
                                                <textarea id="ductnotes" name="ductnotes" class="form-control" rows="3" placeholder="Clean/seal return or registers, Remove Attic items, etc."></textarea>
                                      </div>
                                      <button id="ductsubmit" type="submit" class="btn btn-default">Submit Button</button>
                                      <button type="reset" class="btn btn-default">Reset Button</button>
                                       </form> 
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Insulation</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>HVAC</h4>
                                    <form>
                                    <p>HVAC is for ..... Please complete the form for HVAC</p>
                                    <div class="form-group">
                                            <label>Enter Tons of Air</label>
                                            <input id"tons" name="tons"class="form-control" placeholder="Enter # in Tons">
                                    </div>
                                    <div class="form-group">
                                            <label>Replace or Repair HVAC?</label>
                                            <select name="repair" id="repair" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Replace">Replace</option>
                                                <option value="Repair">Repair</option>
                                                <option value="Tune Up">Tune Up</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Air Handler Location</label>
                                            <select name="airlocation" id="airlocation" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Attic">Attic</option>
                                                <option value="Cond Closet">Cond Closet</option>
                                                <option value="Uncond Closet">Uncond Closet</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Thermostat Type</label>
                                            <select name="thermostat" id="thermostat" class="form-control">
                                                <option value="">Select</option>
                                                <option value="AE Programmable">AE Programmable</option>
                                                <option value="Other Programmable">Other Programmable</option>
                                                <option value="Not Programmable">Not Programmable</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Zoned?</label>
                                            <select name="zoned" id="zoned" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Enter Condenser Age</label>
                                            <input id"condenserage" name="condenserage"class="form-control" placeholder="Enter Condenser Age">
                                    </div>
                                    <div class="form-group">
                                            <label>Enter Condenser S/N</label>
                                            <input id"condenser" name="condenser"class="form-control" placeholder="Enter Condenser S/N">
                                    </div>
                                    <div class="form-group">
                                            <label>Enter Condenser Model Number</label>
                                            <input id"condensermodel" name="condensermodel"class="form-control" placeholder="Enter Model Number">
                                    </div>
                                    <div class="form-group">
                                            <label>Cooling Type</label>
                                            <select name="location" id="location" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Central AC">Central AC</option>
                                                <option value="Window Unit">Window Unit</option>
                                            </select>
                                    </div>
                                     <div class="form-group">
                                            <label>Enter Furnance/AirH Age</label>
                                            <input id"furnaceage" name="furnaceage"class="form-control" placeholder="Enter Furnace Age">
                                    </div>
                                    <div class="form-group">
                                            <label>Enter Furnance/AirH S/N</label>
                                            <input id"furnace" name="furnace"class="form-control" placeholder="Enter Furnace S/N">
                                    </div>
                                    <div class="form-group">
                                            <label>Enter Furnance Model Number</label>
                                            <input id"furnacemodel" name="furnacemodel"class="form-control" placeholder="Enter Furnace Model Number">
                                    </div>
                                    <div class="form-group">
                                            <label>Duct Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Duct Board">Duct Board</option>
                                                <option value="Grey Flex">Grey Flex</option>
                                                <option value="Silver Flex">Silver Flex</option>
                                                <option value="Metal">Metal</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Duct Location</label>
                                            <select name="location" id="location" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Attic">Attic</option>
                                                <option value="Crawl Space">Crawl Space</option>
                                                <option value="Furrdowns">Furrdowns</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Duct Condition</label>
                                            <select name="condition" id="condition" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Poor">Poor</option>
                                                <option value="Fair">Fair</option>
                                                <option value="Good">Good</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Duct R-Value</label>
                                            <select name="value" id="value" class="form-control">
                                            	<option value="">Select</option>
                                                <option value="R-2">R-2</option>
                                                <option value="R-4">R-4</option>
                                                <option value="R-6">R-6</option>
                                                <option value="R-8">R-8</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Number of Supplies</label>
                                        <input name="hvacsupplies" id="hvacsupplies"class="form-control" placeholder="Enter # of Supplies">                                    </div>
                                     <div class="form-group">
                                                <label>Notes For Contractor</label>
                                                <textarea class="form-control" rows="3" name="hvac">
                                                </textarea>
                                      </div>   
                                    <button id="hvacsubmit" type="submit" class="btn btn-default">Submit Button</button>
                                      <button type="reset" class="btn btn-default">Reset Button</button>
                                      </form>  
                                      
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div> 
            
<!--include footer-->
<?php include 'includes/footer.php';?>