<?php 
   $id=0;
   $idupd=0;

 if(isset($_POST['submitcompanybtn']) && $_POST['submitcompanybtn'] != '')
 {
	
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $companyupdatedetails = $userObj->updatecompany($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editcompany&msc=2';</script>
    <?php	}
    else{   
	
		$companyadddetails = $userObj->addcompany($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editcompany&msc=1';</script>
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
	$companydeletedetails = $userObj->deletecompany($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editcompany&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$companydetails = $userObj->getcompany($mysqli,$idupd); 
	
	if (sizeof($companydetails)>0) {
        for($icompany=0;$icompany<sizeof($companydetails);$icompany++)  {			
			$companyid                	 = $companydetails['companyid'];
			$companyname          		 = $companydetails['companyname'];
			$cinno          	    	 = $companydetails['cinno'];
			$address      			     = $companydetails['address'];
			$address1      			     = $companydetails['address1'];
			$address2       			 = $companydetails['address2'];
			$pincode                	 = $companydetails['pincode'];
			$district       		     = $companydetails['district'];
			$state       		    	 = $companydetails['state'];
			$country     			     = $companydetails['country'];
			$phonenumber     		     = $companydetails['phonenumber'];
			$faxnumber        		     = $companydetails['faxnumber'];
			$email     			         = $companydetails['email'];
			$website	    		     = $companydetails['website'];			
			$panno	    		         = $companydetails['panno'];
			$itwardcircleno	    		 = $companydetails['itwardcircleno'];
			$tanno	    		         = $companydetails['tanno'];
			$isgst                         = $companydetails['isgst'];
			$gst                         = $companydetails['gst'];

            $pfno                        = $companydetails['pfno']; 
			$esicno                      = $companydetails['esicno']; 
			$loginshortername            = $companydetails['loginshortername']; 
			$booksstartfrom              = $companydetails['booksstartfrom']; 
            $status                      = $companydetails['status'];  

		}
	}
}

  ?>
  

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Company Creation</li>
					</ol>

					<a href="editcompany">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Company</button>
					</a>
				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<div class="main-container">
                <form id="company" name="company" action=""  enctype="multipart/form-data"  method="post">			
				<input type="hidden" class="form-control" value="<?php if(isset($companyid )) echo $companyid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">
                                     
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">General Info</div>
								<div class="card-body">
									<!-- Row start -->
									
									<div class="row ">
                            <!--Fields -->
                           <div class="col-md-8 ">
									<div class="row gutters">
								
									<div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
  
											<div class="form-group">
												<label class="label">Company Name</label><span class="text-danger">*</span>
													<input type="text" tabindex="1"  value="<?php if(isset($companyname)) echo $companyname; ?>"  name="companyname" id="companyname" class="form-control" placeholder="Enter Company Name">
													<span class="text-danger" id="companynamecheck">Enter Company Name</span>
											</div>
										</div>
  
  
 
										<div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
 <div class="form-group">
												<label class="label">CIN No</label><!-- <span class="text-danger">*</span> -->
													<input type="text" tabindex="2"  value="<?php if(isset($cinno)) echo $cinno; ?>"  name="cinno" id="cinno" class="form-control" placeholder="Enter CIN No">
													<!-- <span class="text-danger" id="cinnocheck">Enter CIN No</span> -->
											</div>
								</div>	<div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Phone Number</label><span class="text-danger">*</span>
													<input type="number" tabindex="3" value="<?php if(isset($phonenumber)) echo $phonenumber; ?>"  name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter Phone Number">
													<span class="text-danger" id="phonenumbercheck">Enter Phone Number</span>
												</div>
											</div>
											<div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Fax Number</label><!-- <span class="text-danger">*</span> -->
													<input type="text" tabindex="4" name="faxnumber" id="faxnumber" value="<?php if(isset($faxnumber)) echo $faxnumber; ?>"  class="form-control" placeholder="Enter Fax Number">
													<!-- <span class="text-danger" id="faxnumbercheck">Enter Fax Number</span> -->
												</div>
											</div><div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Mail Id</label><!-- <span class="text-danger">*</span> -->
													<input type="text" tabindex="5" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>"  class="form-control" placeholder="Enter Mail Id">
													<span class="text-danger" id="emailcheck">Enter Valid Mail Id</span>
												</div>
											</div>
											<div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Website</label><span class="text-danger">*</span>
													<input type="text" tabindex="6" name="website" id="website" value="<?php if(isset($website)) echo $website; ?>"  class="form-control" placeholder="Enter Website">
													<span class="text-danger" id="websitecheck">Enter Website</span>
												</div>	
											</div></div>
								<div class="row gutters"><div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
								<div class="form-group">
												<label class="label">Address</label><span class="text-danger">*</span>
													<input type="text" tabindex="7"  value="<?php if(isset($address)) echo $address; ?>"  name="address" id="address" class="form-control" placeholder="Enter Address">
													<span class="text-danger" id="addresscheck">Enter Address</span>
											</div>	</div>
									<div class="col-md-6">
									<div class="form-group">
												<label class="label">Address1</label>
													<input type="text" tabindex="8"  value="<?php if(isset($address1)) echo $address1; ?>"  name="Address1" id="Address1" class="form-control" placeholder="Enter Address1">
												</div>
											</div>
											</div>
											</div>
											
											
										
										<div class="col-md-4 ">
										<div class="col-xl-12 col-lglg-4 col-md-6 col-sm-6 col-12 mx-auto">
										
										<?php if($idupd==0){?>
										<div class="form-group">
                                        <label>Company Image</label><br>
										<img src="img/company.png" width="100%" style="height:100%; margin: 0px auto;" id="viewimage" >
                                        <input type="file" tabindex="9"  class="form-control w-50" accept="image/*" onchange="loadFile(event)" value="<?php if(isset($companyimage )) echo $companyimage ; ?>" id="companyimage" name="companyimage" >
								         </div>
										<?php }?>
										 </div>										
							<script>
								var loadFile = function(event) {
									var image = document.getElementById("viewimage");
									image.src = URL.createObjectURL(event.target.files[0]);
								};
							</script></div>
									
															
									</div>
									<!-- Row end -->
											<div class="row gutters">
										<div class="col-md-6">
										<div class="form-group">
												<label class="label">Address2</label>
													<input type="text" tabindex="10" value="<?php if(isset($address2)) echo $address2; ?>"   name="Address2" id="Address2" class="form-control" placeholder="Enter Address2">
												</div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
												<label class="label">Pin Code</label><!-- <span class="text-danger">*</span> -->
													<input type="number" tabindex="11" value="<?php if(isset($pincode)) echo $pincode; ?>"  name="pincode" id="pincode"  class="form-control" placeholder="Enter Pincode">
													<!-- <span class="text-danger" id="pincodecheck">Enter Pincode</span> -->
											</div>
										</div>
										</div>
										<script>
function selectdist(){
    var distval = document.getElementById("district").value;
var tamilnadu = ["Ariyalur", "Chengalpattu","Chennai", "Coimbatore",
        "Cuddalore", "Dharmapuri","Dindigul", "Erode",
        "Kallakurichi", "Kanchipuram","Kanyakumari",
        "Karur", "Krishnagiri","Madurai", "Mayiladuthurai",
        "Nagapattinam", "Nilgiris","Namakkal", "Perambalur",
        "Pudukkottai", "Ramanathapuram","Ranipet", "Salem",
        "Sivaganga", "Tenkasi","Tirupur", "Tiruchirappalli",
        "Theni", "Tirunelveli","Thanjavur", "Thoothukudi",
        "Tirupattur", "Tiruvallur","Tiruvarur", "Tiruvannamalai",
        "Vellore", "Viluppuram","Virudhunagar"];  
     tamilnadu.forEach((element) => {
            for(var i = 0; i< tamilnadu.length;i++) {
                // console.log(tamilnadu[i]);
                if(tamilnadu[i] == distval ) {
                    document.getElementById("state").value="Tamil Nadu";
                    document.getElementById("country").value="India";
                }
                
            }
               
            
        });
 }
</script>
										<div class="row gutters">
										<div class="col-md-4">
										<div class="form-group">
                                                <label for="disabledInput">District</label>                                               
                                                <select class="form-control chosen-select comp-field "  tabindex="12" id="district"  onchange="selectdist()" name="district">
                                                    <option   value="">Select district</option>
                                                    <option <?php if(isset($district)) { if($district == "Ariyalur" ) echo 'selected'; }  ?>  value="Ariyalur">Ariyalur</option>
                                                    <option <?php if(isset($district)) { if($district == "Chengalpattu" ) echo 'selected'; }  ?>  value="Chengalpattu">Chengalpattu </option>
                                                    <option <?php if(isset($district)) { if($district == "Chennai" ) echo 'selected'; }  ?>  value="Chennai">Chennai </option>
                                                    <option <?php if(isset($district)) { if($district == "Coimbatore" ) echo 'selected'; }  ?>  value="Coimbatore">Coimbatore </option>
                                                    <option <?php if(isset($district)) { if($district == "Cuddalore" ) echo 'selected'; }  ?>  value="Cuddalore">Cuddalore</option>
                                                    <option <?php if(isset($district)) { if($district == "Dharmapuri" ) echo 'selected'; }  ?>  value="Dharmapuri">Dharmapuri</option>
                                                    <option <?php if(isset($district)) { if($district == "Dindigul" ) echo 'selected'; }  ?>  value="Dindigul">Dindigul</option>
                                                    <option <?php if(isset($district)) { if($district == "Erode" ) echo 'selected'; }  ?>  value="Erode"> Erode</option>
                                                    <option <?php if(isset($district)) { if($district == "Kallakurichi" ) echo 'selected'; }  ?>  value="Kallakurichi">Kallakurichi</option>
                                                    <option <?php if(isset($district)) { if($district == "Kanchipuram" ) echo 'selected'; }  ?>  value="Kanchipuram">Kanchipuram</option>
                                                    <option <?php if(isset($district)) { if($district == "Kanyakumari" ) echo 'selected'; }  ?>  value="Kanyakumari">Kanyakumari</option>
                                                    <option <?php if(isset($district)) { if($district == "Karur" ) echo 'selected'; }  ?>  value="Karur">Karur</option>
                                                    <option <?php if(isset($district)) { if($district == "Krishnagiri" ) echo 'selected'; }  ?>  value="Krishnagiri">Krishnagiri</option>
                                                    <option <?php if(isset($district)) { if($district == "Madurai" ) echo 'selected'; }  ?>  value="Madurai">Madurai</option>
                                                    <option <?php if(isset($district)) { if($district == "Mayiladuthurai" ) echo 'selected'; }  ?>  value="Mayiladuthurai">Mayiladuthurai</option>
                                                    <option <?php if(isset($district)) { if($district == "Nagapattinam" ) echo 'selected'; }  ?>  value="Nagapattinam">Nagapattinam</option>
                                                    <option <?php if(isset($district)) { if($district == "Nilgiris" )  echo 'selected'; }  ?>  value="Nilgiris">Nilgiris</option>
                                                    <option <?php if(isset($district)) { if($district == "Namakkal" ) echo 'selected'; }  ?>  value="Namakkal">Namakkal</option>
                                                    <option <?php if(isset($district)) { if($district == "Puducherry" ) echo 'selected'; }  ?>  value="Puducherry">Puducherry</option>
                                                    <option <?php if(isset($district)) { if($district == "Perambalur" ) echo 'selected'; }  ?>  value="Perambalur">Perambalur</option>
                                                    <option <?php if(isset($district)) { if($district == "Pudukkottai" ) echo 'selected'; }  ?>  value="Pudukkottai">Pudukkottai</option>
                                                    <option <?php if(isset($district)) { if($district == "Ramanathapuram" ) echo 'selected'; }  ?>  value="Ramanathapuram">Ramanathapuram</option>
                                                    <option <?php if(isset($district)) { if($district == "Ranipet" ) echo 'selected'; }  ?>  value="Ranipet">Ranipet</option>
                                                    <option <?php if(isset($district)) { if($district == "Salem" ) echo 'selected'; }  ?>  value="Salem">Salem</option>
                                                    <option <?php if(isset($district)) { if($district == "Sivagangai" ) echo 'selected'; }  ?>  value="Sivagangai">Sivagangai</option>
                                                    <option <?php if(isset($district)) { if($district == "Tenkasi" ) echo 'selected'; }  ?>  value="Tenkasi">Tenkasi</option>
                                                    <option <?php if(isset($district)) { if($district == "Tirupur" ) echo 'selected'; }  ?>  value="Tirupur">Tirupur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruchirappalli" ) echo 'selected'; }  ?>  value="Tiruchirappalli">Tiruchirappalli</option>
                                                    <option <?php if(isset($district)) { if($district == "Theni" ) echo 'selected'; }  ?>  value="Theni">Theni</option>
                                                    <option <?php if(isset($district)) { if($district == "Tirunelveli" ) echo 'selected'; }  ?>  value="Tirunelveli">Tirunelveli</option>
                                                    <option <?php if(isset($district)) { if($district == "Thanjavur" ) echo 'selected'; }  ?>  value="Thanjavur">Thanjavur</option>
                                                    <option <?php if(isset($district)) { if($district == "Thoothukudi" ) echo 'selected'; }  ?>  value="Thoothukudi">Thoothukudi</option>
                                                    <option <?php if(isset($district)) { if($district == "Tirupattur" ) echo 'selected'; }  ?>  value="Tirupattur">Tirupattur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruvallur" ) echo 'selected'; }  ?>  value="Tiruvallur">Tiruvallur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruvarur" ) echo 'selected'; }  ?>  value="Tiruvarur">Tiruvarur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruvannamalai" ) echo 'selected'; }  ?>  value="Tiruvannamalai">Tiruvannamalai</option>
                                                    <option <?php if(isset($district)) { if($district == "Vellore" ) echo 'selected'; }  ?>  value="Vellore">Vellore</option>
                                                    <option <?php if(isset($district)) { if($district == "Viluppuram" ) echo 'selected'; }  ?>  value="Viluppuram">Viluppuram</option>
                                                    <option <?php if(isset($district)) { if($district == "Virudhunagar" ) echo 'selected'; }  ?>  value="Virudhunagar">Virudhunagar</option>
                                                </select>
                                              
                                            </div>
											</div>
											<div class="col-md-4">
											<div class="form-group">
                                                <label for="disabledInput">State</label>
                                                 <input type="text" readonly tabindex="13" id="state" name="state" class="form-control" value="<?php if(isset($state )) echo $state ; ?>" > 
                                                </div>
											</div>
											<div class="col-md-4">
											<div class="form-group">
                                                <label for="disabledInput">Country</label>
                                                <input type="text" readonly tabindex="14" id="country" name="country" class="form-control" value="<?php if(isset($country )) echo $country ; ?>"  >                                               
                                                                                 
												</div>
												</div>
								</div>
							</div>
							</div>
							<div class="card">
								<div class="card-header">Tax Info </div>
								<div class="row card-body">
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="form-group">
												<label class="label">PAN No</label>
													<input type="text" tabindex="15" name="panno" id="panno" value="<?php if(isset($panno)) echo $panno; ?>"  class="form-control" placeholder="Enter PAN No">
													<span class="text-danger" id="pancheck">Enter Pan Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="form-group">
												<label class="label">IT Ward Circle No</label>
													<input type="text" tabindex="16" name="itwardcircleno" id="itwardcircleno" value="<?php if(isset($itwardcircleno)) echo $itwardcircleno; ?>"  class="form-control" placeholder="Enter IT Ward Circle No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">TAN No</label>
													<input type="text" tabindex="17" name="tanno" id="tanno" value="<?php if(isset($tanno)) echo $tanno; ?>"  class="form-control" placeholder="Enter TAN No">
													<span id="tannocheck" class="text-danger">Enter Valid TAN Number</span>
												</div>
											</div>

											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label class="label">Is GST Applicable ?</label>
											<select name="isgst" tabindex="18" id="isgst" class="form-control">
												<option value=''>--Select Option--</option>
												<option <?php if(isset($isgst)) { if($isgst == "Yes" ) echo 'selected'; }  ?> value="Yes">Yes</option>
												<option <?php if(isset($isgst)) { if($isgst == "No" ) echo 'selected'; }  ?> value="No">No</option>
											</select>
										</div>
									</div>

											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST</label>
													<input type="text" readonly tabindex="19"  name="gst" id="gst" value="<?php if(isset($gst)) echo $gst; ?>"  class="form-control" placeholder="Enter GST">
													<span id="gstcheck" class="text-danger">Enter Valid GST Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">PF No</label>
													<input type="text"  tabindex="20"  name="pfno" id="pfno" value="<?php if(isset($pfno)) echo $pfno; ?>"  class="form-control" placeholder="Enter PF No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">ESIC No</label>
													<input type="text"  tabindex="21"  name="esicno" id="esicno" value="<?php if(isset($esicno)) echo $esicno; ?>"  class="form-control" placeholder="Enter ESIC No">
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
													<input type="text"  tabindex="22"  name="loginshortername" id="loginshortername" value="<?php if(isset($loginshortername)) echo $loginshortername; ?>"  class="form-control" placeholder="Enter Login - Shorter Name">
													<span class="text-danger" id="loginshorternamecheck">Enter Login - Shorter Name</span>
												</div>
											</div>											
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Books Start From</label><span class="text-danger">*</span>
												<div class="custom-date-input">												
													<input type="text"  tabindex="23"  name="booksstartfrom" id="booksstartfrom" value="<?php if(isset($booksstartfrom)) echo $booksstartfrom; ?>"  class="form-control datepicker" placeholder="Enter Books Start From">
													<span class="text-danger" id="booksstartfromcheck">Enter Books Start From</span>
												</div>
													
												</div>
												</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">	</div>
											<div style='display: none' class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<!-- Checkbox example -->
									<div class="custom-control custom-checkbox">
									<input type="checkbox" checked value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="24"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div>
									</div></div>
								<div class="row">
								

									<div class="col-md-6">
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-2">
										<button type="submit"  tabindex="25"  id="submitcompanybtn" name="submitcompanybtn" value="Submit" class="btn btn-primary">Submit</button>
										<button type="reset"  tabindex="26"  id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary">Cancel</button><br /><br />
									</div>
								</div>

							</div>

						</div>
					</div>
					<!-- Row end -->
					</form>

				</div>