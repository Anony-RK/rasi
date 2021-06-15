<?php 
   $id=0;

 if(isset($_POST['submitbankbtn']) && $_POST['submitbankbtn'] != '')
 {
	   
if($_POST['bankname'] != '' && $_POST['accountno'] != '' && $_POST['branchname'] != ''
 && $_POST['shortform'] != '' && $_POST['purpose'] != '' &&
$_POST['accounttype'] != '' && $_POST['subgrouptype'] != '')
  {

	
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $bankupdatedetails = $userObj->updatebank($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editbank&msc=2';</script>
    <?php	}
    else{   
	
		$bankadddetails = $userObj->addbank($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editbank&msc=1';</script>
        <?php
    }
 }  
 
}
$del=0;
$costcenter=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$bankdeletedetails = $userObj->deletebank($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editbank&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$bankdetails = $userObj->getbank($mysqli,$idupd); 
	
	if (sizeof($bankdetails)>0) {
        for($ibank=0;$ibank<sizeof($bankdetails);$ibank++)  {			
			$bankid                 	 = $bankdetails['bankid'];
			$bankcode          		     = $bankdetails['bankcode'];
			$bankname      			     = $bankdetails['bankname'];
			$accountno      			 = $bankdetails['accountno'];
			$branchname       			 = $bankdetails['branchname'];
			$shortform                	 = $bankdetails['shortform'];
			$purpose       		    	 = $bankdetails['purpose'];
			$mailid     			     = $bankdetails['mailid'];
			$ifsccode        		     = $bankdetails['ifsccode'];
			$contactperson     			 = $bankdetails['contactperson'];
			$contactno        		     = $bankdetails['contactno'];
			$micrcode	    		     = $bankdetails['micrcode'];
			$typeofaccount               = $bankdetails['typeofaccount'];
            $undersubgroup               = $bankdetails['undersubgroup']; 
			$fgroup                      = $bankdetails['fgroup']; 
			$ledgername                  = $bankdetails['ledgername']; 
			$costcenter                  = $bankdetails['costcenter']; 
            $status                      = $bankdetails['status'];  
		}
	}
}

  ?>
  

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Bank Creation</li>
					</ol>

					
					<a href="editbank">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Bank</button>
					</a>
				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<div class="main-container">
                <form id="bank" name="bank" action="" method="post">			
				<input type="hidden" class="form-control" value="<?php if(isset($bankid)) echo $bankid; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">
                                     
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
												<label class="label">Bank Code</label>
													<input type="text" tabindex="1"  value="<?php if(isset($bankcode)) echo $bankcode; ?>"  name="bankcode" id="bankcode" class="form-control" placeholder="Enter Bank Code">
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Bank Name</label><span class="text-danger">*</span>
													<input type="text" tabindex="2"  value="<?php if(isset($bankname)) echo $bankname; ?>"  name="bankname" id="bankname" class="form-control" placeholder="Enter Bank Name">
													<span class="text-danger" id="banknamecheck">Enter Bank Name</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">A/C No</label><span class="text-danger">*</span>
													<input type="number" tabindex="3"  value="<?php if(isset($accountno)) echo $accountno; ?>"  name="accountno" id="accountno" class="form-control" placeholder="Enter A/C No">
													<span class="text-danger" id="accountnocheck">Enter A/C No</span>
												</div>
											</div>


											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Branch Name</label><span class="text-danger">*</span>
													<input type="text" tabindex="4" value="<?php if(isset($branchname)) echo $branchname; ?>"   name="branchname" id="branchname" class="form-control" placeholder="Enter Branch Name">
													<span class="text-danger" id="branchnamecheck">Enter Branch Name</span>
												</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Short Form</label><span class="text-danger">*</span>
													<input type="text" tabindex="5" value="<?php if(isset($shortform)) echo $shortform; ?>"  name="shortform" id="shortform"  class="form-control" placeholder="Enter Short Form">
													<span class="text-danger" id="shortformcheck">Enter Short Form</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Purpose</label><span class="text-danger">*</span>
													<input type="text" tabindex="6" value="<?php if(isset($purpose)) echo $purpose; ?>"  name="purpose" id="purpose" class="form-control" placeholder="Enter Purpose">
													<span class="text-danger" id="purposecheck">Enter Purpose</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Mail Id</label>
													<input type="text" tabindex="7" value="<?php if(isset($mailid)) echo $mailid; ?>"  name="email" id="email" class="form-control" placeholder="Enter Mail Id">
													<span class="text-danger" id="emailcheck">Enter Mail Id</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">IFSC Code</label>
													<input type="text" tabindex="8" value="<?php if(isset($ifsccode)) echo $ifsccode; ?>"  name="ifsccode" id="ifsccode" class="form-control" placeholder="Enter IFSC Code">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Contact Person</label>
													<input type="text" tabindex="9" name="contactperson" id="contactperson" value="<?php if(isset($contactperson)) echo $contactperson; ?>"  class="form-control" placeholder="Enter Contact Person">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Contact No</label>
													<input type="number" tabindex="10" name="contactno" id="contactno" value="<?php if(isset($contactno)) echo $contactno; ?>"  class="form-control" placeholder="Enter Contact No">
													<span class="text-danger" id="contactnocheck">Enter Contact No</span>
												</div>
											</div>									
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">MICRCode</label>
													<input type="text" tabindex="11" name="micrcode" id="micrcode" value="<?php if(isset($micrcode)) echo $micrcode; ?>"  class="form-control" placeholder="Enter MICRCode">
												</div>
											</div>
									</div>
									<!-- Row end -->

								</div>
							</div>

							<div class="card">
								<div class="card-header">Financial Info </div>
								<div class="row card-body">
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Type of Account</label><span class="text-danger">*</span>
												<select tabindex="12" name="accounttype" id="accounttype" class="form-control comp-field  chosen-select">
													<option value="">Select a Account Type...</option>														
													<option <?php if(isset($typeofaccount)) { if($typeofaccount == "bankod" ) echo 'selected'; }  ?> value="bankod">Bank OD</option>
													<option <?php if(isset($typeofaccount)) { if($typeofaccount == "cc" ) echo 'selected'; }  ?> value="cc">CC</option>
													<option <?php if(isset($typeofaccount)) { if($typeofaccount == "termloan" ) echo 'selected'; }  ?>value="termloan">Term Loan</option>
													<option <?php if(isset($typeofaccount)) { if($typeofaccount == "carloan" ) echo 'selected'; }  ?> value="carloan">Car Loan</option>
													<option <?php if(isset($typeofaccount)) { if($typeofaccount == "normalaccounts" ) echo 'selected'; }  ?> value="normalaccounts">Normal Accounts</option>
													</select> 
													<span class="text-danger" id="accounttypecheck">Select a Account Type...</span>
							
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Under SubGroup</label><span class="text-danger">*</span>
												<select tabindex="13" name="subgrouptype" id="subgrouptype" class="form-control comp-field  chosen-select">
													<option value="">Select a Account Group...</option>														
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "reservesurplus" ) echo 'selected'; }  ?>  value="reservesurplus">Reserve & Surplus</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "sundrycreditors" ) echo 'selected'; }  ?> value="sundrycreditors">Sundry Creditors</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "loansliability" ) echo 'selected'; }  ?> value="loansliability">Loans(Liability)</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "bankod" ) echo 'selected'; }  ?> value="bankod">Bank OD</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "openingstock" ) echo 'selected'; }  ?> value="openingstock">Opening Stock</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "cashinhand" ) echo 'selected'; }  ?> value="cashinhand">Cash-in-hand</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "bankaccounts" ) echo 'selected'; }  ?> value="bankaccounts">Bank Accounts</option>
													<option  <?php if(isset($undersubgroup)) { if($undersubgroup == "investments" ) echo 'selected'; }  ?> value="investments">Investments</option>
													</select> 
													<span class="text-danger" id="undersubgroupcheck">Select a Account SubGroup...</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Group</label>
													<input type="text"  tabindex="14"  name="group" id="group" value="<?php if(isset($group)) echo $group ; ?>"  class="form-control" placeholder="Enter Group">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Ledger Name</label>
													<input type="text"  tabindex="15"  name="ledgername" id="ledgername" value="<?php if(isset($ledgername)) echo $ledgername ; ?>"  class="form-control" placeholder="Enter Ledger Name">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<!-- Checkbox example -->
											<div class="form-group">
											<label class="label">&nbsp;</label>
											<div class="custom-control custom-checkbox">
									<input type="checkbox" value="Yes"  <?php if($costcenter==0){echo'costcenter';}?> tabindex="16"  class="custom-control-input" id="costcenter" name="costcenter">
										<label class="custom-control-label" for="costcenter">Cost Center</label>
									</div>
                                  </div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12"></div>
									<br /><br /><br /><br />

									<div class="col-md-3">
										<button type="button"  tabindex="17"  id="downloadbank" name="downloadbank" class="btn btn-primary"><span class="icon-download"></span>Download</button>
										<button type="button"  tabindex="18"  id="uploadbank" name="uploadbank" onclick="Uploadbank()" class="btn btn-primary"><span class="icon-upload"></span>Upload</button>
										
									</div>
									<div class="col-md-7">
									</div>
									<div class="col-md-2">
										<button type="submit"  tabindex="19"  id="submitbankbtn" name="submitbankbtn" value="Submit" class="btn btn-primary">Submit</button>
										<button type="reset"  tabindex="20"  id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary">Cancel</button><br /><br />
									</div>

								</div>

								<div class="row">
									<div class="col-md-4">
									</div>

									<div class="col-md-4">
									</div>

									
								</div>

							</div>						

						</div>
					</div>
					<!-- Row end -->
		
					</form>
					<div id="BankBulkUploadModal" class="modal">
  <div class="modal-content">
    <span class="bulkclose" style="width:4%;">&times;</span>
  <iframe src="bankbulkupload.php" height="200px"></iframe>
  </div></div>
				</div>