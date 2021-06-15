
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Branch Listing</li>
					</ol>					
					<a href="branch">
					<button type="button"  tabindex="1" id="submitbranchbtn" name="submitbranchnew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Branch</button>
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
                            <div class="alert-text">Branch Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Branch updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Branch Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="branch_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Branch Name</th>
											  <th>Address</th>
											  <th>Address1</th>
											  <th>Address2</th>
											  <th>District</th>											 
											  <th>State</th>
											  <th>Country</th>
											  <th>Pin Code</th>
											  <th>Phone Number</th>
											  <th>Email</th>
											  <th>Faxnumber</th>
											  <th>Tanno</th>
											  <th>Is GST Applicable?</th>
											  <th>Gst</th>
											  <th>Pfno</th>
											  <th>Esicno</th>
											  <th>loginshortername</th>
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

	

