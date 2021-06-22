
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
						<li class="breadcrumb-item">Billing Master</li>
					</ol>

					<a href="editbilling">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Billing</button>
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
                            <h1 class=" text-right">INVOICE</h1>
                            </div>

                        </div>



					  <!-- Row start  -->
					            <div class="row gutters ">
                               
                                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12  ">


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

                              <div class="ml-4">
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
                  <div class="card-title ml-4">
                  <label class="ml-4" name="date" value="<?php echo $dates ; ?>"><?php echo $dates ; ?></label></div>
                  </div>
                  <div class="date d-flex">
                  <h6><b>Customer ID :</b></h6>
                  <div class="card-title ml-4">
                  <label class="ml-4" name="date" value="<?php //echo $dates ; ?>"><?php //echo $dates ; ?>0963104627</label></div>
                  </div>
                  
                  </div><br><br><br><br><br><br>
                  
                  
                  </div>
					<!-- Row end -->
                        
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
       
<!-- <hr class="border colors border-5" style="color:#af772a;"> -->
<div class="container">
                       <div class="row getters">
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

                            </div><br><br>
                           
                         
                         </div>
                       <!-- </div> -->
                    <!-- <div class="selectstate d-flex align-items-center">
                        <p><b>Delivery State  ?</b></p>
                        <div class="checks ml-4 d-flex"> -->
                         <!--  <div class="state d-flex">
                              <input type="radio" >
                              <label for="" id="tamilnadu" class="ml-2">TamilNadu</label>
                          </div>
                          <div class="state d-flex ml-4">
                              <input type="radio" >
                              <label for="" id="others" class="ml-2">Others</label>
                          </div> -->
<!-- 
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
</div> -->
                        
                       <!-- <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="tamilnadu" id="tamilnadu" checked>
                          <label class="form-check-label ml-2" for="flexRadioDefault1"> Tamilnadu</label> 
                        </div>
                        <div class="form-check align-items-center d-flex">
                          <input class="form-check-input" type="radio" name="others" id="others">
                          <label class="form-check-label ml-2" for="flexRadioDefault2"> Others </label>
                        </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                          <br><br>
                    <div class="row gutters">
                        <div class="col-md-12">
                        <table  id="billstable" class="table custom-table table-stritched ">
										<thead>
                                        </th>
                                     <tr>
				                              <th > SALES PERSON</th>
                                              <th > P.O.#</th>
                                              <th > SHIP DATE </th>
                                              <th > SHIP VIA</th>
                                              <th > FBO</th>
                                              <th > TERMS</th>                                                                                
									   	</tr>
									    </thead>
										<tbody>
                                        <td > </td>
                                              <td ></td>
                                              <td > </td>
                                              <td ></td>
                                              <td > </td>
                                              <td > </td>  
                                        </tbody>
                                        </table>
<!----------IGST------------>

<table  id="igsttable" class="table custom-table table-stritched ">
										<thead>
                                    
                                        
                                           <tr>
											 <th > ITEM </th>
                                              <th >DESCRIPTION</th>
                                              <th > QTY </th>
                                              <th > UNIT PRICE</th>
                                              <th > TOTAL</th>
                                           	</tr>
										</thead>
						<tbody>
                                          <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>

                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                                               <tr>
											 <td >  </td>
                                              <td ></td>
                                              <td >  </td>
                                              <td >  </td>
                                              <td > </td>
                                           	</tr>
                   </tbody>
                  </table>

<!---------------------------->

<div id="instate">
                  <div class="row" >
                    <div class="col-md-8">
                       <table class="table custom-table table-stritched mt-4" >
                          <thead>
                            <tr><th>Other Coments Or Special Instruction</th></tr>
                          </thead>
                          <tbody>
                                <tr>
                                    <td>
                                    <ol>
                                   <li>Total Payment  due in 30 Days</li>
                                   <li>Please Include the invoice number on your check</li>
                                </ol>
                                    </td>
                                </tr>
                          </tbody>
                       </table>
                    
                    
                    </div>
                    <div class="col-md-4" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>SUB TOTAL </p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>TAX RATE</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>TAX</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalcgst" name="totalcgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between hidestate" id="hidestate">
                        <p>S & H</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalsgst" name="totalsgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>OTHERS</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      

                      <h5 class="mt-4 text-center">Made All checks Payable To</h5>
                         <h3 class="text-center">RASI Electronics</h3>
                    </div>
                  </div>
</div>

                  <div class="row gutters">
                       <div class="col-md-12 text-center mt-4">
                           <p>If you have any question about the invoice, Please Contact</p>
                             <p>RASI Electronics , ph. 09876543221 , E-mail. rasielectronics@gmail.com</p>
                             <h5>Thankyou for Your Business</h5>
                       </div>
                  </div>
                <!-- </div><br> -->
               

		
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