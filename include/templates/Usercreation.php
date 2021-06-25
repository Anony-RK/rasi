<?php 
   $id=0;

 if(isset($_POST['submituser']))
 {
	   

    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updateusercreation = $userObj->updateusercreation($mysqli,$id);  
    ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editusercreation&msc=2';</script>
   <?php	
   }
    else{   
	
		$addusercreation = $userObj->addusercreation($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editusercreation&msc=1';</script>
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
	$deleteusercreation = $userObj->deleteusercreation($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editusercreation&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getusercreation = $userObj->getusercreation($mysqli,$idupd); 
	
	if (sizeof($getusercreation)>0) {
        for($igodown=0;$igodown<sizeof($getusercreation);$igodown++)  {			
			$id                       	 = $getusercreation['id'];
      $role      		        	 = $getusercreation['role'];
			$firstname          		     = $getusercreation['firstname'];
			$lastname      			           = $getusercreation['lastname'];
			$fullname       			           = $getusercreation['fullname'];
			$title                	 = $getusercreation['title'];
			$email                	 = $getusercreation['email'];
			$password            = $getusercreation['password'];
      $companyname            = $getusercreation['companyname'];		
      $status                      = $getusercreation['status']; 


       
      $administration            = $getusercreation['administration'];		
      $administration = explode(",",$administration);
     



      $master            = $getusercreation['master'];		
      $master = explode(",",$master);
     
  
      $profitallocation            = $getusercreation['profitallocation'];		
      $profitallocation = explode(",",$profitallocation);
  
      $purchaseorder            = $getusercreation['purchaseorder'];		
      $purchaseorder = explode(",",$purchaseorder);

      $grn            = $getusercreation['grn'];		
      $grn = explode(",",$grn);
  
      $mhepurchaseorder            = $getusercreation['mhepurchaseorder'];		
      $mhepurchaseorder = explode(",",$mhepurchaseorder);

      $mhegrn            = $getusercreation['mhegrn'];		
      $mhegrn = explode(",",$mhegrn);

      $financeentry            = $getusercreation['financeentry'];		
      $financeentry = explode(",",$financeentry);

      $gstr            = $getusercreation['gstr'];		
      $gstr = explode(",",$gstr);

      $workorder            = $getusercreation['workorder'];		
      $workorder = explode(",",$workorder);
  
      $billing            = $getusercreation['billing'];		
      $billing = explode(",",$billing);
  
      $fixedassets            = $getusercreation['fixedassets'];		
      $fixedassets = explode(",",$fixedassets);
  
      $financialstatement     = $getusercreation['financialstatement'];		
      $financialstatement = explode(",",$financialstatement);
  
      $hr            = $getusercreation['hr'];		
      $hr = explode(",",$hr);

		}
	}
}

  ?>
  

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Add Users</li>
					</ol>

					<a href="editusercreation">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Users </button>
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
						<p>User Creation</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                                   
                      <div class="row">
                      
                      <div class="col-md-4">
                      
                          <div class=" mt-4">
                          <label for=""> Role <span class="text-danger">*</span></label>
                          <select type="text" class="form-control " id="role" name="role">
                                <option value="">Select Role</option>
                                <option <?php if(isset($role)) { if($role == "Administration" ) echo 'selected'; }  ?> value="Administration">Administration</option>
                                <option <?php if(isset($role)) { if($role == "Employee Login" ) echo 'selected'; }  ?> value="Employee Login">Employee Login</option>
                          </select>
                          <label for="" id="rolecheck" clas="text-danger"> select Role</label>
                          </div>
                          <div class=" mt-4">
                          <label for=""> Firstname <span class="text-danger">*</span></label>
                          <input type="text"  class="form-control " id="firstname" value="<?php if(isset($firstname)) echo $firstname; ?>"  name="firstname">
                          <label for="" id="firstnamecheck" class="text-danger">Enter First Name</label>
                          </div>
                          <div class=" mt-4">
                          <label for=""> Last Name <span class="text-danger">*</span></label>
                          <input type="text"  class="form-control " id="lastname" value="<?php if(isset($lastname)) echo $lastname; ?>"  name="lastname">
                          <label for="" id="lastnamecheck" class="text-danger">Enter Last Name</label>
                          </div>
                          <div class=" mt-4">
                          <label for=""> Full Name <span class="text-danger">*</span></label>
                          <input type="text" readonly class="form-control " value="<?php if(isset($fullname)) echo $fullname; ?>"  id="fullname" name="fullname">
                          </div>
                         
                                                     
                      </div>

                      <div class="col-md-4">
                      <div class=" mt-4">
                          <label for=""> Title <span class="text-danger">*</span></label>
                          <input type="text" class="form-control " id="title" value="<?php if(isset($title)) echo $title; ?>"  name="title">
                          <label for="" id="titlecheck" class="text-danger">Enter Title</label>
                          </div>
                      <div class=" mt-4">
                      <label for=""> E-Mail Id <span class="text-danger">*</span></label>
                      <input type="text" class="form-control " id="email" value="<?php if(isset($email)) echo $email; ?>"  name="email">
                      <label  id="emailcheck" class="text-danger"> Enter Valid Email</label>
                      </div>
                      <div class="mt-4">
                      <label for=""> User Name  <span class="text-danger">*</span></label>
                      <input type="text" readonly class="form-control " value="<?php if(isset($username)) echo $username; ?>"  id="username" name="username">
                      </div>
                     
                                                
                  </div>
                  <div class="col-md-4">
                  
                  <div class="mt-4">
                          <label for=""> Password <span class="text-danger">*</span></label>
                          <input type="text" class="form-control " id="password" value="<?php if(isset($password)) echo $password; ?>"  name="password">
                          <label for="" id="passwordcheck" class="text-danger">Enter PAssword</label>
                          </div>
                          <div class="mt-4">
                          <label for=""> Confirm Password <span class="text-danger">*</span></label>
                          <input type="text" class="form-control " id="confirmpassword" value="<?php if(isset($password)) echo $password; ?>"  name="confirmpassword">
                          <label for="" id="cpasswordcheck" class="text-danger">Password Are Not Match</label>
                          </div>
                      <div class=" mt-4">
                      <label for=""> Company Name <span class="text-danger">*</span></label>
                      <select type="text" class="form-control " id="companyname" name="companyname">
                            <option value="">Select Comapny</option>
                            <option <?php if(isset($companyname)) { if($companyname == "Rasielectronics" ) echo 'selected'; }  ?> value="Rasielectronics">Rasielectronics</option>
                            <option <?php if(isset($companyname)) { if($companyname == "Rasielectronics" ) echo 'selected'; }  ?> value="Rasielectronics">Rasielectronics</option>
                            <option <?php if(isset($companyname)) { if($companyname == "Rasielectronics" ) echo 'selected'; }  ?> value="Rasielectronics">Rasielectronics</option>
                      </select>
                      <label for="" id="companycheck" class="text-danger">Select Company</label>
                      </div>
                  </div>

                
                </div>

                      </div>
                    </div>
                </div>


                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Administration</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                     
                      <div class="row">
                      
                            <div class="d-flex">
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                            <?php
                              //  $administration ="";
                              $administration1=$administration2=$administration3=$administration4=$administration5="";
                                 if(in_array("Company Creation",$administration)) {
                                  $administration1 = "checked='checked'";
                                    }
                                  if(in_array("Branch Creation",$administration)) {
                                      $administration2 = "checked='checked'";
                                    }
                                  if(in_array("Configuaration Setting",$administration)) {
                                      $administration3 = "checked='checked'";
                                    }
                                 if(in_array("Manage Users",$administration)) {
                                      $administration4 = "checked='checked'";
                                    }
                           
                              // }
                               ?>
                                <input class="form-check-input " type="checkbox" <?php //if(isset($administration1)) {  echo 'checked'; }  ?>  <?php echo $administration1; ?> value="Company Creation" id="companycreation" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Company Creation</label>
                                
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                                <input class="form-check-input" type="checkbox" <?php //if(isset($administration)) { if($administration == "Branch Creation" ) echo 'checked'; }  ?> <?php echo $administration2 ;?>  value="Branch Creation" id="branchcreation" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Branch Creation</label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                                <input class="form-check-input" type="checkbox"  <?php echo $administration3 ;?>  value="Configuaration Setting" id="configurationsetting" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Configuaration Setting</label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                                <input class="form-check-input" type="checkbox"  <?php echo $administration4 ;?>  value="Manage Users" id="manageusers" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Manage Users</label>
                            </div>                        
                            </div>
                       </div>
                      </div>
                      
                      </div>
                    </div>
                </div>


                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Master</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                           <?php 
                           $master1=$master2=$master3=$master4=$master5=$master6=$master7=$master8=$master9=$master10="";
                           if(in_array("Import Vendor Creation",$master)) {
                            $master1 = "checked='checked'";
                              }
                          if(in_array("Local Vendor Creation",$master)) {
                            $master2 = "checked='checked'";
                           } 
                           if(in_array("Customer Creation",$master)) {
                            $master3 = "checked='checked'";
                           }    
                           if(in_array("CustomerBranch List",$master)) {
                            $master4 = "checked='checked'";
                           } 
                           if(in_array("Bank Master",$master)) {
                            $master5 = "checked='checked'";
                           } 
                           if(in_array("Depreciation Schedule",$master)) {
                            $master6 = "checked='checked'";
                           } 
                           if(in_array("Tax Master",$master)) {
                            $master7 = "checked='checked'";
                           } 
                           if(in_array("Item Creation",$master)) {
                            $master8 = "checked='checked'";
                           } 

                           if(in_array("MHE Creation",$master)) {
                            $master9 = "checked='checked'";
                           } 
                           if(in_array("Finance Creation",$master)) {
                            $master10 = "checked='checked'";
                           } 
                           
                              ?>

                      <div class="row ">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $master1 ;?> value="Import Vendor Creation" id="importvendorcreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Import Vendor Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $master2 ;?> value="Local Vendor Creation" id="localvendorcreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Local Vendor Creation</label>
                        </div>
                       </div>
                      
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $master3 ;?> value="Customer Creation" id="customercreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Customer Creation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $master4 ;?> value="CustomerBranch List" id="customerbranchlist" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >CustomerBranch List</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $master5 ;?> value="Bank Master" id="bankmaster" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bank Master</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $master6 ;?> value="Depreciation Schedule" id="depreciationschedule" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Depreciation Schedule</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $master7 ;?> value="Tax Master" id="taxmaster" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Tax Master</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $master8 ;?> value="Item Creation" id="itemcreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Item Creation</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $master9 ;?>  value="MHE Creation" id="mhecreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > MHE Creation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php echo $master10 ;?>  value="Finance Creation" id="financecreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Finance Creation</label>
                         </div>
                       </div>                                     
		           </div>
                </div>
            </div>
        </div>


                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Profit Allcoation</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <div class="row">

                      <?php
                      $profitallocation1=$profitallocation2="";
                      if(in_array("Profit Allocation for Spares",$profitallocation)) {
                        $profitallocation1 = "checked='checked'";
                       } 
                       if(in_array("Equipment Landing Cost",$profitallocation)) {
                        $profitallocation2 = "checked='checked'";
                       }
                      ?>
                    <!-- <div class="d-flex"> -->
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"  <?php echo $profitallocation1; ?> value="Profit Allocation for Spares" id="profitallocation" name="profitallocation[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Profit Allocation for Spares</label>
                       </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php echo $profitallocation2; ?> value="Equipment Landing Cost" id="equipmentlandingcost" name="profitallocation[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Equipment Landing Cost</label>
                       </div>
                       </div>
                       <div class="col-md-4"></div>
                       <div class="col-md-4"></div>
                       </div>  
                          <!-- </div> -->
                     
                      </div>
                    </div>
                </div>


                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Inventory</p>
					</div>
                    <div class="card-body">
                      <div class="container mt-4">
                      <h6 class="bg-primary text-white p-2 w-25">Purchase Order</h6>

                       <div class="row mt-3">

                       <?php 
                       $purchaseorder1=$purchaseorder2=$purchaseorder3="";
                       if(in_array("Purchase Order Creation",$purchaseorder)) {
                        $purchaseorder1 = "checked='checked'";
                       }
                       if(in_array("Purchase Order List",$purchaseorder)) {
                        $purchaseorder2 = "checked='checked'";
                       }
                       if(in_array("Purchase Order Approval",$purchaseorder)) {
                        $purchaseorder3 = "checked='checked'";
                       }
                       ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $purchaseorder1; ?>  value="Purchase Order Creation" id="purchaseordercreation" name="purchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Order Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $purchaseorder2;  ?> value="Purchase Order List" id="purchaseorderlist" name="purchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Order List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $purchaseorder3 ;  ?>  value="Purchase Order Approval" id="purchaseorderapproval" name="purchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Order Approval</label>
                        </div>
                       </div>
                    </div><br>
                    <h6 class="bg-primary text-white p-2 w-25">GRN</h6>
                    <div class="row mt-3">
                    <?php 
                        if(in_array("GRN Creation",$grn)) {
                          $$grn1 = "checked='checked'";
                        }
                        if(in_array("GRN Waiting for Approval",$grn)) {
                          $$grn2 = "checked='checked'";
                        }
                          ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php echo $grn1;  ?> value="GRN Creation" id="grncreation" name="grn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >GRN Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $grn2; ?> value="GRN Waiting for Approval" id="grnwaitingforapproval" name="grn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >GRN Waiting for Approval</label>
                        </div>
                       </div>
                       
                    </div><br>


                    <h6 class="bg-primary text-white p-2 w-25">MHE Purchase Order</h6>
                    <div class="row mt-3">
                    <?php
                        if(in_array("MHE Purchase Order Creation",$mhepurchaseorder)) {
                          $mhepurchaseorder1 = "checked='checked'";
                        }
                        if(in_array("MHE Purchase Order List",$mhepurchaseorder)) {
                          $mhepurchaseorder2 = "checked='checked'";
                        }
                        if(in_array("MHE Purchase Order Approval",$mhepurchaseorder)) {
                          $mhepurchaseorder3 = "checked='checked'";
                        }
                        ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $mhepurchaseorder1; ?> value="MHE Purchase Order Creation" id="nhepurchaseordercreation" name="mhepurchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE Purchase Order Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $mhepurchaseorder2; ?> value="MHE Purchase Order List" id="mhepurchaseorderlist" name="mhepurchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE Purchase Order List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $mhepurchaseorder3; ?> value="MHE Purchase Order Approval" id="nhepurchaseorderapproval" name="mhepurchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE Purchase Order Approval</label>
                        </div>
                       </div>
                    </div>
                    <br>


                    <h6 class="bg-primary text-white p-2 w-25">MHE GRN</h6>
                    <div class="row mt-3">
                    <?php
                        if(in_array("MHE GRN Creation",$mhegrn)) {
                          $mhegrn1 = "checked='checked'";
                        }
                        if(in_array("MHE Stock Numbering",$mhegrn)) {
                          $mhegrn3 = "checked='checked'";
                        }
                        if(in_array("MHE Classification",$mhegrn)) {
                          $mhegrn4 = "checked='checked'";
                        }
                        if(in_array("Stock Numbering",$mhegrn)) {
                          $mhegrn5 = "checked='checked'";
                        }
                        if(in_array("Indent Inventory",$mhegrn)) {
                          $mhegrn6 = "checked='checked'";
                        }
                        if(in_array("Stock Movement",$mhegrn)) {
                          $mhegrn7 = "checked='checked'";
                        }
                        if(in_array("MHE GRN Waiting for Approval",$mhegrn)) {
                          $mhegrn2 = "checked='checked'";
                        }
                        ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php  echo $mhegrn1; ?> value="MHE GRN Creation" id="mhegrncreation" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE GRN Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php  echo $mhegrn2; ?> value="MHE GRN Waiting for Approval" id="mhegrnwaiting" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE GRN Waiting for Approval</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php  echo $mhegrn3;  ?> value="MHE Stock Numbering" id="mhestocknumbering" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > MHE Stock Numbering</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php  echo $mhegrn4; ?> value="MHE Classification" id="mheclassification" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > MHE Classification</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                       
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $mhegrn5; ?> value="Stock Numbering" id="stocknumbering" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Stock Numbering</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php  echo $mhegrn6; ?> value="Indent Inventory" id="dentinventory" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Indent Inventory</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $mhegrn7; ?> value="Stock Movement" id="stockmovement" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Stock Movement</label>
                        </div>
                       </div>
                    </div>
                    <br>
                     


                    <h6 class="bg-primary text-white p-2 w-25">Damage and Expiry</h6>
                    <div class="row mt-3">
                    <?php
                      if(in_array("Damage Creation",$damageandexpiry)) {
                        $damageandexpiry1 = "checked='checked'";
                      }
                      if(in_array("Damage Open List",$damageandexpiry)) {
                        $damageandexpiry2 = "checked='checked'";
                      }
                      if(in_array("Damage Closed List",$damageandexpiry)) {
                        $damageandexpiry3 = "checked='checked'";
                      }
                      if(in_array("Sale/PurchaseList",$damageandexpiry)) {
                        $damageandexpiry4 = "checked='checked'";
                      }
                    ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $damageandexpiry1; ?> value="Damage Creation" id="damagecreation" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Damage Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $damageandexpiry2;  ?> value="Damage Open List" id="damageopenlist" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Damage Open List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $damageandexpiry3; ?> value="Damage Closed List" id="damageclosedlist" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Damage Closed List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $damageandexpiry4;  ?> value="Sale/PurchaseList"  id="salepurchaselist" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Sale/PurchaseList</label>
                         </div>
                       </div>
                    </div>
                     </div></div>
                    </div>
                    <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Finance</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <h6 class="bg-primary text-white p-2 w-25">Finance Entry</h6>
                      <div class="row mt-3">
                      <?php
                      $financeentry1=$financeentry2=$financeentry3=$financeentry4=$financeentry5=$financeentry6=$financeentry7=$financeentry8
                      =$financeentry9=$financeentry10=$financeentry11=$financeentry12=$financeentry13=$financeentry14=$financeentry15="";
                    if(in_array("Cash Income",$financeentry)) {
                      $financeentry1 = "checked='checked'";
                    }
                    if(in_array("Bank Income",$financeentry)) {
                      $financeentry2 = "checked='checked'";
                    }
                    if(in_array("Cash Payment",$financeentry)) {
                      $financeentry3 = "checked='checked'";
                    }
                    if(in_array("Bank Payment",$financeentry)) {
                      $financeentry4 = "checked='checked'";
                    }
                    if(in_array("Joural",$financeentry)) {
                      $financeentry5 = "checked='checked'";
                    }
                    if(in_array("Contra",$financeentry)) {
                      $financeentry6 = "checked='checked'";
                    }
                    if(in_array("Purchase Entry",$financeentry)) {
                      $financeentry7 = "checked='checked'";
                    }
                    if(in_array("Debit or CreditNote",$financeentry)) {
                      $financeentry8 = "checked='checked'";
                    }
                    if(in_array("Ledger View",$financeentry)) {
                      $financeentry9 = "checked='checked'";
                    }
                    if(in_array("Trial Balance View",$financeentry)) {
                      $financeentry10 = "checked='checked'";
                    }
                    if(in_array("Multiple Voucher Print",$financeentry)) {
                      $financeentry11 = "checked='checked'";
                    }
                    if(in_array("CostCentre Analysis",$financeentry)) {
                      $financeentry12 = "checked='checked'";
                    }
                    if(in_array("DayBook",$financeentry)) {
                      $financeentry13 = "checked='checked'";
                    }
                    if(in_array("BRS",$financeentry)) {
                      $financeentry14 = "checked='checked'";
                    }
                    if(in_array("Cash Limit Approval",$financeentry)) {
                      $financeentry15 = "checked='checked'";
                    }

                      ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry1;  ?> value="Cash Income" id="cashincome" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Cash Income</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $financeentry2;  ?> value="Bank Income" id="bankincome" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bank Income</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry3;  ?> value="Cash Payment" id="cashpayment" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Cash Payment</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry4;  ?> value="Bank Payment" id="bankpayment" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bank Payment</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry5;  ?> value="Joural" id="jural" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Joural</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $financeentry6;  ?> value="Contra" id="contra" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Contra</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry7;  ?> value="Purchase Entry"  id="purchaseentry" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Entry</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry8;  ?> value="Debit or CreditNote" id="debitorcreditnote" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Debit or CreditNote</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry9;  ?> value="Ledger View" id="ledgerview" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Ledger View</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $financeentry10;  ?> value="Trial Balance View" id="trialbalanceview" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Trial Balance View</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $financeentry11;  ?> value="Multiple Voucher Print" id="multiplevoucherprint" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Multiple Voucher Print</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry12;  ?> value="CostCentre Analysis" id="costcenteranalysis" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >CostCentre Analysis</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry13;  ?> value="DayBook" id="daybook" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >DayBook</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $financeentry14;  ?> value="BRS" id="brs" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >BRS</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $financeentry15;  ?> value="Cash Limit Approval" id="cashlimitapproval" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Cash Limit Approval</label>
                        </div>
                       </div>
                    </div>
                   <br><br>


                    <h6 class="bg-primary text-white p-2 w-25">GSTR</h6>
                    <div class="row mt-3">
                    <?php
                    $gstr1=$gstr2=$gstr3="";
                    if(in_array("GSRT1",$gstr)) {
                      $gstr1 = "checked='checked'";
                    }
                    if(in_array("GSRT2",$gstr)) {
                      $gstr2 = "checked='checked'";
                    }
                    if(in_array("GSRT3",$gstr)) {
                      $gstr3 = "checked='checked'";
                    }

                    ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $gstr1; ?> value="GSTR1" id="gstr1" name="gstr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > GSTR1</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $gsrt2; ?> value="GSTR2" id="gstr2" name="gstr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >GSTR2</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $gsrt3  ?> value="GSTR3" id="gstr3" name="gstr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > GSTR3</label>
                        </div>
                       </div>
                    </div>
                      
		             </div>
                   </div>
                </div>
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Production</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <h6 class="bg-primary text-white p-2 w-25">Working Order</h6>
                    <div class="row mt-3">
                    <?php 
                    $workorder1=$workorder2=$workorder3=$workorder4="";
                     if(in_array("Work Order Creation",$workorder)) {
                      $workorder1 = "checked='checked'";
                    }
                    if(in_array("Work Order List",$workorder)) {
                      $workorder2 = "checked='checked'";
                    }
                    if(in_array("Indent Production",$workorder)) {
                      $workorder3 = "checked='checked'";
                    }
                    if(in_array("Return to Inventory",$workorder)) {
                      $workorder4 = "checked='checked'";
                    }

                    ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $workorder1;  ?> value="Work Order Creation" id="workordercreation" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Work Order Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $workorder2; ?> value="Work Order List" id="workorderlist" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Work Order List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $workorder3;  ?> value="Indent Production" id="indentproduction" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Indent Production</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $workorder4;  ?> value="Return to Inventory" id="returntoinventory" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Return to Inventory</label>
                        </div>
                       </div>
                    </div>
		             </div>
                   </div>
                </div>
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Billing</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <div class="row">

                      <?php
                      $billing1=$billing2=$billing3=$billing4=$billing5=$billing6=$billing7=$billing8="";
                      
                      if(in_array("Quotation Order",$billing)) {
                        $billing1 = "checked='checked'";
                      }
                      if(in_array("SpareParts Quotation Order",$billing)) {
                        $billing2 = "checked='checked'";
                      }
                      if(in_array("Quotaion Order Print",$billing)) {
                        $billing3 = "checked='checked'";
                      }
                      if(in_array("Billing Sale",$billing)) {
                        $billing4 = "checked='checked'";
                      }
                      if(in_array("Billing Spare Sale",$billing)) {
                        $billing5 = "checked='checked'";
                      }
                      if(in_array("Billing Sale Print",$billing)) {
                        $billing6 = "checked='checked'";
                      }
                      if(in_array("StockOutward Print",$billing)) {
                        $billing7 = "checked='checked'";
                      }
                      if(in_array("Spare Billing Sale Print",$billing)) {
                        $billing8 = "checked='checked'";
                      }

                      ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $billing1; ?> value="Quotation Order" id="quotationorder" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Quotation Order</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $billing2; ?> value="SpareParts Quotation Order" id="sparepartsquotationorder" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >SpareParts Quotation Order</label>
                        </div>
                       </div>
                      
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $billing3; ?> value="Quotaion Order Print" id="quotationorderprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Quotaion Order Print</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $billing4; ?> value="Billing Sale" id="billingsale" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Billing Sale</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                      
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $billing5; ?> value="Billing Spare Sale" id="billingsparesale" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Billing Spare Sale</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $billing6; ?> value="Billing Sale Print" id="billingsaleprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Billing Sale Print</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $billing7; ?> value="StockOutward Print" id="stockoutwardprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >StockOutward Print</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $billing8; ?> value="Spare Billing Sale Print" id="sparebillingsaleprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Spare Billing Sale Print</label>
                        </div>
                       </div>              
                    </div>
		             </div>
                   </div>
                </div>
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Fixed Assets</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <div class="row ">
                      <?php
                       $fixedassets1= $fixedassets2= $fixedassets3= $fixedassets4= $fixedassets5
                       = $fixedassets6= $fixedassets7= $fixedassets8= $fixedassets9= $fixedassets10="";
                        if(in_array("Asset Request Form",$fixedassets)) {
                          $fixedassets1 = "checked='checked'";
                        }
                        if(in_array("Asset Request List",$fixedassets)) {
                          $fixedassets2 = "checked='checked'";
                        }
                        if(in_array("Asset Approval",$fixedassets)) {
                          $fixedassets3 = "checked='checked'";
                        }
                        if(in_array("PO Asset Create",$fixedassets)) {
                          $fixedassets4 = "checked='checked'";
                        }
                        if(in_array("PO Asset Print",$fixedassets)) {
                          $fixedassets5 = "checked='checked'";
                        }
                        if(in_array("Purchase Entry",$fixedassets)) {
                          $fixedassets6 = "checked='checked'";
                        }
                        if(in_array("Damage Sale",$fixedassets)) {
                          $fixedassets7 = "checked='checked'";
                        }
                        if(in_array("Physical Verification",$fixedassets)) {
                          $fixedassets8 = "checked='checked'";
                        }
                        if(in_array("FA Register",$fixedassets)) {
                          $fixedassets9 = "checked='checked'";
                        }
                        if(in_array("Dep Report",$fixedassets)) {
                          $fixedassets10 = "checked='checked'";
                        }

                      ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $fixedassets1; ?> value="Asset Request Form" id="assetrequestform" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Asset Request Form</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $fixedassets2; ?> value="Asset Request List" id="assetrequestlist" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Asset Request List</label>
                        </div>
                       </div>
                      
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $fixedassets3; ?> value="Asset Approval" id="assetapproval" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Asset Approval</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $fixedassets4; ?> value="PO Asset Create" id="poassetcreate" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >PO Asset Create</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $fixedassets5; ?> value="PO Asset Print" id="poassetprint" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >PO Asset Print</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $fixedassets6; ?> value="Purchase Entry" id="purchaseentry" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Entry</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $fixedassets7; ?> value="Damage Sale" id="damagesale" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Damage Sale</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $fixedassets8; ?> value="Physical Verification" id="physicalverification" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Physical Verification</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $fixedassets9; ?> value="FA Register" id="faregister" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >FA Register</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $fixedassets10; ?> value="Dep Report" id="depreport" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Dep Report</label>
                         </div>
                       </div>
                                      
		             </div>
                                
		             </div>
                   </div>
                </div>
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>Financial Statement</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <div class="row">
                      <?php
                      $financialstatement1=$financialstatement2=$financialstatement3
                      =$financialstatement4=$financialstatement5="";
                      if(in_array("Bills Payable",$financialstatement)) {
                        $financialstatement1 = "checked='checked'";
                         }
                      if(in_array("Bills Receivable",$financialstatement)) {
                        $financialstatement2 = "checked='checked'";
                         } 
                         if(in_array("Scheduling Group",$financialstatement)) {
                          $financialstatement3 = "checked='checked'";
                           }     
                           if(in_array("Balance Sheet",$financialstatement)) {
                            $financialstatement4 = "checked='checked'";
                             }
                             if(in_array("Unmaped Ledger",$financialstatement)) {
                               $financialstatement5 = "checked='checked'";
                              }
                      ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"  <?php echo $financialstatement1;  ?> value="Bills Payable" id="billpayable" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bills Payable</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php echo $financialstatement2; ?> value="Bills Receivable" id="billreceivable" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bills Receivable</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php echo $financialstatement3; ?> value="Scheduling Group" id="Schedulingroup" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Scheduling Group</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"  <?php echo $financialstatement4;  ?> value="Balance Sheet" id="balancesheet" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Balance Sheet</label>
                         </div>
                       </div>
                       
                    </div>
                    <div class="row mt-3">
                        
                       <div class="col-md-4">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php echo $financialstatement5; ?> value="Unmaped Ledger" id="unmapedledger" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Unmaped Ledger</label>
                        </div>
                       </div>                      
                    </div>
		             </div>
                   </div>
                </div>
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<p>HR</p>
					</div>
                    <div class="card-body">
                      <div class="container">
                      <div class="row">
                      <?php
                      $hr1=$hr2=$hr3=$hr4=$hr5=$hr6=$hr7=$hr8="";
                      if(in_array("Selection Candidate",$hr)) {
                        $hr1 = "checked='checked'";
                       }
                       if(in_array("New Joinee Creation",$hr)) {
                        $hr2 = "checked='checked'";
                       }
                       if(in_array("Attendance Regularisation",$hr)) {
                        $hr3 = "checked='checked'";
                       }
                       if(in_array("Request List",$hr)) {
                        $hr4 = "checked='checked'";
                       }
                       if(in_array("To Approve Leave",$hr)) {
                        $hr5 = "checked='checked'";
                       }
                       if(in_array("Branch Transfer",$hr)) {
                        $hr6 = "checked='checked'";
                       }
                       if(in_array("To Approve Laon",$hr)) {
                        $hr7 = "checked='checked'";
                       }
                       if(in_array("PayRoll Sheet",$hr)) {
                        $hr8 = "checked='checked'";
                       }

                      ?>
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $hr1;  ?> value="Selection Candidate" id="selectioncandidate" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Selection Candidate</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $hr2;  ?> value="New Joinee Creation" id="newjoineecreation" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >New Joinee Creation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $hr3;  ?> value="Attendance Regularisation" id="attendanceregularisation" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Attendance Regularisation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $hr4;  ?> value="Request List" id="requestlist" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Request List</label>
                        </div>
                       </div>                  
		             </div>
                     <div class="row mt-3" >
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $hr5; ?> value="To Approve Leave" id="toapproveleave" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >To Approve Leave</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $hr6; ?> value="Branch Transfer" id="branchtransferr" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Branch Transfer</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php echo $hr7; ?> value="To Approve Laon" id="toapprovelaon" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >To Approve Laon</label>
                        </div>
                       </div>   
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php echo $hr8;  ?> value="PayRoll Sheet" id="payrollsheet" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > PayRoll Sheet</label>
                         </div>
                       </div>               
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
							    <button type="submit" name="submituser" id="submituser" class="btn btn-primary"  tabindex="73">Submit</button>
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