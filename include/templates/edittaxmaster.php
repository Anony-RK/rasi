
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Tax Listing</li>
					</ol>					
					<a href="taxmaster">
					<button type="button"  tabindex="1" id="submitbranchbtn" name="submitbranchnew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Tax</button>
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
                            <div class="alert-text">Tax Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Tax updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Tax Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="taxmaster_info" class="table custom-table">
										<thead>
											<tr>
											 <th>Financial Year</th>
											  <th>Classification</th>
											  <th>Description</th>
											  <th>Tax</th>
											  <th>Cess</th>											 
											  <th>Addl</th>
											  <th>Total</th>											 
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

	

