// Document is ready
$(document).ready(function () {

// Validate branchname
	$('#branchnamecheck').hide();	
	let branchnameError = true;
	$('#branchname').keyup(function () {	
	validatebranchname();
	});
	
	function validatebranchname() {
	let branchValue = $('#branchname').val();	
	if (branchValue.length == '') {
	$('#branchnamecheck').show();
	branchnameError = false;
		return false;
	}
	else {
		$('#branchnamecheck').hide();
		branchnameError = true;	
	}
	}

// Validate address
$('#addresscheck').hide();	
let addressError = true;
$('#address').keyup(function () {	
validateaddress();
});

function validateaddress() {
let addressValue = $('#address').val();	
if (addressValue.length == '') {
$('#addresscheck').show();
addressError = false;
	return false;
}
else {
	$('#addresscheck').hide();
	addressError = true;	
}
}



	
// Validate pincode
$('#pincodecheck').hide();	
let pincodeError = true;
$('#pincode').keyup(function () {	
	validatepincode();
});

function validatepincode() {
	let pincodeValue = $('#pincode').val();		
	var letters = /^[0-9]+$/;
	if(!(pincodeValue.match(letters)) || pincodeValue.length>6 || pincodeValue.length<6)
	{
	$('#pincodecheck').show();
	pincodeError = false;
		return false;
	}
	else {
		$('#pincodecheck').hide();
		pincodeError = true;	
	}
	}

// Validate state
$('#statecheck').hide();	
let stateError = true;
$('#state').keyup(function () {	
validatestate();
});

function validatestate() {
let stateValue = $('#state').val();	
if (stateValue.length == '') {
$('#statecheck').show();
stateError = false;
	return false;
}
else {
	$('#statecheck').hide();
	stateError = true;	
}
}


// Validate state
$('#districtcheck').hide();	
let districtError = true;
$('#district').change(function () {	
	$("#state").val("Tamilnadu");
	$("#state").attr("readonly", true);
	$("#country").val("India");
	$("#country").attr("readonly", true);
validatedistrict();
});

function validatedistrict() {
let districtValue = $('#district').val();	
if (districtValue.length == '') {
$('#districtcheck').show();
districtError = false;
	return false;
}
else {
	$('#districtcheck').hide();
	districtError = true;	
}
}

// Validate country
$('#countrycheck').hide();	
let countryError = true;
$('#country').keyup(function () {	
validatecountry();
});

function validatecountry() {
let countryValue = $('#country').val();	
if (countryValue.length == '') {
$('#countrycheck').show();
countryError = false;
	return false;
}
else {
	$('#countrycheck').hide();
	countryError = true;	
}
}

// Validate phonenumber

$('#phonenumbercheck').hide();	
let phonenumberError = true;
$('#phonenumber').keyup(function () {			
	validatephonenumber();
});
function validatephonenumber() {
	let phonenumberValue = $('#phonenumber').val();

	var letters = /^[0-9]+$/;
	if(!(phonenumberValue.match(letters)) || phonenumberValue.length>10 || phonenumberValue.length<10)
	{
	
			$('#phonenumbercheck').show();
			phonenumberError = false;
				return false;
	}	
	else {
		$('#phonenumbercheck').hide();
		phonenumberError = true;
	
	}
}

var email=document.getElementById('email').value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+(?:\.[a-zA-Z0-9-]+)*$/;

	
// Validate email
$('#emailcheck').hide();	
let emailError = true;
$('#email').keyup(function () {			
	validateemail();
});
function validateemail() {

var $email = $('form input[name="email'); //change form to id or containment selector
var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (!re.test($email.val()))
{

	$('#emailcheck').show();
	emailError = false;
	return false;
}
else
{
	$('#emailcheck').hide();
	emailError = true;
}	
}

// // Validate faxnumber
// $('#faxnumbercheck').hide();	
// let faxnumberError = true;
// $('#faxnumber').keyup(function () {	
// validatefaxnumber();
// });

// function validatefaxnumber() {
// let faxnumberValue = $('#faxnumber').val();	
// if (faxnumberValue.length == '') {
// $('#faxnumbercheck').show();
// faxnumberError = false;
// 	return false;
// }
// else {
// 	$('#faxnumbercheck').hide();
// 	faxnumberError = true;	
// }
// }
$("#isgst").change(function(){
	var isgst=$("#isgst").val();
	if(isgst == 'Yes'){
		$("#gst").attr('readonly', false);
	}else{
		$("#gst").attr('readonly', true);
	}
});
	

// Validate tanno
$('#tannocheck').hide();	
let tannoError = true;
$('#tanno').keyup(function () {
this.value = this.value.toUpperCase();	
validatetanno();
});

function validatetanno() {
var regtan = /^([a-zA-Z]){4}([0-9]){5}([a-zA-Z]){1}?$/;
let tannoValue = $('#tanno').val();	
 if(tannoValue==''){
	$('#tannocheck').hide();
	tannocheck = true;
}
else if (!regtan.test(tannoValue)) {
$('#tannocheck').show();
tannocheck = false;
	return false;
}
else {
	$('#tannocheck').hide();
	tannocheck = true;	
}
}
// Validate gst
$('#gstcheck').hide();	
let gstError = true;
$('#gst').keyup(function () {	
this.value = this.value.toUpperCase();
validategst();
});

function validategst() {
let gstValue = $('#gst').val();	
var reggst = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/; 
if (!reggst.test(gstValue)) {
$('#gstcheck').show();
gstError = false;
	return false;
}
else {
	$('#gstcheck').hide();
	gstError = true;	
}
}




// Validate loginshortername
$('#loginshorternamecheck').hide();	
let loginshorternameError = true;
$('#loginshortername').keyup(function () {	
validateloginshortername();
});

function validateloginshortername() {
let loginshorternameValue = $('#loginshortername').val();	
if (loginshorternameValue.length == '') {
$('#loginshorternamecheck').show();
loginshorternameError = false;
	return false;
}
else {
	$('#loginshorternamecheck').hide();
	loginshorternameError = true;	
}
}

//Submit Button Onclick
	$('#submitbranchbtn').click(function () {		
		
	    	validategst();
		validatebranchname();
		validateaddress();
		validatepincode();
		validatestate();
		validatecountry();
		validatephonenumber();
		validateemail() ;
		validatedistrict();
		validatetanno();
		
			
		validateloginshortername();
		if (branchnameError == true && addressError == true  && pincodeError == true 
			&& stateError == true && countryError == true && phonenumberError == true 
			&& emailError == true &&  gstError == true  
			&& loginshorternameError == true && districtError == true && tannoError == true) 
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});


});
