
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Vendor Listing</li>
					</ol>
					<a href="addvendor">
					<button type="button"  tabindex="1"  class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Vendor</button>
					</a>
				</div>
				<!-- Page header end -->

			  <!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

							<div class="table-container">
							
								<div class="table-responsive">
								<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Vendor Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Vendor Updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Vendor Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="vendor_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Vendor Code</th>
											  <th>Vendor Name</th>
											  <th>Address 1</th>
											  <th>Address 2</th>
											  <th>District</th>
											  <th>Pincode</th>
											  <th>State</th>
											  <th>Country</th>
											  <th>Contact Person</th>
											  <th>Contact</th>
											  <th>Mail Id</th>
											  
											  
											  <th>Stocktype</th>
											  <th>Delivery Time</th>
											  <th>Reorder Level</th>
											  <th>Minimum Stock</th>
											  <th>Maximum Stock</th>

											  <th>Is Gst Applicable</th>
											  <th>Gst State</th>
											  <th>Type of State</th>
											  <th>GST Number</th>

											  <th>Bank Name</th>
											  <th>Branch Name</th>
											  <th>Account Number</th>
											  <th>IFSC Code</th>

											  <th>Subgroup</th>
											  <th>Group</th>
											  <th>Ledger</th>
											  <th>Credit Limit</th>
											  <th>Is Cost Centre</th>
											  <th>Is Inventory</th>

											  <th>Status</th>
											  <th>Action</th>
											</tr>
										</thead>
										<tbody>
										
										</tbody>
						    	</table>
								</div>
							</div>

							
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Main container end -->

	

