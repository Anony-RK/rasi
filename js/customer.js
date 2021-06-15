$(document).ready(function () {

  //VendorCode Generate

  $.ajax({
    url: "getcustomercode.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {
    $("#customercode").val(data);
   }
   });

  //customer Name
  $("#customernamecheck").hide();
  let customernameerror = true;
  $("#customername").keyup(function () {
    customername();
  });
  function customername() {
    let customernameValue = $("#customername").val();
    if (customernameValue == "") {
      $("#customernamecheck").show();
      customernameerror = false;
      return false;
    } else {
      $("#customernamecheck").hide();
      customernameerror = true;
    }
  }

   // Validate Mobilenumber
$('#mobilenumbercheck').hide();	
let mobilenumbererror = true;
$('#mobilenumber').keyup(function () {	
var mob=	$('#mobilenumber').val();
$('#whatsappnumber').val(mob)
	mobilenumber();
});
function mobilenumber() {
	let mobilenumberValue = $('#mobilenumber').val();

	var letters = /^[0-9]+$/;
	if(!(mobilenumberValue.match(letters)) || mobilenumberValue.length>10 || mobilenumberValue.length<10)
	{
			$('#mobilenumbercheck').show();
			mobilenumbererror = false;
				return false;
	}	
	else {
		$('#mobilenumbercheck').hide();
		mobilenumbererror = true;
	
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
if(gstnumber.length == ''){
$('#gstnumbercheck').hide();
  gstnumberError = true;
}
else if(!reggst.test(gstnumber)){
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

   
        //subgroup
        $("#subgroupcheck").hide();
        let subgrouperror = true;
        $("#subgroup").change(function () {

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
          let subgroupValue = $("#subgroup").val();
          if (subgroupValue == "") {
            $("#subgroupcheck").show();
            subgrouperror = false;
            return false;
          } else {
            $("#subgroupcheck").hide();
            subgrouperror = true;
          }
        }



  // Validate email
  $("#emailidcheck").hide();
  let emailiderror = true;
  $("#emailid").keyup(function () {
    validateemail();
  });
  function validateemail() {
    var email = $('#emailid').val(); 
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if(email.length == ''){
      $("#emailidcheck").hide();
      emailiderror = true;
    } 
    else if (!re.test(email)) {
      $("#emailidcheck").show();
      emailiderror = false;
      return false;
    }else{
      $("#emailidcheck").hide();
      emailiderror = true;
    }
  }

$("#needmembership").change(function(){
  var ismember=$("#needmembership").val();
  if(ismember == 'Yes'){
    $("#membershipfield").show();
    $.ajax({
    url: "getmembershipcode.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {
    $("#membershipno").val(data);
   }
   });
  }else{
    $("#membershipfield").hide();
    $("#membershipno").val('');
  }
});

  $("#customerdownload").click(function () {
		window.location.href='uploads/downloadfiles/customerformat.xlsx'
	});

  $('#submitcustomer').click(function () {	
    
    customername();
    mobilenumber();
    validategstnumber();
    validateemail();
    validatesubgroup();
    
    if ( customernameerror == true 
        && mobilenumbererror == true
        && gstnumberError == true
        && emailiderror == true
        && subgrouperror == true
        )
      {
        return true;
      } 
      else 
      {
        return false;
      }
});


$("#customerdownload").click(function () {
    window.location.href='uploads/downloadfiles/customerformat.xlsx'
    });

});

function customerBulkupload(){
    var modal = document.getElementById("BulkUploadModal");
    var btn = document.getElementById("customerupload");
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
