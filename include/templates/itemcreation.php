<?php 
$id=0;
	
if(isset($_POST['submititembtn']) && $_POST['submititembtn'] != '')
 {    
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $itemupdatedetails = $userObj->updateitem($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>edititem&msc=2';</script>
    <?php }
    else{   
		$itemadddetails = $userObj->additem($mysqli);   
        ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>edititem&msc=1';</script> 
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
	$itemdeletedetails = $userObj->deleteitem($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>edititem&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$itemdetails = $userObj->getitem($mysqli,$idupd); 
	
	if (sizeof($itemdetails)>0) {
        for($iitem=0;$iitem<sizeof($itemdetails);$iitem++)  {			
			$itemid                	     = $itemdetails['itemid'];
			$partnumber          		 = $itemdetails['partnumber'];
			$stocktype      			 = $itemdetails['stocktype'];
			$itemname      			     = $itemdetails['itemname'];
			$unitofmeasure       	     = $itemdetails['unitofmeasure'];
			$hsncode                	 = $itemdetails['hsncode'];
			$gstrate       		    	 = $itemdetails['gstrate'];
			$barcode     			     = $itemdetails['barcode'];
			$vendor     		         = $itemdetails['vendor'];
			$type     			         = $itemdetails['type'];
			$noofgmpcs        		     = $itemdetails['noofgmpcs'];
			$reorderlevel	    		 = $itemdetails['reorderlevel'];
			$lowerlevelqty               = $itemdetails['lowerlevelqty'];
            $isincentive                 = $itemdetails['isincentive']; 
			$isreuse                     = $itemdetails['isreuse']; 

			$tablevendorselect            = $itemdetails['tablevendorselect'];
			$tableopeningstock            = $itemdetails['tableopeningstock']; 
			$tableopeningpcs              = $itemdetails['tableopeningpcs']; 
			$tablecostperunit             = $itemdetails['tablecostperunit']; 
			$tablecostprice               = $itemdetails['tablecostprice']; 
			$tablesellingpriceperpc       = $itemdetails['tablesellingpriceperpc']; 
			$tabletotalsellingprice       = $itemdetails['tabletotalsellingprice'];  

            $status                      = $itemdetails['status'];  
		}
	}
}
?>


<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Item Creation</li>
					</ol>

                <a href="edititem">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Item</button>
					</a>
				</div>
				<!-- Page header end -->

			

				<!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->
					<form action="" method="post" name="itemcreation" id="itemcreation">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">Item Info</div>
								<div class="card-body">
									<!-- Row start -->
								<input type="hidden" name="id" id="id" class="form-control" value="<?php if(isset($itemid )) echo $itemid ; ?>">
									<div class="row gutters">
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Part No</label>
													<input type="number" tabindex="1" name="partnumber" id="partnumber" class="form-control" placeholder="Enter part No" value="<?php if(isset($partnumber )) echo $partnumber ; ?>">
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Item Name</label><span class="text-danger">*</span>
													<input tabindex="3" type="text" name="itemname" id="itemname" class="form-control" placeholder="Enter Item Name" value="<?php if(isset($itemname )) echo $itemname ; ?>">
													<span class="text-danger" id="itemnamecheck">Enter Item Name</span>
												</div>
											</div>

										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Stock Type</label><span class="text-danger">*</span>
													<select tabindex="4" name="stocktype" id="stocktype" class="form-control comp-field  chosen-select">
														<option value="">Select Stock Type</option>
														<?php
														$stockselect="SELECT stock FROM stocks WHERE 1 and status=0";
														$stockresult=$mysqli->query($stockselect);
														$stocklist=array();
														if($stockresult->num_rows>0){
														while($stocks=$stockresult->fetch_assoc()){
														 $stocklist[]=$stocks["stock"];
													}
													}
													for($i=0;$i<=sizeof($stocklist)-1;$i++){
														?>
													<option <?php if(isset($stocktype)) { if($stocktype == $stocklist[$i] ) echo 'selected'; } ?> value="<?php if(isset($stocklist[$i])){ echo $stocklist[$i];} ?>"><?php if(isset($stocklist[$i])){ echo $stocklist[$i];} ?></option>
												<?php } ?>
													</select> 
													<span class="text-danger" id="stocktypecheck">Select Stock Type</span>
											</div>
										</div>


										


										<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Unit Of Measure</label>

												 <select tabindex="4" name="unitofmeasure" id="unitofmeasure" class="form-control comp-field chosen-select">
														<option value="">Select Unit</option>
														<?php
													
														$unitselect="SELECT unit FROM units WHERE 1 and status=0";
														$unitresult=$mysqli->query($unitselect);
														$unitlist=array();
														if($unitresult->num_rows>0){
														while($units=$unitresult->fetch_assoc()){
														 $unitlist[]=$units["unit"];
													}
													}
													for($i=0;$i<=sizeof($unitlist)-1;$i++){
														?>
													<option <?php if(isset($unitofmeasure)) { if($unitofmeasure == $unitlist[$i] ) echo 'selected'; } ?> value="<?php if(isset($unitlist[$i])){echo $unitlist[$i];} ?>">
															<?php if(isset($unitlist[$i])){echo $unitlist[$i];}?>
														</option>
														<?php } ?>
													</select> 
												</div>
											</div>
											<div class="col-xl-1 col-lg-1 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label" style="visibility: hidden;">Add Unit</label>
												<button type="button" class="form-control inbutton" id="UnitofMeasuretoAdd" name="UnitofMeasuretoAdd" onclick="UnitofMeasureAdd_Window()" tabindex="5"><span class="icon-add"></span></button>
												</div>
											</div>

										<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">HSN Code</label><span class="text-danger">*</span>
													<input type="number" name="hsncode" id="hsncode" class="form-control" placeholder="Enter HSN Code" tabindex="6" value="<?php if(isset($hsncode )) echo $hsncode ; ?>">
													<span class="text-danger" id="hsncodecheck">Enter HSN Code</span>
											</div>
										</div>
										<div class="col-xl-1 col-lg-1 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label" style="visibility: hidden;">Search</label>
												<button tabindex="7" onClick="window.location='https://gstindiaguide.com/hsn-codes' " type="button" class="form-control inbutton" id="seach" name="search"><span class="icon-search"></span></button>
												</div>
											</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST Rate</label><span class="text-danger">*</span>
													<input tabindex="8" type="number" id="gstrate" name="gstrate" class="form-control" placeholder="Enter GST Rate" value="<?php if(isset($gstrate )) echo $gstrate ; ?>">
													<span class="text-danger" id="gstratecheck">Enter GST Rate</span>
											</div>
										</div>


										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Bar_Code</label>
													<input tabindex="9" type="text" name="barcode" id="barcode" class="form-control" placeholder="Enter Bar_Code" value="<?php if(isset($barcode )) echo $barcode ; ?>">
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Vendor</label>
													<select tabindex="10" name="vendor" id="vendor" class="form-control" class="form-control comp-field chosen-select">
														<option value="">Select Vendor</option>
														<?php
														$vendorselect="SELECT vendorcode, vendorname FROM vendor WHERE 1 and status=0";
														$vendorresult=$mysqli->query($vendorselect);
														if($vendorresult->num_rows>0){
														while($ven=$vendorresult->fetch_assoc()){
														?>
													    <option
													    <?php if(isset($vendor)) { if($vendor == $ven["vendorcode"] ) echo 'selected'; } ?>
													    value="<?php if(isset($ven["vendorcode"])){ echo $ven["vendorcode"];}?>"><?php if(isset($ven["vendorname"])){ echo $ven["vendorname"];}?>-<?php if(isset($ven["vendorcode"])){ echo $ven["vendorcode"];}?>
														</option>
														<?php }} ?>
													</select>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Type</label>
													<input tabindex="11" type="text" name="type" id="type" class="form-control " placeholder="Enter type" value="<?php if(isset($type )) echo $type ; ?>">
											</div>
										</div>


										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">No of gm/pcs</label><span class="text-danger">*</span>
													<input tabindex="12" type="number" name="noofgmpcs" id="noofgmpcs" class="form-control" placeholder="Enter No of gm/pcs" value="<?php if(isset($noofgmpcs )) echo $noofgmpcs ; ?>">
													<span class="text-danger" id="noofgmpcscheck">Enter No of gm/pcs</span>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Re Order Level</label>
													<input tabindex="13" type="number" name="reorderlevel" id="reorderlevel" class="form-control" placeholder="Enter Re Order level" 
													value="<?php if(isset($reorderlevel)) echo $reorderlevel ; ?>">
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Lower Level Qty</label>
													<input tabindex="14" type="number" name="lowerlevelqty" id="lowerlevelqty" class="form-control" placeholder="Enter Lower Level Qty" 
													value="<?php if(isset($lowerlevelqty )) echo $lowerlevelqty ; ?>">
											</div>
										</div>



										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Is Incentive</label>
													<select tabindex="15" name="isincentive" id="isincentive" class="form-control" class="form-control comp-field chosen-select">
														<option value="">Select an Option</option>
														<option  <?php if(isset($isincentive)) { if($isincentive == "yes" ) echo 'selected'; }  ?> value="yes">Yes</option>
														<option  <?php if(isset($isincentive)) { if($isincentive == "no" ) echo 'selected'; }  ?> value="no">No</option>
													</select>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Is Reuse</label>
													<select tabindex="16" name="isreuse"  id="isreuse" class="form-control" class="form-control comp-field chosen-select">
														<option value="">Select an Option</option>
														<option <?php if(isset($isreuse)) { if($isreuse == "yes" ) echo 'selected'; }  ?> value="yes">Yes</option>
														<option <?php if(isset($isreuse)) { if($isreuse == "no" ) echo 'selected'; }  ?> value="no">No</option>
												    </select>
											</div>
										</div>
									</div>
									</div>
							</div>
									<!-- Row end -->

<div>
<div id="AddUnitModal" class="modal">
  <div class="modal-content">
    <span class="close" style="width:4%;">&times;</span>
  <iframe src="addunit.php" height="500px"></iframe>
  </div>
</div>
</div>

<div>
<div id="BulkUploadModal" class="modal">
  <div class="modal-content">
    <span class="bulkclose" style="width:4%;">&times;</span>
  <iframe src="itemcreationbulk.php" height="200px"></iframe>
  </div>
</div>
</div>


							<div class="card">
								<div class="card-header">Stock Details</div>
								<div class="row card-body">
									<div class="col-md-2">
											<div class="form-group">
												<select tabindex="17" name="selectvendor[]" id="selectvendor" class="form-control form-control comp-field chosen-select" >
													<option value="">Select Vendor</option>
													<?php
													$vendorselect="SELECT vendorcode, vendorname FROM vendor WHERE 1 and status=0";
														$vendorresult=$mysqli->query($vendorselect);
													 if($vendorresult->num_rows>0){
														while($vendor=$vendorresult->fetch_assoc()){
														?>
													    <option value="<?php if(isset($vendor["vendorcode"])){ echo $vendor["vendorcode"];} ?>"><?php if(isset($vendor["vendorname"])){ echo $vendor["vendorname"];}?> - 
															<?php if(isset($vendor["vendorcode"])){ echo $vendor["vendorcode"];}?>
														</option>
														<?php }} ?>
												</select>
											</div>
									</div>
									<div class="col-md-1">
											<div class="form-group">
												<input tabindex="18" type="number" id="openingstock" name="openingstock" class="form-control" placeholder="Opening Stock">
											</div>
									</div>
									<div class="col-md-1">
											<div class="form-group">
												<input tabindex="19" type="number" id="openingpcs" name="openingpcs" class="form-control" placeholder="Opening PCS">
											</div>
									</div>
									<div class="col-md-1">
											<div class="form-group">
												<input tabindex="20" type="number" id="costperunit" name="costperunit" class="form-control" placeholder="Cost Per unit" onkeyup="calculatecostprice()">
											</div>
									</div>
									<div class="col-md-2">
											<div class="form-group">
												<input tabindex="21" type="number" readonly id="costprice" name="costprice" class="form-control" placeholder="Cost Price">
											</div>
									</div>
									<div class="col-md-2">
											<div class="form-group">
												<input tabindex="22" type="number"  id="sellingpriceperpc" name="sellingpriceperpc" class="form-control" placeholder="Selling Price Per Pc" onkeyup="calculatetotalsellingprice()">
											</div>
									</div>
									<div class="col-md-2">
											<div class="form-group">
												<input tabindex="23" type="number"  id="totalsellingprice" name="totalsellingprice" class="form-control" placeholder="Total Selling Price">
											</div>
									</div>
									<div class="col-md-1">
											<div class="form-group">
												<button tabindex="24" type="button" onclick="addstocktable()" class="form-control bluebutton"><span class="icon-add"></span></button>
											</div>
									</div>

								</div>

								<div class="card-body row" style="overflow-x:auto;">
									<table id="stocktable" class="table-container stocktable table-responsive table custom-table">
										<thead>
											<tr>
												<th>Vendor Code</th>
												<th>Opening Stock</th>
												<th>Opening Pcs</th>
												<th>Cost Per Unit</th>
												<th>Cost Price</th>
												<th>Selling Price Per Pc/ Pcs</th>
												<th>Total Selling Price</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody></tbody>
								<?php
								if(isset($tablevendorselect)){
								$Ttablevendorselect     =explode(',', $tablevendorselect);
								$Ttableopeningstock     =explode(',', $tableopeningstock);
								$Ttableopeningpcs       =explode(',', $tableopeningpcs);
								$Ttablecostperunit      =explode(',', $tablecostperunit);
								$Ttablecostprice        =explode(',', $tablecostprice);
								$Ttablesellingpriceperpc=explode(',', $tablesellingpriceperpc);
								$Ttabletotalsellingprice=explode(',', $tabletotalsellingprice);
								for($tab=0;$tab<=sizeof($Ttablevendorselect)-1;$tab++){?>
										<tbody>
											<td><input type="text" name="tablevendorselect[]" id="tablevendorselect" class="form-control" value="<?php echo $Ttablevendorselect[$tab]; ?>"></td>

											<td><input type="text" name="tableopeningstock[]" id="tableopeningstock" class="form-control" value="<?php echo $Ttableopeningstock[$tab]; ?>"></td>

											<td><input type="text" name="tableopeningpcs[]" id="tableopeningpcs" class="form-control" value="<?php echo $Ttableopeningpcs[$tab]; ?>"></td>

											<td><input type="text" name="tablecostperunit[]" id="tablecostperunit" class="form-control" value="<?php echo $Ttablecostperunit[$tab]; ?>"></td>

											<td><input type="text" name="tablecostprice[]" id="tablecostprice" class="form-control" value="<?php echo $Ttablecostprice[$tab]; ?>"></td>

											<td><input type="text" name="tablesellingpriceperpc[]" id="tablesellingpriceperpc" class="form-control" value="<?php echo $Ttablesellingpriceperpc[$tab]; ?>"></td>

											<td><input type="text" name="tabletotalsellingprice[]" id="tabletotalsellingprice" class="form-control" value="<?php echo $Ttabletotalsellingprice[$tab]; ?>"></td>
											<td>
												<a onclick='onUpdate(this)'><span class="icon-border_color"></span></a> &nbsp <a onclick='onDelete(this)'><span class='icon-trash-2'></span></a>
											</td>
										</tbody>
								<?php }}?>
									</table>
								</div><br /><br />

											


                                    <div class="card-body row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="custom-control custom-checkbox">
									<input type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="25"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
									</div>

									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
									</div>
									</div>

								<div class="card-body row">
								<div class="col-md-4">
								<button tabindex="26" type="button" id="itemcreatedownload" name="itemcreatedownload" class="btn btn-primary itembutton form-control"><span class="icon-download"></span>&nbsp Download</button>

								<button onclick="ItemBulkupload()" tabindex="27" type="button" id="itembulkupload" name="itembulkupload" class="btn btn-primary itembutton form-control" ><span class="icon-upload"></span> &nbsp Upload</button><br /><br />
								</div>

									<div class="col-md-4">
									</div>

									<div class="col-md-4">
										<button tabindex="28" type="reset" id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary itembutton1 form-control">Cancel</button>
										 
										<button tabindex="29" type="submit" value="submit" id="submititembtn" name="submititembtn" class="btn btn-primary itembutton1 form-control">Submit</button>
										<br /><br />
									</div>
								</div>

								</div>

							</div>

						</div>
					</div>
					<!-- Row end -->
				</form>
				<!-- Form end -->

				</div>
				<!-- Main container end -->
