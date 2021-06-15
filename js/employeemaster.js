$(document).ready(function () {
		// employeename
		$('#employeenamecheck').hide();	
		let employeenameerror = true;
		$('#employeename').keyup(function () {			
			validateemployeename();
		});
		function validateemployeename() {
			let employeenameValue = $('#employeename').val();
			if (employeenameValue == '') {
			$('#employeenamecheck').show();
			employeenameerror = false;
				return false;
			}	
			else {
				$('#employeenamecheck').hide();
				employeenameerror = true;	
			}
			}

	// gender
	$('#gendercheck').hide();	
	let gendererror = true;
	$('#gender').keyup(function () {			
		validategender();
	});
	function validategender() {
		let genderValue = $('#gender').val();
		if (genderValue == '') {
		$('#gendercheck').show();
		gendererror = false;
			return false;
		}	
		else {
			$('#gendercheck').hide();
			gendererror = true;	
		}
		}

// designation
$('#designationcheck').hide();	
let designationerror = true;
$('#designation').keyup(function () {			
	validatedesignation();
});
function validatedesignation() {
	let designationValue = $('#designation').val();
	if (designationValue == '') {
	$('#designationcheck').show();
	designationerror = false;
		return false;
	}	
	else {
		$('#designationcheck').hide();
		designationerror = true;	
	}
	}


// mobilenumber
$('#mobilenumbercheck').hide();	
let mobilenumbererror = true;
$('#mobilenumber').keyup(function () {			
	validatemobilenumber();
});
function validatemobilenumber() {
	let mobilenumberValue = $('#mobilenumber').val();
	$("#contact").val(mobilenumberValue);
	if (mobilenumberValue == '') {
	$('#mobilenumbercheck').show();
	mobilenumbererror = false;
		return false;
	}	
	else {
		$('#mobilenumbercheck').hide();
		mobilenumbererror = true;	
	}
	}

$("#basic").keyup(function(){
paystucture();
});
$("#hra").keyup(function(){
paystucture();
});
$("#conveyance").keyup(function(){
paystucture();
});
$("#allowance").keyup(function(){
paystucture();
});
$("#incentivepercent").keyup(function(){
paystucture();
});
$("#tds").keyup(function(){
paystucture();
});
$("#pf").keyup(function(){
paystucture();
});
$("#esi").keyup(function(){
paystucture();
});
$("#loans").keyup(function(){
paystucture();
});
$("#salaryadvance").keyup(function(){
paystucture();
});
$("#anyotherdeduction").keyup(function(){
paystucture();
});
function paystucture(){

	        var basicgross=0;
	        var hragross=0;
	        var convgross=0;
	        var allowgross=0;
	        var incentivesgross=0;
	        var tdsded=0;
	        var pfded=0;
	        var esided=0;
	        var loansded=0;
	        var saladvded=0;
	        var anyded=0;

			 basicgross=$("#basic").val();
			 hragross=$("#hra").val();
			 convgross=$("#conveyance").val();
			 allowgross=$("#allowance").val();
			 incentivesgross=$("#incentivepercent").val();

			 tdsded=$("#tds").val();
			 pfded=$("#pf").val();
			 esided=$("#esi").val();
			 loansded=$("#loans").val();
			 saladvded=$("#salaryadvance").val();
			 anyded=$("#anyotherdeduction").val();

			var incentiveamt = (parseFloat(basicgross) * incentivesgross)/100;

            var GrossPay = parseFloat(basicgross) + parseFloat(hragross) + parseFloat(convgross) + parseFloat(allowgross) +parseFloat(incentivesgross);
            $("#grosspay").val(GrossPay);

            var totaldeduction = (parseFloat(tdsded) + parseFloat(pfded) + parseFloat(esided) + parseFloat(loansded) + parseFloat(saladvded) + parseFloat(anyded));
            $("#totaldeduction").val(totaldeduction);
			
		}

		$('#toperiod1').change(function () {			
        var fromperiod1 = $("#fromperiod1").val();
        var toperiod1 = $("#toperiod1").val();

         var date1 = new Date(fromperiod1);
         var date2 = new Date(toperiod1);

        // var distance= (date2.getTime()-date1.getTime())/1000;

        // monthdiff = distance / (60 * 60 * 24 * 7 * 4);
        // month = Math.abs(Math.round(monthdiff));

        // daydiff = distance / (60 * 60 * 24 );
        // day = Math.abs(Math.round(daydiff));

        // yeardiff = month/12;
        // year = Math.abs(Math.round(yeardiff));

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date1").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });


        $('#toperiod2').change(function () {			
        var fromperiod2 = $("#fromperiod2").val();
        var toperiod2 = $("#toperiod2").val();

         var date1 = new Date(fromperiod2);
         var date2 = new Date(toperiod2);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date2").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });

        $('#toperiod3').change(function () {			
        var fromperiod3 = $("#fromperiod3").val();
        var toperiod3 = $("#toperiod3").val();

         var date1 = new Date(fromperiod3);
         var date2 = new Date(toperiod3);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date3").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });

        $('#toperiod4').change(function () {			
        var fromperiod4 = $("#fromperiod4").val();
        var toperiod4 = $("#toperiod4").val();

         var date1 = new Date(fromperiod4);
         var date2 = new Date(toperiod4);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date4").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });

        $('#toperiod5').change(function () {			
        var fromperiod5 = $("#fromperiod5").val();
        var toperiod5 = $("#toperiod5").val();

         var date1 = new Date(fromperiod5);
         var date2 = new Date(toperiod5);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date5").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });
			
		$("#employeedownload").click(function () {
		window.location.href='uploads/downloadfiles/employeebulksample.xlsx'
	    });

		$('#submitemployee').click(function () {	
				validateemployeename();
				validategender();
				validatemobilenumber();
				validatedesignation();
			if ( 
				employeenameerror == true
				&& gendererror == true
				&& designationerror == true
				&& mobilenumbererror == true
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

function AddDesigModal(){
var modal = document.getElementById("AddDesigModal");
var btn = document.getElementById("adddesignation");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  DropDownDesig();
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function EmployeeBulkupload(){
var modal = document.getElementById("EmpBulkUploadModal");
var btn = document.getElementById("employeeupload");
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

function DropDownDesig(){
	$.ajax({
            url: 'ajaxgetdesigdropdown.php',
            type: 'post',
            data: {},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#designation").empty();
                for(var i = 0; i<len; i++){
                    var designation = response[i]['designationid'];
                    var designation = response[i]['designation'];
                    $("#designation").append("<option value='"+designation+"'>"+designation+"</option>");
                }
            }
        });
}