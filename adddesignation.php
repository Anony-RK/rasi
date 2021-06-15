<?php 
include('ajaxconfig.php'); 
?>
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Rasi Admin Template</title>

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">

		<!-- ************************* Vendor Css Files *************-->
		<link rel="stylesheet" href="vendor/customcss/customstyle.css" />

	</head>

	<body>




		<!-- Form Start -->


<div class="card">
<form>
<div class="card-header">
Add Designation
</div>
<div class="card-body">

<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<div class="form-group">
<label class="label">Enter Designation</label>
<input type="hidden"  name="designationid" id="designationid">
<input type="text" name="designation" id="designation" class="form-control" placeholder="Enter Designation">
<span class="text-danger" id="designationcheck">Enter Designation</span>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<button type="button" name="submitdesigbtn" id="submitdesigbtn" class="btn btn-primary">Submit</button>
<button type="reset" class="btn btn-secondary">Cancel</button>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>
</form>
<br />
<div id="deletemessage"></div>

                <div class="table-container unit-table" id="starttable">
				<div class="table-responsive">
				<table class="table custom-table m-0" >
				<thead>
				<tr>
					<th>DESIGNATION</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php
					$designationselect="SELECT * FROM designation WHERE status=0";
					$designationresult=$con->query($designationselect);
					if($designationresult->num_rows>0){
					while($desigs=$designationresult->fetch_assoc()){
					?>
					<tr>
					<td><?php if(isset($desigs["designation"])){ echo $desigs["designation"]; }?></td>
					<td>
						<a id="editdesignation" value="<?php if(isset($desigs["designationid"])){ echo $desigs["designationid"];}?>"><span class="icon-border_color"></span></a> &nbsp

						 <a id="deletedesignation" value="<?php if(isset($desigs["designationid"])){ echo $desigs["designationid"]; }?>"><span class="icon-trash-2"></span></a>
					    </a>
			           </td>
				    </tr>
				    </tbody>
				    <?php }} ?>
				</table>
			</div>
		</div>

	<div id="insertsuccess"></div>	
	<div id="updatemessage"></div>	
	</div>




		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>
		<script src="js/employeemaster.js"></script>

		<script type="text/javascript">
		$("#designationcheck").hide();
		$(document).on("click", "#submitdesigbtn", function () {
		var designation=$("#designation").val();
		var designationid=$("#designationid").val();
		if(designation!=""){
			$.ajax({
            url: 'ajaxinsertdesignation.php',
            type: 'POST',
            data: {"designationid":designationid,"designation":designation},
            cache: false,
            success:function(response){
            	$("#insertsuccess").html(response);
            	$("#starttable").hide();
            	$("#designation").val("");
            	$("#designationid").val("");
            }
            });
		}
    else{
    	$("#designationcheck").show();
    	setTimeout(function() {
        $('#designationcheck').fadeOut('fast');
        }, 2000);
    }
	});

	$("body").on("click","#deletedesignation", function(){
		var isok=confirm("Do you want delete Designation?");
		if(isok==false){
			return false;
		}else{
		var designationid=$(this).attr('value');
		var c_obj = $(this).parents("tr");
		$.ajax({
            url: 'ajaxdeletedesignation.php',
            type: 'POST',
            data: {"designationid":designationid},
            cache: false,
            success:function(response){
            	c_obj.remove();
            	$("#deletemessage").html(response);

    	        setTimeout(function() {
                $('#deletemessage').fadeOut('fast');
                }, 2000);
    	    }
            });
		}
	});

	$("body").on("click","#editdesignation",function(){
		var designationid=$(this).attr('value');
		$("#designationid").val(designationid);
		 $.ajax({
            url: 'ajaxeditdesignation.php',
            type: 'POST',
            data: {"designationid":designationid},
            cache: false,
            success:function(response){
            	$("#designation").val(response);
        }
            });
	});



</script>
</body>