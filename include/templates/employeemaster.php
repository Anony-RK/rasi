<?php 
$id=0;
 if(isset($_POST['submitemployee']) && $_POST['submitemployee'] != '')
 {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updateEemployeemaster = $userObj->updateemployeemaster($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editemployeemaster&msc=2';</script> 
    <?php	}
    else{   
		$addemployeemaster = $userObj->addemployeemaster($mysqli);   
        ?>
     <script>location.href='<?php echo $HOSTPATH;  ?>editemployeemaster&msc=1';</script>
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
	$deleteemployeemaster = $userObj->deleteemployeemaster($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editemployeemaster&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getemployeemaster = $userObj->getemployeemaster($mysqli,$idupd); 
	
	if (sizeof($getemployeemaster)>0) {
        for($ibranch=0;$ibranch<sizeof($getemployeemaster);$ibranch++)  {	
            $employeeid                      = $getemployeemaster['employeeid'];
			$employeecode                	 = $getemployeemaster['employeecode'];
			$employeename          		     = $getemployeemaster['employeename'];
			$dateofbirth      			     = $getemployeemaster['dateofbirth'];
			$gender      			         = $getemployeemaster['gender'];
			$email       			         = $getemployeemaster['email'];
			$designation                	 = $getemployeemaster['designation'];
			$mobilenumber       		     = $getemployeemaster['mobilenumber'];
			$dateofjoining     			     = $getemployeemaster['dateofjoining'];
			$contact     		             = $getemployeemaster['contact'];
			$employeeimage     			     = $getemployeemaster['employeeimage'];
			$expertise        		         = $getemployeemaster['expertise'];
			$starrating	    		         = $getemployeemaster['starrating'];
			$basic                           = $getemployeemaster['basic'];
            $hra                             = $getemployeemaster['hra']; 
			$conveyance                      = $getemployeemaster['conveyance']; 
			$allowance                       = $getemployeemaster['allowance']; 
            $incentivepercent                = $getemployeemaster['incentivepercent'];  
            $grosspay     			         = $getemployeemaster['grosspay'];
			$tds     		                 = $getemployeemaster['tds'];
			$pf     			             = $getemployeemaster['pf'];
			$esi        		             = $getemployeemaster['esi'];
			$loans	    		             = $getemployeemaster['loans'];
			$salaryadvance                   = $getemployeemaster['salaryadvance'];
            $totaldeduction                  = $getemployeemaster['totaldeduction']; 
            $anyotherdeduction                   = $getemployeemaster['anyotherdeduction'];


			$institutetype1                  = $getemployeemaster['institutetype1']; 
			$name1                           = $getemployeemaster['name1']; 
            $positionheld1     			     = $getemployeemaster['positionheld1'];
			$place1     		             = $getemployeemaster['place1'];
			$fromperiod1     	             = $getemployeemaster['fromperiod1'];
			$toperiod1        		         = $getemployeemaster['toperiod1'];
			$date1	    		             = $getemployeemaster['date1'];

            $institutetype2                  = $getemployeemaster['institutetype2']; 
			$name2                           = $getemployeemaster['name2']; 
            $positionheld2     			     = $getemployeemaster['positionheld2'];
			$place2     		             = $getemployeemaster['place2'];
			$fromperiod2     			     = $getemployeemaster['fromperiod2'];
			$toperiod2        		         = $getemployeemaster['toperiod2'];
			$date2	    		             = $getemployeemaster['date2'];

            $institutetype3                  = $getemployeemaster['institutetype3']; 
			$name3                           = $getemployeemaster['name3']; 
            $positionheld3     			     = $getemployeemaster['positionheld3'];
			$place3     		             = $getemployeemaster['place3'];
			$fromperiod3     			     = $getemployeemaster['fromperiod3'];
			$toperiod3        		         = $getemployeemaster['toperiod3'];
			$date3	    		             = $getemployeemaster['date3'];

            $institutetype4                  = $getemployeemaster['institutetype4']; 
			$name4                           = $getemployeemaster['name4']; 
            $positionheld4     			     = $getemployeemaster['positionheld4'];
			$place4     		             = $getemployeemaster['place4'];
			$fromperiod4     			     = $getemployeemaster['fromperiod4'];
			$toperiod4        		         = $getemployeemaster['toperiod4'];
			$date4	    		             = $getemployeemaster['date4'];

            $institutetype5                  = $getemployeemaster['institutetype5']; 
			$name5                           = $getemployeemaster['name5']; 
            $positionheld5     			     = $getemployeemaster['positionheld5'];
			$place5     		             = $getemployeemaster['place5'];
			$fromperiod5     			     = $getemployeemaster['fromperiod5'];
			$toperiod5        		         = $getemployeemaster['toperiod5'];
			$date5	    		             = $getemployeemaster['date5'];


            $title1        		             = $getemployeemaster['title1'];
			$certificate1	    		     = $getemployeemaster['certificate1'];

            $title2        		             = $getemployeemaster['title2'];
			$certificate2	    		     = $getemployeemaster['certificate2'];

            $title3        		             = $getemployeemaster['title3'];
			$certificate3	    		     = $getemployeemaster['certificate3'];

            $title4        		             = $getemployeemaster['title4'];
			$certificate4	    		     = $getemployeemaster['certificate4'];

            $title5        		             = $getemployeemaster['title5'];
			$certificate5	    		     = $getemployeemaster['certificate5'];
            $status	    		             = $getemployeemaster['status'];

		}
	}
}
?>
  


<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Employee Master</li>
					</ol>

					<a href="editemployeemaster">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Employee Master</button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "employee" name="employee" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php if(isset($employeeid )) echo $employeeid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">General Info</div>
					</div>
                    <div class="card-body">

                    	 <div class="row ">
                            <!--Fields -->
                           <div class="col-md-8 "> 
                              <div class="row">
                                   <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Employee Code</label>
                                                <input type="text" tabindex="1" class="form-control" id="employeecode" name="employeecode" value="<?php if(isset($employeecode )) echo $employeecode ; ?>" placeholder="Enter Employee Code">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Employee Name<span class="required">*</span></label>
                                                <input type="text" tabindex="2" id="employeename" name="employeename" class="form-control"  value="<?php if(isset($employeename )) echo $employeename ; ?>" placeholder="Enter Employee Name">
                                                <label id="employeenamecheck" class="text-danger" >Enter Employee Name</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="disabledInput">Gender <span class="required">*</span></label>
                                            <select class="form-control" tabindex="3" id="gender" name="gender">
                                                
                                                <option value=""> Select Gender</option>
                                                <option <?php if(isset($gender)) { if($gender == "Male" ) echo 'selected'; }  ?> value="Male"> Male</option>
                                                <option  <?php if(isset($gender)) { if($gender == "Female" ) echo 'selected'; }  ?> value="Female"> FeMale</option>
                                            </select>
                                            <label id="gendercheck" class="text-danger">Select Gender</label>
                                        </div>
                                    </div>

                                       <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Mobile Number <span class="required">*</span></label>
                                                <input type="number" id="mobilenumber" tabindex="4" name="mobilenumber" class="form-control"  value="<?php if(isset($mobilenumber )) echo $mobilenumber ; ?>" placeholder="Enter Mobile Number">
                                                <label id="mobilenumbercheck" class="text-danger" >Enter Mobile Number</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Date Of Birth</label>
                                            <input type="date" tabindex="5" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php if(isset($dateofbirth )) echo $dateofbirth ; ?>">
                                        </div>
                                    </div>

                                      <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Date Of Joining</label>
                                                <input type="date" tabindex="6" id="dateofjoining" name="dateofjoining" class="form-control" value="<?php if(isset($dateofjoining )) echo $dateofjoining ; ?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                   <!-- Field Finished -->
                                   <?php if(isset($_GET['upd'])<=0){ ?>
                                   <div class="col-md-4"><br />
                                   <div class="col-xl-12 col-lglg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                            <div class="form-group" style="margin: auto;"> 
                                            <img src="img/profile-pic.jpg" width="43%" id="viewimage">
                                            <input type="file" tabindex="7"  class="form-control" 
                                            accept="image/*" onchange="loadFile(event)"  
                                            id="employeeimage" name="employeeimage" style="width:43%">
                                            </div>

                                        </div>
                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById("viewimage");
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                            };
                                        </script>
                                   </div>
                               <?php } ?>

                               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">E-Mail Id</label>
                                    <input class="form-control" tabindex="8" id="email" name="email" type="text" value="<?php if(isset($email )) echo $email ; ?>" placeholder="Enter Email Id">
                                    
                                </div>
                            </div>

                          
                            <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Contact No</label>
                                                <input type="number" id="contact" tabindex="9" name="contact" class="form-control" value="<?php if(isset($contact )) echo $contact ; ?>" placeholder="Enter Contact Number">
                                            </div>
                                        </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Designation <span class="required">*</span></label>
                                                <select tabindex="10" name="designation" id="designation" class="form-control comp-field chosen-select">
                                                        <option value="">Select designation</option>
                                                        <?php
                                                       
                                                        $designationelect="SELECT designation FROM designation";
                                                        $designationresult=$mysqli->query($designationelect);
                                                        $designationlist=array();
                                                        if($designationresult->num_rows>0){
                                                        while($row=$designationresult->fetch_assoc()){
                                                         $designationlist[]=$row["designation"];
                                                    }
                                                    }
                                                    for($i=0;$i<=sizeof($designationlist)-1;$i++){
                                                        ?>
                                                    <option <?php if(isset($designation)) { if($designation == $designationlist[$i] ) echo 'selected'; } ?> value="<?php if(isset($designationlist[$i])){echo $designationlist[$i];} ?>">
                                                            <?php if(isset($designationlist[$i])){echo $designationlist[$i];}?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                    <span id="designationcheck" class="text-danger">Enter Designation</span>
                                                </div>
                                            </div>


                                            <div class="col-xl-1 col-lg-1 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="label" style="visibility: hidden;">Add Unit</label>
                                                <button type="button" id="adddesignation" name="adddesignation" onclick="AddDesigModal()" class="form-control inbutton"><span class="icon-plus"></span></button>
                                                </div>
                                            </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

<div>
<div id="AddDesigModal" class="modal">
  <div class="modal-content">
    <span class="close" style="width:4%;">&times;</span>
  <iframe src="adddesignation.php" height="500px"></iframe>
  </div>
</div>
</div>

<div>
<div id="EmpBulkUploadModal" class="modal">
  <div class="modal-content">
    <span class="bulkclose" style="width:4%;">&times;</span>
  <iframe src="employeemasterbulk.php" height="250px"></iframe>
  </div>
</div>
</div>

            <!-- </div> -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Expertise</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row ">
                          
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Expertise</label>
                                    <input type="text" tabindex="11" id="expertise"  name="expertise" class="form-control" placeholder="Enter Expertise" value="<?php if(isset($expertise )) echo $expertise ; ?>">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">Star Rating</label>
                                    <input type="number" tabindex="12" class="form-control" id="starrating" name="starrating" placeholder="Enter Star Rating" value="<?php if(isset($starrating )) echo $starrating ; ?>">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Pay Structure</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row gutters">

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Basic</label>
                                    <input type="number" tabindex="13" class="form-control" id="basic" name="basic" value="<?php if(isset($basic )) echo $basic ; ?>" placeholder="Enter Basic" >
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>TDS</label>
                                    <input type="number" tabindex="14" id="tds" name="tds" class="form-control" value="<?php if(isset($tds )) echo $tds ; ?>" placeholder="Enter TDS">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>HRA</label>
                                    <input type="number" tabindex="15" id="hra" name="hra" class="form-control"  value="<?php if(isset($hra )) echo $hra ; ?>" placeholder="Enter HRA">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>PF</label>
                                    <input type="number" tabindex="16" id="pf" name="pf" class="form-control" value="<?php if(isset($pf )) echo $pf ; ?>" placeholder="Enter PF">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Conveyance</label>
                                    <input type="number" tabindex="17" class="form-control" id="conveyance" name="conveyance" value="<?php if(isset($conveyance )) echo $conveyance ; ?>" placeholder="Enter Conveyance">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>ESI</label>
                                    <input type="number" tabindex="18" id="esi" name="esi" class="form-control" value="<?php if(isset($esi )) echo $esi ; ?>" placeholder="Enter ESI">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Allowance</label>
                                    <input type="number" tabindex="19" class="form-control" id="allowance" name="allowance" value="<?php if(isset($allowance )) echo $allowance ; ?>" placeholder="Enter Allowance">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Loans</label>
                                    <input type="number" tabindex="20" id="loans" name="loans" class="form-control"  value="<?php if(isset($loans )) echo $loans ; ?>" placeholder="Enter Loans">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Incentive Percent</label>
                                    <input class="form-control" tabindex="21" id="incentivepercent" name="incentivepercent" type="number" value="<?php if(isset($incentivepercent )) echo $incentivepercent ; ?>" placeholder="Enter Incentive Percent">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Salary Advance</label>
                                    <input type="number" tabindex="22" id="salaryadvance" name="salaryadvance" class="form-control" value="<?php if(isset($salaryadvance )) echo $salaryadvance ; ?>" placeholder="Enter Salary Advance">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Any Other Deduction</label>
                                    <input type="number" tabindex="23" id="anyotherdeduction" name="anyotherdeduction" class="form-control"  value="<?php if(isset($anyotherdeduction )) echo $anyotherdeduction ; ?>" placeholder="Enter Any Other Deduction">
                                </div>
                            </div>

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>


                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Gross Pay</label>
                                    <input type="number" tabindex="24" readonly id="grosspay" name="grosspay" class="form-control"  value="<?php if(isset($grosspay )) echo $grosspay ; ?>" placeholder="Gross Pay">
                                </div>
                            </div>
                           

                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label>Total Deduction</label>
                                    <input type="number" tabindex="25" readonly id="totaldeduction" name="totaldeduction" class="form-control"  value="<?php if(isset($totaldeduction )) echo $totaldeduction ; ?>" placeholder="Total Deduction">
                                </div>
                            </div>
							
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Staff Experience Details</div>
                    </div>
                    <div class="card-body">
                        <div style="overflow-x: auto">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center text-white">Type</th>
                                <th scope="col" class="text-center text-white">Name</th>
                                <th scope="col" class="text-center text-white">Position Held</th>
                                <th scope="col" class="text-center text-white">Place </th>
                                <th scope="col" class="text-center text-white">From Period</th>
                                <th scope="col" class="text-center text-white">To Period</th>
                                <th scope="col" class="text-center text-white">Experience</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> 
                                
                                    <select class="form-control" tabindex="26" id="institutetype1" name="institutetype1">
                                        <option value="">Select Institute Type</option>
                                        <option  <?php if(isset($institutetype1)) { if($institutetype1 == "Technical" ) echo 'selected'; }  ?> value="Technical">Technical </option>
                                        <option  <?php if(isset($institutetype1)) { if($institutetype1 == "NonTechnical" ) echo 'selected'; }  ?> value="NonTechnical">NonTechnical </option>
                                    </select>
                                </td>
                                <td> <input tabindex="27" type="text" id="name1" name="name1" class="form-control"  value="<?php if(isset($name1 )) echo $name1 ; ?>"></td>
                                <td><input tabindex="28" type="text" id="positionheld1" name="positionheld1" class="form-control" value="<?php if(isset($positionheld1 )) echo $positionheld1 ; ?>" > </td>
                                <td><input type="text" tabindex="29" id="place1" name="place1" class="form-control"  value="<?php if(isset($place1 )) echo $place1 ; ?>"></td>
                                <td><input tabindex="30" type="date" id="fromperiod1" name="fromperiod1" class="form-control"  value="<?php if(isset($fromperiod1 )) echo $fromperiod1 ; ?>"></td>
                                <td><input tabindex="31" type="date"  id="toperiod1" name="toperiod1" class="form-control"  value="<?php if(isset($toperiod1 )) echo $toperiod1 ; ?>"></td>
                                <td><input tabindex="32" type="text" tabindex="30" readonly id="date1" name="date1" class="form-control" value="<?php if(isset($date1 )) echo $date1 ; ?>" ></td>
                              </tr>
                              <tr>

                                <td>
                                    <select tabindex="33" class="form-control" id="institutetype2" name="institutetype2">
                                        <option value="">Select Institute Type</option>
                                        <option  <?php if(isset($institutetype2)) { if($institutetype2 == "Technical" ) echo 'selected'; }  ?> value="Technical">Technical </option>
                                        <option  <?php if(isset($institutetype2)) { if($institutetype2 == "NonTechnical" ) echo 'selected'; }  ?> value="NonTechnical">NonTechnical </option>
                                    </select>
                                </td>
                                <td> <input type="text" tabindex="34" id="name2" name="name2" class="form-control"  value="<?php if(isset($name2 )) echo $name2 ; ?>"></td>
                                <td><input tabindex="35" type="text" id="positionheld2" name="positionheld2" class="form-control"  value="<?php if(isset($positionheld2 )) echo $positionheld2 ; ?>"> </td>
                                <td><input tabindex="36" type="text" id="place2" name="place2" class="form-control"  value="<?php if(isset($place2 )) echo $place2 ; ?>"></td>
                                <td><input tabindex="37" type="date" id="fromperiod2" name="fromperiod2" class="form-control"  value="<?php if(isset($fromperiod2 )) echo $fromperiod2 ; ?>"></td>
                                <td><input tabindex="38" type="date" id="toperiod2" name="toperiod2" class="form-control"  value="<?php if(isset($toperiod2 )) echo $toperiod2 ; ?>"></td>
                                <td><input tabindex="39" type="text" id="date2" readonly name="date2" class="form-control"  value="<?php if(isset($date2 )) echo $date2 ; ?>"></td>
                              </tr>
                              <tr>

                                <td>
                                    <select tabindex="40" class="form-control" id="institutetype3" name="institutetype3">
                                        <option value="">Select Institute Type</option>
                                        <option  <?php if(isset($institutetype3)) { if($institutetype3 == "Technical" ) echo 'selected'; }  ?> value="Technical">Technical </option>
                                        <option  <?php if(isset($institutetype3)) { if($institutetype3 == "NonTechnical" ) echo 'selected'; }  ?> value="NonTechnical">NonTechnical </option>
                                    </select>
                                </td>
                                <td> <input tabindex="41" type="text" id="name3" name="name3" class="form-control"  value="<?php if(isset($name3 )) echo $name3 ; ?>"></td>
                                <td><input tabindex="42" type="text" id="positionheld3" name="positionheld3" class="form-control"  value="<?php if(isset($positionheld3 )) echo $positionheld3 ; ?>"> </td>
                                <td><input tabindex="43" type="text" id="place3" name="place3" class="form-control" value="<?php if(isset($place3 )) echo $place3 ; ?>" ></td>
                                <td><input tabindex="44" type="date" id="fromperiod3" name="fromperiod3" class="form-control"  value="<?php if(isset($fromperiod3 )) echo $fromperiod3 ; ?>"></td>
                                <td><input tabindex="45" type="date" id="toperiod3" name="toperiod3" class="form-control" value="<?php if(isset($toperiod3 )) echo $toperiod3 ; ?>" ></td>
                                <td><input tabindex="46" type="text" id="date3" readonly name="date3" class="form-control"  value="<?php if(isset($date3 )) echo $date3 ; ?>"></td>
                              </tr>

                              <tr>
                                <td>
                                  <select class="form-control" tabindex="47" id="institutetype4" name="institutetype4">
                                        <option value="">Select Institute Type</option>
                                        <option  <?php if(isset($institutetype4)) { if($institutetype4 == "Technical" ) echo 'selected'; }  ?> value="Technical">Technical </option>
                                        <option  <?php if(isset($institutetype4)) { if($institutetype4 == "NonTechnical" ) echo 'selected'; }  ?> value="NonTechnical">NonTechnical </option>
                                    </select>
                                </td>
                                <td> <input tabindex="48" type="text" id="name4" name="name4" class="form-control"  value="<?php if(isset($name4 )) echo $name4 ; ?>"></td>
                                <td><input tabindex="49" type="text" id="positionheld4" name="positionheld4" class="form-control"  value="<?php if(isset($positionheld4 )) echo $positionheld4 ; ?>"> </td>
                                <td><input tabindex="50" type="text" id="place4" name="place4" class="form-control"  value="<?php if(isset($place4 )) echo $place4 ; ?>"></td>
                                <td><input tabindex="51" type="date" id="fromperiod4" name="fromperiod4" class="form-control" value="<?php if(isset($fromperiod4 )) echo $fromperiod4 ; ?>" ></td>
                                <td><input tabindex="52" type="date" id="toperiod4" name="toperiod4" class="form-control"  value="<?php if(isset($toperiod4 )) echo $toperiod4 ; ?>"></td>
                                <td><input tabindex="53" type="text" readonly id="date4" name="date4" class="form-control"  value="<?php if(isset($date4 )) echo $date4 ; ?>"></td>
                              </tr>
                              <tr>
                              	
                                <td>
										<select class="form-control" id="institutetype5" name="institutetype5" tabindex="54">
											<option value="">Select Institute Type</option>
                                            <option  <?php if(isset($institutetype5)) { if($institutetype5 == "Technical" ) echo 'selected'; }  ?> value="Technical">Technical </option>
                                        <option  <?php if(isset($institutetype5)) { if($institutetype5 == "NonTechnical" ) echo 'selected'; }  ?> value="NonTechnical">NonTechnical </option>
										</select>
							    </td>
                                <td> <input tabindex="55" type="text" id="name5" name="name5" class="form-control"  value="<?php if(isset($name5 )) echo $name5 ; ?>"></td>
                                <td><input type="text" id="positionheld5" name="positionheld5" class="form-control" value="<?php if(isset($positionheld5 )) echo $positionheld5 ; ?>"> </td>
                                <td><input tabindex="56" type="text" id="place5" name="place5" class="form-control" value="<?php if(isset($place5 )) echo $place5 ; ?>" ></td>
                                <td><input tabindex="57" type="date" id="fromperiod5" name="fromperiod5" class="form-control"  value="<?php if(isset($fromperiod5 )) echo $fromperiod5 ; ?>"></td>
                                <td><input tabindex="58" type="date" id="toperiod5" name="toperiod5" class="form-control"  value="<?php if(isset($toperiod5 )) echo $toperiod5 ; ?>"></td>
                                <td><input tabindex="59" type="text" readonly id="date5" name="date5" class="form-control" value="<?php if(isset($date5 )) echo $date5 ; ?>"></td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
            <?php if(isset($_GET['upd'])<=0){ ?>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Certificates</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
                                <input type="text" tabindex="60" class="form-control w-50 " id="title1" name="title1" value="<?php if(isset($title1 )) echo $title1 ; ?>">
								<input type="file" tabindex="61" id="certificate1" name="certificate1" accept="application/pdf" class="ml-4" value="<?php if(isset($certificate1 )) echo $certificate1 ; ?>">

							</div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text" tabindex="62" class="form-control w-50 " id="title2" name="title2" value="<?php if(isset($title2 )) echo $title2 ; ?>">
								<input type="file"  tabindex="63"  id="certificate2" name="certificate2" accept="application/pdf"  class="ml-4" value="<?php if(isset($certificate2 )) echo $certificate2 ; ?>">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text" tabindex="64" class="form-control w-50 " id="title3" name="title3" value="<?php if(isset($title3 )) echo $title3 ; ?>">
								<input type="file" tabindex="65" id="certificate3" name="certificate3" accept="application/pdf"  class="ml-4" value="<?php if(isset($certificate3 )) echo $certificate3 ; ?>">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text" tabindex="66" class="form-control w-50 " id="title4" name="title4" value="<?php if(isset($title4 )) echo $title4 ; ?>">
								<input type="file" tabindex="67" id="certificate4" name="certificate4" accept="application/pdf"  class="ml-4" value="<?php if(isset($certificate4 )) echo $certificate4 ; ?>">
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Title</label>
                            <div class="col-sm-10 d-flex align-items-center">
								<input type="text" tabindex="68" class="form-control w-50 " id="title5" name="title5" value="<?php if(isset($title5 )) echo $title5 ; ?>">
								<input type="file" tabindex="69" id="certificate5" name="certificate5" accept="application/pdf" class="ml-4" value="<?php if(isset($certificate5 )) echo $certificate5 ; ?>">
                            </div>
                        </div>
                    <?php } ?>


                        <div class="custom-control custom-checkbox mt-4">
									<input type="checkbox" tabindex="70" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div><br /><br />

                   <div class="row">
					   <div class="col-md-2 d-flex" > 
						<button type="button" id="employeedownload" name="employeedownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button>
						<button type="button" id="employeeupload" id="employeeupload" onclick="EmployeeBulkupload()" tabindex="72" class="btn btn-primary mb-2 ml-2"><span class="icon-upload"></span>Upload</button>
					   </div>
					   <div class="col-md-2">
						

					   </div>
					   <div class="col-md-2"></div>
					   <div class="col-md-2"></div>
					   <div class="col-md-2"></div>
					   <div class="col-md-2">
						
							<button type="submit" name="submitemployee" id="submitemployee" class="btn btn-primary" value="Submit" tabindex="73">Submit</button>
						    <button type="button" class="btn btn-outline-secondary" tabindex="74">Cancel</button>
					</div>
                </div>

            </div>


        </div>
    </div>
</div>
</form>
</div>



