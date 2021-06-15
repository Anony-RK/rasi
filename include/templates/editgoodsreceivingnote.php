
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Goods Receiving Note Listing</li>
					</ol>					
					<a href="branch">
					<button type="button"  tabindex="1" id="submitgoodsreceivingbtn" name="submitgoodsreceivingnew"   class="btn btn-primary"><span class="icon-add"></span>&nbsp Add Goods Receiving Note</button>
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
                            <div class="alert-text">Goods Receiving Note Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Goods Receiving Note updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Goods Receiving Note Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
									<table id="goods_info" class="table custom-table">
										<thead>
											<tr>
											  <th>Po No</th>
											  <th>Grn No</th>
											  <th>Grn Date</th>
											  <th>Choose Type</th>											 
											  <th>Voucher No</th>
											  <th>Debit Ledger</th>
											  <th>Credit Ledger</th>
											  <th>Narration</th>
											  <th>Invoice No</th>
											  <th>Value Of Invoice</th>
											  <th>Final Value Of Invoice</th>
											  <th>Currency Type</th>
											  <th>Equal To Inr</th>
											  <th>Advance Paid In Total</th>																						
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

	

