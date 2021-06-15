$(document).ready(function () {

// Validate Vendor Name
	$('#vendornamecheck').hide();	
	let vendornameError = true;
	$('#vendorname').keyup(function () {	
	validatevendorname();
	});
	
	function validatevendorname() {
	let vendornameValue = $('#vendorname').val();	
	if (vendornameValue.length == '') {
	$('#vendornamecheck').show();
	vendornameError = false;
		return false;
	}
	else {
		$('#vendornamecheck').hide();
		vendornameError = true;	
	}
	}
$('#gstnumbercheck').hide();	
let gstnumberError = true;
$('#gstnumber').keyup(function () {	
this.value = this.value.toUpperCase();
	validategstnumber();
});
function validategstnumber() {
var reggst = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/; 
var gstnumber = $('#gstnumber').val();
if(gstnumber.length == '' || !reggst.test(gstnumber)){
	$('#gstnumbercheck').show();
	gstnumberError = false;
	return false;
}
else
{
	$('#gstnumbercheck').hide();
	gstnumberError = true;
}	
}

// Validate Stocktype
	$('#gststatecheck').hide();	
	let stateError = true;
	$('#gststate').change(function () {	
	validatestate();
	});
	
	function validatestate() {
	let statetypeValue = $('#gststate').val();	
	if (statetypeValue.length == '') {
	$('#gststatecheck').show();
	stateError = false;
		return false;
	}
	else {
		$('#gststatecheck').hide();
		stateError = true;	
	}
	}


// Validate Stocktype
	$('#stocktypecheck').hide();	
	let stocktypeError = true;
	$('#stocktype').change(function () {	
	validatestocktype();
	});
	
	function validatestocktype() {
	let stocktypeValue = $('#stocktype').val();	
	if (stocktypeValue.length == '') {
	$('#stocktypecheck').show();
	stocktypeError = false;
		return false;
	}
	else {
		$('#stocktypecheck').hide();
		stocktypeError = true;	
	}
	}


//E-mail check
$('#mailidcheck').hide();	
let mailidError = true;
$('#mailid').keyup(function () {			
	validatmailidid();
});
function validatmailidid() {
var mailid = $('#mailid');
var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(mailid.val() == ''){
	$('#mailidcheck').hide();
	mailidError = true;
}
else if (!re.test(mailid.val()))
{
	$('#mailidcheck').show();
	mailidError = false;
	return false;
}
else
{
	$('#mailidcheck').hide();
	mailidError = true;
}	
}

	$('#downloadvendor').click(function () {
		window.location.href='uploads/downloadfiles/Vendor_Creation_Sample.xlsx'
	});

	$("#isgst").change(function(){
		var isgst = $("#isgst").val();
		if(isgst == 'Yes'){
			$("#gstfield").show();

		}else{
			$("#gstfield").hide();
		}
	});


$('#subgroupcheck').hide();	
    let subgroupError = true;
	$("#subgroup").change(function(){
		var subgroup=$("#subgroup").val();
		$.ajax({
           url: "getvendorgroup.php",
           data: {"subgroup":subgroup},
           cache: false,
           type: "post",
           dataType: "json",
           success: function (data) {
         	$("#groupname").val(data);
          }
    });

	$.ajax({
           url: "getvendorledger.php",
           data: {"subgroup":subgroup},
           cache: false,
           type: "post",
           dataType: "json",
           success: function (data) {
           	 $("#ledgername").empty();
           	 $("#ledgername").append("<option value=''>"+"Select Option"+"</option>");
         	 for(var i = 0; i<data.length; i++){
             var ledgername = data[i]['ledgername'];
             $("#ledgername").append("<option value='"+ledgername+"'>"+ledgername+"</option>");
             $("#ledgername").attr("readonly", false);
         	
          }}
    });

    validatesubgroup();

	});

	function validatesubgroup() {
	let subgroupValue = $('#subgroup').val();	
	if (subgroupValue.length == '') {
	$('#subgroupcheck').show();
	subgroupError = false;
		return false;
	}
	else {
		$('#subgroupcheck').hide();
		subgroupError = true;	
	}
	}


	$('#submitvendorbtn').click(function () {

		var isgstval=$("#isgst").val();
		if(isgstval == 'Yes'){
		validategstnumber();
		validatestate();
		}
		validatevendorname();
		validatestocktype();
		validatesubgroup();
		
		

		if (vendornameError == true && stocktypeError == true  && gstnumberError == true && stateError == true && gstnumberError == true && subgroupError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }

	});

//VendorCode Generate

	$.ajax({
    url: "getvendorcode.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {
   	$("#vendorcode").val(data);
   }
   });

	$("#state").change(function(){
		$("#country").val("India");
	});

    

	$("#district").change(function(){
		$("#state").val("Tamilnadu");
		$("#state").attr("readonly", true);
		$("#country").val("India");
		$("#country").attr("readonly", true);
	});

});

function Uploadvendor(){
var modal = document.getElementById("VendorBulkUploadModal");
var btn = document.getElementById("uploadvendor");
var span = document.getElementsByClassName("bulkclose")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}
function AddStock(){
var modal = document.getElementById("AddStockModal");
var btn = document.getElementById("addstock");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
   DropDownStock();
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}
function DropDownStock(){
	$.ajax({
		url: 'stocktypedropdown.php',
        type: 'post',
        data: {},
        dataType: 'json',
        success:function(response){
            	$("#stocktype").empty();
            	$("#stocktype").prepend("<option value=''>"+'Select Stock Type'+"</option>");
            	for(r=0;r<=response.length-1;r++){
            	$("#stocktype").append("<option value='"+response[r]+"'>"+response[r]+"</option>");
            	}
            }	
            });
}