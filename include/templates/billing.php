
<?php 
$subgrouplist=$userObj->getSubgroup($mysqli);
$id=0;
 if(isset($_POST['submitbill']))
 {
    
		$addbilling = $userObj->addbilling($mysqli);   
  ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editbilling&msc=1';</script> 
        <?php
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
<input type="hidden" class="form-control" value="<?php if(isset($billid )) echo $billid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header d-flex justify-content-between mx-4">
						<div class="card-title">Tax Invoice</div>
                        <div class="card-title"   name="time"><span name="date" vlaue="<?php echo date("Y-M-d"); ?>"></span></div>
					</div>
                    <div class="card-body">
                              <div class="row">
                                   <!-- jfhgdjhj -->
                                        
                               <!-- </div> 
						</div> -->

                                <div class="container-fluid">
                                <h6 class="text-center">ON: for Companies Only</h6><br><br> 
                                <h4 style="margin-left:360px;padding-bottom:10px;"><a style="border-bottom:2px solid gray;">Name Of Ther Supplier</a></h4>

					  <!-- Row start  -->
					            <div class="row gutters ">
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <img src="./img/logo.png" alt="Feathers" style="width:300px;height:100px;">
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">

                                <?php
         include "api/iedit-config.php";  // Using database connection file here
        $records = mysqli_query($mysqli, "SELECT companyname,gst,address,email,pincode, state,phonenumber From company WHERE companyname='comp1' ");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {?>
      

                                <div class="d-flex ">
                                    <b><h5>GSTIN      :</h5></b>
                                    <!-- <select name="" id=""> -->
                                    <label for=""  style="margin-left:80px;"> <span name="companygst" value="<?php  echo $data['gst']; ?>"></span></label><br>
                                </div>
                                <div class="d-flex ">
                                    <b><h5>Address    :</h5></b>
                                    <label for="" style="margin-left:64px;"><span name="companyaddress" value="<?php  echo $data['companyname'].",". $data['address'].",". $data['pincode'].",".$data['state']."."; ?>"></span> </label><br>
                                </div>
                                <div class="d-flex  ">
                                    <b><h5>Contact No :</h5></b>
                                    <label for=""  style="margin-left:40px;"> <span name="companyphone" value=" <?php  echo $data['phonenumber']; ?>"></span></label><br>
                                </div>
                                <div class="d-flex ">
                                    <b><h5>E-Mail     :</h5></b>
                                    <label for=""  style="margin-left:81px;"> <span name="companyemail" value="<?php  echo $data['email']; ?>"></span></label><br>
                                </div>
                                <?php  }	?> 
                                </div>

                  <div class="col-md-4 text-center">
                  <?php $dates = date("Ymd"); ?>
                  <h6><b>Bill-Id :</b> <span value=" <?php echo $dates; ?>" id="billid" name="billid"></span></h6>
					        </div><br><br><br>
                  
                  
                  </div>
					<!-- Row end -->
                    <div class="row gutters">
                       <div class="col-md-4">
                                  <table  class="table custom-table ">
										<thead>
											<tr>
											  <th colspan="4">Billing Details</th>
											 
											  
											</tr>
										</thead>
										<tbody>


                    <?php

// include "api/iedit-config.php";  // Using database connection file here
  $records = mysqli_query($mysqli, "SELECT customername,gstnumber,address1,address2,district,state,country,pincode,customercode From customer WHERE customername = 'Prithiviraj K'");  // Use select query here 

while($data = mysqli_fetch_array($records))
{
   
?>
                                   <tr>
                                      <td>Purchaser Name</td>
                                      <td><input type="text" class="form-control" name="customername" value="<?php  echo $data['customername']; ?>"></td>											 																						  
                                    </tr>
                                    <tr>
                                      <td>GSTIN</td>
                                      <td><input type="text" class="form-control" name="customergst" value=" <?php  echo $data['gstnumber']; ?>"></td>  
                                    </tr>
                                    <tr>
                                      <td>Address</td>
                                      <td><input type="text" class="form-control" name="customeraddress"  value=" <?php  echo $data['address1'].",". $data['address2'].",". $data['district'].",".$data['state'].",".$data['country'].",".$data['pincode']; ?>" ></td>  
                                    </tr>
                                    <tr>
                                      <td>Ref.No</td>
                                      <td><input type="text" class="form-control" name="referalno" value="<?php  echo $data['customercode']; ?>" ></td>  
                                    </tr>
              <?php }?>
										  
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
                    <?php

include "api/iedit-config.php";  // Using database connection file here
  $records = mysqli_query($mysqli, "SELECT customername,gstnumber,address1,address2,district,state,country,pincode,mobilenumber From customer WHERE customername = 'Prithiviraj K'");  // Use select query here 

while($data = mysqli_fetch_array($records))
{
   
?>
										   <tr>
											  <td>Receiver Name</td>
											  <td><input type="text" class="form-control" name="receivername" value="<?php  echo $data['customername']; ?>"></td>											 																						  
											</tr>
                                            <tr>
											  <td>GSTIN</td>
											  <td><input type="text" class="form-control" name="receivergst" value=" <?php  echo $data['gstnumber']; ?>" ></td>  
											</tr>
                                            <tr>
											  <td>Delivery Address</td>
											  <td><input type="text" class="form-control" name="receiveraddress"  value="<?php  echo $data['address1'].",". $data['address2'].",". $data['district'].",".$data['state'].",".$data['country'].",".$data['pincode']; ?>" ></td>  
											</tr>
                                            <tr>
											  <td>Contact No</td>
											  <td><input type="text" class="form-control" name="receivercontact" value="<?php  echo $data['mobilenumber']; ?>"></td>  
											</tr>
                      <?php  }?>
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
											  <td><input type="text" class="form-control" name="transportername"  value=""></td>											 																						  
											</tr>
                                            <tr>
											  <td>GSTIN</td>
											  <td><input type="text" class="form-control" name="transportergst" value=""></td>  
											</tr>
                                            <tr>
											  <td>Address</td>
											  <td><input type="text" class="form-control" name="transporteraddress" value=""></td>  
											</tr>
                                            <tr>
											  <td>E-Way Bill no</td>
											  <td><input type="text" class="form-control" name="transporteremail" value=""></td>  
											</tr>
                                            <tr>
											  <td>Vehicle no</td>
											  <td><input type="text" class="form-control" name="vehiclenumber" value=""></td>  
											</tr>
										</tbody>
						    	</table>
                       </div>

                    </div>
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

                  <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="totalamount" name="totalamount">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totaldiscount" name="totaldiscount">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total CGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalcgst" name="totalcgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total SGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="totalsgst" name="totalsgst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Changes</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="otherchanges" name="otherchanges">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " readonly placeholder="0" id="totalinvoicevalue" name="totalinvoicevalue">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Invoice Value (In Words)</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " id="invoiceinword" name="invoiceinword">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
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
                                <input type="checkbox" aria-label="Checkbox for following text input">
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
                        <h5>Terms And Conditions</h5>

                        <p>1.   E. & O .E</p>
                        <p>2. Goods Once Sold Will not be taken back or exchanged</p>
                        <p>3. Supplier is not responcible for any damaged of goods in transit</p>
                        <p></p>
                        <p></p>
                   </div>
                    <div class="col-md-6 text-right">
                        <p>Name Of Authorized Signatory</p>
                        <p>Designation</p>
                    </div>
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
</form>
</div>