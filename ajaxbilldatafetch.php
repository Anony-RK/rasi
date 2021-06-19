<?php
include('ajaxconfig.php');


if(isset($_GET['values'])) {
	$name = $_GET['values'];

	$qry = "SELECT users FROM billsetting";
	$result =mysqli_query($mysqli,$qry);
	while($user = mysqli_fetch_array($result)){
		

		$user = $user['users'];
		
        if( $name == $user) {
			

			?>


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


			<?php


		}else{
			echo " new one";
		}
	}


	

}


?>