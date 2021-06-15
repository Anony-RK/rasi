

var markup = "<option value=''>Select a Item</option>";

  $.ajax({
    url: "getbill.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {

     $.each(data, function (i, item) {
       markup += "<option value=" + item + ">" + item + "</option>";
   });
var i = 1;
var appendTxt = 
"<tr><td>"+  i++  +"</td>" +
"<td><select id='description' name='description[]' class='Partcode chosen-select form-control'>" + markup + " </select></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb qty'  id='qty' name='qty[]' /></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 rate'  id='rate' name='rate[]'  /></td>" +
"<td><input type='number'  class='form-control total' readonly  name='total[]' placeholder='0' id='total' /></td>" +
"<td><input type='number'  class='form-control  discount' name='discount[]' id='discount'  placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control  inputs taxablevalue' readonly id='taxablevalue' name='taxablevalue[]' placeholder='0.0' /></td>" +
"<td> 6%</td>"+
"<td><input type='number'  class='form-control  inputs cgstrate' readonly  id='cgstrate' name='cgstrate[]'  placeholder='0.0' /></td>" +
"<td> 6%</td>"+
"<td><input type='text'  class='form-control  inputs sgstrate' readonly  id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control  inputs totals  alltotalamount' readonly name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
// "<td hidden><input type='number'  class='form-control  inputs alltotalamount'  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +

"</tr>";

$('#billstable').find('tbody').append(appendTxt);
}
});


var markup1 = "<option value=''>Select a Item</option>";
$(document).on("keydown", '#discount', function (e) {
var currentrow = $(this).closest('tr');
var key1 = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
if (key1 == 13 && $(this).closest("tr").is(":last-child")) {
e.preventDefault();
  $.ajax({
    url: "getbill.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
success: function (data) {   
  
   $.each(data, function (i, item) {
       markup1 += "<option value=" + item + ">" + item + "</option>";
   });


   var table = document.getElementById("billstable");
    
   var rowCount = table.rows.length;
//    var row = table.insertRow(rowCount);

   var count = rowCount - 1;
  
   var appendTxt =   
   "<tr><td>"+  count  +"</td>"+
   "<td><select id='description' name='description[]' class='Partcode chosen-select form-control'>" + markup1 + " </select></td>" +
   "<td><input  type='number'  class='form-control col-xs-12 col-sm-12 descrb qty'  id='qty' name='qty[]' /></td>" +
   "<td><input  type='number'  class='form-control col-xs-12 col-sm-12 rate'  id='rate' name='rate[]'   /></td>" +
   "<td><input type='number'  class='form-control total' readonly  name='total[]' placeholder='0' id='total' /></td>" +
   "<td><input type='number'  class='form-control  discount' name='discount[]' id='discount'  placeholder='0.0' /></td>" +
   "<td><input type='number'  class='form-control  inputs taxablevalue' readonly id='taxablevalue' name='taxablevalue[]' placeholder='0.0' /></td>" +
   "<td> 6%</td>"+
   "<td><input type='number'  class='form-control  inputs cgstrate' readonly id='cgstrate' name='cgstrate[]'  placeholder='0.0' /></td>" +
   "<td> 6%</td>"+
   "<td><input type='number'  class='form-control  inputs sgstrate' readonly id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
   "<td><input type='number'  class='form-control  inputs alltotalamount' readonly  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
//    "<td hidden><input type='number'  class='form-control  inputs alltotalamount'  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
   
   "</tr>";

$('#billstable').find('tbody').append(appendTxt);
markup1="<option value=''>Select a Item</option>";
}
});
}
});


$(document).on('change', '.qty', function (e) {


$(document).on("keyup", '.discount', function (e){

    var  discount = $(this).val();


    // console.log(discount);
    var  qty= $(this).parent().parent().find(".qty").val();
    // console.log(qty);
    var  rate = $(this).parent().parent().find(".rate").val();
    //  console.log(rate);
     total = parseInt(qty) * parseInt(rate);
    $(this).parent().parent().find(".total").val(total);

    // if (discount != "" && discount != 0) {
    //     discount = parseInt(discount);
        
        taxabletot = total-discount;
    //  console.log(taxabletot);
     $(this).parent().parent().find(".taxablevalue").val(taxabletot);

     var taxablevalue = $(this).parent().parent().find(".taxablevalue").val();

    // if (taxablevalue != "" && taxablevalue != 0) {
    //     taxablevalue = (taxablevalue);
    
    // }
//   console.log(taxablevalue);
    // var multiple = 6*100;
    // var gst = multiple /taxablevalue;
    var gst = Math.round(((6 /100) * taxablevalue));
     
    // var percentage = Math.round(((6 * 100) / taxablevalue));
        // console.log(gst);


        $(this).parent().parent().find(".cgstrate").val(gst);
        $(this).parent().parent().find(".sgstrate").val(gst);


        var taxablevalue = $(this).parent().parent().find(".taxablevalue").val();
        var cgstrate = $(this).parent().parent().find(".cgstrate").val();
        var sgstrate = $(this).parent().parent().find(".sgstrate").val();


        var allamount = (parseInt(taxablevalue) + parseInt(cgstrate) + parseInt(sgstrate));
        // console.log(allamount);
          $(this).parent().parent().find(".alltotalamount").val(allamount);
        //  console.log(vals);






    });


    $(".discount").keyup(function (e) {
        totals();
    });
    // $(".alltotalamount").keyup(function (e) {
    //     totals();
    // });
    
function totals() {
var totaldiscount = 0;
var totalcash = 0;
var totalcgst = 0;
var totalsgst =0;

    $("input[name='discount[]']").each(function () {
        if ($(this).val() != '') {
            var dist = parseInt($(this).val());

            totaldiscount = totaldiscount + dist;
            // console.log(dist);

        }
    });
    $("input[name='alltotalamount[]']").each(function () {
        if ($(this).val() != '') {
            var dist = parseInt($(this).val()) ;

            totalcash = totalcash + dist; 
            console.log(totalamount);

        }
    });

    $("input[name='cgstrate[]']").each(function () {
        if ($(this).val() != '') {
            // var dist = ;

            totalcgst = totalcgst + parseInt($(this).val());
            // console.log(dist);

        }
    });
    $("input[name='sgstrate[]']").each(function () {
        if ($(this).val() != '') {
            // var dist = ;

            totalsgst = totalsgst + parseInt($(this).val());
            // console.log(dist);

        }
    });
    $("#totaldiscount").val(totaldiscount);
    $("#totalamount").val(totalcash);
    $("#totalcgst").val(totalcgst);
    $("#totalsgst").val(totalsgst);

    

    // var otherchanges = $("#otherchanges").val();
    var totals = $("#totalamount").val();

    // var totalinvoice = otherchanges + totals;
    $("#totalinvoicevalue").val(totals);




}


     



});

$(document).on('keyup', '#otherchanges', function (e) {
     var otherchanges = $("#otherchanges").val();
     var totals = $("#totalamount").val();

     var totalinvoice = parseInt(totals) - parseInt(otherchanges);
     $("#totalinvoicevalue").val(totalinvoice);
 

});
    
