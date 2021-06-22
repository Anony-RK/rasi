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
						 <h2 class="text-primary"><b>Branch OutWard</b></h2>
					</div>
                    <div class="card-body">
                        
                     <div class="row">
                     
                        <div class="col-md-6">
                           
                        <script>

function companydetails(str) {
    if (str.length == 0) {
        // document.getElementById("companygst").value = "";        
        document.getElementById("companyaddress").value = "";
        document.getElementById("companyphone").value = "";
        document.getElementById("companyemail").value = "";
        return;
    }
    else {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {

            if (this.readyState == 4 && 
                    this.status == 200) {
                var myObj = JSON.parse(this.responseText);

                // document.getElementById("companygst").value = myObj[0];
                document.getElementById("companyaddress").value = myObj[0];
                document.getElementById("companyphone").value = myObj[1];
                document.getElementById("companyemail").value = myObj[2];

                
            }
        };

        xmlhttp.open("GET", "companydetails.php?companygst=" + str, true);
        xmlhttp.send();
    }
}
</script>
     
      <style>
      .text-style{
    border:none !important;
    outline:none  !important;
    background-color:transparent !important;
    border-bottom:1px solid black !important;
}
      </style>

                                <div class="d-flex justify-content-between">
                                    <b><h5>GSTIN: <span class="text-danger">*</span></h5></b>
                                    <input  class="form-control w-50 text-style"  style="margin-left:32px ;" onkeyup="companydetails(this.value)" name="companygst" id="companygst" placeholder="Enter GSTIN" /><br>
                                </div> 
                                <div class="d-flex justify-content-between">
                                    <b><h5>Address    :</h5></b>
                                    <input   class="form-control w-50 text-style" style="margin-left:25px ;" name="companyaddress" readonly id="companyaddress"/><br>
                                </div>
                                <div class="d-flex  justify-content-between">
                                    <b><h5>Contact No :</h5></b>
                                    <input   class="form-control w-50 text-style" style="margin-left: ;" name="companyphone" readonly id="companyphone"/><br>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b><h5>E-Mail     :</h5></b>
                                    <input   class="form-control w-50 text-style" style="margin-left:40px ;" name="companyemail" readonly id="companyemail"/><br>
                                </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                           <!-- <div class="align-right"> -->
                           
                           <div class="d-flex">
                              <?php  $numbers = mt_rand(5000000, 50000000000);?>
                                <label for="">Receipt No:</label>
                                <label type="text" id="receiptno" name="receiptno" val="<?php echo $numbers ?>"><?php echo $numbers ?></label>
                            </div>
                            <div class="d-flex">
                                <label for="">Date:</label>
                                <label type="text" val="<?php echo date("d-y-m"); ?>" id="date" name="date"><?php echo date("d-y-m"); ?></label>
                            </div>
                           
                           <!-- </div> -->
                        </div>
                     
                     </div>

                     <div class="row mt-4" >
                       <div class="col-md-12">
                            <table class="table table-bordered" id="branchoutward">
                               <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total Price</th>
                                        <th>Date</th>
                                    </tr>
                               </thead>
                               <tbody>
                                    
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
</form>
</div>