
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Customer List</li>
					</ol>
					<a href="customer">
					<button type="button"  tabindex="1"  class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Customer</button>
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
                            <div class="alert-text">Customer Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Customer updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Customer Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="customer_info" class="table custom-table">
										<thead>
											<tr>
											<th>Customer Code</th>
											  <th>Customer Name</th>
											  <th>Gender</th>
											  <th>Date Of Birth</th>
											  <th>Customer Image</th>
											  <th>Age</th>
											  <th>Mobile Number</th>
											  <th>Whatsapp Number</th>
											  <th>Anniversary Date</th>
											  <th>Email Id</th>
											  <th>Need Membership</th>

											  <th>GST Number</th>
											  <th>Contact Persion</th>
											  <th>Address1</th>
											  <th>Address2 </th>								  
											  <th>Pincode</th>											  
											  <th>District</th>
											  <th>State</th>
											  <th>Country</th>
											  

											  <th>Type Of Customer</th>
											  <th>No Of Visit</th>
											  <th>Frequency Of Visit</th>

											  <th>Sub Group</th>
											  <th>Group</th>
											  <th>Ledger Name</th>

											  <th>Cost Centr</th>
											  <th>Inventory</th>

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

	

