
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Edit Godown Creation</li>
					</ol>					
					<a href="godowncreation">
					<button type="button"  tabindex="1" id="submitbranchbtn" name="submitbranchnew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Godown Creation</button>
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
                            <div class="alert-text">Godown Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Godown updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Godown Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="godowncreation_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Godown Name</th>
											  <th>Alias</th>											  
											  <th> Address</th>	
                                              <th>Under</th>											 
											  <th>Allow Stock</th>
											  <th>Stock With</th>
											  <th>Thired Party Stock</th>
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

	

