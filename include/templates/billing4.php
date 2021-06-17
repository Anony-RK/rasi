
<?php 
$subgrouplist=$userObj->getSubgroup($mysqli);
$id=0;
 if(isset($_POST['submitbill']))
 {
  if(isset($_POST['others']) &&  isset($_POST['others']) == true) {
		$addbilling = $userObj->addbilling($mysqli);   
  ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editbilling4&msc=1';</script> 
        <?php
}
 elseif(isset($_POST['tamilnadu']) &&  isset($_POST['tamilnadu']) == true )
{
  $addcgst = $userObj->addcgst($mysqli);   
  ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editbilling4&msc=1';</script> 
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
	<script>location.href='<?php echo $HOSTPATH;  ?>editbilling4&msc=3';</script>
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
                                    <p><h5><b>12,Rasi Electronics,<br>Vandavasi,thiruvannamalai,<br>600342.</b></h5></p>
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
                      <div class="total d-flex justify-content-between hidestate" id="hidestate">
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
<div id="outstate">
                  <div class="row" >
                    <div class="col-md-5"></div>
                    <div class="col-md-7" >
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Amount</p>
                        <div class="input-group mb-3 w-50">
                          <input type="number" class="form-control w-50 " placeholder="0" readonly id="igsttotalamount" name="igsttotalamount">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Total Discount</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaldiscount" name="igsttotaldiscount">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      <div class="total d-flex justify-content-between hideothers" id="hideothers">
                        <p>IGST</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" readonly id="igsttotaligst" name="igsttotaligst">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
                        </div>
                      </div>
                      
                      <div class="total d-flex justify-content-between" id="alltotal">
                        <p>Other Changes</p>
                        <div class="input-group mb-3 w-50">
                        <input type="text" class="form-control w-50 " placeholder="0" id="igstotherchanges" name="igstotherchanges">
                          <span class="input-group-text" id="basic-addon2">.Rs</span>
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