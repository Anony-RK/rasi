
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Employee Listing</li>
					</ol>
					<a href="employeemaster">
					<button type="button"  tabindex="1"  id="submitbranchbtn" name="submitbranchnew" class="btn btn-primary"><span class="icon-add"></span>Add Employee</button>
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
                            <div class="alert-text">Employee Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Employee updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Employee Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="employee_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Employee Code</th>
											  <th>Employee Name</th>
											  <th>Date Of Birth</th>
											  <th>Gender</th>
											  <th>Email</th>
											  <th>Designation</th>
											  <th>Contact Number</th>
											  <th>Mobile Number</th>
											  <th>Date Of Joining</th>
											  <th>Employee Image</th>
											  <th>Expertise</th>
											  <th>Star Rating</th>
											  <th>Basic</th>
											  <th>HRA</th>
											  <th>Conveyance</th>
											  <th>Allowance</th>
											  <th>Incentive Percent</th>
											  <th>Gross Pay</th>
											  <th>TDS</th>
											  <th>PF</th>
											  <th>ESI</th>
											  <th>Loans</th>
											  <th>Salary Advance</th>
											  <th>Total Deduction</th>
											  <th>Any Other Deduction</th>

											  <th>Institute Type1</th>
											  <th>Name1</th>
											  <th>Position Held1</th>
											  <th>Place1</th>
											  <th>From Period1</th>
											  <th>To Period1</th>
											  <th>Date1</th>

											  <th>Institute Type2</th>
											  <th>Name2</th>
											  <th>Position Held2</th>
											  <th>Place2</th>
											  <th>From Period2</th>
											  <th>To Period2</th>
											  <th>Date2</th>

											  <th>Institute Type3</th>
											  <th>Name3</th>
											  <th>Position Held3</th>
											  <th>Place3</th>
											  <th>From Period3</th>
											  <th>To Period3</th>
											  <th>Date3</th>

											  <th>Institute Type4</th>
											  <th>Name4</th>
											  <th>Position Held4</th>
											  <th>Place4</th>
											  <th>From Period4</th>
											  <th>To Period4</th>
											  <th>Date4</th>

											  <th>Institute Type5</th>
											  <th>Name5</th>
											  <th>Position Held5</th>
											  <th>Place5</th>
											  <th>From Period5</th>
											  <th>To Period5</th>
											  <th>Date5</th>

											  <th>Title1</th>
											  <th>Certificate1</th>

											  <th>Title2</th>
											  <th>Certificate2</th>

											  <th>Title3</th>
											  <th>Certificate3</th>

											  <th>Title4</th>
											  <th>Certificate4</th>

											  <th>Title5</th>
											  <th>Certificate5</th>
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

	

