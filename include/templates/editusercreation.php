
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Tax Listing</li>
					</ol>					
					<a href="usercreation">
					<button type="button"  tabindex="1" id="submitbranchbtn" name="submitbranchnew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add User</button>
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
                            <div class="alert-text">User Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">User updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">User Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="usercreation_info" class="table custom-table">
										<thead>
											<tr>
											 <th>Role</th>
											  <th>First Name</th>
											  <th>Last Name</th>
											  <th>Full Name</th>
											  <th>Title</th>											 
											  <th>Password</th>
											  <th>Email Id</th>											 
											  <th>User Name</th>
											  <th>Company Name</th>
                                              <th>Administration</th>
                                              <th>Master</th>
                                              <th>Profit Allcoation</th>
                                              <th>Purchase Order</th>
                                              <th>GRN</th>
                                              <th>MHE Purchase Order</th>
                                              <th>MHE GRN</th>
                                              <th>Damage and Expiry</th>
                                              <th>Finance Entry</th>
                                              <th>GSTR</th>
                                              <th>Work Order</th>
                                              <th>Billing</th>
                                              <th>Fixed Assets</th>
                                              <th>Financial Statement</th>
                                              <th>HR</th>
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

	

