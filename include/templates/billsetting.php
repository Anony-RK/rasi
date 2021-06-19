<?php 
   $id=0;
   $usersettinglist=$userObj->getUsersetting($mysqli);
 if(isset($_POST['submitbillsetting']) )
 {
	   
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	


    $updatebillsetting = $userObj->updatebillsetting($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editbillsetting&msc=2';</script>
    <?php	}
    else{   
	
		$addbillsetting = $userObj->addbillsetting($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editbillsetting&msc=1';</script>
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
	$deletebillsetting = $userObj->deletebillsetting($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editbillsetting&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getbillsetting = $userObj->getbillsetting($mysqli,$idupd); 
	
	if (sizeof($getbillsetting)>0) {
        for($ibill=0;$ibill<sizeof($getbillsetting);$ibill++)  {			
			$id                 	 = $getbillsetting['id'];
		
			$users                      = $getbillsetting['users'];
			$billtypes                  = $getbillsetting['billtypes']; 
            $status                      = $getbillsetting['status'];  
		}
	}
}

  ?>
  
<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Settings</li>
					</ol>
					<a href="editbillsetting">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Setting</button>
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
					<div class="card-header">
						<div class="card-title">bill setting</div>
					</div>
                    <div class="card-body">


<div class="container">

<div class="row">
   

    <div class="col-md-2"></div>
    <div class="col-md-8">
<?php


// $sqlt = "SELECT user_name FROM user";
// $queryt = mysqli_query($mysqli,$sqlt);

// echo "Select a facility to host event:<select name='users' class='form-control'>";
// echo "<option >Select Users</option>";
// while ($resultt = mysqli_fetch_array($queryt)){
// echo "<option value='" .$resultt['user_name']."'>" . $resultt['user_name'] . "</option>";
//     }
// echo "</select>";
// echo "<br></br>";

?>


    <p><b>Select Users</b><span class="text-danger ml-2">*</span></p>
        <select class="form-control" id="users" name="users" onchange = "ajaxload()" aria-label="Default select example">
        <option value="">Select User</option>
					   <?php
							if(isset($usersettinglist)){
								for($i=0;$i<=sizeof($usersettinglist)-1;$i++){
							?>
					<option <?php if(isset($users)) { if($users == $usersettinglist[$i] ) echo 'selected'; } ?> 
						value="<?php if(isset($usersettinglist[$i])){ echo $usersettinglist[$i];} ?>">
							<?php if(isset($usersettinglist[$i])){ echo $usersettinglist[$i];} ?></option>
								<?php }} ?>

        </select>

    </div>
    <div class="col-md-2">
    
    <!----------------------->
    <!-- <option value="">Select Vendor</option> -->
    
	   <?php
// 		if(isset($vendorlist)){
// 		for($i=0;$i<=sizeof($vendorlist)-1;$i++){
// 			?>
 <!-- <option <?php// if(isset($vendor)) {if($vendor == $vendorlist[$i] ) echo 'selected'; } ?>  value="<?php// if(isset($vendorlist[$i])){ echo $vendorlist[$i];} ?>"> -->
 	 <!-- <?php //if(isset($vendorlist[$i])){ echo $vendorlist[$i];} ?></option>		<?php //}} ?> -->


     <!--------------------->
    
    </div>
</div>
</div>
<script>


// function ajaxload() {       


// var xmlhttp = new XMLHttpRequest();
//       xmlhttp.open('GET' , 'ajaxbilldatafetch.php?values='+str, true );

//       xmlhttp.onload = function() {
//           console.log(this.responseText);
//       }
//       xmlhttp.send();
//     };


</script>
<div class="container mt-4">
   <div class="row mt-4">
   <div class="col md-2"></div>
     <div class="col-md-8 mt-2 ">
     <p class="align-items-center"><b>Select Billing Type</b> <span class="text-danger">*</span></p></br>

        <div class="d-flex ">
            <div class="form-check d-flex ">
                <input class="form-check-input" type="radio"  id="flexRadioDefault1" name="billing"  value="1" <?php if(isset($billtypes)) { if($billtypes == "1" ) echo 'checked'; }  ?> >
                <label class="form-check-label ml-2" for="flexRadioDefault1">
                   Billing 1
                </label>
                </div>
                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="flexRadioDefault2" name="billing" value="2"  <?php if(isset($billtypes)) { if($billtypes == "2" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault2">
                    Billing 2
                </label>
                </div>

                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="flexRadioDefault3" name="billing" value="3"  <?php if(isset($billtypes)) { if($billtypes == "3" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault1">
                    Billing 3
                </label>
                </div>
                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="flexRadioDefault4" name="billing" value="4"  <?php if(isset($billtypes)) { if($billtypes == "4" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault2">
                     Billing 4
                </label>
                </div>

                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="flexRadioDefault5" name="billing" value="5" <?php if(isset($billtypes)) { if($billtypes == "5" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault1">
                   Billing 5
                </label>
                </div>          
            </div>           
        </div>
        <div class="col md-2"></div>

    </div>
</div>
<div class="container">

    <div class="row">
    
        <div class="col-md-2"></div>
        <div class="col-md-8 ajaxmethod">

        </div>
        <div class="col-md-2"></div>
    
    </div>

</div>
                    	 <div class="row ">
                           <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                              <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="25"  class="custom-control-input" id="status" name="status">
								<label class="custom-control-label" for="status">Status</label>									
                            </div><br /><br />
                        </div>
      
                    <div class="container">
                    
                    <div class="row mt-2">
					   <div class="col-md-4 d-flex" > 
						<!-- <button type="button" id="taxdownload" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> -->
                        <!-- <button onclick="taxBulkupload()" tabindex="27" type="button" id="taxbulkupload" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> -->
					   </div>
                        <div class="col-md-6"></div>
                            
                        <div class="col-md-2 ">						
							<button type="submit" name="submitbillsetting" id="submitbillsetting" class="btn btn-primary"  tabindex="73">Submit</button>
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




