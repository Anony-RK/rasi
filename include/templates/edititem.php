
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Item Listing</li>
					</ol>
					<a href="item">
					<button type="button"  tabindex="1"  class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Item</button>
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
                            <div class="alert-text">Item Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Item updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Item Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="item_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Part Number</th>
											  <th>Stock Type</th>
											  <th>Item Name</th>
											  <th>Unit Of Measure</th>
											  <th>HSN Code</th>
											  <th>GST Rate</th>
											  <th>Bar_Code</th>
											  <th>Vendor</th>
											  <th>Type</th>
											  <th>No Of Gm/ Pcs</th>
											  <th>Reorder Level</th>
											  <th>Lower Level Quality</th>
											  <th>Is Incentive</th>
											  <th>Is Reuse</th>
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

	

