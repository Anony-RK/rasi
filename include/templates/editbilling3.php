
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Branch Listing</li>
					</ol>					
					<a href="billing">
					<button type="button"  tabindex="1" id="submitbranchbtn" name="submitbranchnew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Bill</button>
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
                            <div class="alert-text">Bill Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Bill updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Bill Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="billing3_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Bill Id</th>
											  <th>date</th>											  
											  <th>customer Details</th>	
                                              <th>shipping Details</th>											 
											  <th>Products</th>
											  <th>Quantity</th>
											  <th>Rate</th>
											  <th>Total</th>
											  <th>Discount</th>
											  <th>Taxable Value</th>
											  <th>CGST</th>
											  <th>SGST</th>
											  <th>IGST</th>
											  <th>All Total Amount</th>										  
											  <th>Total Amount</th>
											  <th>Discount Amount</th>
											  <th>Taxable Value</th>
											  <th>TotalCGST</th>
											  <th>TotalSGST</th>
											  <th>TotalIGST</th>
											  <th>Other Changes</th>
											  <th>Total Invoice </th>
											  <th>Basis</th>
											  
											  <!--<th>Esicno</th>
											  <th>loginshortername</th> -->
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

	

