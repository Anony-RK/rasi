<?php 
//    $id=0;

//  if(isset($_POST['submitgodown']))
//  {
	   

//     if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
//         $id = $_POST['id']; 	
//     $updategodowncreation = $userObj->updategodowncreation($mysqli,$id);  
//     ?>
      <!-- <script>location.href='<?php //echo $HOSTPATH;  ?>editgodowncreation&msc=2';</script> -->
   <?php	//}
//     else{   
	
// 		$addgodowncreation = $userObj->addgodowncreation($mysqli);   
//         ?>
    <!-- <script>location.href='<?php //echo $HOSTPATH;  ?>editgodowncreation&msc=1';</script> -->
        <?php
//     }
//  }  
 

// $del=0;
// $costcenter=0;
// if(isset($_GET['del']))
// {
// $del=$_GET['del'];
// }
// if($del>0)
// {
// 	$deletegodowncreation = $userObj->deletegodowncreation($mysqli,$del); 
// 	//die;
	?>
	<!-- <script>location.href='<?php //echo $HOSTPATH;  ?>editgodowncreation&msc=3';</script> -->
<?php	
// }

// if(isset($_GET['upd']))
// {
// $idupd=$_GET['upd'];
// }
// $status =0;
// if($idupd>0)
// {
// 	$getgodowncreation = $userObj->getgodowncreation($mysqli,$idupd); 
	
// 	if (sizeof($getgodowncreation)>0) {
//         for($igodown=0;$igodown<sizeof($getgodowncreation);$igodown++)  {			
// 			$id                       	 = $getgodowncreation['id'];
// 			$godownname          		     = $getgodowncreation['godownname'];
// 			$alias      			           = $getgodowncreation['alias'];
// 			$address      		        	 = $getgodowncreation['address'];
// 			$under       			           = $getgodowncreation['under'];
// 			$allowstock                	 = $getgodowncreation['allowstock'];
// 			$stockwith                	 = $getgodowncreation['stockwith'];
// 			$thiredpartystock            = $getgodowncreation['thiredpartystock'];		
//       $status                      = $getgodowncreation['status'];  
// 		}
// 	}
// }

  ?>
  

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Branch OutWard</li>
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
						 <h2 class="text-primary"><b>Godown OutWard</b></h2>
					</div>
                    <div class="card-body">


                    <div class="row">
                     
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <!-- <div class="align-right"> -->
                            
                            <div class="d-flex">
                            <?php  $numbers = mt_rand(5000000, 50000000000);?>
                                <label for="">Receipt No:</label>
                                <label class="ml-2" type="text" id="receiptno" name="receiptno" val="<?php echo $numbers ?>"><?php echo $numbers ?></label>
                            </div>
                            <div class="d-flex">
                                <label for="">Date:</label>
                                <label class="ml-2"  type="text" val="<?php echo date("d-y-m"); ?>" id="date" name="date"><?php echo date("d-y-m"); ?></label>
                            </div>
                            
                            <!-- </div> -->
                        </div>
                    
                  </div>

                         
<style>
.text-style{
    border:none !important;
    outline:none  !important;
    background-color:transparent !important;
    border-bottom:1px solid black !important;
}
.colors{
    color:#af772a;
}
</style>                        
                 
                  </div> 
                  
<script>

        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("customername").value = "";        
                document.getElementById("customeraddress").value = "";
                document.getElementById("customergst").value = "";
                document.getElementById("mobilenumber").value = "";
                return;
            }
            else {
  
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    if (this.readyState == 4 && 
                            this.status == 200) {
                        var myObj = JSON.parse(this.responseText);
  
                        document.getElementById("customername").value = myObj[0];
                        document.getElementById("customergst").value = myObj[1];
                        document.getElementById("customeraddress").value = myObj[2];
                        document.getElementById("mobilenumber").value = myObj[3];
                        document.getElementById("receivername").value = myObj[0];
                        document.getElementById("receiveraddress").value = myObj[2];
                    }
                };
  
                xmlhttp.open("GET", "customersbill.php?customercode=" + str, true);
                xmlhttp.send();
            }
        }
</script>
       
                <hr class="border colors border-5" style="color:#af772a;">
<div class="container">
                       <div class="row">
                         <div class="col-md-6">
                         <h5 class="colors border-bottom ml-4 mb-2">Bill To</h5>
                                <div class="d-flex justify-content-between ml-4">
                                    <b><h6>Customer Name:</h6></b>
                                    <input type="text" class="form-control w-50 text-style" readonly id="customername" name="customername" >											 																						  
                                </div> 
                                <div class="d-flex justify-content-between ml-4">
                                    <b><h6>Address:</h6></b>
                                    <input type="text" class="form-control w-50 text-style" readonly id="customergst" name="customergst" >  
                                </div>
                                <div class="d-flex  justify-content-between ml-4 ">
                                    <b><h6>Contact No :</h6></b>
                                    <input type="text" class="form-control w-50 text-style" readonly id="customeraddress" name="customeraddress" >  
                                </div>
                                <div class="d-flex justify-content-between ml-4 ">
                                    <b class="d-flex align-items-center"><h6>Ref.No</h6><span class="text-danger ml-1">*</span></b>
                                    <input type="text" class="form-control w-50 text-style" onkeyup="GetDetail(this.value)" id="referalno" name="referalno" placeholder="Enter Customerid"> 
                                </div>
                            </div>                        
                         <!-- </div> -->



                         <div class="col-md-6">
                         <h5 class="colors border-bottom ml-4 mb-2">Shipping To </h5>
                                <div class="d-flex justify-content-between ml-4">
                                    <b><h6>Customer Name:</h6></b>
                                    <input type="text" class="form-control w-50 text-style" readonly id="receivername" name="customername" >											 																						  
                                </div> 
                                <div class="d-flex justify-content-between ml-4">
                                    <b><h6>Address:</h6></b>
                                    <input type="text" class="form-control w-50 text-style" readonly id="receiveraddress" name="customergst" >  
                                </div>
                                <div class="d-flex  justify-content-between ml-4 ">
                                    <b><h6>Contact No :</h6></b>
                                    <input type="text" class="form-control w-50 text-style" readonly id="mobilenumber" name="customeraddress" >  
                                </div>
                                <!-- <div class="d-flex justify-content-between ml-4 ">
                                    <b class="d-flex align-items-center"><h6>Ref.No</h6><span class="text-danger ml-1">*</span></b>
                                    <input type="text" class="form-control w-50 text-style" id="referalno" name="referalno" placeholder="Enter Customerid"> 
                                </div> -->

                            </div>

                         
                         </div>

                        
                    

                     <div class="row mt-4" >
                       <div class="col-md-12">
                            <table class="table table-bordered" id="godownoutward">
                               <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                       
                                        <th> Ordered Quantity</th>
                                        <th>Shipping Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total Amount</th>
                                    </tr>
                               </thead>
                               <tbody >
                                                                 
                               </tbody>
                            </table>
                       </div>
                     </div>
		
                   <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                       <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; } ?> tabindex="25"  class="custom-control-input" id="status" name="status">
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
</div>
</form>
</div>