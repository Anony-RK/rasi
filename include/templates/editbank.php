
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Bank Listing</li>
					</ol>					
					<a href="bank">
					<button type="button"  tabindex="1" id="submitbankbtn" name="submitbanknew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Bank</button>
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
                            <div class="alert-text">Bank Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Bank updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Bank Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="bank_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Bank Code</th>
											  <th>Bank Name</th>
											  <th>Account No</th>
											  <th>Branch Name</th>											 
											  <th>Short Form</th>
											  <th>Purpose</th>
											  <th>Mail Id</th>
											  <th>Ifsc Code</th>
											  <th>Contact Person</th>
											  <th>Contact No</th>
											  <th>Micr Code</th>
											  <th>Type of Account</th>
											  <th>Under Sub Group</th>
											  <th>Group</th>	
											  <th>Ledger Name</th>	
											  <th>Cost Center</th>											
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

	

