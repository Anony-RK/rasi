// Document is ready
$(document).ready(function () {

// Validate Stocktype
	$('#stocktypecheck').hide();	
	let stocktypeError = true;
	$('#stocktype').keyup(function () {	
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

// Validate Stockname
	$('#itemnamecheck').hide();	
	let itemnameError = true;
	$('#itemname').keyup(function () {	
	validateitemname();
	});
	
	function validateitemname() {
	let itemnameValue = $('#itemname').val();	
	if (itemnameValue.length == '') {
	$('#itemnamecheck').show();
	itemnameError = false;
		return false;
	}
	else {
		$('#itemnamecheck').hide();
		itemnameError = true;	
	}
	}

// Validate HSN Name
	$('#hsncodecheck').hide();	
	let hsncodeError = true;
	$('#hsncode').keyup(function () {	
	validatehsncode();
	});
	
	function validatehsncode() {
	let hsncodeValue = $('#hsncode').val();	
	if (hsncodeValue.length == '') {
	$('#hsncodecheck').show();
	hsncodeError = false;
		return false;
	}
	else {
		$('#hsncodecheck').hide();
		hsncodeError = true;	
	}
	}

// Validate GST Rate
	$('#gstratecheck').hide();	
	let gstrateError = true;
	$('#gstrate').keyup(function () {	
	validategstrate();
	});
	
	function validategstrate() {
	let gstrateValue = $('#gstrate').val();	
	if (gstrateValue.length == '') {
	$('#gstratecheck').show();
	gstrateError = false;
		return false;
	}
	else {
		$('#gstratecheck').hide(); 
		gstrateError = true;	
	}
	}

// Validate No of Gm/ Pcs
	$('#noofgmpcscheck').hide();	
	let noofgmpcsError = true;
	$('#noofgmpcs').keyup(function () {	
	validatenoofgmpcs();
	});
	
	function validatenoofgmpcs() {
	let noofgmpcsValue = $('#noofgmpcs').val();	
	if (noofgmpcsValue.length == '') {
	$('#noofgmpcscheck').show();
	noofgmpcsError = false;
		return false;
	}
	else {
		$('#noofgmpcscheck').hide(); 
		noofgmpcsError = true;	
	}
	}

	$("#itemcreatedownload").click(function () {
		window.location.href='uploads/downloadfiles/itembulksample.xlsx'
	});


//Submit Button Onclick
	$('#submititembtn').click(function () {	
	
		validatestocktype();
		validateitemname();
		validatehsncode();
		validategstrate();
		validatenoofgmpcs();

		if (stocktypeError == true && itemnameError == true && hsncodeError == true && gstrateError == true && noofgmpcsError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});
	
});

	var selectedRow=null;
	function addstocktable(){
		var stockFormData = readStockForm();
		if(selectedRow == null){
			insertNewStock(stockFormData);
			resetStockForm();
		}else{
			updateStock(stockFormData);
			resetStockForm();
		}
	}
	function readStockForm() {
		var stockFormData={};
		stockFormData["selectvendor"]=document.getElementById("selectvendor").value;
		stockFormData["openingstock"]=document.getElementById("openingstock").value;
		stockFormData["openingpcs"]=document.getElementById("openingpcs").value;
		stockFormData["costperunit"]=document.getElementById("costperunit").value;
		stockFormData["costprice"]=document.getElementById("costprice").value;
		stockFormData["sellingpriceperpc"]=document.getElementById("sellingpriceperpc").value;
		stockFormData["totalsellingprice"]=document.getElementById("totalsellingprice").value;
		return stockFormData;
	}
	function insertNewStock(data){
		var table=document.getElementById("stocktable").getElementsByTagName('tbody')[0];
		var newRow=table.insertRow(table.length);
		if(data.selectvendor != "" && data.selectvendor != null && data.selectvendor != 0 && data.openingstock != "" && data.openingpcs != "" && data.costperunit != "" && data.costprice != "" && data.sellingpriceperpc != "" && data.totalsellingprice != ""){
		cell1=newRow.insertCell(0);
		cell1.innerHTML='<input type="text"  name="tablevendorselect[]" id="tablevendorselect" class="form-control" value="'+data.selectvendor+'">';

		cell2=newRow.insertCell(1);
		cell2.innerHTML='<input type="text"  name="tableopeningstock[]" id="tableopeningstock" class="form-control" value="'+data.openingstock+'">';

		cell3=newRow.insertCell(2);
		cell3.innerHTML='<input type="text"  name="tableopeningpcs[]" id="tableopeningpcs" class="form-control" value="'+data.openingpcs+'">';

		cell4=newRow.insertCell(3);
		cell4.innerHTML='<input type="text"  name="tablecostperunit[]" id="tablecostperunit" class="form-control" value="'+data.costperunit+'">';

		cell5=newRow.insertCell(4);
		cell5.innerHTML='<input type="text"  name="tablecostprice[]" id="tablecostprice" class="form-control" value="'+data.costprice+'">';

		cell6=newRow.insertCell(5);
		cell6.innerHTML='<input type="text"  name="tablesellingpriceperpc[]" id="tablesellingpriceperpc" class="form-control" value="'+data.sellingpriceperpc+'">';

		cell7=newRow.insertCell(6);
		cell7.innerHTML='<input type="text" name="tabletotalsellingprice[]" id="tabletotalsellingprice" class="form-control" value="'+data.totalsellingprice+'">';

		cell8=newRow.insertCell(7);
		cell8.innerHTML="<a onclick='onUpdate(this)'><span class='icon-border_color'></span></a> &nbsp <a onclick='onDelete(this)'><span class='icon-trash-2'></span></a>";
	}
}

	function onUpdate(td){
		selectedRow=td.parentElement.parentElement;
		document.getElementById("selectvendor").value=selectedRow.cells[0].querySelector('input').value;
		document.getElementById("openingstock").value=selectedRow.cells[1].querySelector('input').value;
		document.getElementById("openingpcs").value=selectedRow.cells[2].querySelector('input').value;
		document.getElementById("costperunit").value=selectedRow.cells[3].querySelector('input').value;
		document.getElementById("costprice").value=selectedRow.cells[4].querySelector('input').value;
		document.getElementById("sellingpriceperpc").value=selectedRow.cells[5].querySelector('input').value;
		document.getElementById("totalsellingprice").value=selectedRow.cells[6].querySelector('input').value;
	}

	function updateStock(data){
		selectedRow.cells[0].innerHTML='<input type="text"  name="tablevendorselect[]" id="tablevendorselect" class="form-control" value="'+data.selectvendor+'">';
		selectedRow.cells[1].innerHTML='<input type="text"  name="tableopeningstock[]" id="tableopeningstock" class="form-control" value="'+data.openingstock+'">';
		selectedRow.cells[2].innerHTML='<input type="text"  name="tableopeningpcs[]" id="tableopeningpcs" class="form-control" value="'+data.openingpcs+'">';
		selectedRow.cells[3].innerHTML='<input type="text"  name="tablecostperunit[]" id="tablecostperunit" class="form-control" value="'+data.costperunit+'">';
		selectedRow.cells[4].innerHTML='<input type="text"  name="tablecostprice[]" id="tablecostprice" class="form-control" value="'+data.costprice+'">';
		selectedRow.cells[5].innerHTML='<input type="text"  name="tablesellingpriceperpc[]" id="tablesellingpriceperpc" class="form-control" value="'+data.sellingpriceperpc+'">';
		selectedRow.cells[6].innerHTML='<input type="text"  name="tabletotalsellingprice[]" id="tabletotalsellingprice" class="form-control" value="'+data.totalsellingprice+'">';
	}

	function onDelete(td){
		if(confirm('Are you sure to delete this stock?')){
			row=td.parentElement.parentElement;
			document.getElementById("stocktable").deleteRow(row.rowIndex);
			resetStockForm();
		}
	}

	function resetStockForm(){
		document.getElementById("selectvendor").value="";
		document.getElementById("openingstock").value="";
		document.getElementById("openingpcs").value="";
		document.getElementById("costperunit").value="";
		document.getElementById("costprice").value="";
		document.getElementById("sellingpriceperpc").value="";
		document.getElementById("totalsellingprice").value="";
		selectedRow=null;
	}

	function calculatecostprice(){
		var openingstock=document.getElementById("openingstock").value;
		var costperunit=document.getElementById("costperunit").value;
		var costprice= parseInt(openingstock)*parseInt(costperunit);
		document.getElementById("costprice").value=costprice;

	}
	function calculatetotalsellingprice(){
		var openingstock=document.getElementById("openingstock").value;
		var tablesellingpriceperpc=document.getElementById("sellingpriceperpc").value;
		var totalsellingprice= parseInt(openingstock)*parseInt(tablesellingpriceperpc);
		document.getElementById("totalsellingprice").value=totalsellingprice;

	}

function UnitofMeasureAdd_Window() {
var modal = document.getElementById("AddUnitModal");
var btn = document.getElementById("UnitofMeasuretoAdd");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  DropDownUnit();
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
 }

    function DropDownUnit(){
	$.ajax({
            url: 'ajaxgetunitdropdown.php',
            type: 'post',
            data: {},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#unitofmeasure").empty();
                for(var i = 0; i<len; i++){
                    var unitid = response[i]['unitid'];
                    var unitname = response[i]['unitname'];
                    $("#unitofmeasure").append("<option value='"+unitname+"'>"+unitname+"</option>");
                }
            }
        });
}

function ItemBulkupload(){
var modal = document.getElementById("BulkUploadModal");
var btn = document.getElementById("itembulkupload");
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





