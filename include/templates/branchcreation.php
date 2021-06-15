<?php 
   $id=0;

 if(isset($_POST['submitbranchbtn']) && $_POST['submitbranchbtn'] != '')
 {	
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $branchupdatedetails = $userObj->updatebranch($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editbranch&msc=2';</script>
    <?php	}
    else{   
	
		$branchadddetails = $userObj->addbranch($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editbranch&msc=1';</script>
        <?php
    }
 }  
 
$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$branchdeletedetails = $userObj->deletebranch($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editbranch&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$branchdetails = $userObj->getbranch($mysqli,$idupd); 
	
	if (sizeof($branchdetails)>0) {
        for($ibranch=0;$ibranch<sizeof($branchdetails);$ibranch++)  {			
			$branchid                	 = $branchdetails['branchid'];
			$branchname          		 = $branchdetails['branchname'];
			$address      			     = $branchdetails['address'];
			$address1      			     = $branchdetails['address1'];
			$address2       			 = $branchdetails['address2'];
			$district       			 = $branchdetails['district'];
			$pincode                	 = $branchdetails['pincode'];
			$state       		    	 = $branchdetails['state'];
			$country     			     = $branchdetails['country'];
			$phonenumber     		     = $branchdetails['phonenumber'];
			$email     			         = $branchdetails['email'];
			$faxnumber        		     = $branchdetails['faxnumber'];
			$tanno	    		         = $branchdetails['tanno'];
			$isgst                       = $branchdetails['isgst'];
			$gst                         = $branchdetails['gst'];
            $pfno                        = $branchdetails['pfno']; 
			$esicno                      = $branchdetails['esicno']; 
			$loginshortername            = $branchdetails['loginshortername']; 
            $status                      = $branchdetails['status'];  
		}
	}
}

  ?>
  

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Branch Creation</li>
					</ol>

					
					<a href="editbranch">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Branch</button>
					</a>
				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<div class="main-container">
                <form id="branch" name="branch" action="" method="post">			
				<input type="hidden" class="form-control" value="<?php if(isset($branchid )) echo $branchid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">
                                     
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">General Info</div>
								<div class="card-body">
									<!-- Row start -->
									<div class="row gutters">
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Branch Name</label><span class="text-danger">*</span>
													<input type="text" tabindex="1"  value="<?php if(isset($branchname )) echo $branchname ; ?>"  name="branchname" id="branchname" class="form-control" placeholder="Enter Branch Name">
													<span class="text-danger" id="branchnamecheck">Enter Branch Name</span>
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Fax Number</label>
													<input type="text" tabindex="2" name="faxnumber" id="faxnumber" value="<?php if(isset($faxnumber )) echo $faxnumber ; ?>"  class="form-control" placeholder="Enter Fax Number">
												
												</div>
											</div>

											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Phone Number</label><span class="text-danger">*</span>
													<input type="number" tabindex="3" value="<?php if(isset($phonenumber )) echo $phonenumber ; ?>"  name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter Phone Number">
													<span class="text-danger" id="phonenumbercheck">Enter Phone Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Mail Id</label>
													<input type="text" tabindex="4" name="email" id="email" value="<?php if(isset($email )) echo $email ; ?>"  class="form-control" placeholder="Enter Mail Id">
													<span id='emailcheck' class="text-danger">Enter Valid Email</span>
												</div>
											</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address</label><span class="text-danger">*</span>
													<input type="text" tabindex="5"  value="<?php if(isset($address )) echo $address ; ?>"  name="address" id="address" class="form-control" placeholder="Enter Address">
													<span class="text-danger" id="addresscheck">Enter Address</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address1</label>
													<input type="text" tabindex="6"  value="<?php if(isset($address1 )) echo $address1 ; ?>"  name="Address1" id="Address1" class="form-control" placeholder="Enter Address1">
												</div>
											</div>


											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address2</label>
													<input type="text" tabindex="7" value="<?php if(isset($address2 )) echo $address2 ; ?>"   name="Address2" id="Address2" class="form-control" placeholder="Enter Address2">
												</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">District</label>
												<select class="form-control chosen-select comp-field " tabindex="8" id="district"  name="district">
													<option value="">Select district</option>

                                                    <option <?php if(isset($district)) { if($district == "Ariyalur" ) echo 'selected'; }  ?> value="Ariyalur">Ariyalur</option>

                                                    <option <?php if(isset($district)) { if($district == "Chengalpattu" ) echo 'selected'; }  ?> value="Chengalpattu">Chengalpattu </option>

                                                    <option <?php if(isset($district)) { if($district == "Chennai" ) echo 'selected'; }  ?> value="Chennai">Chennai </option>

                                                    <option <?php if(isset($district)) { if($district == "Coimbatore" ) echo 'selected'; }  ?> value="Coimbatore">Coimbatore </option>

                                                    <option <?php if(isset($district)) { if($district == "Cuddalore" ) echo 'selected'; }  ?> value="Cuddalore">Cuddalore</option>

                                                    <option <?php if(isset($district)) { if($district == "Dharmapuri" ) echo 'selected'; }  ?> value="Dharmapuri">Dharmapuri</option>

                                                    <option <?php if(isset($district)) { if($district == "Dindigul" ) echo 'selected'; }  ?> value="Dindigul">Dindigul</option>

                                                    <option <?php if(isset($district)) { if($district == "Erode" ) echo 'selected'; }  ?> value="Erode"> Erode</option>

                                                    <option <?php if(isset($district)) { if($district == "Kallakurichi" ) echo 'selected'; }  ?> value="Kallakurichi">Kallakurichi</option>

                                                    <option <?php if(isset($district)) { if($district == "Kanchipuram" ) echo 'selected'; }  ?> value="Kanchipuram">Kanchipuram</option>

                                                    <option <?php if(isset($district)) { if($district == "Kanyakumari" ) echo 'selected'; }  ?> value="Kanyakumari">Kanyakumari</option>

                                                    <option <?php if(isset($district)) { if($district == "Karur" ) echo 'selected'; }  ?> value="Karur">Karur</option>

                                                    <option <?php if(isset($district)) { if($district == "Krishnagiri" ) echo 'selected'; }  ?> value="Krishnagiri">Krishnagiri</option>

                                                    <option <?php if(isset($district)) { if($district == "Madurai" ) echo 'selected'; }  ?> value="Madurai">Madurai</option>

                                                    <option <?php if(isset($district)) { if($district == "Mayiladuthurai" ) echo 'selected'; }  ?> value="Mayiladuthurai">Mayiladuthurai</option>

                                                    <option <?php if(isset($district)) { if($district == "Nagapattinam" ) echo 'selected'; }  ?>  value="Nagapattinam">Nagapattinam</option>

                                                    <option <?php if(isset($district)) { if($district == "Nilgiris" ) echo 'selected'; }  ?>  value="Nilgiris">Nilgiris</option>

                                                    <option <?php if(isset($district)) { if($district == "Namakkal" ) echo 'selected'; }  ?>  value="Namakkal">Namakkal</option>

                                                    <option <?php if(isset($district)) { if($district == "Puducherry" ) echo 'selected'; }  ?>  value="Puducherry">Puducherry</option>

                                                    <option <?php if(isset($district)) { if($district == "Perambalur" ) echo 'selected'; }  ?>  value="Perambalur">Perambalur</option>

                                                    <option <?php if(isset($district)) { if($district == "Pudukkottai" ) echo 'selected'; }  ?>  value="Pudukkottai">Pudukkottai</option>

                                                    <option <?php if(isset($district)) { if($district == "Mayiladuthurai" ) echo 'selected'; }  ?>  value="Ramanathapuram">Ramanathapuram</option>

                                                    <option <?php if(isset($district)) { if($district == "Ranipet" ) echo 'selected'; }  ?>  value="Ranipet">Ranipet</option>

                                                    <option <?php if(isset($district)) { if($district == "Salem" ) echo 'selected'; }  ?>  value="Salem">Salem</option>

                                                    <option <?php if(isset($district)) { if($district == "Sivagangai" ) echo 'selected'; }  ?>  value="Sivagangai">Sivagangai</option>

                                                    <option <?php if(isset($district)) { if($district == "Tenkasi" ) echo 'selected'; }  ?>  value="Tenkasi">Tenkasi</option>

                                                    <option <?php if(isset($district)) { if($district == "Tirupur" ) echo 'selected'; }  ?>  value="Tirupur">Tirupur</option>

                                                    <option <?php if(isset($district)) { if($district == "Tiruchirappalli" ) echo 'selected'; }  ?>  value="Tiruchirappalli">Tiruchirappalli</option>

                                                    <option <?php if(isset($district)) { if($district == "Theni" ) echo 'selected'; }  ?> value="Theni">Theni</option>

                                                    <option <?php if(isset($district)) { if($district == "Tirunelveli" ) echo 'selected'; }  ?> value="Tirunelveli">Tirunelveli</option>

                                                    <option <?php if(isset($district)) { if($district == "Thanjavur" ) echo 'selected'; }  ?> value="Thanjavur">Thanjavur</option>

                                                    <option <?php if(isset($district)) { if($district == "Thoothukudi" ) echo 'selected'; }  ?> value="Thoothukudi">Thoothukudi</option>

                                                    <option <?php if(isset($district)) { if($district == "Tirupattur" ) echo 'selected'; }  ?> value="Tirupattur">Tirupattur</option>

                                                    <option <?php if(isset($district)) { if($district == "Tiruvallur" ) echo 'selected'; }  ?> value="Tiruvallur">Tiruvallur</option>

                                                    <option <?php if(isset($district)) { if($district == "Tiruvarur" ) echo 'selected'; }  ?> value="Tiruvarur">Tiruvarur</option>

                                                    <option <?php if(isset($district)) { if($district == "Tiruvannamalai" ) echo 'selected'; }  ?> value="Tiruvannamalai">Tiruvannamalai</option>

                                                    <option <?php if(isset($district)) { if($district == "Vellore" ) echo 'selected'; }  ?> value="Vellore">Vellore</option>

                                                    <option <?php if(isset($district)) { if($district == "Viluppuram" ) echo 'selected'; }  ?> value="Viluppuram">Viluppuram</option>

                                                    <option <?php if(isset($district)) { if($district == "Virudhunagar" ) echo 'selected'; }  ?> value="Virudhunagar">Virudhunagar</option>
                                                </select>
                                                <span id="districtcheck" class="text-danger">Select district</span>
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Pin Code</label><span class="text-danger">*</span>
													<input type="number" tabindex="9" value="<?php if(isset($pincode )) echo $pincode ; ?>"  name="pincode" id="pincode"  class="form-control" placeholder="Enter Pincode">
													<span class="text-danger" id="pincodecheck">Enter Pincode</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">State</label><span class="text-danger">*</span>
													<input type="text" tabindex="10" value="<?php if(isset($state )) echo $state ; ?>"  name="state" id="state" class="form-control" placeholder="Enter State">
													<span class="text-danger" id="statecheck">Enter State</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Country</label><span class="text-danger">*</span>
													<input type="text" tabindex="11" value="<?php if(isset($country )) echo $country ; ?>"  name="country" id="country" class="form-control" placeholder="Enter Country">
													<span class="text-danger" id="countrycheck">Enter Country</span>
												</div>
											</div>

									</div>
									<!-- Row end -->

								</div>
							</div>

							<div class="card">
								<div class="card-header">Tax Info </div>
								<div class="row card-body">
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">TAN No</label>
													<input type="text" tabindex="12" name="tanno" id="tanno" value="<?php if(isset($tanno )) echo $tanno ; ?>"  class="form-control" placeholder="Enter TAN No">
													<span id="tannocheck" class="text-danger">Enter Valid TAN No</span>
												</div>
											</div>

											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="label">Is GST Applicable ?</label>
											<select name="isgst" tabindex="13" id="isgst" class="form-control">
												<option value=''>--Select Option--</option>
												<option <?php if(isset($isgst)) { if($isgst == "Yes" ) echo 'selected'; }  ?> value="Yes">Yes</option>
												<option <?php if(isset($isgst)) { if($isgst == "No" ) echo 'selected'; }  ?> value="No">No</option>
											</select>
										</div>
									</div>

											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST</label><span class="text-danger">*</span>
													<input type="text" readonly tabindex="14"  name="gst" id="gst" value="<?php if(isset($gst )) echo $gst ; ?>"  class="form-control" placeholder="Enter GST">
													<span class="text-danger" id="gstcheck">Enter GST</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">PF No</label>
													<input type="text"  tabindex="15"  name="pfno" id="pfno" value="<?php if(isset($pfno )) echo $pfno ; ?>"  class="form-control" placeholder="Enter PF No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">ESIC No</label>
													<input type="text"  tabindex="16"  name="esicno" id="esicno" value="<?php if(isset($esicno )) echo $esicno ; ?>"  class="form-control" placeholder="Enter ESIC No">
												</div>
											</div>
								</div>

								<div class="row">
									<div class="col-md-4">
									</div>

									<div class="col-md-4">
									</div>

									
								</div>

							</div>

							<div class="card">
								<div class="card-header">Other Info</div>
								<div class="row card-body">
									
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Login - Shorter Name</label><span class="text-danger">*</span>
													<input type="text"  tabindex="17"  name="loginshortername" id="loginshortername" value="<?php if(isset($loginshortername )) echo $loginshortername ; ?>"  class="form-control" placeholder="Enter Login - Shorter Name">
													<span class="text-danger" id="loginshorternamecheck">Enter Login - Shorter Name</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">	</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">	</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">										
									<div class="custom-control custom-checkbox" style="display: none">
									<input type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="18"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div>
									</div></div>
								<div class="row">
								

									<div class="col-md-6">
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-2">
										<button type="submit"  tabindex="19"  id="submitbranchbtn" name="submitbranchbtn" value="Submit" class="btn btn-primary">Submit</button>
										<button type="reset"  tabindex="20"  id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary">Cancel</button><br /><br />
									</div>
								</div>

							</div>

						</div>
					</div>
					<!-- Row end -->
		
					</form>

				</div>