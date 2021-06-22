<?php 
   $id=0;

 if(isset($_POST['submitgodown']))
 {
	   

    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updategodowncreation = $userObj->updategodowncreation($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editgodowncreation&msc=2';</script>
    <?php	}
    else{   
	
		$addgodowncreation = $userObj->addgodowncreation($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editgodowncreation&msc=1';</script>
        <?php
    }
 }  
 

$del=0;
$costcenter=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$deletegodowncreation = $userObj->deletegodowncreation($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editgodowncreation&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getgodowncreation = $userObj->getgodowncreation($mysqli,$idupd); 
	
	if (sizeof($getgodowncreation)>0) {
        for($igodown=0;$igodown<sizeof($getgodowncreation);$igodown++)  {			
			$id                       	 = $getgodowncreation['id'];
			$godownname          		     = $getgodowncreation['godownname'];
			$alias      			           = $getgodowncreation['alias'];
			$address      		        	 = $getgodowncreation['address'];
			$under       			           = $getgodowncreation['under'];
			$allowstock                	 = $getgodowncreation['allowstock'];
			$stockwith                	 = $getgodowncreation['stockwith'];
			$thiredpartystock            = $getgodowncreation['thiredpartystock'];		
      $status                      = $getgodowncreation['status'];  
		}
	}
}

  ?>
  

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
                        <select type="text" class="form-control w-75" id="godownname" name="godownname" >
                              <option value="">Select Godown</option>
                              <option <?php if(isset($godownname)) { if($godownname == "Godown A" ) echo 'selected'; }  ?> value="Godown A">Godown A</option>
                              <option <?php if(isset($godownname)) { if($godownname == "Godown B" ) echo 'selected'; }  ?> value="Godown B">Godown B</option>
                              <option <?php if(isset($godownname)) { if($godownname == "Godown C" ) echo 'selected'; }  ?> value="Godown C">Godown C</option>
                              <option <?php if(isset($godownname)) { if($godownname == "Godown D" ) echo 'selected'; }  ?> value="Godown D">Godown D</option>
                        </select>
                        </div><br>

                        <div class="d-flex justify-content-between ">
                        <h6>(Alias):</h6>
                        <input type="text" class="form-control w-75" value="<?php if(isset($alias )) echo $alias ; ?>" id="alias" name="alias">
                        </div><br><br>


                        <div class="d-flex justify-content-between ">
                        <h6>Address:</h6>
                        <input type="text" class="form-control w-75" value="<?php if(isset($address )) echo $address ; ?>" id="address" name="address">
                        </div>
                      

                        <div class="d-flex justify-content-between mt-4">
                        <h6>Under:</h6>
                        <input type="text" class="form-control w-75" value="<?php if(isset($under )) echo $under ; ?>" id="under" name="under">
                        </div><br><br>
                      </div>
                      <div class="col-md-6"></div>
                      
                      </div>
                      <hr>
                  <div class="row">
                  
                    <div class="col-md-6">

                       <div class="d-flex justify-content-between">
                       <p>Allow Storage of materials   ?</p>
                       <select  class="form-control w-50" id="allowstock" name="allowstock">
                       <option value=""> select option</option>
                          <option <?php if(isset($allowstock)) { if($allowstock == "Yes" ) echo 'selected'; }  ?> value="Yes">Yes</option>
                          <option <?php if(isset($allowstock)) { if($allowstock == "No" ) echo 'selected'; }  ?> value="No">No</option>
                       </select>        
                       </div>

                         <h5 class="border-bottom mt-4">Use For</h5>
                      <div class="d-flex justify-content-between">
                       <p>Our Stock With Thired Party  ?</p>
                       <select  class="form-control  w-50" id="stockwith" name="stockwith">
                       <option value=""> select option</option>
                          <option <?php if(isset($stockwith)) { if($stockwith == "Yes" ) echo 'selected'; }  ?> value="Yes">Yes</option>
                          <option <?php if(isset($stockwith)) { if($stockwith == "No" ) echo 'selected'; }  ?> value="No">No</option>
                       </select>        
                       </div>

                       <div class="d-flex justify-content-between mt-1">
                       <p>Thired Party Stock with Us  ?</p>
                       <select  class="form-control w-50 " id="thiredpartystock" name="thiredpartystock">
                       <option value=""> select option</option>
                          <option <?php if(isset($thiredpartystock)) { if($thiredpartystock == "Yes" ) echo 'selected'; }  ?> value="Yes">Yes</option>
                          <option <?php if(isset($thiredpartystock)) { if($thiredpartystock == "No" ) echo 'selected'; }  ?> value="No">No</option>
                       </select>        
                       </div>

                    </div>
                    <div class="col-md-4"></div>
                  
                  </div>
		
                   <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                       <input type="checkbox" value="Yes"  <?php  if($status==0) { echo 'checked'; } ?> tabindex="25"  class="custom-control-input" id="status" name="status">
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
							    <button type="submit" name="submitgodown" id="submitgodown" class="btn btn-primary"  tabindex="73">Submit</button>
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