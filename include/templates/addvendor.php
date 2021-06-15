<?php
$id=0;

$stocklist=$userObj->getstock($mysqli);
$subgrouplist=$userObj->getSubgroup($mysqli);

if(isset($_POST['submitvendorbtn']) && $_POST['submitvendorbtn'] != '')
{  
if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
	$id = $_POST['id']; 	
    $vendorupdatedetails = $userObj->updatevendor($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editvendor&msc=2';</script>
    <?php }
    else{   
		$vendoradddetails = $userObj->addvendor($mysqli);   
        ?>
     <script>location.href='<?php echo $HOSTPATH;  ?>editvendor&msc=1';</script>  
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
	$vendordeletedetails = $userObj->deletevendor($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editvendor&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}

if($idupd>0)
{
	$vendordetails = $userObj->getvendor($mysqli,$idupd); 
	
	if (sizeof($vendordetails)>0) {
        for($ivendor=0;$ivendor<sizeof($vendordetails);$ivendor++) {			
			$vendorid         = $vendordetails['vendorid'];
			$vendorcode       = $vendordetails['vendorcode'];
			$vendorname       = $vendordetails['vendorname'];
			$address1         = $vendordetails['address1'];
			$address2         = $vendordetails['address2'];
			$district         = $vendordetails['district'];
			$state            = $vendordetails['state'];
			$country          = $vendordetails['country'];
			$pincode          = $vendordetails['pincode'];
			$contactperson    = $vendordetails['contactperson'];
			$contact          = $vendordetails['contact'];
			$mailid           = $vendordetails['mailid'];
			

			$stocktype        = $vendordetails['stocktype'];
			$deliverytime     = $vendordetails['deliverytime'];
			$reorderlevel     = $vendordetails['reorderlevel'];
			$minimumstock     = $vendordetails['minimumstock'];
			$maximumstock     = $vendordetails['maximumstock'];

        $isgst= $vendordetails['isgst'];       
		$gststate = $vendordetails['gststate'];     
		$statetype= $vendordetails['statetype'];    
		$gstnumber= $vendordetails['gstnumber'];     

		$bankname= $vendordetails['bankname'];     
		$branchname= $vendordetails['branchname'];   
		$accountnumber= $vendordetails['accountnumber'];
		$ifsccode= $vendordetails['ifsccode'];     

		$subgroup= $vendordetails['subgroup'];     
		$groupname= $vendordetails['groupname'];     
		$ledgername= $vendordetails['ledgername'];    
		$creditlimit= $vendordetails['creditlimit'];   
		$costcentre= $vendordetails['costcentre'];    
		$inventory= $vendordetails['inventory'];    

		}
	}
}
?>


<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Local Vendor Creation</li>
					</ol>

                <a href="editvendor">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Vendor</button>
					</a>
				</div>
				<!-- Page header end -->

<div class="main-container">
					<!-- Row start -->
					<form action="" method="post" name="vendorcreation" id="vendorcreation" >
					<div class="row gutters">
            <!-- General Info -->
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
								<div class="card-header">General Info</div>
								<div class="card-body row">
									<input type="hidden" name="id" id="id" class="form-control" value="<?php if(isset($vendorid)) echo $vendorid ; ?>">
								<?php if(isset($vendorid)>0) {?>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Vendor Code<span class="text-danger">*</span></label>
													<input readonly type="text" tabindex="1" name="vendorcodeupdate" id="vendorcodeupdate" class="form-control" value="<?php if(isset($vendorcode )) echo $vendorcode ; ?>">
											</div>
										</div>
									<?php } else {?>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Vendor Code</label>
													<input readonly type="text" tabindex="1" name="vendorcode" id="vendorcode" class="form-control" value="">
											</div>
										</div>
										<?php } ?>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Vendor Name<span class="text-danger">*</span></label>
													<input type="text" tabindex="2" name="vendorname" id="vendorname" class="form-control" placeholder="Enter Vendor Name" value="<?php if(isset($vendorname )) echo $vendorname ; ?>">
													<span class="text-danger" id="vendornamecheck">Enter Vendor Name</span>
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address 1</label>
													<input type="text" tabindex="3" name="address1" id="address1" class="form-control" placeholder="Enter Address 1" value="<?php if(isset($address1 )) echo $address1 ; ?>">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Address 2</label>
													<input type="text" tabindex="4" name="address2" id="address2" class="form-control" placeholder="Enter Address 2" value="<?php if(isset($address2 )) echo $address2 ; ?>">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">District</label>
												<select class="form-control chosen-select comp-field " tabindex="5" id="district"  name="district">
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
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Pin Code</label>
													<input  type="number" tabindex="6" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode" value="<?php if(isset($pincode )) echo $pincode ; ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
												<label class="label">State</label>
												<input  type="text" tabindex="7" name="state" id="state" class="form-control" placeholder="Enter Pincode" value="<?php if(isset($state )) echo $state ; ?>">
										</div>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Country</label>
													<input type="text" tabindex="8" name="country" id="country" class="form-control" placeholder="Enter Country" value="<?php if(isset($country )) echo $country ; ?>">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Contact Person</label>
													<input type="text" tabindex="9" name="contactperson" id="contactperson" class="form-control" placeholder="Enter Enter Contact Person" value="<?php if(isset($contactperson )) echo $contactperson ; ?>">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Contact No</label>
													<input  type="number" tabindex="10" name="contact" id="contact" class="form-control" placeholder="Enter Contact No" value="<?php if(isset($contact )) echo $contact ; ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Mail Id</label>
													<input type="text" tabindex="11" name="mailid" id="mailid" class="form-control" placeholder="Enter Mail Id" value="<?php if(isset($mailid )) echo $mailid ; ?>">
													<span class="text-danger" id="mailidcheck">Enter Valid Mail Id</span>
											</div>
										</div>
									</div>
								</div>
							</div>
<!-- Stock info -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
								<div class="card-header">Stock Info</div>
								<div class="card-body row">
									<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Select Stock Type<span class="text-danger">*</span></label>
												 <select tabindex="12" name="stocktype" id="stocktype" class="form-control comp-field  chosen-select">
														<option value="">Select Stock Type</option>
													<?php
													if(isset($stocklist)){
													for($i=0;$i<=sizeof($stocklist)-1;$i++){
														?>
													<option <?php if(isset($stocktype)) { if($stocktype == $stocklist[$i] ) echo 'selected'; } ?> value="<?php if(isset($stocklist[$i])){ echo $stocklist[$i];} ?>"><?php if(isset($stocklist[$i])){ echo $stocklist[$i];} ?></option>
												<?php }} ?>
													</select> 
													<span class="text-danger" id="stocktypecheck">Select  Stock Type</span>
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-6 col-sm-6 col-12">
											<div class="form-group">
											     <label class="label" style="visibility: hidden;"></label>
												<button type="button" tabindex="12" class="form-control inbutton" id="addstock" name="addstock" onclick="AddStock()"><span class="icon-add"></span></button>
												</div>
											</div>

											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Delivery Time(In Days)</label>
													<input  type="number" tabindex="13" name="deliverytime" id="deliverytime" class="form-control" placeholder="Enter Delivery Time(In Days)" value="<?php if(isset($deliverytime )) echo $deliverytime; ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Reorder Level</label>
													<input  type="number" tabindex="14" name="reorderlevel" id="reorderlevel" class="form-control" placeholder="Enter Reorder Level" value="<?php if(isset($reorderlevel )) echo $reorderlevel; ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Minimum Stock</label>
													<input  type="number" tabindex="15" name="minimumstock" id="minimumstock" class="form-control" placeholder="Enter Minimum Stock" value="<?php if(isset($minimumstock )) echo $minimumstock; ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;">
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Maximum Stock</label>
													<input  type="number" tabindex="16" name="maximumstock" id="maximumstock" class="form-control" placeholder="Enter Maximum Stock" value="<?php if(isset($maximumstock )) echo $maximumstock; ?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;">
											</div>
										</div>
								</div>
								</div>
							</div>


							<!-- GST Info -->

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card">
								<div class="card-header">GST Info</div>
								<div class="card-body">
									<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="label">Is GST Applicable ?</label>
											<select name="isgst" tabindex="17" id="isgst" class="form-control">
												<option value=''>--Select Option--</option>
												<option <?php if(isset($isgst)) { if($isgst == "Yes" ) echo 'selected'; }  ?> value="Yes">Yes</option>
												<option <?php if(isset($isgst)) { if($isgst == "No" ) echo 'selected'; }  ?> value="No">No</option>
											</select>
										</div>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12"></div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12"></div>
								</div>
								<?php if($idupd<=0){ ?>
									<div id="gstfield" style="display: none">
									<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
												<label class="label">State<span class="text-danger">*</span></label>
												<select name="gststate" tabindex="18" id="gststate" class="form-control">
													<option value="">--Select State--</option>
													<option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam ">Assam </option>
                                                    <option value="Bihar ">Bihar </option>
                                                    <option value="Chandigarh ">Chandigarh </option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
												</select>
												<span id="gststatecheck" class="text-danger">Select State</span>
										</div>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="label">Type of State</label>
											<table>
												<tr>
													<td><input type="radio" tabindex="19" name="statetype" id="upwithinstate" value="withinstate"></td>
													<td><label for="upwithinstate">Within State</label></td>
													<td><input type="radio" tabindex="20" name="statetype" id="upinterstate" value="interstate"></td>
													<td><label for="upinterstate">Inter State</label></td>
												</tr>
											</table>
										</div>
									</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST No<span class="text-danger">*</span></label>
													<input  type="text" tabindex="21" name="gstnumber" id="gstnumber" class="form-control" placeholder="Enter GST No" value="<?php if(isset($gstnumber )) echo $gstnumber ; ?>"  onKeyPress="if(this.value.length==16) return false;">
													<span class="text-danger" id="gstnumbercheck">Enter Valid GST Number</span>
											</div>
										</div>
									</div>
									</div>
								<?php } ?>

									<?php if(isset($isgst)){ 
										if($isgst == 'Yes') { ?>

										<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
												<label class="label">State<span class="text-danger">*</span></label>
												<select name="upgststate" id="upgststate" class="form-control">
													<option value="">--Select State--</option>
													<option <?php if(isset($gststate)) { if($gststate == "Andhra Pradesh" ) echo 'selected'; }  ?> value="Andhra Pradesh">Andhra Pradesh</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Arunachal Pradesh" ) echo 'selected'; }  ?> value="Arunachal Pradesh">Arunachal Pradesh</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Assam" ) echo 'selected'; }  ?> value="Assam">Assam </option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Bihar" ) echo 'selected'; }  ?> value="Bihar">Bihar </option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Chandigarh" ) echo 'selected'; }  ?> value="Chandigarh">Chandigarh </option>
                                                   
                                                    <option <?php if(isset($gststate)) { if($gststate == "Gujarat" ) echo 'selected'; }  ?> value="Gujarat">Gujarat</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Haryana" ) echo 'selected'; }  ?> value="Haryana">Haryana</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Himachal Pradesh" ) echo 'selected'; }  ?> value="Himachal Pradesh">Himachal Pradesh</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Jharkhand" ) echo 'selected'; }  ?> value="Jharkhand">Jharkhand</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Karnataka" ) echo 'selected'; }  ?> value="Karnataka">Karnataka</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Kerala" ) echo 'selected'; }  ?> value="Kerala">Kerala</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Madhya Pradesh" ) echo 'selected'; }  ?> value="Madhya Pradesh">Madhya Pradesh</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Maharashtra" ) echo 'selected'; }  ?> value="Maharashtra">Maharashtra</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Manipur" ) echo 'selected'; }  ?> value="Manipur">Manipur</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Meghalaya" ) echo 'selected'; }  ?> value="Meghalaya">Meghalaya</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Mizoram" ) echo 'selected'; }  ?> value="Mizoram">Mizoram</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Nagaland" ) echo 'selected'; }  ?> value="Nagaland">Nagaland</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Odisha" ) echo 'selected'; }  ?> value="Odisha">Odisha</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Puducherry" ) echo 'selected'; }  ?> value="Puducherry">Puducherry</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Punjab" ) echo 'selected'; }  ?> value="Punjab">Punjab</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Rajasthan" ) echo 'selected'; }  ?> value="Rajasthan">Rajasthan</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Sikkim" ) echo 'selected'; }  ?> value="Sikkim">Sikkim</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Tamil Nadu" ) echo 'selected'; }  ?> value="Tamil Nadu">Tamil Nadu</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Telangana" ) echo 'selected'; }  ?> value="Telangana">Telangana</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Tripura" ) echo 'selected'; }  ?> value="Tripura">Tripura</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Uttar Pradesh" ) echo 'selected'; }  ?> value="Uttar Pradesh">Uttar Pradesh</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "Uttarakhand" ) echo 'selected'; }  ?> value="Uttarakhand">Uttarakhand</option>

                                                    <option <?php if(isset($gststate)) { if($gststate == "West Bengal" ) echo 'selected'; }  ?> value="West Bengal">West Bengal</option>
												</select>
										</div>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="label">Type of State</label>
											<table>
												<tr>
                                                    <td><input type="radio" name="upstatetype" id="withinstate" value="withinstate" <?php if(isset($statetype)) { if($statetype == "withinstate" ) echo 'checked'; }  ?>></td>
													<td><label for="withinstate">Within State</label></td>
													<td><input type="radio" name="upstatetype" id="interstate" value="interstate" <?php if(isset($statetype)) { if($statetype == "interstate" ) echo 'checked'; }  ?>></td>
													<td><label for="interstate">Inter State</label></td>
												</tr>
											</table>
										</div>
									</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST No<span class="text-danger">*</span></label>
													<input  type="text" tabindex="5" name="upgstnumber" id="upgstnumber" class="form-control" placeholder="Enter GST No" value="<?php if(isset($gstnumber )) echo $gstnumber ; ?>"  onKeyPress="if(this.value.length==16) return false;">
											</div>
										</div>
									</div>

							       <?php }} ?>

									

									</div>
								</div>
							</div>

									

<div>
<div id="AddStockModal" class="modal">
  <div class="modal-content">
    <span class="close" style="width:4%;">&times;</span>
  <iframe src="addstock.php" height="500px" scrolling="no"></iframe>
  </div>
</div>
</div>

<div>
<div id="VendorBulkUploadModal" class="modal">
  <div class="modal-content">
    <span class="bulkclose" style="width:4%;">&times;</span>
  <iframe src="vendorbulkupload.php" height="200px"></iframe>
  </div>
</div>
</div>
<!--  -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
								<div class="card-header">Bank Info</div>
								<div class="card-body row">

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Bank Name</label>
													<input  type="text" tabindex="19" name="bankname" id="bankname" class="form-control" placeholder="Enter Bank Name" value="<?php if(isset($bankname )) echo $bankname ; ?>" >
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Branch Name</label>
													<input  type="text" tabindex="20" name="branchname" id="branchname" class="form-control" placeholder="Enter Branch Name" value="<?php if(isset($branchname )) echo $branchname ; ?>" >
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Bank A/C No</label>
													<input  type="text" tabindex="21" name="accountnumber" id="accountnumber" class="form-control" placeholder="Enter Bank A/C No" value="<?php if(isset($accountnumber )) echo $accountnumber ; ?>" >
											</div>
										</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">IFSC Code</label>
													<input  type="text" tabindex="22" name="ifsccode" id="ifsccode" class="form-control" placeholder="Enter IFSC Code" value="<?php if(isset($ifsccode )) echo $ifsccode ; ?>" >
											</div>
										</div>
									</div>
								</div>
							</div>

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
								<div class="card-header">Financial Info</div>
								<div class="card-body">

									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Under SubGroup<span class="text-danger">*</span></label>
												<select name="subgroup" tabindex="23" id="subgroup" class="form-control">
													<option value=''>--Select Subgroup--</option>
													<?php
													if(isset($subgrouplist)){
													for($s=0;$s<=sizeof($subgrouplist)-1;$s++){
														?>
													<option <?php if(isset($subgroup)) { if($subgroup == $subgrouplist[$s] ) echo 'selected'; } ?> value="<?php if(isset($subgrouplist[$s])){ echo $subgrouplist[$s];} ?>"><?php if(isset($subgrouplist[$s])){ echo $subgrouplist[$s];} ?></option>
												<?php }} ?>
												</select>
												<span class="text-danger" id="subgroupcheck">Select Subgroup</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Group</label>
													<input  type="text" readonly tabindex="24" name="groupname" id="groupname" class="form-control"  value="<?php if(isset($groupname )) echo $groupname ; ?>" >
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Ledger Name</label>
													<select readonly tabindex="25" name="ledgername" id="ledgername" class="form-control">
														<?php if(isset($ledgername)){ ?>
														<option value="<?php echo $ledgername; ?>"><?php echo $ledgername; ?></option>
														<?php }?>
														<option>Select Ledger</option>
													</select>
											</div>
										</div>
									</div>

									<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Credit Limit</label>
												<input  type="text"  tabindex="26" name="creditlimit" id="creditlimit" class="form-control"  value="<?php if(isset($creditlimit )) echo $creditlimit ; ?>" placeholder='Enter Credit Limit'>
											</div>
										</div>

									<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
										<label class="label" style="visibility: hidden;">Cost Centre</label>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" value="Yes"  tabindex="27"  class="custom-control-input" id="costcentre" name="costcentre" <?php if(isset($costcentre)=='Yes'){echo 'checked';} ?>>
										    <label class="custom-control-label" for="costcentre">Cost Centre</label>
										</div>
									</div>

									<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
										<label class="label" style="visibility: hidden;">Inventory</label>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" value="Yes"  tabindex="28"  class="custom-control-input" id="inventory" name="inventory" <?php if(isset($inventory)=='Yes'){echo 'checked';} ?> >
										    <label class="custom-control-label" for="inventory">Inventory</label>
										</div>
									</div>
									</div>

									<div class="row">
										<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
										<label class="label" style="visibility: hidden;">Status</label>
										<div class="custom-control custom-checkbox" style="display: none">
											<input type="checkbox" value="Yes" tabindex="29"  class="custom-control-input" id="status" name="status">
										    <label class="custom-control-label" for="status">Status</label>
										</div>
									</div>

										<div class="col-xl-10 col-lg-10 col-md- col-sm-6 col-12">
										</div>
										<br /><br /><br /><br />
									</div>

									<div class="row">
									<div class="col-md-3">
										<button type="button"  tabindex="30"  id="downloadvendor" name="downloadvendor" class="btn btn-primary"><span class="icon-download"></span>Download</button>
										<button type="button"  tabindex="31"  id="uploadvendor" name="uploadvendor" onclick="Uploadvendor()" class="btn btn-primary"><span class="icon-upload"></span>Upload</button>
									</div>
									<div class="col-md-7">
									</div>
									<div class="col-md-2">
										<button type="submit"  tabindex="32"  id="submitvendorbtn" name="submitvendorbtn" value="Submit" class="btn btn-primary">Submit</button>
										<button type="reset"  tabindex="33"  id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary">Cancel</button><br /><br />
									</div>
								</div>

								</div>
							</div>
						</div>

					</div>
				</form>
			</div>
