<?php

include('ajaxconfig.php');?>
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
Add Unit
</div>
<div class="card-body">

<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<div class="form-group">
<label class="label">Enter Unit</label>
<input type="hidden"  name="unitid" id="unitid">
<input type="text" name="unitname" id="unitname" class="form-control" placeholder="Enter Unit">
<span class="text-danger" id="unitnamecheck">Enter Unit</span>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<button type="button" name="submitunitbtn" id="submitunitbtn" class="btn btn-primary">Submit</button>
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
					<th>UNIT</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php
					

					$unitselect="SELECT * FROM units WHERE 1 and status=0";
					$unitresult=$mysqli->query($unitselect);
					if($unitresult->num_rows>0){
					while($units=$unitresult->fetch_assoc()){
					?>
					<tr>
					<td><?php if(isset($units["unit"])){ echo $units["unit"]; }?></td>
					<td>
						<a id="editunit" value="<?php if(isset($units["unitid"])){ echo $units["unitid"];}?>"><span class="icon-border_color"></span></a> &nbsp

						 <a id="deleteunit" value="<?php if(isset($units["unitid"])){ echo $units["unitid"]; }?>"><span class='icon-trash-2'></span>
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
		<script src="js/itemcreation.js"></script>

		<script type="text/javascript">
		$("#unitnamecheck").hide();
		$(document).on("click", "#submitunitbtn", function () {
		var unitname=$("#unitname").val();
		var unitid=$("#unitid").val();
		if(unitname!=""){
			$.ajax({
            url: 'ajaxinsertunit.php',
            type: 'POST',
            data: {"unitid":unitid,"unitname":unitname},
            cache: false,
            success:function(response){
            	$("#insertsuccess").html(response);
            	$("#starttable").hide();
            	$("#unitname").val("");
            	$("#unitid").val("");
            }
            });
		}
    else{
    	$("#unitnamecheck").show();
    	setTimeout(function() {
        $('#unitnamecheck').fadeOut('fast');
        }, 2000);
    }
	});

	$("body").on("click","#deleteunit", function(){
		var isok=confirm("Do you want delete unit?");
		if(isok==false){
			return false;
		}else{
		var unitid=$(this).attr('value');
		var c_obj = $(this).parents("tr");
		$.ajax({
            url: 'ajaxdeleteunit.php',
            type: 'POST',
            data: {"unitid":unitid},
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

	$("body").on("click","#editunit",function(){
		var unitid=$(this).attr('value');
		$("#unitid").val(unitid);
		 $.ajax({
            url: 'ajaxeditunit.php',
            type: 'POST',
            data: {"unitid":unitid},
            cache: false,
            success:function(response){
            	$("#unitname").val(response);
        }
            });
	});



</script>
</body>