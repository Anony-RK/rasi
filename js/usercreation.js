$(document).ready(function () {



    	
// Validate email
$('#emailcheck').hide();	
let emailError = true;
$('#email').keyup(function () {			
	validateemail();
});
function validateemail() {

var $email = $('#email'); //change form to id or containment selector
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



// Role
$('#rolecheck').hide();	
let roleError = true;
$('#role').keyup(function () {	
role();
});

function role() {
let roleValue = $('#role').val();	
if (roleValue.length == '') {
$('#rolecheck').show();
roleError = false;
    return false;
}
else {
    $('#rolecheck').hide();
    roleError = true;	
}
}



// Role
$('#firstnamecheck').hide();	
let firstnameError = true;
$('#firstname').keyup(function () {	
firstname();
});

function firstname() {
let firstnameValue = $('#firstname').val();	
if (firstnameValue.length == '') {
$('#firstnamecheck').show();
firstnameError = false;
    return false;
}
else {
    $('#firstnamecheck').hide();
    firstnameError = true;	
}
}




// lastname
$('#lastnamecheck').hide();	
let lastnameError = true;
$('#lastname').keyup(function () {	
lastname();
});

function lastname() {
let lastnameValue = $('#lastname').val();	
if (lastnameValue.length == '') {
$('#lastnamecheck').show();
lastnameError = false;
    return false;
}
else {
    $('#lastnamecheck').hide();
    lastnameError = true;	
}
}



// title
$('#titlecheck').hide();	
let titleError = true;
$('#title').keyup(function () {	
title();
});

function title() {
let titleValue = $('#title').val();	
if (titleValue.length == '') {
$('#titlecheck').show();
titleError = false;
    return false;
}
else {
    $('#titlecheck').hide();
    titleError = true;	
}
}




// password
$('#passwordcheck').hide();	
let passwordError = true;
$('#password').keyup(function () {	
password();
});

function password() {
let passwordValue = $('#password').val();	
if (passwordValue.length == '') {
$('#passwordcheck').show();
passwordError = false;
    return false;
}
else {
    $('#passwordcheck').hide();
    passwordError = true;	
}
}

// cpassword
// $('#cpasswordcheck').hide();	
// let cpasswordError = true;
// $('#cpassword').keyup(function () {	
// cpassword();
// });

// function cpassword() {
// let cpasswordValue = $('#confirmpassword').val();	
// let passwordValue = $('#password').val();	
// if (cpasswordValue == passwordValue) {
// $('#cpasswordcheck').show();
// passwordError = false;
//     return false;
// }
// else {
//     $('#cpasswordcheck').hide();
//     cpasswordError = true;	
// }
// }

//  company
$('#companycheck').hide();	
let  companyError = true;
$('#companyname').keyup(function () {	
 company();
});

function  company() {
let  companyValue = $('#companyname').val();	
if ( companyValue.length == '') {
$('#companycheck').show(); companyError = false;
    return false;
}
else {
    $('#companycheck').hide();
     companyError = true;	
}
}




$('#submituser').click(function () {	
    
    validateemail();
    role();
    firstname();
    lastname();
    title();
    password();

    company();
    if ( emailError == true 
        && roleError == true
        && firstnameError == true
        && lastnameError == true
        && passwordError  == true
        && titleError == true
        && companyError  == true
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

$("#cpasswordcheck").hide();
$(document).on("keyup", '#confirmpassword', function (e){

    var cpassword = $(this).val();
    var password = $(this).parent().parent().find("#password").val();

    if(password != cpassword) {
        $("#cpasswordcheck").show();
    }else{
        $("#cpasswordcheck").hide();
    }
    
});

$(document).on("keyup", '#firstname', function (e){
    var firstname = $(this).val();

    $(document).on("keyup", '#lastname', function (e){
        var lastname = $(this).val();

    $(this).parent().parent().find("#fullname").val(firstname + " "+ lastname);

    
    
});
});

   $(document).on("keyup" , "#email", function(e) {
    var email = $(this).val();
    $(this).parent().parent().find("#username").val(email);

   })

    




function increment() {
    let first = document.getElementById("#firstname").value;

}