$(document).ready(function () {

// Validate Groupname
	$('#groupnamecheck').hide();	
	let groupnameError = true;
	$('#groupname').change(function () {	
	validategroupname();
	});
	
	function validategroupname() {
	let groupnameValue = $('#groupname').val();	
	if (groupnameValue.length == '') {
	$('#groupnamecheck').show();
	groupnameError = false;
		return false;
	}
	else {
		$('#groupnamecheck').hide();
		groupnameError = true;	
	}
	}

// Validate Sub-Groupname
	$('#subgroupnamecheck').hide();	
	let subgroupnameError = true;
	$('#subgroupname').keyup(function () {	
	validatesubgroupname();
	});
	
	function validatesubgroupname() {
	let subgroupnameValue = $('#subgroupname').val();	
	if (subgroupnameValue.length == '') {
	$('#subgroupnamecheck').show();
	subgroupnameError = false;
		return false;
	}
	else {
		$('#subgroupnamecheck').hide();
		subgroupnameError = true;	
	}
	}

$('#createsubgroupsubmit').off().click(function () {
		validategroupname();
		validatesubgroupname();
		if (groupnameError == true && subgroupnameError == true)
		  {
			var groupname    =$("#groupname").val();
			var subgroupname =$("#subgroupname").val();
			var subgroupstatus=$("#subgroupstatus");
			if(subgroupstatus.prop('checked')){
				subgroupstatus=0;
			}else{
				subgroupstatus=1;
			}
			$.ajax({
            url: 'financefiles/addsubgroup.php',
            type: 'post',
            data: {"groupname":groupname, "subgroupname":subgroupname,"subgroupstatus":subgroupstatus},
            dataType: 'json',
            success:function(response){
            	var insresult = response.includes("Exists");
            	if(insresult){
            		$('#subgroupinsertnotok').show();
            		setTimeout(function() {
                    $('#subgroupinsertnotok').fadeOut('slow');
                    }, 3000);

            	}else{
            		$('#subgroupinsertok').show();
            		setTimeout(function() {
                    $('#subgroupinsertok').fadeOut('slow');
                    }, 3000);
                    $("#groupname").val("");
                    $("#subgroupname").val("");
                    $("#subgroupstatus").prop('checked', false);
            	}
            }

           });
		  } 
		  else 
		  {
			return false;
		  }
	});

            


//Edit Sub-Group

// Validate Groupname
	$('#egroupnamecheck').hide();	
	let egroupnameError = true;
	$('#egroupname').change(function (){
	validateegroupname();
	});
	
	function validateegroupname() {
	let egroupnameValue = $('#egroupname').val();	
	if (egroupnameValue.length == '') {
	$('#egroupnamecheck').show();
	egroupnameError = false;
		return false;
	}
	else {
		$('#egroupnamecheck').hide();
		egroupnameError = true;	
	}
	}

// Validate Groupname
	$('#esubgroupnamecheck').hide();	
	let esubgroupnameError = true;
	$('#esubgroupname').change(function () {	
	validateesubgroupname();
	});
	
	function validateesubgroupname() {
	let esubgroupnameValue = $('#esubgroupname').val();	
	if (esubgroupnameValue.length == '') {
	$('#esubgroupnamecheck').show();
	esubgroupnameError = false;
		return false;
	}
	else {
		$('#esubgroupnamecheck').hide();
		esubgroupnameError = true;	
	}
	}

// Validate Groupname
	$('#newsubgroupnamecheck').hide();	
	let newsubgroupnameError = true;
	$('#newsubgroupname').keyup(function () {	
	validatenewsubgroupname();
	});
	
	function validatenewsubgroupname() {
	let newsubgroupnameValue = $('#newsubgroupname').val();	
	if (newsubgroupnameValue.length == '') {
	$('#newsubgroupnamecheck').show();
	newsubgroupnameError = false;
		return false;
	}
	else {
		$('#newsubgroupnamecheck').hide();
		newsubgroupnameError = true;	
	}
	}

$('#editsubgroupsubmit').off().click(function () {
		validateegroupname();
		validateesubgroupname();
		validatenewsubgroupname();
		if (egroupnameError == true && esubgroupnameError == true && newsubgroupnameError == true)
		  {
		  	var egroupid      = $("#egroupid").val()
			var egroupname    = $("#egroupname").val();
			var esubgroupname = $("#esubgroupname").val();
			var newsubgroupname = $("#newsubgroupname").val();
			var esubgroupstatus = $("#esubgroupstatus");
			if(esubgroupstatus.prop('checked')){
				esubgroupstatus = 0;
			}else{
				esubgroupstatus = 1;
			}
			$.ajax({
            url: 'financefiles/updatesubgroup.php',
            type: 'post',
            data: {"egroupid":egroupid ,"egroupname":egroupname, "esubgroupname":esubgroupname, 
            "newsubgroupname":newsubgroupname, "esubgroupstatus":esubgroupstatus},
            dataType: 'json',
            success:function(response){
            var updledgeresult = response.includes("Exists");
            if(updledgeresult == true){
            	    $('#subgroupupdatenotok').show();
            		setTimeout(function() {
                    $('#subgroupupdatenotok').fadeOut('slow');
                    }, 3000); 
            }
            	else{
            		$('#subgroupupdateok').show();
            		setTimeout(function() {
                    $('#subgroupupdateok').fadeOut('slow');
                    }, 3000); 
                    $("#egroupid").val("");
                    $("#newsubgroupname").val("");
                    $("#esubgroupstatus").prop('checked', false);
                    $('#egroupname').prop('selectedIndex',0);
                    $("#esubgroupname").empty();
                    $("#esubgroupname").prepend("<option value=''>'Select Sub-group</option>'");
            	}
            }
		});
	    }
		});

//Delete Sub-group
	$('#dgroupnamecheck').hide();	
	let dgroupnameError = true;
	$('#dgroupname').change(function () {	
	dvalidategroupname();
	});
	
	function dvalidategroupname() {
	let dgroupnameValue = $('#dgroupname').val();	
	if (dgroupnameValue.length == '') {
	$('#dgroupnamecheck').show();
	dgroupnameError = false;
		return false;
	}
	else {
		$('#dgroupnamecheck').hide();
		dgroupnameError = true;	
	}
	}

// Validate Sub-Groupname
	$('#dsubgroupnamecheck').hide();	
	let dsubgroupnameError = true;
	$('#dsubgroupname').change(function () {	
	dvalidatesubgroupname();
	});
	
	function dvalidatesubgroupname() {
	let dsubgroupnameValue = $('#dsubgroupname').val();	
	if (dsubgroupnameValue.length == '') {
	$('#dsubgroupnamecheck').show();
	dsubgroupnameError = false;
		return false;
	}
	else {
		$('#dsubgroupnamecheck').hide();
		dsubgroupnameError = true;	
	}
	}

$('#deletesubgroupbtn').off().click(function () {
		dvalidategroupname();
		dvalidatesubgroupname();

		if (dgroupnameError == true && dsubgroupnameError == true)
		  {  
		  	var dsubgroupname = $("#dsubgroupname").val();
		  	var deleteok=confirm("Do you want to delete "+dsubgroupname);
		  	if(deleteok == true){
		  		var dsubgroupname = $("#dsubgroupname").val();
		  		var dgroupname = $("#dgroupname").val();

		  	$.ajax({
            url: 'financefiles/deletesubgroup.php',
            type: 'post',
            data: {"dgroupname":dgroupname, "dsubgroupname":dsubgroupname},
            dataType: 'json',
            success:function(response){
            	var delresult = response.includes("Rights");
            	if(delresult == true){
            		$('#subgroupdeletenotok').show();
            		setTimeout(function() {
                    $('#subgroupdeletenotok').fadeOut('slow');
                    }, 3000);

            	}else{
            		$('#subgroupdeleteok').show();
            		setTimeout(function() {
                    $('#subgroupdeleteok').fadeOut('slow');
                    }, 3000);
                    $('#dgroupname').prop('selectedIndex',0);
                    $("#dsubgroupname").empty();
                    $("#dsubgroupname").prepend("<option value=''>'Select Sub-group</option>'");
                    $("#dgroupname").val("");
            	}
            }
           });

		  	}else{
		  		return false;
		  	}
		  }
		  else 
		  {
			return false;
		  }
     });

$('#egroupname').change(function () {
	var groupname=$("#egroupname").val();
	$.ajax({
            url: 'financefiles/getsubgroup.php',
            type: 'post',
            data: {"groupname":groupname},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#esubgroupname").empty();
                $("#esubgroupname").append("<option value=''>Select Sub-Group</option>");
                for(var i = 0; i<len; i++){
                    var subgrpname = response[i]['subgroupname'];
                    $("#esubgroupname").append("<option value='"+subgrpname+"'>"+subgrpname+"</option>");
                    updatesubgroupdropdown();
                }
            }
        });
});

$('#dgroupname').change(function () {
	var groupname=$("#dgroupname").val();
	$.ajax({
            url: 'financefiles/getsubgroup.php',
            type: 'post',
            data: {"groupname":groupname},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#dsubgroupname").empty();
                $("#dsubgroupname").append("<option value=''>Select Sub-Group</option>");
                for(var i = 0; i<len; i++){
                    var subgrpname = response[i]['subgroupname'];
                    $("#dsubgroupname").append("<option value='"+subgrpname+"'>"+subgrpname+"</option>");

                }
            }
        });
});

$('#esubgroupname').change(function (){
	var egroupname = $("#egroupname").val();
	var esubgroupname = $("#esubgroupname").val();
	$.ajax({
            url: 'financefiles/getsubgroupid.php',
            type: 'post',
            data: {"egroupname":egroupname,"esubgroupname":esubgroupname},
            dataType: 'json',
            success:function(response){
            	var egroupid=response["groupid"];
            	$("#egroupid").val(egroupid);
            	var newsubgroup=response["subgroupname"];
            	$("#newsubgroupname").val(newsubgroup);
            	var esubgroupstatus = response["status"];
            	if(esubgroupstatus == 0){
            		$("#esubgroupstatus").prop('checked', true);
            	}else{
            		$("#esubgroupstatus").prop('checked', false);
            	}
            }
            });
	
});

$("#ecostcentrename").change(function (){
	var costcentrename=$("#ecostcentrename").val();
	$("#costcentrenewname").val(costcentrename);

	$.ajax({
            url: 'financefiles/getcostcentre.php',
            type: 'post',
            data: {"costcentrename":costcentrename},
            dataType: 'json',
            success:function(response){
              $("#costcentreid").val(response["costcentreid"]);
              var costcentrestatus=response["costcentrestatus"];
              if(costcentrestatus == 0){
              	$("#ecostcentrestatus").prop('checked', true);
              }else{
              	$("#ecostcentrestatus").prop('checked', false);
              }
            }
        });
});









//Costcentre
// Validate CostcentreName
	$('#costcentrenamecheck').hide();	
	let costcentrenameError = true;
	$('#costcentrename').keyup(function () {	
	validatecostcentre();
	});
	
	function validatecostcentre() {
	let costcentrenameValue = $('#costcentrename').val();	
	if (costcentrenameValue.length == '') {
	$('#costcentrenamecheck').show();
	costcentrenameError = false;
		return false;
	}
	else {
		$('#costcentrenamecheck').hide();
		costcentrenameError = true;	
	}
	}

$('#createcostcentrebtn').off().click(function () {
validatecostcentre();
if (costcentrenameError == true )
		  {
			var costcentrename = $("#costcentrename").val();
			var costcentrestatus = $("#costcentrestatus");
			if(costcentrestatus.prop('checked')){
				costcentrestatus=0;
			}else{
				costcentrestatus=1;
			}
			$.ajax({
            url: 'financefiles/addcostcentre.php',
            type: 'post',
            data: {"costcentrename":costcentrename, "costcentrestatus":costcentrestatus},
            dataType: 'json',
            success:function(response){
            	var inscostresult = response.includes("Exists");
            	if(inscostresult == true){
            		$('#costcentreinsertnotok').show();
            		setTimeout(function() {
                    $('#costcentreinsertnotok').fadeOut('slow');
                    }, 3000);

            	}else{
            		$('#costcentreinsertok').show();
            		setTimeout(function() {
                    $('#costcentreinsertok').fadeOut('slow');
                    }, 3000);
                    $("#costcentrename").val("");
            	}
            }
           });
		  } 
		  else 
		  {
			return false;
		  }
});

	$('#costcentrenewnamecheck').hide();	
	let costcentrenewnameError = true;
	$('#costcentrenewname').keyup(function () {	
	validatecostcentrenewname();
	});
	
	function validatecostcentrenewname() {
	let costcentrenewnameValue = $('#costcentrenewname').val();	
	if (costcentrenewnameValue.length == '') {
	$('#costcentrenewnamecheck').show();
	costcentrenewnameError = false;
		return false;
	}
	else {
		$('#costcentrenewnamecheck').hide();
		costcentrenewnameError = true;	
	}
	}


	$('#ecostcentrenamecheck').hide();	
	let ecostcentreError = true;
	$('#ecostcentrename').change(function () {	
	validateecostcentre();
	});
	
	function validateecostcentre() {
	let ecostcentrenameValue = $('#ecostcentrename').val();	
	if (ecostcentrenameValue.length == '') {
	$('#ecostcentrenamecheck').show();
	ecostcentreError = false;
		return false;
	}
	else {
		$('#ecostcentrenamecheck').hide();
		ecostcentreError = true;	
	}
	}

$("#editcostcentrebtn").off().click(function () {
	validateecostcentre();
	validatecostcentrenewname();
	if(ecostcentreError == true && costcentrenewnameError == true)
	{
		var costcentrenewname=$("#costcentrenewname").val();
		var costcentreid=$("#costcentreid").val();
		var costcentrestatus=$("#ecostcentrestatus");
		if(costcentrestatus.prop('checked')){
			costcentrestatus=0;
		}else{
			costcentrestatus=1;
		}
			$.ajax({
            url: 'financefiles/updatecostcentre.php',
            type: 'post',
            data: {"costcentrenewname":costcentrenewname, "costcentreid":costcentreid, "costcentrestatus":costcentrestatus},
            dataType: 'json',
            success:function(response){
            	var updcostresult = response.includes("Exists");
            	if(updcostresult == true){
            		$('#costcentreupdatenotok').show();
            		setTimeout(function() {
                    $('#costcentreupdatenotok').fadeOut('slow');
                    }, 3000);
            	}else{
            		$('#costcentreupdateok').show();
            		setTimeout(function() {
                    $('#costcentreupdateok').fadeOut('slow');
                    }, 3000);
                    $("#costcentrenewname").val("");
                    $("#costcentreid").val("");
                    $("#ecostcentrestatus").prop('checked', false);
                    updatcostcenterdropdown();
            	}
            	}
            });
		}
		else{
		return false;
	}
});










//delete cost centre
	$('#dcostcentrecheck').hide();	
	let dcostcentreError = true;
	$('#dcostcentre').change(function () {	
	var validdcost = validatedcostcentre();
	if(validdcost == false){
		return false;
	}
	else{
		var costcentrename=$("#dcostcentre").val();
		$.ajax({
            url: 'financefiles/getcostcentre.php',
            type: 'post',
            data: {"costcentrename":costcentrename},
            dataType: 'json',
            success:function(response){
            	$("#dcostcentreid").val(response["costcentreid"]);

	        }
	    });
	}
	});
	
	function validatedcostcentre() {
	let dcostcentreValue = $('#dcostcentre').val();	
	if (dcostcentreValue.length == '') {
	$('#dcostcentrecheck').show();
	dcostcentreError = false;
		return false;
	}
	else {
		$('#dcostcentrecheck').hide();
		dcostcentreError = true;	
	}
	}

$('#deletecostcentrebtn').off().click(function () {
validatedcostcentre();
if (dcostcentreError == true )
		  { 
		  	var dcostcentre=$("#dcostcentre").val();
			isdelete=confirm("Do you want to delete "+dcostcentre);
			if(isdelete==true){
			var dcostcentreid=$("#dcostcentreid").val();
			$.ajax({
            url: 'financefiles/deletecostcentre.php',
            type: 'post',
            data: {"dcostcentreid":dcostcentreid,"dcostcentre":dcostcentre},
            dataType: 'json',
            success:function(response){
            	var delresultcc = response.includes("Rights");
            	if(delresultcc == true){
            		$('#costcentredeletenotok').show();
            		setTimeout(function() {
                    $('#costcentredeletenotok').fadeOut('slow');
                    }, 3000);

            	}else{
            		$('#costcentredeleteok').show();
            		setTimeout(function() {
                    $('#costcentredeleteok').fadeOut('slow');
                    }, 3000);
                    $("#dcostcentre").val("");
                    updatcostcenterdropdown();
            	}
            }
           });
			}else{
				return false;
			}
		  } 
		  else 
		  {
			return false;
		  }
});














//Ledger Validation

//ledger name
	$('#ledgernamecheck').hide();	
	let ledgernameError = true;
	$('#ledgername').keyup(function () {	
	validateledgername();
	});
	
	function validateledgername() {
	let ledgernameValue = $('#ledgername').val();	
	if (ledgernameValue.length == '') {
	$('#ledgernamecheck').show();
	ledgernameError = false;
		return false;
	}
	else {
		$('#ledgernamecheck').hide();
		ledgernameError = true;	
	}
	}

//ledger subgroup
	$('#ledgersubgroupcheck').hide();	
	let ledgersubgroupError = true;
	$('#ledgersubgroup').change(function () {	
	validateledgersubgroup();
	});
	
	function validateledgersubgroup() {
	let ledgersubgroupValue = $('#ledgersubgroup').val();	
	if (ledgersubgroupValue.length == '') {
	$('#ledgersubgroupcheck').show();
	ledgersubgroupError = false;
		return false;
	}
	else {
		$('#ledgersubgroupcheck').hide();
		ledgersubgroupError = true;	
	}
	}

	$('#ledgersubgroup').off().change(function () {	
		var ledgersubgroup=$("#ledgersubgroup").val();
		if(ledgersubgroup == "Sundry Creditors"){
			$("#ledgergroup").val("Current Liabilities");
			$("#ledgercostcentre").prop("checked", false);
			$("#ledgercostcentre").attr("disabled", true);
			$.ajax({
            url: 'financefiles/sundrycreditors.php',
            type: 'post',
            data: {},
            success:function(html){
            	$("#sundrycreditors").html(html);
            }
            });	
		}
		else{
		$("#sundrycreditors").empty();
		$.ajax({
            url: 'financefiles/getledgergroupname.php',
            type: 'post',
            data: {"ledgersubgroup":ledgersubgroup},
            dataType: 'json',
            success:function(response){
            $("#ledgergroup").val(response);
            $("#ledgercostcentre").attr("checked", false);
            if(response == "Purchase Accounts" || response == "Direct Income" || response == ""
            	|| response == "Direct Expenses" || response == "Indirect Income" || 
            	response == "Indirect Expenses"){
            	$("#ledgercostcentre").attr("disabled", false);
             }else{
             	$("#ledgercostcentre").attr("disabled", true);
             }
            }
            });
	}
});

$("#createledgerbtn").off().click(function () {
	validateledgername();
	validateledgersubgroup();
	if(ledgernameError == true && ledgersubgroupError == true){

		var ledgername=$("#ledgername").val();
		var ledgergroup=$("#ledgergroup").val();
		var ledgersubgroup=$("#ledgersubgroup").val();
		var ledgercostcentre=$("#ledgercostcentre");
		if(ledgercostcentre.prop('checked')){
			ledgercostcentre = "Yes";
		}else{
			ledgercostcentre = "No";
		}
		var inventory = $("#inventory");
		if(inventory.prop('checked')){
			inventory = "Yes";
		}else{
			inventory = "No";
		}
		var ledgerstatus = $("#ledgerstatus");
		if(ledgerstatus.prop('checked')){
			ledgerstatus = 0;
		}else{
			ledgerstatus = 1;
		}
		var exciseduty=$("#exciseduty").val();
		var address1=$("#address1").val();
		var pan=$("#pan").val();
		var address2=$("#address2").val();
		var tin=$("#tin").val();
		var address3=$("#address3").val();
		var servicetax=$("#servicetax").val();
		var address4=$("#address4").val();
		var contactperson=$("#contactperson").val();
		var contactnumber=$("#contactnumber").val();

		$.ajax({
            url: 'financefiles/addledger.php',
            type: 'post',
            data: {"ledgername":ledgername, "ledgergroup":ledgergroup, 
            "ledgersubgroup":ledgersubgroup, "ledgercostcentre":ledgercostcentre, "inventory":inventory,
            "ledgerstatus":ledgerstatus, "exciseduty":exciseduty, "address1":address1, "pan":pan, "address2":address2
            ,"tin":tin, "address3":address3, "servicetax":servicetax, "address4":address4, "contactperson":contactperson,
            "contactnumber":contactnumber},
            dataType: 'json',
            success:function(response){

            	var insledgeresult = response.includes("Exists");
            	if(insledgeresult == true){
            		$('#ledgerinsertnotok').show();
            		setTimeout(function() {
                    $('#ledgerinsertnotok').fadeOut('slow');
                    }, 3000);
            	}else{
            		$('#ledgerinsertok').show();
            		setTimeout(function() {
                    $('#ledgerinsertok').fadeOut('slow');
                    }, 3000);
                    $("#ledgername").val("");
                    $("#ledgergroup").val("");
                    $("#ledgersubgroup").val("");
                    $("#inventory").prop('checked', false);
                    $("#ledgercostcentre").prop('checked', false);
                    $("#ledgerstatus").prop('checked', false);

                    $("#exciseduty").val("");
                    $("#pan").val("");
                    $("#tin").val("");
                    $("#servicetax").val("");
                    $("#contactperson").val("");
                    $("#contactnumber").val("");
                    $("#address1").val("");
                    $("#address2").val("");
                    $("#address3").val("");
                    $("#address4").val("");
            	}
            }
        });
	}else{
		return false;
	}
});


//Ledger Edit
//ledger Selectledger
	$('#eledgersubgroupcheck').hide();	
	let eledgersubgroupError = true;
	$('#eledgersubgroup').change(function () {	
	validateeledgersubgroup();
	});
	
	function validateeledgersubgroup() {
	let eledgersubgroupValue = $('#eledgersubgroup').val();	
	if (eledgersubgroupValue.length == '') {
	$('#eledgersubgroupcheck').show();
	eledgersubgroupError = false;
		return false;
	}
	else {
		$('#eledgersubgroupcheck').hide();
		eledgersubgroupError = true;	
	}
	}

	//ledger Ledgername
	$('#eledgernamecheck').hide();	
	let eledgernameError = true;
	$('#eledgername').keyup(function () {	
	validateeledgername();
	});
	
	function validateeledgername() {
	let eledgernameValue = $('#eledgername').val();	
	if (eledgernameValue.length == '') {
	$('#eledgernamecheck').show();
	eledgernameError = false;
		return false;
	}
	else {
		$('#eledgernamecheck').hide();
		eledgernameError = true;	
	}
	}

//ledger select
	$('#selectledgercheck').hide();	
	let selectledgerError = true;
	$('#selectledger').off().change(function (){	
	var ledger = validateselectledger();
	if(ledger == false){
		$('#selectledgercheck').hide();
	}else{
		var selectledger = $("#selectledger").val();
		$.ajax({
			url: 'financefiles/getledgerdetails.php',
            type: 'post',
            data: {"selectledger":selectledger},
            dataType: 'json',
            success:function(response){
            $("#eledgername").val(response["eledgername"]);
            $("#ledgerid").val(response["ledgerid"]);
            var ledgergrp=response["eledgergroupname"];
            var einventory=response["einventory"];
            if(einventory=="Yes"){
            	$("#einventory").prop("checked", true);
            }else{
            	$("#einventory").prop("checked", false);
            }
            var eledgerstatus=response["eledgerstatus"];
            if(eledgerstatus==0){
            	$("#eledgerstatus").prop("checked", true);
            }else{
            	$("#eledgerstatus").prop("checked", false);
            }
		    $("#eledgergroup").val(ledgergrp);
		    if(ledgergrp == "Purchase Accounts" || ledgergrp == "Direct Income" || ledgergrp == ""
              || ledgergrp == "Direct Expenses" || ledgergrp == "Indirect Income" || 
              ledgergrp == "Indirect Expenses"){
            	$("#eledgercostcentre").attr("disabled", false);
             }else{
             	$("#eledgercostcentre").attr("disabled", true);
             }

            var subgrpname = response["eledgersubgroupname"];
            $("#eledgersubgroup").prepend("<option value='"+subgrpname+"'>"+subgrpname+"</option>");
            $("#eledgersubgroup")[0].options[0].selected = true;
            if(subgrpname == "Sundry Creditors"){
            $.ajax({
            url: 'financefiles/editsundrycreditors.php',
            type: 'post',
            data: {"selectledger":selectledger},
            success:function(html){
            	$("#esundrycreditors").html(html);
            }
            });	
            }else{
            $("#esundrycreditors").empty();
            var eledgercostcentre=response["eledgercostcentre"];
            if(eledgercostcentre=="Yes"){
            	$("#eledgercostcentre").prop("checked", true);
            }else{
            	$("#eledgercostcentre").prop("checked", false);
            }
            }
            
            }
		});
	}
	});
	
	function validateselectledger() {
	let selectledgerValue = $('#selectledger').val();	
	if (selectledgerValue.length == '') {
	$('#selectledgercheck').show();
	selectledgerError = false;
		return false;
	}
	else {
		$('#selectledgercheck').hide();
		selectledgerError = true;	
	}
	}

	$("#editledgerbtn").off().click(function () {
		validateselectledger();
		validateeledgername();
		validateeledgersubgroup();
		if(selectledgerError == true && eledgersubgroupError == true && eledgernameError == true){
			var ledgerid=$("#ledgerid").val();
			var eledgername=$("#eledgername").val();
			var eledgergroup=$("#eledgergroup").val();
			var eledgersubgroup=$("#eledgersubgroup").val();

			
			var eledgercostcentre=$("#eledgercostcentre");
		    if(eledgercostcentre.prop('checked')){
			eledgercostcentre = "Yes";
		    }else{
			eledgercostcentre = "No";
		    }
		    var einventory = $("#einventory");
		    if(einventory.prop('checked')){
			einventory = "Yes";
		    }else{
			einventory = "No";
		    }
		    var eledgerstatus = $("#eledgerstatus");
		    if(eledgerstatus.prop('checked')){
			eledgerstatus = 0;
		    }else{
			eledgerstatus = 1;
		    }

		    var eexciseduty=$("#eexciseduty").val();
		    var epan=$("#epan").val();
		    var etin=$("#etin").val();
		    var eservicetax=$("#eservicetax").val();
		    var econtactnumber=$("#econtactnumber").val();
		    var econtactperson=$("#econtactperson").val();
		    var eaddress1=$("#eaddress1").val();
		    var eaddress2=$("#eaddress2").val();
		    var eaddress3=$("#eaddress3").val();
		    var eaddress4=$("#eaddress4").val();

			$.ajax({
			url: 'financefiles/updateledgerdetails.php',
            type: 'post',
            data: {"ledgerid":ledgerid,"eledgername":eledgername, "eledgergroup":eledgergroup,
             "eledgersubgroup":eledgersubgroup,"eledgercostcentre":eledgercostcentre,
             "einventory":einventory, "eledgerstatus":eledgerstatus, "eexciseduty":eexciseduty, "epan":epan,
             "etin":etin, "eservicetax":eservicetax, "econtactperson":econtactperson, "econtactnumber":econtactnumber,
             "eaddress1":eaddress1, "eaddress2":eaddress2, "eaddress3":eaddress3, "eaddress4":eaddress4},
            dataType: 'json',
            success:function(response){
            	var updledgeresult = response.includes("Exists");
            	if(updledgeresult == true){
            		$('#ledgerupdatenotok').show();
            		setTimeout(function() {
                    $('#ledgerupdatenotok').fadeOut('slow');
                    }, 3000);
            	    }
            		else
            		{
            		$('#ledgerupdateok').show();
            		setTimeout(function() {
                    $('#ledgerupdateok').fadeOut('slow');
                    }, 3000);
                    
                    $("#ledgerid").val("");
                    $("#eledgername").val("");
                    $("#eledgergroup").val("");
                    $("#eledgersubgroup").val("");
                    $("#einventory").prop('checked', false);
                    $("#eledgercostcentre").prop('checked', false);
                    $("#eledgerstatus").prop('checked', false);
                    $("#eexciseduty").val("");
                    $("#epan").val("");
                    $("#etin").val("");
                    $("#eservicetax").val("");
                    $("#econtactperson").val("");
                    $("#econtactnumber").val("");
                    $("#eaddress1").val("");
                    $("#eaddress2").val("");
                    $("#eaddress3").val("");
                    $("#eaddress4").val("");
                    updateledgerdropdown();
            		}
            	}
            });
		}else{
			return false;
		}

	});

//Delete Ledger
    $('#dselectledgercheck').hide();	
	let dselectledgerError = true;
	$('#dselectledger').off().change(function () {	
	dselect = validatedselectledger();
	if(dselect == false){
		return false;
	}else{
		var dselectledger = $("#dselectledger").val();
		$.ajax({
			url: 'financefiles/getledgerdetails.php',
            type: 'post',
            data: {"selectledger":dselectledger},
            dataType: 'json',
            success:function(response){
            var dledgername = response["eledgername"];
            $("#dledgername").val(dledgername);
            $("#dledgerid").val(response["ledgerid"]);
            var dledgergrp=response["eledgergroupname"];
		    $("#dledgergroup").val(dledgergrp);

		    $("#dledgersubgroup").empty();
            var subgrpname = response["eledgersubgroupname"];
            if(subgrpname == "Sundry Creditors"){
            $.ajax({
			url: 'financefiles/deletesundrycreditors.php',
            type: 'post',
            data: {"dledgername":dledgername},
            success:function(html){
            	$("#dsundrycreditors").html(html);
            }
            });
            }else{
            $("#dsundrycreditors").empty();
            $("#dledgersubgroup").prepend("<option value='"+subgrpname+"'>"+subgrpname+"</option>");
            $("#dledgersubgroup")[0].options[0].selected = true;
            }
            
            var dledgercostcentre=response["eledgercostcentre"];
            if(dledgercostcentre=="Yes"){
            	$("#dledgercostcentre").prop("checked", true);
            }else{
            	$("#dledgercostcentre").prop("checked", false);
            }

            var dinventory=response["einventory"];
            if(dinventory=="Yes"){
            	$("#dinventory").prop("checked", true);
            }else{
            	$("#dinventory").prop("checked", false);
            }

            var dledgerstatus=response["eledgerstatus"];
            if(dledgerstatus==0){
            	$("#dledgerstatus").prop("checked", true);
            }else{
            	$("#dledgerstatus").prop("checked", false);
            }
        }
	});
}
});

	function validatedselectledger() {
	let dselectledgerValue = $('#dselectledger').val();	
	if (dselectledgerValue.length == '') {
	$('#dselectledgercheck').show();
	dselectledgerError = false;
		return false;
	}
	else {
		$('#dselectledgercheck').hide();
		dselectledgerError = true;	
	}
	}
	$("#deleteledgerbtn").off().click(function(){
		validatedselectledger();
		if(dselectledgerError == true){
			var dledgerid=$("#dledgerid").val();
			$.ajax({
			url: 'financefiles/deleteledgerdetails.php',
            type: 'post',
            data: {"dledgerid":dledgerid},
            dataType: 'json',
            success:function(response){
            		$('#ledgerdeleteok').show();
            		setTimeout(function() {
                    $('#ledgerdeleteok').fadeOut('slow');
                    }, 3000);
                    $("#dledgerid").val("");
                    $("#dledgername").val("");
                    $("#dledgergroup").val("");
                    $("#dledgersubgroup").val("");
                    $("#dinventory").prop('checked', false);
                    $("#dledgercostcentre").prop('checked', false);
                    $("#dledgerstatus").prop('checked', false);

                    $("#dexciseduty").val("");
                    $("#dpan").val("");
                    $("#dtin").val("");
                    $("#dservicetax").val("");
                    $("#dcontactperson").val("");
                    $("#dcontactnumber").val("");
                    $("#daddress1").val("");
                    $("#daddress2").val("");
                    $("#daddress3").val("");
                    $("#daddress4").val("");
                    updateledgerdropdown();
            }
			});
		}else{
			return false;
		}

	});

	$("#downloadledger").click(function () {
		window.location.href='uploads/downloadfiles/ledgerbulksample.xlsx'
	});

});


 function openFinance(evt, financeName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(financeName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultopen").click();


function openFinanceinner(evt, financeName){
  var i, tabcontentin;
  tabcontentin = document.getElementsByClassName("tabcontentin");
  for (i = 0; i < tabcontentin.length; i++) {
    tabcontentin[i].style.display = "none";
  }
  
  document.getElementById(financeName).style.display = "block";
  evt.currentTarget.className += " active";
}


function LedgerBulkupload(){
var modal = document.getElementById("LedgerBulkUploadModal");
var btn = document.getElementById("uploadledger");
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
function updatesubgroupdropdown(){
	$.ajax({
			url: 'financefiles/updatesubgroupdropdown.php',
            type: 'post',
            data: {},
            dataType: 'json',
            success:function(response){
            	$("#ledgersubgroup").empty();
            	$("#ledgersubgroup").prepend("<option value=''>"+'Select Sub-Group'+"</option>");
            	for(r=0;r<=response.length-1;r++){
            	$("#ledgersubgroup").append("<option value='"+response[r]+"'>"+response[r]+"</option>");
            	}
            }	
            });
}

function updatcostcenterdropdown(){
	$.ajax({
			url: 'financefiles/updatcostcenterdropdown.php',
            type: 'post',
            data: {},
            dataType: 'json',
            success:function(response){
            	$("#ecostcentrename").empty();
            	$("#dcostcentre").empty();
            	$("#ecostcentrename").prepend("<option value=''>"+'Select Costcenter'+"</option>");
            	$("#dcostcentre").prepend("<option value=''>"+'Select Costcenter'+"</option>");
            	for(r=0;r<=response.length-1;r++){
            	$("#ecostcentrename").append("<option value='"+response[r]+"'>"+response[r]+"</option>");
            	$("#dcostcentre").append("<option value='"+response[r]+"'>"+response[r]+"</option>");
            	}
            }	
            });
}

function updateledgerdropdown(){
	$.ajax({
			url: 'financefiles/updateledgerdropdown.php',
            type: 'post',
            data: {},
            dataType: 'json',
            success:function(response){
            	$("#selectledger").empty();
            	$("#dselectledger").empty();
            	$("#selectledger").prepend("<option value=''>"+'Select Ledger'+"</option>");
            	$("#dselectledger").prepend("<option value=''>"+'Select Ledger'+"</option>");
            	for(r=0;r<=response.length-1;r++){
            	$("#selectledger").append("<option value='"+response[r]+"'>"+response[r]+"</option>");
            	$("#dselectledger").append("<option value='"+response[r]+"'>"+response[r]+"</option>");
            	}
            }	
            });
}
