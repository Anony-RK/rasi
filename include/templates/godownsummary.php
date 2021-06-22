
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
                          <div class="col-md-6"></div>
                           <div class="col-md-6">
                            <div class="text-right">
                            <p>Main Location </p>
                             <h5>Rasi Enterprices</h5>
                             <p><?php echo date("Y-M-d"); ?></p>
                            </div>
                          
                          </div>

                          <div class="row">
                          

                          <div class="col-md-12">
                          
                            <table>
                            <thead>
                               <tr>
                                <th>Particulars</th>
                                <th>Qty</th>
                                <th>Rate</th>
                                <th>Values</th>
                               </tr>
                            </thead>
                            <tbody>
                            <tr>
                               <td><h5>Eastern Region</h5></td>
                               <td><input type="text " class="form-control" id="easternregionqty" name="easternregionqty"></td>
                               <td><input type="text " class="form-control" id="easternregionrate" name="easternregionrate"> </td>
                               <td><input type="text " class="form-control" id="easternregionvalue" name="easternregionvalue"></td>
                            </tr>
                            <tr>
                               <td><h6><b>WareHouse P</b></h6></td>
                               <td><input type="text " class="form-control" id="warehousepqty" name="warehousepqty"></td>
                               <td><input type="text " class="form-control" id="warehouseprate" name="warehouseprate"> </td>
                               <td><input type="text " class="form-control" id="warehousepvalue" name="warehousepvalue"></td>                       
                            </tr>
                            <tr>
                               <td>Item A</td>
                               <td><input type="text " class="form-control" id="itemaqty" name="itemaqty"></td>
                               <td><input type="text " class="form-control" id="itemarate" name="itemarate"> </td>
                               <td><input type="text " class="form-control" id="itemavalue" name="itemavalue"></td>                               
                            </tr>
                            <tr>
                               <td>Item B</td>
                               <td><input type="text " class="form-control" id="itembqty" name="itembqty"></td>
                               <td><input type="text " class="form-control" id="itembrate" name="itembrate"> </td>
                               <td><input type="text " class="form-control" id="itembvalue" name="itembvalue"></td>                             
                            </tr>
                            <tr>
                               <td><h5><b>WareHouse Q</b></h5></td>
                               <td><input type="text " class="form-control" id="warehouseqqty" name="warehouseqqty"></td>
                               <td><input type="text " class="form-control" id="warehouseqrate" name="warehouseqrate"> </td>
                               <td><input type="text " class="form-control" id="warehouseqvalue" name="warehouseqvalue"></td>                    
                            </tr>
                            <tr>
                               <td>Item A</td>    
                               <td><input type="text " class="form-control" id="warehouseqitemaqty" name="warehouseqitemaqty"></td>
                               <td><input type="text " class="form-control" id="warehouseqitemarate" name="warehouseqitemarate"> </td>
                               <td><input type="text " class="form-control" id="warehouseqitemavalue" name="warehouseqitemavalue"></td>              
                                         
                            </tr>
                            <tr>
                               <td><h5>Southern Region</h5></td>                            
                               <td><input type="text " class="form-control" id="southernregionqty" name="southernregionqty"></td>
                               <td><input type="text " class="form-control" id="southernregionrate" name="southernregionrate"> </td>
                               <td><input type="text " class="form-control" id="southernregionvalue" name="southernregionvalue"></td>
                            </tr>
                            <tr>
                               <td><h6><b>WareHouse A</b></h6></td>  
                               <td><input type="text " class="form-control" id="warehouseaqty" name="warehouseaqty"></td>
                               <td><input type="text " class="form-control" id="warehousearate" name="warehousearate"> </td>
                               <td><input type="text " class="form-control" id="warehouseavalue" name="warehouseavalue"></td> 
                                                       
                            </tr>
                            <tr>
                               <td>Item A</td>     
                               <td><input type="text " class="form-control" id="warehouseaitemaqty" name="warehouseaitemaqty"></td>
                               <td><input type="text " class="form-control" id="warehouseaitemarate" name="warehouseaitemarate"> </td>
                               <td><input type="text " class="form-control" id="warehouseaitemavalue" name="warehouseaitemavalue"></td>                           
                            </tr>
                            <tr>
                               <td><h6><b>WareHouse B</b></h6></td>                   
                               <td><input type="text " class="form-control" id="warehousebqty" name="warehousebqty"></td>
                               <td><input type="text " class="form-control" id="warehousebrate" name="warehousebrate"> </td>
                               <td><input type="text " class="form-control" id="warehousebvalue" name="warehousebvalue"></td>        
                            </tr>
                            <tr>
                               <td>Item A</td>                         
                               <td><input type="text " class="form-control" id="warehousebitemaqty" name="warehousebitemaqty"></td>
                               <td><input type="text " class="form-control" id="warehousebitemarate" name="warehousebitemarate"> </td>
                               <td><input type="text " class="form-control" id="warehousebitemavalue" name="warehousebitemavalue"></td>       
                            </tr>
                            <tr>
                               <td>Item B</td>    
                               <td><input type="text " class="form-control" id="warehousebitembqty" name="warehousebitembqty"></td>
                               <td><input type="text " class="form-control" id="warehousebitembrate" name="warehousebitembrate"> </td>
                               <td><input type="text " class="form-control" id="warehousebitembvalue" name="warehousebitembvalue"></td>                          
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