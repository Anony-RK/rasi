<?php 
   $id=0;

 if(isset($_POST['submitbranchbtn']) && $_POST['submitbranchbtn'] != '')
 {

    
if($_POST['branchname'] != '' && $_POST['address'] != '' && $_POST['pincode'] != ''
 && $_POST['state'] != '' && $_POST['country'] != '' &&
$_POST['phonenumber'] != '' && $_POST['email'] != '' && $_POST['faxnumber'] != '' 
&& $_POST['tanno'] != '' && $_POST['gst'] != '' && $_POST['pfno'] != '' 
&& $_POST['esicno'] != '' && $_POST['loginshortername'] != '')
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
			$pincode                	 = $branchdetails['pincode'];
			$state       		    	 = $branchdetails['state'];
			$country     			     = $branchdetails['country'];
			$phonenumber     		     = $branchdetails['phonenumber'];
			$email     			         = $branchdetails['email'];
			$faxnumber        		     = $branchdetails['faxnumber'];
			$tanno	    		         = $branchdetails['tanno'];
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
												<label class="label">Address</label><span class="text-danger">*</span>
													<input type="text" tabindex="2"  value="<?php if(isset($address )) echo $address ; ?>"  name="address" id="address" class="form-control" placeholder="Enter Address">
													<span class="text-danger" id="addresscheck">Enter Address</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address1</label>
													<input type="text" tabindex="3"  value="<?php if(isset($address1 )) echo $address1 ; ?>"  name="Address1" id="Address1" class="form-control" placeholder="Enter Address1">
												</div>
											</div>


											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address2</label>
													<input type="text" tabindex="4" value="<?php if(isset($address2 )) echo $address2 ; ?>"   name="Address2" id="Address2" class="form-control" placeholder="Enter Address2">
												</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Pin Code</label><span class="text-danger">*</span>
													<input type="number" tabindex="5" value="<?php if(isset($pincode )) echo $pincode ; ?>"  name="pincode" id="pincode"  class="form-control" placeholder="Enter Pincode">
													<span class="text-danger" id="pincodecheck">Enter Pincode</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">State</label><span class="text-danger">*</span>
													<input type="text" tabindex="6" value="<?php if(isset($state )) echo $state ; ?>"  name="state" id="state" class="form-control" placeholder="Enter State">
													<span class="text-danger" id="statecheck">Enter State</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Country</label><span class="text-danger">*</span>
													<input type="text" tabindex="7" value="<?php if(isset($country )) echo $country ; ?>"  name="country" id="country" class="form-control" placeholder="Enter Country">
													<span class="text-danger" id="countrycheck">Enter Country</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Phone Number</label><span class="text-danger">*</span>
													<input type="number" tabindex="8" value="<?php if(isset($phonenumber )) echo $phonenumber ; ?>"  name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter Phone Number">
													<span class="text-danger" id="phonenumbercheck">Enter Phone Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Mail Id</label><span class="text-danger">*</span>
													<input type="text" tabindex="9" name="email" id="email" value="<?php if(isset($email )) echo $email ; ?>"  class="form-control" placeholder="Enter Mail Id">
													<span class="text-danger" id="emailcheck">Enter Mail Id</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Fax Number</label><span class="text-danger">*</span>
													<input type="text" tabindex="10" name="faxnumber" id="faxnumber" value="<?php if(isset($faxnumber )) echo $faxnumber ; ?>"  class="form-control" placeholder="Enter Fax Number">
													<span class="text-danger" id="faxnumbercheck">Enter Fax Number</span>
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
													<input type="text" tabindex="11" name="tanno" id="tanno" value="<?php if(isset($tanno )) echo $tanno ; ?>"  class="form-control" placeholder="Enter TAN No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST</label><span class="text-danger">*</span>
													<input type="text"  tabindex="12"  name="gst" id="gst" value="<?php if(isset($gst )) echo $gst ; ?>"  class="form-control" placeholder="Enter GST">
													<span class="text-danger" id="gstcheck">Enter GST</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">PF No</label>
													<input type="text"  tabindex="13"  name="pfno" id="pfno" value="<?php if(isset($pfno )) echo $pfno ; ?>"  class="form-control" placeholder="Enter PF No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">ESIC No</label>
													<input type="text"  tabindex="14"  name="esicno" id="esicno" value="<?php if(isset($esicno )) echo $esicno ; ?>"  class="form-control" placeholder="Enter ESIC No">
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
													<input type="text"  tabindex="15"  name="loginshortername" id="loginshortername" value="<?php if(isset($loginshortername )) echo $loginshortername ; ?>"  class="form-control" placeholder="Enter Login - Shorter Name">
													<span class="text-danger" id="loginshorternamecheck">Enter Login - Shorter Name</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">	</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">	</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<!-- Checkbox example -->
									<div class="custom-control custom-checkbox">
									<input type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div>
									</div></div>
								<div class="row">
								

									<div class="col-md-6">
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-2">
										<button type="submit"  tabindex="17"  id="submitbranchbtn" name="submitbranchbtn" value="Submit" class="btn btn-primary">Submit</button>
										<button type="reset"  tabindex="18"  id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary">Cancel</button><br /><br />
									</div>
								</div>

							</div>

						</div>
					</div>
					<!-- Row end -->
					</form>

				</div>