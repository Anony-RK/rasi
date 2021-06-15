var markup = "<option value=''>Select a Item</option>";

  $.ajax({
    url: "getItem.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {

     $.each(data, function (i, item) {
       markup += "<option value=" + item + ">" + item + "</option>";
   });

var appendTxt = 
"<tr><td><select id='Partcode' name='Partcode[]' class='Partcode chosen-select form-control'>" + markup + " </select></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb' readonly id='descrb' name='descrb[]' /></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 Hsn' readonly id='Hsn' name='Hsn[]' /></td>" +
"<td><input type='number'  class='form-control qty'  name='qty[]' placeholder='0' id='qty' /></td>" +
"<td><input type='number'  class='form-control rate unitprice' name='unitprice[]' id='unitprice' placeholder='0.0' /></td>" +
"<td><input type='number'  class='form-control taxperc inputs' readonly id='taxperc' name='taxperc[]'  placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control totval inputs' readonly id='totval' name='totval[]' placeholder='0.0' /></td>" +
"<td hidden><input type='text'  class='form-control taxcal inputs' readonly name='taxcal[]' placeholder='0.0' /></td>" +
"<td><span class=' icon-trash-2'></span></td>"+
"</tr>";
$('#purchasetable').find('tbody').append(appendTxt);
}
});


var markup1 = "<option value=''>Select a Item</option>";
$(document).on("keydown", '.unitprice', function (e) {
var currentrow = $(this).closest('tr');
var key1 = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
if (key1 == 13 && $(this).closest("tr").is(":last-child")) {
e.preventDefault();
  $.ajax({
    url: "getItem.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
success: function (data) {   
  
   $.each(data, function (i, item) {
       markup1 += "<option value=" + item + ">" + item + "</option>";
   });

var appendTxt = "<tr><td><select id='Partcode' name='Partcode[]' class='Partcode chosen-select form-control'>" + markup1 + " </select></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb' readonly id='descrb' name='descrb[]' /></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 Hsn' readonly id='Hsn' name='Hsn[]' /></td>" +
"<td><input type='number'  class='form-control qty' id='qty' name='qty[]' placeholder='0'  /></td>" +
"<td><input type='number'  class='form-control rate inputs  unitprice' id='unitprice' name='unitprice[]'  placeholder='0.0' /></td>" +
"<td><input type='number'  class='form-control taxperc inputs' readonly id='taxperc' name='taxperc[]'  placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control totval inputs' readonly id='totval' name='totval[]' placeholder='0.0' /></td>" +
"<td hidden><input type='text'  class='form-control taxcal inputs' readonly name='taxcal[]' placeholder='0.0' /></td>" +
"<td><span class='del icon-trash-2'></span></td>"
"</tr>";

$('#purchasetable').find('tbody').append(appendTxt);
markup1="<option value=''>Select a Item</option>";
}
});
}
});

$(document).on('change', '.Partcode', function (e) {
    var currentrow = $(this).closest('tr');
    var partnumberval = $(this).val();
    var partnumber = partnumberval.substring(0, partnumberval.indexOf('-'));

    $.ajax({
    url: "getPurchaseItemdetails.php",
    data: {"partnumber":partnumber},
    cache: false,
    type: "post",
    dataType: "json",
    success: function (response) {
      currentrow.find(".descrb").val(response["itemname"]);
      currentrow.find(".Hsn").val(response["hsncode"]);
      currentrow.find(".taxperc").val(response["gstrate"]);
    }
   });


     $(document).on("keyup", '.unitprice', function (e) {

                var  Objunitprice = $(this).val();
                var  ObjQty= $(this).parent().parent().find(".qty").val();
                var  Objtax = $(this).parent().parent().find(".taxperc").val();
                var  total = 0;
                var  qty = ObjQty;
                var  rate = 0;
                var taxcal = 0;
                if (Objunitprice != "" && Objunitprice != 0) {
                    rate = parseInt(Objunitprice);
                }
                total = parseInt(qty) * parseInt(rate);
                $(this).parent().parent().find(".totval").val(total);

                if (Objtax != "" && Objtax != 0) {
                }
                                    taxcal = (parseInt(total) * parseInt(Objtax)) / 100;

                $(this).parent().parent().find(".taxcal").val(taxcal);
                TotalCalculate();
            });
//    });

            $("#shippingcharges").keyup(function (e) {
                TotalCalculate();
            });
            $("#handlingcharges").keyup(function (e) {
                TotalCalculate();
            });
            $("#othercharges").keyup(function (e) {
                TotalCalculate();
            });
            
            function TotalCalculate() {
                var subtotal = 0;
                var taxtotal = 0;
                var shippingcharges = 0;
                var handlingcharges = 0;
                var othercharges = 0;
                var totalpovalue = 0;
                $('input[name="totval[]"]').each(function () {
                    if ($(this).val() != '') {
                        subtotal = subtotal + parseInt($(this).val());
                    }
                });
                $('input[name="taxcal[]"]').each(function () {
                    if ($(this).val() != '') {
                        taxtotal = taxtotal + parseInt($(this).val());
                    }
                });
                if ($("#shippingcharges").val != "" && $("#shippingcharges").val() != 0)
                {
                    shippingcharges = parseInt($("#shippingcharges").val());
                }
                if ($("#handlingcharges").val != "" && $("#handlingcharges").val() != 0) {
                    handlingcharges =  parseInt($("#handlingcharges").val());
                }
                if ($("#othercharges").val != "" && $("#othercharges").val() != 0) {
                    othercharges = parseInt($("#othercharges").val());
                }
                totalpovalue = parseInt(subtotal) + parseInt(taxtotal) + parseInt(shippingcharges) + parseInt(handlingcharges)+ parseInt(othercharges);
                $("#subtotal").val(subtotal);
                $("#taxamount").val(taxtotal);
                $("#totalpo").val(totalpovalue);
            }




$(document).on("click", '.del', function () {
      $(this).parent().parent().remove();
      TotalCalculate();
      });

setTimeout(function(){
$('#purchaseinsertok').fadeOut('slow');
}, 3000);

});

