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
						<li class="breadcrumb-item"> Bill Settings</li>
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
     <p class="align-items-center"><b>Select Invoice Type</b> <span class="text-danger">*</span></p></br>

        <div class="d-flex ">
            <div class="form-check d-flex ">
                <input class="form-check-input" type="radio"  id="model1" name="billing"  value="1" <?php if(isset($billtypes)) { if($billtypes == "1" ) echo 'checked'; }  ?> >
                <label class="form-check-label ml-2" for="flexRadioDefault1">
                   Model 1
                </label>
                </div>
                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="model2" name="billing" value="2"  <?php if(isset($billtypes)) { if($billtypes == "2" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault2">
                    Model 2
                </label>
                </div>

                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="model3" name="billing" value="3"  <?php if(isset($billtypes)) { if($billtypes == "3" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault1">
                    Model 3
                </label>
                </div>
                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="model4" name="billing" value="4"  <?php if(isset($billtypes)) { if($billtypes == "4" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault2">
                     Model 4
                </label>
                </div>

                <div class="form-check d-flex">
                <input class="form-check-input" type="radio"  id="model5" name="billing" value="5" <?php if(isset($billtypes)) { if($billtypes == "5" ) echo 'checked'; }  ?>>
                <label class="form-check-label ml-2" for="flexRadioDefault1">
                   Model 5
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

<style>
    .borders{
        border:none;
        outline:none;
        margin-top:30px;
        padding:10px 20px ;
        color:#fff;
        font-weight:600;
        
    }
    .borders:hover{
        background:black;
    }
.hiddenarea{
    visibility:hidden;
}
</style>

<script>

</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                  <input type="submit" class="bg-primary borders"   id="viewmodel1" class="viewmodel1" value="View Model 1">
                  <div id="showmodel1" class="mt-4"> 
                  

<!-- Page header start -->
<div class="page-header">
				
					<a href="editbilling">
					<button type="button" class="btn btn-primary hiddenarea"><span class="icon-border_color"></span>&nbsp Edit Billing</button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "taxmaster" name="taxmaster" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php //if(isset($id )) echo $id ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<div class="card-title">Tax Invoice</div>
					</div>
                    <div class="card-body">
                              <div class="row">
                                <div class="container-fluid">
                                <h6 class="text-center">ON: for Companies Only</h6><br><br> 
                                <h4 style="margin-left:360px;padding-bottom:10px;"><a style="border-bottom:2px solid gray;">Name Of Ther Supplier</a></h4>

					  <!-- Row start  -->
					            <div class="row gutters ">
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <img src="./img/logo.png" alt="Feathers" style="width:300px;height:80px;">
                                </div>
                                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">


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
                                <?php  //}	?> 
                                </div>

                  <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12   text-center">
                  <?php  $numbers = mt_rand(5000000, 50000000000);?>
                  <div class="invoiceid d-flex">
                    <h6><b>Invoice-Id :</b></h6>
                    <?php //$dates = date("Ymd"); ?>
                    <label class="ml-4" value="<?php echo $numbers; ?>" id="billid" name="billid"><?php echo $numbers; ?></label>
                  </div>
                  <div class="date d-flex">
                  <h6><b>Date :</b></h6>
                  <?php $dates = date("Y-M-d"); ?>
                  <div class="card-title ml-4"><label class="ml-4" name="date" value="<?php echo $dates ; ?>"><?php echo $dates ; ?></label></div>

                  </div>
                  
                  </div><br><br><br><br><br><br>
                  
                  
                  </div>
					<!-- Row end -->
                    <div class="row gutters mt-4">
                       <div class="col-md-4">
                                  <table  class="table custom-table ">
										<thead>
											<tr>
											  <th colspan="4">Billing Details</th>
											 
											  
											</tr>
										</thead>
										<tbody>

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
                        document.getElementById("receivergst").value = myObj[1];
                        document.getElementById("receiveraddress").value = myObj[2];
                    }
                };
  
                xmlhttp.open("GET", "customersbill.php?customercode=" + str, true);
                xmlhttp.send();
            }
        }
</script>

                                   <tr>
                                      <td>Purchaser Name</td>
                                      <td><input type="text" class="form-control" id="customername" name="customername" ></td>											 																						  
                                    </tr>
                                    <tr>
                                      <td>GSTIN</td>
                                      <td><input type="text" class="form-control" id="customergst" name="customergst" ></td>  
                                    </tr>
                                    <tr>
                                      <td>Address</td>
                                      <td><input type="text" class="form-control" id="customeraddress" name="customeraddress" ></td>  
                                    </tr>
                                    <tr>
                                      <td>Ref.No <span class="text-danger">*</span></td>
                                      <td><input type="text" class="form-control" onkeyup="GetDetail(this.value)" id="referalno" name="referalno" placeholder="Enter Customerid"></td>  
                                    </tr>
              <?php //}?>
										  
										</tbody>
						    	</table>
                       </div>
                       <div class="col-md-4">
                       <table  class="table custom-table">
										<thead>
											<tr>
											  <th colspan="4">Shipping Details</th>
											 
											  
											</tr>
										</thead>
										<tbody>
  
										   <tr>
											  <td>Receiver Name</td>
											  <td><input type="text" class="form-control" id="receivername" name="receivername" ></td>											 																						  
											</tr>
                                            <tr>
											  <td>GSTIN</td>
											  <td><input type="text" class="form-control" id="receivergst" name="receivergst"  ></td>  
											</tr>
                                            <tr>
											  <td>Delivery Address</td>
											  <td><input type="text" class="form-control" id="receiveraddress" name="receiveraddress"></td>  
											</tr>
                                            <tr>
											  <td>Contact No</td>
											  <td><input type="text" class="form-control" id="mobilenumber" name="receivercontact"></td>  
											</tr>
                      <?php  //}?>
                     
										</tbody>
						    	</table>
                       </div>
                       <div class="col-md-4">
                       <table  class="table custom-table">
										<thead>
											<tr>
											  <th colspan="4">Transport Details</th>
											 
											  
											</tr>
										</thead>
										<tbody>
										   <tr>
											  <td>Transporter's Name</td>
											  <td><input type="text" class="form-control" name="transportername"  ></td>											 																						  
											</tr>
                                            <tr>
											  <td>GSTIN</td>
											  <td><input type="text" class="form-control" name="transportergst" ></td>  
											</tr>
                                            <tr>
											  <td>Address</td>
											  <td><input type="text" class="form-control" name="transporteraddress" ></td>  
											</tr>
                                            <tr>
											  <td>E-Way Bill no</td>
											  <td><input type="text" class="form-control" name="transporteremail" ></td>  
											</tr>
                                            <tr>
											  <td>Vehicle no</td>
											  <td><input type="text" class="form-control" name="vehiclenumber" ></td>  
											</tr>
										</tbody>
						    	</table>
                       </div>

                    </div>
                    <div class="selectstate d-flex align-items-center">
                        <p><b>Delivery State  ?</b></p>
                        <div class="checks ml-4 d-flex">
                       

<div class="form-check align-items-center d-flex ">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="tamilnadu" checked>
  <label class="form-check-label ml-2" for="flexRadioDefault1">
    Tamil Nadu
  </label>
</div>
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="others" >
  <label class="form-check-label ml-2" for="flexRadioDefault2">
    Others
  </label>
</div>
                        
                      
                        </div>
                    </div>
                          <br><br>
                    <div class="row gutters">
                        <div class="col-md-12">
                        <table  id="billstable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">CGST</th>
                                        <th colspan="2">SGST</th>
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>
                                              <th > Rate</th>
                                              <th > Amount</th>                                           
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>
<!----------IGST------------>

<table  id="igsttable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">IGST</th>
                                        
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>                                                                                        
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>

<!---------------------------->

<div id="instate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                        </div>
                      </div>
                  
                      
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="totalinvoicevalue" name="totalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="invoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<div id="outstate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="igsttotalamount" name="igsttotalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaldiscount" name="igsttotaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hideothers" id="hideothers">
                        <p>IGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaligst" name="igsttotaligst">
                        </div>
                      </div> -->
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="igstotherchanges" name="igstotherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="igsttotalinvoicevalue" name="igsttotalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="igstinvoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                    </div><br>
                  <div class="row gutters">
                    <div class="col-md-4">
                        <p> Weather Tax is Payable on reverse change Basis? </p>
                        </div><div class="col-md-8">
                        <div class="custom-control ">
                                <!-- <input type="checkbox" id="basis" name="basis" class="form-control" value="Yes"> -->
                                <input type="checkbox" aria-label="Checkbox for following text input" value="Yes">
                                <label for="formGroupExampleInput2">Yes/No ?</label>		
                        </div>
                  </div>
                </div><br>
                <div class="row gutters d-flex justify-content-between mx-4">
                <h5>Payment Terms </h5>
                <h5>Name Of Supplier</h5>
                </div><br>
                <div class="row gutters d-flex ml-4">
               
                    <div class="col-md-6 ">
                        <h6>In favour Of :</h6>
                        <h6>Bank & Branch:</h6>
                        <h6>Account No:</h6>
                        <h6>IFSC Code: </h6>
                        <h6>Comments: </h6>
                    </div>
                    <div class="col-md-6"></div>
                    </div>

				</div>

               <div class="container ">
               <div class="row gutters mt-4 justify-content-between">        
                   <div class="col-md-6 ">
                   <h5  class="border-bottom colors">Terms And Conditions</h5>
                        <textarea cols="60" rows="10"  name="terms" id="terms"></textarea>
                   </div>
                    <div class="col-md-6 text-right">
                        <p>Name Of Authorized Signatory</p>
                        <p>Designation</p>
                    </div>
               </div>

               </div>
				</div>
		
                   <!-- <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; //} ?> tabindex="25"  class="custom-control-input" id="status" name="status">
										       <label class="custom-control-label" for="status">Status</label>
									 </div><br /><br /> -->
                <!-- </div> -->
      
         <div class="row">
					   <div class="col-md-4 d-flex" > 
						<!-- <button type="button" id="taxdownloadx" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> -->
            <!-- <button  tabindex="27" type="button" id="taxbulkuploadx" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> -->
					   </div>
              <div class="col-md-6"></div>
                            
              <div class="col-md-2 ">						
							    <button type="submit" name="submitbill" id="submitbill" class="btn btn-primary hiddenarea"  tabindex="73">Submit</button>
                  <button type="button" class="btn btn-outline-secondary hiddenarea" tabindex="74">Cancel</button>
					        </div>
                     </div>
                   </div>   
                </div>
            </div>
        </div>
    <!-- </div>
</div>
</form>
</div> -->




               
                  </div>
            </div>
            <div class="model2" >
                 <input  type="submit" class="bg-primary borders" id="viewmodel2" value="View Model 2"> 
                 <div id="showmodel2" class="mt-4">
                    <!-- Page header start -->
<div class="page-header">
					

					<a href="editbilling">
					<button type="button" class="btn btn-primary hiddenarea"><span class="icon-border_color"></span>&nbsp Edit Billing</button>
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
						<div class="card-title"> Invoice</div>
					</div>
                    <div class="card-body">
                              <div class="row">
                                <div class="container-fluid">
                                <!-- <h6 class="text-center">ON: for Companies Only</h6><br><br>  -->
                                <!-- <h4 style="margin-left:360px;padding-bottom:10px;"><a style="border-bottom:2px solid gray;">Name Of Ther Supplier</a></h4> -->

					  <!-- Row start  -->
					            <div class="row gutters ">
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <div class="logo">
                                        <img src="./img/logo.png" alt="Feathers" style="width:200px;height:50px;">
                                        </div>

                                    <div class="address">
                                    <p><b>12,Rasi Electronics,Vandavasi,thiruvannamalai,600342.</b></p>
                                    </div>
                                   <div class="invoice-id mt-4 d-flex">
                                     <?php  $numbers = mt_rand(5000000, 50000000000);?>
                                     <h6><b>Invoice-Id :</b></h6>
                                     <?php //$dates = date("Ymd"); ?>
                                     <label class="ml-4" value="<?php echo $numbers; ?>" id="billid" name="billid"><?php echo $numbers; ?></label>
                                  </div>
                                  <?php $dates = date("Y-M-d"); ?>
                                  <div class="dates d-flex mt-2">
                                     <h6><b>Date:</b></h6>
                                    <label name="date" class="ml-2" value="<?php echo $dates ; ?>"><?php echo $dates ; ?></label>
                                  </div>
                                </div>
                               
                                <!-- <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12 "></div> -->
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                                                    <h5 class="mb-4 ml-4 border-bottom">Shipping Details</h5>

                                <script>

// function companydetails(str) {
//     if (str.length == 0) {
//         // document.getElementById("companygst").value = "";        
//         document.getElementById("companyaddress").value = "";
//         document.getElementById("companyphone").value = "";
//         document.getElementById("companyemail").value = "";
//         return;
//     }
//     else {

//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function () {

//             if (this.readyState == 4 && 
//                     this.status == 200) {
//                 var myObj = JSON.parse(this.responseText);

//                 // document.getElementById("companygst").value = myObj[0];
//                 document.getElementById("companyaddress").value = myObj[0];
//                 document.getElementById("companyphone").value = myObj[1];
//                 document.getElementById("companyemail").value = myObj[2];

                
//             }
//         };

//         xmlhttp.open("GET", "companydetails.php?companygst=" + str, true);
//         xmlhttp.send();
//     }
// }
</script>
                                <?php
        //  include "api/iedit-config.php";  // Using database connection file here
        // $records = mysqli_query($mysqli, "SELECT companyname,gst,address,email,pincode, state,phonenumber From company WHERE companyname='comp1' ");  // Use select query here 

        // while($data = mysqli_fetch_array($records))
        // {?>
      
<style>
.text-style{
    border:none !important;
    outline:none  !important;
    background-color:transparent !important;
    border-bottom:1px solid black !important;
}
.border-bottom{
    color:#af772a;
}
</style>
                                <div class="d-flex justify-content-between ml-4">
                                    <b><h6>Customer Name:</h6></b>
                                    <input type="text" class="form-control w-50 text-style" id="customername" name="customername" >											 																						  
                                </div> 
                                <div class="d-flex justify-content-between ml-4">
                                    <b><h6>Address:</h6></b>
                                    <input type="text" class="form-control w-50 text-style" id="customergst" name="customergst" >  
                                </div>
                                <div class="d-flex  justify-content-between ml-4 ">
                                    <b><h6>Contact No :</h6></b>
                                    <input type="text" class="form-control w-50 text-style" id="customeraddress" name="customeraddress" >  
                                </div>
                                <div class="d-flex justify-content-between ml-4 ">
                                    <b class="d-flex align-items-center"><h6>Ref.No</h6><span class="text-danger ml-1">*</span></b>
                                    <input type="text" class="form-control w-50 text-style" onkeyup="GetDetail(this.value)" id="referalno" name="referalno" placeholder="Enter Customerid"> 
                                </div>



                                <?php  //}	?> 
                                </div>

                  <!-- <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12   text-center">
                     <?php  //$numbers = mt_rand(5000000, 50000000000);?>
                       <div class="invoiceid d-flex">
                       <h6><b>Invoice-Id :</b></h6>
                        <?php //$dates = date("Ymd"); ?>
                        <label class="ml-4" value="<?php //echo $numbers; ?>" id="billid" name="billid"><?php //echo $numbers; ?></label>
				   	</div>-->
                  </div> 
                  <!-- </div><br><br><br><br><br><br> -->
					<!-- Row end -->
                    <!-- <div class="row gutters mt-4">
                       <div class="col-md-4"> -->
                                  <!-- <table  class="table custom-table ">
										<thead>
											<tr>
											  <th colspan="4">Billing Details</th>
											 
											  
											</tr>
										</thead>
										<tbody> -->

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

                        // document.getElementById("receivername").value = myObj[0];
                        // document.getElementById("receivergst").value = myObj[1];
                        // document.getElementById("receiveraddress").value = myObj[2];
                    }
                };
  
                xmlhttp.open("GET", "customersbill.php?customercode=" + str, true);
                xmlhttp.send();
            }
        }
</script>

                
                    <div class="selectstate d-flex align-items-center mt-4">
                        <p><b>Delivery State  ?</b></p>
                        <div class="checks ml-4 d-flex">
                        
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="tamilnadu" checked>
  <label class="form-check-label ml-2" for="flexRadioDefault1">
    tamilnadu
  </label>
</div>
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="others" >
  <label class="form-check-label ml-2" for="flexRadioDefault2">
    Others
  </label>
</div>


                        </div>
                    </div>
                          <br><br>
                    <div class="row gutters">
                        <div class="col-md-12">
                        <table  id="billstable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">CGST</th>
                                        <th colspan="2">SGST</th>
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>
                                              <th > Rate</th>
                                              <th > Amount</th>                                           
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>
<!----------IGST------------>

<table  id="igsttable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">IGST</th>
                                        
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>                                                                                        
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>

<!---------------------------->

<div id="instate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                        </div>
                      </div>
                     
                      
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="totalinvoicevalue" name="totalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="invoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<div id="outstate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="igsttotalamount" name="igsttotalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaldiscount" name="igsttotaldiscount">
                        </div>
                      </div>
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="igstotherchanges" name="igstotherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="igsttotalinvoicevalue" name="igsttotalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="igstinvoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                    </div><br>
                  <div class="row gutters">
                    <div class="col-md-4">
                        <!-- <p> Weather Tax is Payable on reverse change Basis? </p> -->
                        </div><div class="col-md-8">
                        <div class="custom-control ">
                                <!-- <input type="checkbox" id="basis" name="basis" class="form-control" value="Yes"> -->
                                <!-- <input type="checkbox" aria-label="Checkbox for following text input" value="Yes"> -->
                                <!-- <label for="formGroupExampleInput2">Yes/No ?</label>		 -->
                        </div>
                  </div>
                </div><br>
                <div class="row gutters d-flex justify-content-between mx-4">
                <h5 class="border-bottom">Payment Terms </h5>
                <h5>Name Of Supplier</h5>
                </div><br>
                <div class="row gutters d-flex ml-4">
               
                    <div class="col-md-6 ">
                        <h6>In favour Of :</h6>
                        <h6>Bank & Branch:</h6>
                        <h6>Account No:</h6>
                        <h6>IFSC Code: </h6>
                        <h6>Comments: </h6>
                    </div>
                    <div class="col-md-6"></div>
                    </div>

				</div>

               <div class="container ">
               <div class="row gutters mt-4 justify-content-between">        
                   <div class="col-md-6 ">
                        <h5  class="border-bottom">Terms And Conditions</h5>
                        <textarea cols="60" rows="10"  name="terms" id="terms"></textarea>
                   </div>
                    <div class="col-md-6 text-right">
                        <p>Name Of Authorized Signatory</p>
                        <p>Designation</p>
                    </div>
               </div>

               </div>

              
				</div>
                <div class="row mt-4">
               <div class="col-md-12 text-center">
                 <h5><b class="border-bottom">Thankyou For Your Business!</b></h5>
               </div>
               </div>
                   <!-- <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; //} ?> tabindex="25"  class="custom-control-input" id="status" name="status">
										       <label class="custom-control-label" for="status">Status</label>
									 </div><br /><br /> -->
                <!-- </div> -->
      
         <div class="row">
					   <div class="col-md-4 d-flex" > 
						<!-- <button type="button" id="taxdownloadx" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> -->
            <!-- <button  tabindex="27" type="button" id="taxbulkuploadx" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> -->
					   </div>
              <div class="col-md-6"></div>
                            
              <div class="col-md-2 ">						
							    <button type="submit" name="submitbill" id="submitbill" class="btn btn-primary hiddenarea"  tabindex="73">Submit</button>
                  <button type="button" class="btn btn-outline-secondary hiddenarea" tabindex="74">Cancel</button>
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
                 </div>
            </div>
            <div class="model3" >
                 <input  type="submit" class="bg-primary borders" id="viewmodel3" value="View Model 3"> 
                 <div id="showmodel3" class="mt-4">
                 <!-- Page header start -->
<div class="page-header">
					

					<a href="editbilling">
					<button type="button" class="btn btn-primary hiddenarea"><span class="icon-border_color "></span>&nbsp Edit Billing</button>
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
						<div class="card-title"><h1 class="colors">Tax Invoice</h1></div>
					</div>
                    <div class="card-body">
                              <div class="row">
                                <div class="container-fluid">
                                <!-- <h6 class="text-center">ON: for Companies Only</h6><br><br>  -->
                                <!-- <h4 style="margin-left:360px;padding-bottom:10px;"><a style="border-bottom:2px solid gray;">Name Of Ther Supplier</a></h4> -->

					  <!-- Row start  -->


                      <div class="row">
                            <div class="col-xl-2 col-md-2">
                                    <div class="logo">
                                            <img src="./img/logo.png" alt="Feathers" style="width:200px;height:50px;">
                                    </div>
                            
                            </div>
                            <div class="col-xl-3 col-md-3">
                                    <div class="address">
                                    <p><b>12,Rasi Electronics,<br>Vandavasi,thiruvannamalai,<br>600342.</b></p>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                
                            </div>
                            <div class="col-xl-4 col-md-4">
                              <?php  $numbers = mt_rand(5000000, 50000000000);?>
                                <div class="invoiceid d-flex">
                                    <h6><b>Invoice-Id :</b></h6>
                                    <?php //$dates = date("Ymd"); ?>
                                    <label class="ml-4" value="<?php echo $numbers; ?>" id="billid" name="billid"><?php echo $numbers; ?></label>
                                </div>
                                <div class="date d-flex">
                                <h6><b>Date :</b></h6>
                                <?php $dates = date("Y-M-d"); ?>
                                <label class="ml-4" name="date" value="<?php echo $dates ; ?>"><?php echo $dates ; ?></label>

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
                       <!-- </div> -->
                      
                    <div class="selectstate d-flex align-items-center mt-4">
                        <p><b>Delivery State  ?</b></p>
                        <div class="checks ml-4 d-flex">
                        
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="tamilnadu" checked>
  <label class="form-check-label ml-2" for="flexRadioDefault1">
    Tamil Nadu
  </label>
</div>
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="others" >
  <label class="form-check-label ml-2" for="flexRadioDefault2">
    Others
  </label>
</div>
                       <!-- <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="tamilnadu" id="tamilnadu" checked>
                          <label class="form-check-label ml-2" for="flexRadioDefault1"> Tamilnadu</label> 
                        </div>
                        <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="others" id="others">
                          <label class="form-check-label ml-2" for="flexRadioDefault2"> Others </label>
                        </div> -->
                        </div>
                    </div>
                          <br><br>
                    <div class="row gutters">
                        <div class="col-md-12">
                        <table  id="billstable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">CGST</th>
                                        <th colspan="2">SGST</th>
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>
                                              <th > Rate</th>
                                              <th > Amount</th>                                           
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>
<!----------IGST------------>

<table  id="igsttable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">IGST</th>
                                        
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>                                                                                        
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>

<!---------------------------->

<div id="instate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>Total CGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalcgst" name="totalcgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>Total SGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalsgst" name="totalsgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div> -->
                      
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                          <!-- <span class="input-group-text" id="basic-addon2">.Rs</span> -->
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="totalinvoicevalue" name="totalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="invoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<div id="outstate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="igsttotalamount" name="igsttotalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaldiscount" name="igsttotaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hideothers" id="hideothers">
                        <p>IGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaligst" name="igsttotaligst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div> -->
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="igstotherchanges" name="igstotherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="igsttotalinvoicevalue" name="igsttotalinvoicevalue">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="igstinvoiceinword" name="invoiceinword">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                    </div><br>
                  <div class="row gutters">
                    <div class="col-md-4">
                        <!-- <p> Weather Tax is Payable on reverse change Basis? </p> -->
                        </div><div class="col-md-8">
                        <div class="custom-control ">
                                <!-- <input type="checkbox" id="basis" name="basis" class="form-control" value="Yes"> -->
                                <!-- <input type="checkbox" aria-label="Checkbox for following text input" value="Yes"> -->
                                <!-- <label for="formGroupExampleInput2">Yes/No ?</label>		 -->
                        </div>
                  </div>
                </div><br>
                <div class="row gutters d-flex justify-content-between mx-4">
                <!-- <h5 class="colors border-bottom">Payment Terms </h5> -->
                <!-- <h5>Name Of Supplier</h5> -->
                <!-- </div><br> -->
                <!-- <div class="row gutters d-flex ml-4"> -->
               
                    <!-- <div class="col-md-6 ">
                        <h6>In favour Of :</h6>
                        <h6>Bank & Branch:</h6>
                        <h6>Account No:</h6>
                        <h6>IFSC Code: </h6>
                        <h6>Comments: </h6>
                    </div>
                    <div class="col-md-6"></div>
                    </div> -->

				<!-- </div> -->

               <div class="container ">
               <div class="row gutters mt-4 justify-content-between">        
                   <div class="col-md-6 ">
                        <h5  class="colors">Terms And Conditions</h5>

                        <textarea cols="60" rows="10"  name="terms" id="terms"></textarea>

                   </div>
                    <div class="col-md-6 text-right">
                        <p>Name Of Authorized Signatory</p>
                        <p>Designation</p>
                    </div>
               </div>

               </div>

              
				</div>
                <div class="row mt-4">
               <div class="col-md-12 text-center">
                 <h5><b class=" colors border-bottom">Thankyou For Your Business!</b></h5>
               </div>
               </div>
                   <!-- <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; //} ?> tabindex="25"  class="custom-control-input" id="status" name="status">
										       <label class="custom-control-label" for="status">Status</label>
									 </div><br /><br /> -->
                <!-- </div> -->
      
         <div class="row">
					   <div class="col-md-4 d-flex" > 
						<!-- <button type="button" id="taxdownloadx" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> -->
            <!-- <button  tabindex="27" type="button" id="taxbulkuploadx" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> -->
					   </div>
              <div class="col-md-6"></div>
                            
              <div class="col-md-2 ">						
							    <button type="submit" name="submitbill" id="submitbill" class="btn btn-primary hiddenarea"  tabindex="73">Submit</button>
                  <button type="button" class="btn btn-outline-secondary hiddenarea" tabindex="74">Cancel</button>
					        </div>
                     </div>
                   </div>   
                </div>
            </div>
        </div>
    <!-- </div>
</div>
</form>
</div>   -->
                 </div>
            </div>
            <div class="model4"  >
                 <input  type="submit" class="bg-primary borders" id="viewmodel4" value="View Model 4"> 
                 <div id="showmodel4" class="mt-4">
                 <!-- Page header start -->
                <div class="page-header">
					

					<a href="editbilling">
					<button type="button" class="btn btn-primary hiddenarea"><span class="icon-border_color "></span>&nbsp Edit Billing</button>
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
         <div class="container">
         <div class="row">
              <div class="col-xl-6 col-md-6 col-sm-6">

              <div class="logo">
                      <img src="./img/logo.png" alt="Feathers" style="width:200px;height:50px;">
                   </div>
              </div>
              <div class="col-xl-6 col-md-6 col-sm-6">
              <h1 class="colors text-right"> Invoice</h1>

              </div>
          </div>

         </div>

					</div>
          <hr class="border colors border-5" style="color:#af772a;">

                    <div class="card-body">
                              <div class="row">
                                <div class="container-fluid">
                                <!-- <h6 class="text-center">ON: for Companies Only</h6><br><br>  -->
                                <!-- <h4 style="margin-left:360px;padding-bottom:10px;"><a style="border-bottom:2px solid gray;">Name Of Ther Supplier</a></h4> -->

					  <!-- Row start  -->


                      <div class="row">
                            <div class="col-xl-2 col-md-2">
                                   
                            
                            </div>
                            <div class="col-xl-4 col-md-3">
                                    <div class="address">
                                    <p>12,Rasi Electronics,<br>Vandavasi,thiruvannamalai,<br>600342.</p>
                                    <p> <b>Contact:</b>0987654321</p> 
                                    <p> <b>E-Mail:</b>  rasielectronics@gmail.com</p><br> 
                                    </div>
                            </div>
                            <div class="col-xl-2 col-md-3">
                                
                            </div>
                            <div class="col-xl-4 col-md-4">
                              <?php  $numbers = mt_rand(5000000, 50000000000);?>
                                <div class="invoiceid d-flex">
                                    <h6><b>Invoice-Id :</b></h6>
                                    <?php //$dates = date("Ymd"); ?>
                                    <label class="ml-4" value="<?php echo $numbers; ?>" id="billid" name="billid"><?php echo $numbers; ?></label>
                                </div>
                                <div class="date d-flex">
                                <h6><b>Date :</b></h6>
                                <?php $dates = date("Y-M-d"); ?>
                                <label class="ml-4" name="date" value="<?php echo $dates ; ?>"><?php echo $dates ; ?></label>

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
                       <!-- </div> -->
                      
                    <div class="selectstate d-flex align-items-center mt-4">
                        <p><b>Delivery State  ?</b></p>
                        <div class="checks ml-4 d-flex">
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="tamilnadu" checked>
  <label class="form-check-label ml-2" for="flexRadioDefault1">
    Tamil Nadu
  </label>
</div>
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="others" >
  <label class="form-check-label ml-2" for="flexRadioDefault2">
    Others
  </label>
</div>
                        
                       <!-- <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="tamilnadu" id="tamilnadu" checked>
                          <label class="form-check-label ml-2" for="flexRadioDefault1"> Tamilnadu</label> 
                        </div>
                        <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="others" id="others">
                          <label class="form-check-label ml-2" for="flexRadioDefault2"> Others </label>
                        </div> -->
                        </div>
                    </div>
                          <br><br>
                    <div class="row gutters">
                        <div class="col-md-12">
                        <table  id="billstable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">CGST</th>
                                        <th colspan="2">SGST</th>
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>
                                              <th > Rate</th>
                                              <th > Amount</th>                                           
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>
<!----------IGST------------>

<table  id="igsttable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">IGST</th>
                                        
                                        <th></th>
                                        </th>
                                       
											                   <tr>
											                        <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <th > Rate</th>
                                              <th > Amount</th>                                                                                        
                                              <th > Total Amount</th>                                         
										                    	</tr>
									                	</thead>
										<tbody>
                  
                   </tbody>
                  </table>

<!---------------------------->

<div id="instate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>Total CGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalcgst" name="totalcgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>Total SGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalsgst" name="totalsgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div> -->
                      
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="totalinvoicevalue" name="totalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="invoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<div id="outstate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="igsttotalamount" name="igsttotalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaldiscount" name="igsttotaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hideothers" id="hideothers">
                        <p>IGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaligst" name="igsttotaligst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div> -->
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="igstotherchanges" name="igstotherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="igsttotalinvoicevalue" name="igsttotalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="igstinvoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                    </div><br>
                  <div class="row gutters">
                    <div class="col-md-4">
                        <!-- <p> Weather Tax is Payable on reverse change Basis? </p> -->
                        </div><div class="col-md-8">
                        <div class="custom-control ">
                                <!-- <input type="checkbox" id="basis" name="basis" class="form-control" value="Yes"> -->
                                <!-- <input type="checkbox" aria-label="Checkbox for following text input" value="Yes"> -->
                                <!-- <label for="formGroupExampleInput2">Yes/No ?</label>		 -->
                        </div>
                  </div>
                </div><br>
                <div class="row gutters d-flex justify-content-between mx-4">
                <!-- <h5 class="colors border-bottom">Payment Terms </h5> -->
                <!-- <h5>Name Of Supplier</h5> -->
                <!-- </div><br> -->
                <!-- <div class="row gutters d-flex ml-4"> -->
               
                    <!-- <div class="col-md-6 ">
                        <h6>In favour Of :</h6>
                        <h6>Bank & Branch:</h6>
                        <h6>Account No:</h6>
                        <h6>IFSC Code: </h6>
                        <h6>Comments: </h6>
                    </div>
                    <div class="col-md-6"></div>
                    </div> -->

				<!-- </div> -->

               <div class="container ">
               <div class="row gutters mt-4 justify-content-between">        
                   <div class="col-md-6 ">
                        <h5  class="colors">Terms And Conditions</h5>
                        <textarea cols="60" rows="10"  name="terms" id="terms"></textarea>

                   </div>
                    <div class="col-md-6 text-right">
                        <p>Name Of Authorized Signatory</p>
                        <p>Designation</p>
                    </div>
               </div>

               </div>

              
				</div>
                <div class="row mt-4">
               <div class="col-md-12 text-center">
                 <h5><b class=" colors border-bottom">Thankyou For Your Business!</b></h5>
               </div>
               </div>
                   <!-- <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; //} ?> tabindex="25"  class="custom-control-input" id="status" name="status">
										       <label class="custom-control-label" for="status">Status</label>
									 </div><br /><br /> -->
                <!-- </div> -->
      
         <div class="row">
					   <div class="col-md-4 d-flex" > 
						<!-- <button type="button" id="taxdownloadx" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> -->
            <!-- <button  tabindex="27" type="button" id="taxbulkuploadx" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> -->
					   </div>
              <div class="col-md-6"></div>
                            
              <div class="col-md-2 ">						
							    <button type="submit" name="submitbill" id="submitbill" class="btn btn-primary hiddenarea"  tabindex="73">Submit</button>
                  <button type="button" class="btn btn-outline-secondary hiddenarea" tabindex="74">Cancel</button>
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
                 </div>
            </div>
            <div class="model5" >
                 <input  type="submit" class="bg-primary borders" id="viewmodel5" value="View Model 5"> 
                 <div id="showmodel5" class="mt-4">

                 <!-- Page header start -->
<div class="page-header">
					

					<a href="editbilling">
					<button type="button" class="btn btn-primary hiddenarea"><span class="icon-border_color"></span>&nbsp Edit Billing</button>
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
					<!-- <div class="card-header d-flex justify-content-between ">
                        <div class="container-fluid bg-success">
                         <div class="row">
                           <div class="col-xl-6 col-md-6 col-sm-6">
                              <div class="logo">
                                <h1 class="colors text-left"> Invoice</h1>
                              </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                              <img src="./img/logo.png" class="text-right align-items-right" alt="Feathers" style="width:200px;height:50px;">
                           </div>
                        </div>
                      </div>
                    </div> --> 
                    <style>
                    .designs{
                        height:130px;
                        background-color:#429bf5;
                        border-radius:5px 5px 0px 0px;
                    }
                    .logos{
                        margin:30px auto;
                    }
                    .invoiceid{
                        margin:70px;
                    }
                    </style>
                <div class="container  designs">
                    <div class="row ">
                           <div class="col-xl-6 col-md-6 col-sm-6">
                              <div class="logo">
                                <!-- <h1 class="colors text-left"> Invoice</h1> -->
                                <img src="./img/logo.png" class="text-right align-items-left logos" alt="Feathers" style="width:200px;height:50px;">

                              </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 d-flex text-white">
                              <div class="address mx-auto">
                                    <p>12,Rasi Electronics,<br>Vandavasi,thiruvannamalai,<br>600342.</p>
                                    <p> <b>Contact:</b>0987654321</p> 
                                    <p> <b>E-Mail:</b>  rasielectronics@gmail.com</p><br> 
                              </div>
                           </div>
                        </div>
                     </div>  
          <!-- <hr class="border colors border-5" style="color:#af772a;"> -->

                    <div class="card-body">
                              <div class="row">
                                <div class="container-fluid">
                                <!-- <h6 class="text-center">ON: for Companies Only</h6><br><br>  -->
                                <!-- <h4 style="margin-left:360px;padding-bottom:10px;"><a style="border-bottom:2px solid gray;">Name Of Ther Supplier</a></h4> -->

					  <!-- Row start  -->


                      <!-- <div class="row">
                            <div class="col-xl-2 col-md-2">
                                   
                            
                            </div>
                            <div class="col-xl-4 col-md-3">
                                  
                            </div>
                            <div class="col-xl-2 col-md-3">
                                
                            </div>
                            <div class="col-xl-4 col-md-4">
                              <?php  //$numbers = mt_rand(5000000, 50000000000);?>
                                <div class="invoiceid d-flex">
                                    <h6><b>Invoice-Id :</b></h6>
                                    <?php //$dates = date("Ymd"); ?>
                                    <label class="ml-4" value="<?php //echo $numbers; ?>" id="billid" name="billid"><?php //echo $numbers; ?></label>
                                </div>
                                <div class="date d-flex">
                                <h6><b>Date :</b></h6>
                                <?php //$dates = date("Y-M-d"); ?>
                                <label class="ml-4" name="date" value="<?php //echo $dates ; ?>"><?php //echo $dates ; ?></label>

                            </div>-->
                      
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
                        document.getElementById("customerid").value = myObj[4];
                        document.getElementById("receivername").value = myObj[0];
                        document.getElementById("receiveraddress").value = myObj[2];
                    }
                };
  
                xmlhttp.open("GET", "customersbill.php?customercode=" + str, true);
                xmlhttp.send();
            }
        }
</script>
       
                                <!-- <hr class="border colors border-5" style="color:#af772a;"> -->

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

                              <div class="invoiceid ">
                              
                              <?php  $numbers = mt_rand(5000000, 50000000000);?>
                                <div class=" d-flex ">
                                    <h6><b>Invoice-Id :</b></h6>
                                    <?php //$dates = date("Ymd"); ?>
                                    <label class="ml-4" value="<?php echo $numbers; ?>" id="billid" name="billid"><?php echo $numbers; ?></label>
                                </div>
                                <div class="date d-flex">
                                <h6><b>Date :</b></h6>
                                <?php $dates = date("Y-M-d"); ?>
                                <label class="ml-4" name="date" value="<?php echo $dates ; ?>"><?php echo $dates ; ?></label><br>            
                              </div>
                              <!-- <h6><b>Customer-Id:</b></h6><label id="customerid" name="customercode" ></label> -->
                            </div>
                         <!-- <h5 class="colors border-bottom ml-4 mb-2">Shipping To </h5>
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
                                </div> -->
                                <!-- <div class="d-flex justify-content-between ml-4 ">
                                    <b class="d-flex align-items-center"><h6>Ref.No</h6><span class="text-danger ml-1">*</span></b>
                                    <input type="text" class="form-control w-50 text-style" id="referalno" name="referalno" placeholder="Enter Customerid"> 
                                </div> -->

                            </div>

                         
                         </div>
                       <!-- </div> -->
                      
                    <div class="selectstate d-flex align-items-center mt-4">
                        <p><b>Delivery State  ?</b></p>
                        <div class="checks ml-4 d-flex">
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="tamilnadu" checked>
  <label class="form-check-label ml-2" for="flexRadioDefault1">
    Tamil Nadu
  </label>
</div>
<div class="form-check align-items-center d-flex">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="others" >
  <label class="form-check-label ml-2" for="flexRadioDefault2">
    Others
  </label>
</div>
                        
                       <!-- <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="tamilnadu" id="tamilnadu" checked>
                          <label class="form-check-label ml-2" for="flexRadioDefault1"> Tamilnadu</label> 
                        </div>
                        <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="others" id="others">
                          <label class="form-check-label ml-2" for="flexRadioDefault2"> Others </label>
                        </div> -->
                        </div>
                    </div>
                          <br><br>
                    <div class="row gutters">

                    <style>
                        .sgstrate {
                            display:none !important;
                        }
                        .cgstrate{
                            display:none !important;
                        }
                    </style>
                        <div class="col-md-12">
                        <table  id="billstable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <!-- <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">CGST</th>
                                        <th colspan="2">SGST</th>
                                        <th></th> -->
                                        </th>
                                       
									  <tr>
											  <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <!-- <th > Rate</th>
                                              <th > Amount</th>
                                              <th > Rate</th>
                                              <th > Amount</th>      -->
                                              <th > Total Amount</th>                                         
									</tr>
								</thead>
							<tbody>
                  
                   </tbody>
                  </table>
<!----------IGST------------>

<table  id="igsttable" class="table custom-table table-stritched table-sm">
										<thead>
                                        <!-- <th>
                                        <th colspan="6"> </th>
                                        <th colspan="2">IGST</th>
                                        
                                        <th></th> -->
                                        </th>
                                       
								         <tr>
											  <th > S.No</th>
                                              <th > Description & HSN of Goods</th>
                                              <th > QTY </th>
                                              <th > Rate</th>
                                              <th > Total</th>
                                              <th > Disc.</th>
                                              <th > Taxable Value</th>                                            
                                              <!-- <th > Rate</th>
                                              <th > Amount</th> --->   
                                              <th > Total Amount</th>                                         
										 </tr>
								</thead>
			        <tbody>
                  
                   </tbody>
                  </table>

<!---------------------------->

<div id="instate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>Total CGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalcgst" name="totalcgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>Total SGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalsgst" name="totalsgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div> -->
                      
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="totalinvoicevalue" name="totalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="invoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<div id="outstate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="igsttotalamount" name="igsttotalamount">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaldiscount" name="igsttotaldiscount">
                        </div>
                      </div>
                      <!-- <div class="total d-flex justify-content-between hideothers" id="hideothers">
                        <p>IGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaligst" name="igsttotaligst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div> -->
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Charges</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="igstotherchanges" name="igstotherchanges">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="igsttotalinvoicevalue" name="igsttotalinvoicevalue">
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="igstinvoiceinword" name="invoiceinword">
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                    </div><br>
                  <div class="row gutters">
                    <div class="col-md-4">
                        <!-- <p> Weather Tax is Payable on reverse change Basis? </p> -->
                        </div><div class="col-md-8">
                        <div class="custom-control ">
                                <!-- <input type="checkbox" id="basis" name="basis" class="form-control" value="Yes"> -->
                                <!-- <input type="checkbox" aria-label="Checkbox for following text input" value="Yes"> -->
                                <!-- <label for="formGroupExampleInput2">Yes/No ?</label>		 -->
                        </div>
                  </div>
                </div><br>
                <div class="row gutters d-flex justify-content-between mx-4">
                <!-- <h5 class="colors border-bottom">Payment Terms </h5> -->
                <!-- <h5>Name Of Supplier</h5> -->
                <!-- </div><br> -->
                <!-- <div class="row gutters d-flex ml-4"> -->
               
                    <!-- <div class="col-md-6 ">
                        <h6>In favour Of :</h6>
                        <h6>Bank & Branch:</h6>
                        <h6>Account No:</h6>
                        <h6>IFSC Code: </h6>
                        <h6>Comments: </h6>
                    </div>
                    <div class="col-md-6"></div>
                    </div> -->

				<!-- </div> -->

               <div class="container ">
               <div class="row gutters mt-4 justify-content-between">        
                   <div class="col-md-6 ">
                        <h5  class="colors">Terms And Conditions</h5>
                        <textarea cols="60" rows="10"  name="terms" id="terms"></textarea>

                   </div>
                    <div class="col-md-6 text-right">
                        <p>Name Of Authorized Signatory</p>
                        <p>Designation</p>
                    </div>
               </div>

               </div>

              
				</div>
                <div class="row mt-4 hiddenarea">
               <div class="col-md-12 text-center">
                 <h5><b class=" colors border-bottom">Thankyou For Your Business!</b></h5>
               </div>
               </div>
                   <!-- <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                       <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" value="Yes"  <?php  //if($status==0) { echo 'checked'; //} ?> tabindex="25"  class="custom-control-input" id="status" name="status">
										       <label class="custom-control-label" for="status">Status</label>
									 </div><br /><br /> -->
                <!-- </div> -->
      
         <div class="row">
					   <div class="col-md-4 d-flex" > 
						<!-- <button type="button" id="taxdownloadx" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button> -->
            <!-- <button  tabindex="27" type="button" id="taxbulkuploadx" name="itembulkupload" class="btn btn-primary  itembutton form-control" ><span class="icon-upload"></span>Upload</button><br /><br /> -->
					   </div>
              <div class="col-md-6"></div>
                            
              <div class="col-md-2 ">						
							    <button type="submit" name="submitbill" id="submitbill" class="btn btn-primary hiddenarea"  tabindex="73">Submit</button>
                  <button type="button" class="btn btn-outline-secondary hiddenarea" tabindex="74">Cancel</button>
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

                 </div>
            </div>

        </div>
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


