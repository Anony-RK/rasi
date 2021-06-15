
$(document).ready(function () {

// Validate companyname
	$('#companynamecheck').hide();	
	let companynameError = true;
	$('#companyname').keyup(function () {	
	validatecompanyname();
	});
	
	function validatecompanyname() {
	let companynameValue = $('#companyname').val();	
	if (companynameValue.length == '') {
	$('#companynamecheck').show();
	companynamecheck = false;
		return false;
	}
	else {
		$('#companynamecheck').hide();
		companynamecheck = true;	
	}
	}

	// // Validate cinno
	// $('#cinnocheck').hide();	
	// let cinnoError = true;
	// $('#cinno').keyup(function () {	
	// 	validatecinno();
	// });
	
	// function validatecinno() {
	// let cinnoValue = $('#cinno').val();	
	// if (cinnoValue.length == '') {
	// $('#cinnocheck').show();
	// cinnocheck = false;
	// 	return false;
	// }
	// else {
	// 	$('#cinnocheck').hide();
	// 	cinnocheck = true;	
	// }
	// }

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
addresscheck = false;
	return false;
}
else {
	$('#addresscheck').hide();
	addresscheck = true;	
}
}



	
// // Validate pincode
// $('#pincodecheck').hide();	
// let pincodeError = true;
// $('#pincode').keyup(function () {	
// 	validatepincode();
// });

// function validatepincode() {
// 	let pincodeValue = $('#pincode').val();		
// 	var letters = /^[0-9]+$/;
// 	if(!(pincodeValue.match(letters)) || pincodeValue.length>6 || pincodeValue.length<6)
// 	{
// 	$('#pincodecheck').show();
// 	pincodeError = false;
// 		return false;
// 	}
// 	else {
// 		$('#pincodecheck').hide();
// 		pincodeError = true;	
// 	}
// 	}

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
statecheck = false;
	return false;
}
else {
	$('#statecheck').hide();
	statecheck = true;	
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
countrycheck = false;
	return false;
}
else {
	$('#countrycheck').hide();
	countrycheck = true;	
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

$('#emailcheck').hide();	
let emailError = true;
$('#email').keyup(function () {			
	validateemail();
});
function validateemail() {
var email = $('#email').val();
var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(email == ''){
	$('#emailcheck').hide();
	emailError = true;
}
else if (!re.test(email))
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


// Validate faxnumber
// $('#faxnumbercheck').hide();	
// let faxnumberError = true;
// $('#faxnumber').keyup(function () {	
// validatefaxnumber();
// });

// function validatefaxnumber() {
// let faxnumberValue = $('#faxnumber').val();	
// if (faxnumberValue.length == '') {
// $('#faxnumbercheck').show();
// faxnumbercheck = false;
// 	return false;
// }
// else {
// 	$('#faxnumbercheck').hide();
// 	faxnumbercheck = true;	
// }
// }

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
if (!regtan.test(tannoValue)) {
$('#tannocheck').show();
tannocheck = false;
	return false;
}
else {
	$('#tannocheck').hide();
	tannocheck = true;	
}
}


// Validate pfno
$('#pfnocheck').hide();	
let pfnoError = true;
$('#pfno').keyup(function () {	
validatepfno();
});

function validatepfno() {
let pfnoValue = $('#pfno').val();	
if (pfnoValue.length == '') {
$('#pfnocheck').show();
pfnocheck = false;
	return false;
}
else {
	$('#pfnocheck').hide();
	pfnocheck = true;	
}
}

// Validate esicno
$('#esicnocheck').hide();	
let esicnoError = true;
$('#esicno').keyup(function () {	
validateesicno();
});

function validateesicno() {
let esicnoValue = $('#esicno').val();	
if (esicnoValue.length == '') {
$('#esicnocheck').show();
esicnocheck = false;
	return false;
}
else {
	$('#esicnocheck').hide();
	esicnocheck = true;	
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
loginshorternamecheck = false;
	return false;
}
else {
	$('#loginshorternamecheck').hide();
	loginshorternamecheck = true;	
}
}

// Validate website
$('#websitecheck').hide();	
let websiteError = true;
$('#website').keyup(function () {	
validatewebsite();
});

function validatewebsite() {
let websiteValue = $('#website').val();	
if (websiteValue.length == '') {
$('#websitecheck').show();
websitecheck = false;
	return false;
}
else {
	$('#websitecheck').hide();
	websitecheck = true;	
}
}
// Validate booksstartfrom
$('#booksstartfromcheck').hide();	
let booksstartfromError = true;
$('#booksstartfrom').change(function () {	
	validatebookstartfrom();
});

function validatebookstartfrom() {
	let booksstartfromValue = $('#booksstartfrom').val();	
	if (booksstartfromValue.length == '') {
	$('#booksstartfromcheck').show();
	booksstartfromcheck = false;
		return false;
	}
	else {
		$('#booksstartfromcheck').hide();
		booksstartfromcheck = true;	
	}
	}

	// Validate pan
$('#pancheck').hide();	
let panError = true;
$('#panno').keyup(function () {			
	this.value = this.value.toUpperCase();
	validatepan();
});
function validatepan() {
	let panValue = $('#panno').val();
	var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

	if (!(panValue.match(regpan))) {
	$('#pancheck').show();
	panError = false;
		return false;
	}	
	else {
		$('#pancheck').hide();
		panError = true;
	}
	}


//GST
$('#gstcheck').hide();	
let gstError = true;
$('#gst').keyup(function () {	
this.value = this.value.toUpperCase();
	validategst();
});
function validategst() {
var reggst = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/; 
var gst = $('#gst').val();
if(!reggst.test(gst)){
	$('#gstcheck').show();
	gstError = false;
	return false;
}
else
{
	$('#gstcheck').hide();
	gstError = true;
}	
}

$("#isgst").change(function(){
	var isgst=$("#isgst").val();
	if(isgst == 'Yes'){
		$("#gst").attr('readonly', false);
	}else{
		$("#gst").attr('readonly', true);
	}
});

//Submit Button Onclick
	$('#submitcompanybtn').click(function () {		
		validatecompanyname();
		//validatecinno();
		validateaddress();
		//validatepincode();
		validatestate();
		validatecountry();
		validatephonenumber();
		validateemail() ;
		//validatefaxnumber();
		//validatetanno();
		validatepfno();
		validateesicno();
		//validategst();
		validateloginshortername();
		validatewebsite();
		validatebookstartfrom();
		if (companynameError == true  && addressError == true 
			 && stateError == true && countryError == true 
			 && phonenumberError == true 	&& emailError == true 
			 &&  loginshorternameError == true  
			 && websiteError == true && booksstartfromError == true
			) 
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
