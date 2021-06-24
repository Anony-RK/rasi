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
                                <input class="form-check-input " type="checkbox" <?php if(isset($administration)) { if($administration == "Company Creation" ) echo 'checked'; }  ?>  value="Company Creation" id="companycreation" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Company Creation</label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                                <input class="form-check-input" type="checkbox" <?php if(isset($administration)) { if($administration == "Branch Creation" ) echo 'checked'; }  ?>  value="Branch Creation" id="branchcreation" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Branch Creation</label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                                <input class="form-check-input" type="checkbox" <?php if(isset($administration)) { if($administration == "Configuaration Setting" ) echo 'checked'; }  ?>  value="Configuaration Setting" id="configurationsetting" name="administration[]">
                                <label class="form-check-label ml-2" for="flexCheckDefault" > Configuaration Setting</label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-check d-flex align-items-center custom-checkbox">
                                <input class="form-check-input" type="checkbox" <?php if(isset($administration)) { if($administration == "Manage Users" ) echo 'checked'; }  ?>  value="Manage Users" id="manageusers" name="administration[]">
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


                      <div class="row ">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($master)) { if($master == "Import Vendor Creation" ) echo 'checked'; }  ?> value="Import Vendor Creation" id="importvendorcreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Import Vendor Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($master)) { if($master == "Local Vendor Creation" ) echo 'checked'; }  ?> value="Local Vendor Creation" id="localvendorcreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Local Vendor Creation</label>
                        </div>
                       </div>
                      
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($master)) { if($master == "Customer Creation" ) echo 'checked'; }  ?> value="Customer Creation" id="customercreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Customer Creation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($master)) { if($master == "CustomerBranch List" ) echo 'checked'; }  ?> value="CustomerBranch List" id="customerbranchlist" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >CustomerBranch List</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($master)) { if($master == "Bank Master" ) echo 'checked'; }  ?> value="Bank Master" id="bankmaster" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bank Master</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($master)) { if($master == "Depreciation Schedule" ) echo 'checked'; }  ?> value="Depreciation Schedule" id="depreciationschedule" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Depreciation Schedule</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($master)) { if($master == "Tax Master" ) echo 'checked'; }  ?> value="Tax Master" id="taxmaster" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Tax Master</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($master)) { if($master == "Item Creation" ) echo 'checked'; }  ?> value="Item Creation" id="itemcreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Item Creation</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($master)) { if($master == "MHE Creation" ) echo 'checked'; }  ?>  value="MHE Creation" id="mhecreation" name="master[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > MHE Creation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($master)) { if($master == "Finance Creation" ) echo 'checked'; }  ?>  value="Finance Creation" id="financecreation" name="master[]">
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
                    <!-- <div class="d-flex"> -->
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"  <?php if(isset($profitallocation)) { if($profitallocation == "Profit Allocation for Spares" ) echo 'checked'; }  ?> value="Profit Allocation for Spares" id="profitallocation" name="profitallocation[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Profit Allocation for Spares</label>
                       </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php if(isset($profitallocation)) { if($profitallocation == "Equipment Landing Cost" ) echo 'checked'; }  ?> value="Equipment Landing Cost" id="equipmentlandingcost" name="profitallocation[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($purchaseorder)) { if($purchaseorder == "Purchase Order Creation" ) echo 'checked'; }  ?> value="Purchase Order Creation" id="purchaseordercreation" name="purchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Order Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($purchaseorder)) { if($purchaseorder == "Purchase Order List" ) echo 'checked'; }  ?> value="Purchase Order List" id="purchaseorderlist" name="purchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Order List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($purchaseorder)) { if($purchaseorder == "Purchase Order Approval" ) echo 'checked'; }  ?> value="Purchase Order Approval" id="purchaseorderapproval" name="purchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Order Approval</label>
                        </div>
                       </div>
                    </div><br>
                    <h6 class="bg-primary text-white p-2 w-25">GRN</h6>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($grn)) { if($grn == "GRN Creation" ) echo 'checked'; }  ?> value="GRN Creation" id="grncreation" name="grn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >GRN Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($grn)) { if($grn == "GRN Waiting for Approval" ) echo 'checked'; }  ?> value="GRN Waiting for Approval" id="grnwaitingforapproval" name="grn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >GRN Waiting for Approval</label>
                        </div>
                       </div>
                       
                    </div><br>


                    <h6 class="bg-primary text-white p-2 w-25">MHE Purchase Order</h6>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhepurchaseorder)) { if($mhepurchaseorder == "MHE Purchase Order Creation" ) echo 'checked'; }  ?> value="MHE Purchase Order Creation" id="nhepurchaseordercreation" name="mhepurchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE Purchase Order Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($mhepurchaseorder)) { if($mhepurchaseorder == "MHE Purchase Order List" ) echo 'checked'; }  ?> value="MHE Purchase Order List" id="mhepurchaseorderlist" name="mhepurchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE Purchase Order List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhepurchaseorder)) { if($mhepurchaseorder == "MHE Purchase Order Approval" ) echo 'checked'; }  ?> value="MHE Purchase Order Approval" id="nhepurchaseorderapproval" name="mhepurchaseorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE Purchase Order Approval</label>
                        </div>
                       </div>
                    </div>
                    <br>


                    <h6 class="bg-primary text-white p-2 w-25">MHE GRN</h6>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "MHE GRN Creation" ) echo 'checked'; }  ?> value="MHE GRN Creation" id="mhegrncreation" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE GRN Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "MHE GRN Waiting for Approval" ) echo 'checked'; }  ?> value="MHE GRN Waiting for Approval" id="mhegrnwaiting" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >MHE GRN Waiting for Approval</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "MHE Stock Numbering" ) echo 'checked'; }  ?> value="MHE Stock Numbering" id="mhestocknumbering" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > MHE Stock Numbering</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "MHE Classification" ) echo 'checked'; }  ?> value="MHE Classification" id="mheclassification" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > MHE Classification</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                       
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "Stock Numbering" ) echo 'checked'; }  ?> value="Stock Numbering" id="stocknumbering" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Stock Numbering</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "Indent Inventory" ) echo 'checked'; }  ?> value="Indent Inventory" id="dentinventory" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Indent Inventory</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($mhegrn)) { if($mhegrn == "Stock Movement" ) echo 'checked'; }  ?> value="Stock Movement" id="stockmovement" name="mhegrn[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Stock Movement</label>
                        </div>
                       </div>
                    </div>
                    <br>
                     


                    <h6 class="bg-primary text-white p-2 w-25">Damage and Expiry</h6>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($damageandexpiry)) { if($damageandexpiry == "Damage Creation" ) echo 'checked'; }  ?> value="Damage Creation" id="damagecreation" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Damage Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($damageandexpiry)) { if($damageandexpiry == "Damage Open List" ) echo 'checked'; }  ?> value="Damage Open List" id="damageopenlist" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Damage Open List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($damageandexpiry)) { if($damageandexpiry == "Damage Closed List" ) echo 'checked'; }  ?> value="Damage Closed List" id="damageclosedlist" name="damageandexpiry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Damage Closed List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($damageandexpiry)) { if($damageandexpiry == "Sale/PurchaseList" ) echo 'checked'; }  ?> value="Sale/PurchaseList"  id="salepurchaselist" name="damageandexpiry[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($financeentry)) { if($financeentry == "Cash Income" ) echo 'checked'; }  ?> value="Cash Income" id="cashincome" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Cash Income</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($financeentry)) { if($financeentry == "Bank Income" ) echo 'checked'; }  ?> value="Bank Income" id="bankincome" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bank Income</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($financeentry)) { if($financeentry == "Cash Payment" ) echo 'checked'; }  ?> value="Cash Payment" id="cashpayment" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Cash Payment</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($financeentry)) { if($financeentry == "Bank Payment" ) echo 'checked'; }  ?> value="Bank Payment" id="bankpayment" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bank Payment</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($financeentry)) { if($financeentry == "Joural" ) echo 'checked'; }  ?> value="Joural" id="jural" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Joural</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "Contra" ) echo 'checked'; }  ?> value="Contra" id="contra" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Contra</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "Purchase Entry" ) echo 'checked'; }  ?> value="Purchase Entry"  id="purchaseentry" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Entry</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "Debit or CreditNote" ) echo 'checked'; }  ?> value="Debit or CreditNote" id="debitorcreditnote" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Debit or CreditNote</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "Ledger View" ) echo 'checked'; }  ?> value="Ledger View" id="ledgerview" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Ledger View</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "Trial Balance View" ) echo 'checked'; }  ?> value="Trial Balance View" id="trialbalanceview" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Trial Balance View</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "Multiple Voucher Print" ) echo 'checked'; }  ?> value="Multiple Voucher Print" id="multiplevoucherprint" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Multiple Voucher Print</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "CostCentre Analysis" ) echo 'checked'; }  ?> value="CostCentre Analysis" id="costcenteranalysis" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >CostCentre Analysis</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "DayBook" ) echo 'checked'; }  ?> value="DayBook" id="daybook" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >DayBook</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"<?php if(isset($financeentry)) { if($financeentry == "BRS" ) echo 'checked'; }  ?> value="BRS" id="brs" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >BRS</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($financeentry)) { if($financeentry == "Cash Limit Approval" ) echo 'checked'; }  ?> value="Cash Limit Approval" id="cashlimitapproval" name="financeentry[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Cash Limit Approval</label>
                        </div>
                       </div>
                    </div>
                   <br><br>


                    <h6 class="bg-primary text-white p-2 w-25">GSTR</h6>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($gstr)) { if($gstr == "GSTR1" ) echo 'checked'; }  ?> value="GSTR1" id="gstr1" name="gstr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > GSTR1</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($gstr)) { if($gstr == "GSTR2" ) echo 'checked'; }  ?> value="GSTR2" id="gstr2" name="gstr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >GSTR2</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($gstr)) { if($gstr == "GSTR3" ) echo 'checked'; }  ?> value="GSTR3" id="gstr3" name="gstr[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($workorder)) { if($workorder == "Work Order Creation" ) echo 'checked'; }  ?> value="Work Order Creation" id="workordercreation" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Work Order Creation</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($workorder)) { if($workorder == "Work Order List" ) echo 'checked'; }  ?> value="Work Order List" id="workorderlist" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Work Order List</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($workorder)) { if($workorder == "Indent Production" ) echo 'checked'; }  ?> value="Indent Production" id="indentproduction" name="workorder[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Indent Production</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($workorder)) { if($workorder == "Return to Inventory" ) echo 'checked'; }  ?> value="Return to Inventory" id="returntoinventory" name="workorder[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($billing)) { if($billing == "Quotation Order" ) echo 'checked'; }  ?> value="Quotation Order" id="quotationorder" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Quotation Order</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($billing)) { if($billing == "SpareParts Quotation Order" ) echo 'checked'; }  ?> value="SpareParts Quotation Order" id="sparepartsquotationorder" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >SpareParts Quotation Order</label>
                        </div>
                       </div>
                      
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($billing)) { if($billing == "Quotaion Order Print" ) echo 'checked'; }  ?> value="Quotaion Order Print" id="quotationorderprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Quotaion Order Print</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($billing)) { if($billing == "Billing Sale" ) echo 'checked'; }  ?> value="Billing Sale" id="billingsale" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Billing Sale</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                      
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($billing)) { if($billing == "Billing Spare Sale" ) echo 'checked'; }  ?> value="Billing Spare Sale" id="billingsparesale" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Billing Spare Sale</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($billing)) { if($billing == "Billing Sale Print" ) echo 'checked'; }  ?> value="Billing Sale Print" id="billingsaleprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Billing Sale Print</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($billing)) { if($billing == "StockOutward Print" ) echo 'checked'; }  ?> value="StockOutward Print" id="stockoutwardprint" name="billing[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >StockOutward Print</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($billing)) { if($billing == "Spare Billing Sale Print" ) echo 'checked'; }  ?> value="Spare Billing Sale Print" id="sparebillingsaleprint" name="billing[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($fixedassets)) { if($fixedassets == "Asset Request Form" ) echo 'checked'; }  ?> value="Asset Request Form" id="assetrequestform" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Asset Request Form</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"<?php if(isset($fixedassets)) { if($fixedassets == "Asset Request List" ) echo 'checked'; }  ?> value="Asset Request List" id="assetrequestlist" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Asset Request List</label>
                        </div>
                       </div>
                      
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($fixedassets)) { if($fixedassets == "Asset Approval" ) echo 'checked'; }  ?> value="Asset Approval" id="assetapproval" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Asset Approval</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"<?php if(isset($fixedassets)) { if($fixedassets == "PO Asset Create" ) echo 'checked'; }  ?> value="PO Asset Create" id="poassetcreate" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >PO Asset Create</label>
                        </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"<?php if(isset($fixedassets)) { if($fixedassets == "PO Asset Print" ) echo 'checked'; }  ?> value="PO Asset Print" id="poassetprint" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >PO Asset Print</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($fixedassets)) { if($fixedassets == "Purchase Entry" ) echo 'checked'; }  ?> value="Purchase Entry" id="purchaseentry" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Purchase Entry</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($fixedassets)) { if($fixedassets == "Damage Sale" ) echo 'checked'; }  ?> value="Damage Sale" id="damagesale" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Damage Sale</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($fixedassets)) { if($fixedassets == "Physical Verification" ) echo 'checked'; }  ?> value="Physical Verification" id="physicalverification" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Physical Verification</label>
                         </div>
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($fixedassets)) { if($fixedassets == "FA Register" ) echo 'checked'; }  ?> value="FA Register" id="faregister" name="fixedassets[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >FA Register</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($fixedassets)) { if($fixedassets == "Dep Report" ) echo 'checked'; }  ?> value="Dep Report" id="depreport" name="fixedassets[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"  <?php if(isset($financialstatement)) { if($financialstatement == "Bills Payable" ) echo 'checked'; }  ?> value="Bills Payable" id="billpayable" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bills Payable</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php if(isset($financialstatement)) { if($financialstatement == "Bills Receivable" ) echo 'checked'; }  ?> value="Bills Receivable" id="billreceivable" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Bills Receivable</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php if(isset($financialstatement)) { if($financialstatement == "Scheduling Group" ) echo 'checked'; }  ?> value="Scheduling Group" id="Schedulingroup" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Scheduling Group</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox"  <?php if(isset($financialstatement)) { if($financialstatement == "Balance Sheet" ) echo 'checked'; }  ?> value="Balance Sheet" id="balancesheet" name="financialstatement[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" > Balance Sheet</label>
                         </div>
                       </div>
                       
                    </div>
                    <div class="row mt-3">
                        
                       <div class="col-md-4">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox"  <?php if(isset($financialstatement)) { if($financialstatement == "Unmaped Ledger" ) echo 'checked'; }  ?> value="Unmaped Ledger" id="unmapedledger" name="financialstatement[]">
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
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($hr)) { if($hr == "Selection Candidate" ) echo 'checked'; }  ?> value="Selection Candidate" id="selectioncandidate" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >  Selection Candidate</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($hr)) { if($hr == "New Joinee Creation" ) echo 'checked'; }  ?> value="New Joinee Creation" id="newjoineecreation" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >New Joinee Creation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($hr)) { if($hr == "Attendance Regularisation" ) echo 'checked'; }  ?> value="Attendance Regularisation" id="attendanceregularisation" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Attendance Regularisation</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($hr)) { if($hr == "Request List" ) echo 'checked'; }  ?> value="Request List" id="requestlist" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Request List</label>
                        </div>
                       </div>                  
		             </div>
                     <div class="row mt-3" >
                        <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($hr)) { if($hr == "To Approve Leave" ) echo 'checked'; }  ?> value="To Approve Leave" id="toapproveleave" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >To Approve Leave</label>
                         </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($hr)) { if($hr == "Branch Transfer" ) echo 'checked'; }  ?> value="Branch Transfer" id="branchtransferr" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >Branch Transfer</label>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input" type="checkbox" <?php if(isset($hr)) { if($hr == "To Approve Laon" ) echo 'checked'; }  ?> value="To Approve Laon" id="toapprovelaon" name="hr[]">
                           <label class="form-check-label ml-2" for="flexCheckDefault" >To Approve Laon</label>
                        </div>
                       </div>   
                       <div class="col-md-3">
                         <div class="form-check d-flex align-items-center custom-checkbox">
                           <input class="form-check-input " type="checkbox" <?php if(isset($hr)) { if($hr == "PayRoll Sheet" ) echo 'checked'; }  ?> value="PayRoll Sheet" id="payrollsheet" name="hr[]">
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