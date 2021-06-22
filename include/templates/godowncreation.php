
<?php 
$subgrouplist=$userObj->getSubgroup($mysqli);
$id=0;
 if(isset($_POST['submitbill']))
 {
  if(isset($_POST['others']) &&  isset($_POST['others']) == true) {
		$addbilling = $userObj->addbilling($mysqli);   
  ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editbilling&msc=1';</script> 
        <?php
}
//  else
 if(isset($_POST['tamilnadu']) &&  isset($_POST['tamilnadu']) == true )
{
  $addcgst = $userObj->addcgst($mysqli);   
  ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editbilling&msc=1';</script> 
        <?php
}
}

$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$deletebilliing = $userObj->deletebilliing($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editbilling&msc=3';</script>
<?php	} ?>

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Godown Creation</li>
					</ol>

					<a href="editgodowncreation">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Godown </button>
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
                      
                      <div class="col-md-6">
                      
                        <div class="d-flex justify-content-between ">
                        <h6>Godown Name:</h6>
                        <input type="text" class="form-control w-75" id="godownname" name="godownname">
                        </div><br>

                        <div class="d-flex justify-content-between ">
                        <h6>(Alias):</h6>
                        <input type="text" class="form-control w-75" id="godownname" name="godownname">
                        </div><br><br>


                        <div class="d-flex justify-content-between ">
                        <h6>Address:</h6>
                        <textarea type="text" class="form-control w-75" id="godownname" name="godownname"></textarea>
                        </div>
                      

                        <div class="d-flex justify-content-between mt-4">
                        <h6>Under:</h6>
                        <input type="text" class="form-control w-75" id="godownname" name="godownname">
                        </div><br><br>
                      </div>
                      <div class="col-md-6"></div>
                      
                      </div>
                      <hr>
                  <div class="row">
                  
                    <div class="col-md-6">

                       <div class="d-flex justify-content-between">
                       <p>Allow Storage of materials   ?</p>
                       <select name="" id="" class="form-control w-50">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                       </select>        
                       </div>

                         <h5 class="border-bottom mt-4">Use For</h5>
                      <div class="d-flex justify-content-between">
                       <p>Our Stock With Thired Party  ?</p>
                       <select name="" id="" class="form-control  w-50">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                       </select>        
                       </div>

                       <div class="d-flex justify-content-between mt-1">
                       <p>Thired Party Stock with Us  ?</p>
                       <select name="" id="" class="form-control w-50">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                       </select>        
                       </div>

                    </div>
                    <div class="col-md-4"></div>
                  
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