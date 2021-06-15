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

<div class="container">
<div class="card">
	<div class="card-header">
		Vendor Bulk Upload
	</div>
<form action="" method="post" enctype="multipart/form-data" name="vendorbulk" id="vendorbulk">
<div class="card-body">

<div class="row">
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12">
<div class="form-group">
<div id="insertsuccess" style="color: green"><b>Data Imported</b></div>
<div id="insertnotsuccess" style="color: red"><b>Cannot Import Excel</b></div>
<label class="label">Select Excel</label>
<input type="file" name="file" id="file" class="form-control" accept=".xlsx, .xls">
</div>
</div> 
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<button type="submit" name="submitvendorbulkbtn" id="submitvendorbulkbtn" class="btn btn-primary  form-control"><span class="icon-upload"></span>&nbsp Upload</button>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>
<br />			    
</form>
</div>
</div>

		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

		<script>
	
	$(document).ready(function(e){
			$("#insertsuccess").hide();
			$("#insertnotsuccess").hide();
			 $("#vendorbulk").on('submit', function(e){
			 	e.preventDefault();
			 	 $.ajax({
			 	 	type: 'POST',
			 	 	url: 'ajaxvendorbulkupload.php',
			 	 	data: new FormData(this),
			 	 	dataType: 'json',
			 	 	contentType: false,
			 	 	cache: false,
			 	 	processData:false,
			 	 	beforeSend: function(){
			 	 	$('#file').attr("disabled",  true);
                    $('#submitvendorbulkbtn').attr("disabled", true);
                    },
			 	 	success: function(data){
			 	 		var ok=data.includes("Imported");
			 	 		if(ok){
			 	 		$("#insertsuccess").show();
			 	 	}else{
			 	 		$("#insertnotsuccess").show();
			 	 	}
			 	 	},
			 	 	complete: function(){
			 	 	$('#file').attr("disabled",  false);
                    $('#submitvendorbulkbtn').attr("disabled", false);
                    
			 	 	}
			 	 });
			 	});
			});


		</script>
	</body>