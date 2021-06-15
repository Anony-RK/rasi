
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Company Listing</li>
					</ol>
					<a href="company">
					<button type="button"  tabindex="1" id="submitcompanynew" name="submitcompanynew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Company</button>
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
                            <div class="alert-text">Company Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Company updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Company Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="company_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Company Name</th>
											  <th>CIN No</th>
											  <th>Address</th>
											  <th>Address1</th>
											  <th>Address2</th>	
											  <th>District</th>										
											  <th>State</th>
											  <th>Country</th>
											  <th>Pincode</th>
											  <th>Phone Number</th>											
											  <th>Fax Number</th>
											  <th>Email</th>
											  <th>Website</th>
											  <th>PAN No</th>
											  <th>IT Ward Circle No</th>
											  <th>TAN No</th>
											  <th>GST</th>
											  <th>PF No</th>
											  <th>ESIC No</th>
											  <th>Login - Shorter Name</th>
											  <th>Books Start From</th>
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

	

