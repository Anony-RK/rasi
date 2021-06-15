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

<style>
.custalert {
  padding: 20px;
  width: 50%;
  margin: auto;
  background-color: green;
  color: white;
  top:50%;
  left: 50%;
  transform: translate(-50%, 50%);
  position: absolute;
}

.custclosebtn {
  float: right;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.5s;
}

.custclosebtn:hover {
  color: black;
}
.successalert{
  display:none;
  padding: 10px; 
  width: 100%; 
  background-color: green; 
  color: white;
}
.unsuccessalert{
  display:none;
  padding: 10px; 
  width: 100%; 
  background-color: red; 
  color: white;
}
*{
	font-size: .85rem;
}

.tableFixHead    { 
	overflow: auto; 
	height: 250px; 
}
.tableFixHead th {
 position: sticky; 
 top: 0;
  }

table { 
	border-collapse: collapse; 
	width: 50%; 
}
th, td { 
	padding: 8px 16px; 
}
</style>
</head>
<body>

<!-- Form Start -->

<div class="card">
<form>
<div class="card-header">
Add Stock
</div>
<div class="card-body">

<div id="stockinsertnotok" class="unsuccessalert">Stock Already Exists, Please Enter a Different Name!
<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
</div>

 <div id="stockinsertok" class="successalert">Stock Added Succesfully!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
 </div>

  <div id="stockupdateok" class="successalert">Stock Updated Succesfully!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
 </div>

<div id="stockdeletenotok" class="unsuccessalert">You Don't Have Rights To Delete This Stock!
<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
</div>

 <div id="stockdeleteok" class="successalert">Stock Has been Inactivated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
 </div>

<br />
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<div class="form-group">
<label class="label">Enter Stock</label>
<input type="hidden"  name="stockid" id="stockid">
<input type="text" name="stockname" id="stockname" class="form-control" placeholder="Enter Stock">
<span class="text-danger" id="stocknamecheck">Enter Stock</span>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
<button type="button" name="submitstockbtn" id="submitstockbtn" class="btn btn-primary">Submit</button>
<button type="reset" class="btn btn-secondary">Cancel</button>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
</div>
</div>
</form>
<br />

<div id="updatedstocktable">
</div>
        <div class="tableFixHead">
				<table class="table custom-table" id="starttable" style="width: 50%;margin: auto;"> 
				<thead>
				<tr>
					<th>STOCK</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php
					$stockselect="SELECT * FROM stocks WHERE  status=0";
					$stockresult=$mysqli->query($stockselect);
					if($stockresult->num_rows>0){
					while($stocks=$stockresult->fetch_assoc()){
					?>
					<tr>
					<td><?php if(isset($stocks["stock"])){ echo $stocks["stock"]; }?></td>
					<td>
						<a id="editstock" value="<?php if(isset($stocks["stockid"])){ echo $stocks["stockid"];}?>"><span class="icon-border_color"></span></a> &nbsp

						 <a id="deletestock" value="<?php if(isset($stocks["stockid"])){ echo $stocks["stockid"]; }?>"><span class='icon-trash-2'></span>
					    </a>
			           </td>
				    </tr>
				    </tbody>
				    <?php }} ?>
				</table>
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
		$("#stocknamecheck").hide();
		$(document).on("click", "#submitstockbtn", function () {
		var stockname=$("#stockname").val();
    var stockid=$("#stockid").val();
		if(stockname!=""){
			$.ajax({
            url: 'ajaxinsertstock.php',
            type: 'POST',
            data: {"stockname":stockname,"stockid":stockid},
            cache: false,
            success:function(response){
            	var insresult = response.includes("Exists");
            	var updresult = response.includes("Updated");
            	if(insresult){
            	$('#stockinsertnotok').show();	
            	setTimeout(function() {
                $('#stockinsertnotok').fadeOut('fast');
                }, 2000);
            	}else if(updresult){
            	$('#stockupdateok').show();	
            	setTimeout(function() {
                $('#stockupdateok').fadeOut('fast');
                }, 2000);
                $("#starttable").remove();
                resettable();
                $("#stockname").val('');
                $("#stockid").val('');
            	}
            	else{
            	$('#stockinsertok').show();	
            	setTimeout(function() {
                $('#stockinsertok').fadeOut('fast');
                }, 2000);
              $("#starttable").remove();
                resettable();
                $("#stockname").val('');
                $("#stockid").val('');
            	}
            }
            });
		}
    else{
    	$("#stocknamecheck").show();
    	setTimeout(function() {
        $('#stocknamecheck').fadeOut('fast');
        }, 2000);
    }
	});

function resettable(){
	$.ajax({
            url: 'getstocktable.php',
            type: 'POST',
            data: {},
            cache: false,
            success:function(html){
            	$("#updatedstocktable").html(html);
            }
        });
}

	$("body").on("click","#deletestock", function(){
		var isok=confirm("Do you want delete stock?");
		if(isok==false){
			return false;
		}else{
		var stockid=$(this).attr('value');
		var c_obj = $(this).parents("tr");
		$.ajax({
            url: 'ajaxdeletestock.php',
            type: 'POST',
            data: {"stockid":stockid},
            cache: false,
            success:function(response){
            	var delresult = response.includes("Rights");
            	if(delresult){
            	$('#stockdeletenotok').show();	
            	setTimeout(function() {
                $('#stockdeletenotok').fadeOut('fast');
                }, 2000);
            	}
            	else{
            	c_obj.remove();
            	$('#stockdeleteok').show();	
            	setTimeout(function() {
                $('#stockdeleteok').fadeOut('fast');
                }, 2000);
            	}
    	    }
            });
		}
	});

	$("body").on("click","#editstock",function(){
		var stockid=$(this).attr('value');
		$("#stockid").val(stockid);
		 $.ajax({
            url: 'ajaxeditstock.php',
            type: 'POST',
            data: {"stockid":stockid},
            cache: false,
            success:function(response){
            	$("#stockname").val(response);
        }
            });
	});
</script>
</body>