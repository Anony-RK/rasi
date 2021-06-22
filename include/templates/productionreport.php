
<?php 
// $subgrouplist=$userObj->getSubgroup($mysqli);
// $id=0;
//  if(isset($_POST['submitbill']))
//  {
//   if(isset($_POST['others']) &&  isset($_POST['others']) == true) {
// 		$addbilling = $userObj->addbilling($mysqli);   
  ?>
      <!-- <script>location.href='<?php //echo $HOSTPATH;  ?>editbilling&msc=1';</script>  -->
        <?php
// }
//  else
//  if(isset($_POST['tamilnadu']) &&  isset($_POST['tamilnadu']) == true )
// {
//   $addcgst = $userObj->addcgst($mysqli);   
  ?>
      <!-- <script>location.href='<?php //echo $HOSTPATH;  ?>editbilling&msc=1';</script>  -->
        <?php
// }
// }

// $del=0;
// if(isset($_GET['del']))
// {
// $del=$_GET['del'];
// }
// if($del>0)
// {
// 	$deletebilliing = $userObj->deletebilliing($mysqli,$del); 
	?>
	<!-- <script>location.href='<?php //echo $HOSTPATH;  ?>editbilling&msc=3';</script> -->
<?php	//} ?>

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Godown Summary</li>
					</ol>

					<a href="editgodownsummary">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Godown Summary </button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "taxmaster" name="taxmaster" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php if(isset($id )) echo $id ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						
					</div>
                    <div class="card-body">                 
                          <div class="row">                        
                            <div class="col-md-6 d-flex">
                            <h6>Select Types of Production</h6>
                                 <select name="production" id="production" class="form-control ">
                                    <option value="Select Types">Select Types of Production</option>
                                    <option value="Production">Production</option>
                                    <option value="Purchase">Purchase</option>
                                    <option value="Salres Return">Salres Return</option>
                                    <option value="Stock Traansfer">Stock Transfer</option>
                                 </select>
                            </div>
                            <div class="col-md-6"></div>
                          
                          </div>
                       </div><br><br>
                    <div class="container">
                       <div class="row">
                            <div class="col-md-12">
                              <div class="d-flex justify-content-between bg-primary p-2 text-white" > 
                                            <h6>Production Discrepancy Report</h6>
                                            <h6>01-Apr-2020 - 31-May-2021</h6>
                                </div>
                                    <table class="table custom-table">
                                    <thead>
                                        <!-- <tr colspan="6">
                                        <th class="d-flex justify-content-between w-100" > 
                                                <h6>Production Discrepancy Report</h6>
                                                <h6>01-Apr-2020 - 31-May-2021</h6>
                                        </th>
                                        </tr> -->
                                        <tr>
                                        <th>WareHouse</th>
                                        <th>Product</th>
                                        <th>Product Id</th>
                                        <th>Comp Qty</th>
                                        <th>Physical Qty</th>
                                        <th>Total Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                       
                                    
                                    </tbody>
                                    </table>
                            </div>
                       </div>
                       </div>  
                   <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                       <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; //} ?> tabindex="25"  class="custom-control-input" id="status" name="status">
						           <label class="custom-control-label" for="status">Status</label>
					      	</div><br /><br /> 
               </div>
      
          <div class="row">
					   <div class="col-md-4 d-flex" > 
                <button type="button" id="taxdownloadx" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> 
                <button  tabindex="27" type="button" id="taxbulkuploadx" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> 
					   </div>
            <div class="col-md-6"></div>                          
              <div class="col-md-2 ">						
							    <button type="submit" name="submitbill" id="submitbill" class="btn btn-primary"  tabindex="73">Submit</button>
                  <button type="button" class="btn btn-outline-secondary" tabindex="74">Cancel</button>
					    </div>
            </div>
         </div>   
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>