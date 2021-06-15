// Document is ready
$(document).ready(function () {

// Validate bankname
	$('#banknamecheck').hide();	
	let banknameError = true;
	$('#bankname').keyup(function () {	
	validatebankname();
	});
	
	function validatebankname() {
	let banknameValue = $('#bankname').val();	
	if (banknameValue.length == '') {
	$('#banknamecheck').show();
	banknameError = false;
		return false;
	}
	else {
		$('#banknamecheck').hide();
		banknameError = true;	
	}
	}

// Validate accountno
$('#accountnocheck').hide();	
let accountnoError = true;
$('#accountno').keyup(function () {	
validateaccountno();
});

function validateaccountno() {
let accountnoValue = $('#accountno').val();	
if (accountnoValue.length == '') {
$('#accountnocheck').show();
accountnoError = false;
	return false;
}
else {
	$('#accountnocheck').hide();
	accountnoError = true;	
}
}



// Validate Branch Name
$('#branchnamecheck').hide();	
let branchnameError = true;
$('#branchname').keyup(function () {	
validatebranchname();
});

function validatebranchname() {
let branchnameValue = $('#branchname').val();	
if (branchnameValue.length == '') {
$('#branchnamecheck').show();
branchnameError = false;
	return false;
}
else {
	$('#branchnamecheck').hide();
	branchnameError = true;	
}
}

// Validate Short Form
$('#shortformcheck').hide();	
let shortformError = true;
$('#shortform').keyup(function () {	
validateshortform();
});

function validateshortform() {
let shortformValue = $('#shortform').val();	
if (shortformValue.length == '') {
$('#shortformcheck').show();
shortformError = false;
	return false;
}
else {
	$('#shortformcheck').hide();
	shortformError = true;	
}
}


// Validate purpose
$('#purposecheck').hide();	
let purposeError = true;
$('#purpose').keyup(function () {	
validatepurpose();
});

function validatepurpose() {
let purposeValue = $('#purpose').val();	
if (purposeValue.length == '') {
$('#purposecheck').show();
purposeError = false;
	return false;
}
else {
	$('#purposecheck').hide();
	purposeError = true;	
}
}


// Validate accounttype
$('#accounttypecheck').hide();	
let accounttypeError = true;
$('#accounttype').keyup(function () {	
validateaccounttype();
});

function validateaccounttype() {
let accounttypeValue = $('#accounttype').val();	
if (accounttypeValue.length == '') {
$('#accounttypecheck').show();
accounttypeError = false;
	return false;
}
else {
	$('#accounttypecheck').hide();
	accounttypeError = true;	
}
}




// Validate subgrouptype
$('#undersubgroupcheck').hide();	
let subgrouptypeError = true;
$('#subgrouptype').keyup(function () {	
validatesubgrouptype();
});

function validatesubgrouptype() {
let subgrouptypeValue = $('#subgrouptype').val();	
if (subgrouptypeValue.length == '') {
$('#undersubgroupcheck').show();
subgrouptypeError = false;
	return false;
}
else {
	$('#undersubgroupcheck').hide();
	subgrouptypeError = true;	
}
}

// Validate contactnocheck

$('#contactnocheck').hide();	
let contactnoError = true;
$('#contactno').keyup(function () {			
	validatecontactno();
});
function validatecontactno() {
	let contactnoValue = $('#contactno').val();

	var letters = /^[0-9]+$/;
	if(!(contactnoValue.match(letters)) || contactnoValue.length>10 || contactnoValue.length<10)
	{
	
			$('#contactnocheck').show();
			contactnoError = false;
				return false;
	}	
	else {
		$('#contactnocheck').hide();
		contactnoError = true;
	
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
if ($email.val() == '' || !re.test($email.val()))
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

//Submit Button Onclick
	$('#submitbankbtn').click(function () {				
		validatebankname();	
		validateaccountno();	
		validatebranchname();		
		validateshortform();		
		validatepurpose();		
		validateaccounttype();	
		validatesubgrouptype();	
	
		if (banknameError == true && accountnoError == true  && branchnameError == true 
			&& shortformError == true && purposeError == true && accounttypeError == true 
			&& subgrouptypeError == true) 
		  {	
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});
	$('#downloadbank').click(function () {
		window.location.href='uploads/downloadfiles/bankbulksample.xlsx'
	});
	

	
});
function Uploadbank(){
	var modal = document.getElementById("BankBulkUploadModal");
	var btn = document.getElementById("uploadbank");
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