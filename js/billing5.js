// // fill shipping DEtails

// $(document).ready(function() {

//     var customername = $("#customername").val();
//     var customeraddress = $("#customeraddress").val();
//     var customergst = $("#customergst").val()

//      $("#receivername").val(customername);
//     $("#receiveraddress").val(customeraddress);
//      $("#receivergst").val(customergst)
// });


// IGST or CGST/SGST
// $(document).ready(function() {

//     $("#igsttable").hide();

//     $("#flexRadioDefault1").click(function () {
//    $("#billstable").show();
//     $("#igsttable").hide();
   
//    });

//     $("#flexRadioDefault2").click(function () {
//     $("#igsttable").show();
//     $("#billstable").hide();

//    });
//   });


$(document).ready(function() {

    $("#igsttable").hide();

    $("#tamilnadu").click(function () {
   $("#billstable").show();
    $("#igsttable").hide();
   
   });

    $("#others").click(function () {
    $("#igsttable").show();
    $("#billstable").hide();

   });
  });

  $(document).ready(function() {

    $("#outstate").hide();

    $("#tamilnadu").click(function () {
   $("#instate").show();
    $("#outstate").hide();
   
   });

    $("#others").click(function () {
    $("#outstate").show();
    $("#instate").hide();

   });
  });


  


// CGST and SGST

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
"<tr><td>"+  i  +"</td>" +
"<td><select id='products' name='products[]' class='Partcode chosen-select form-control'>" + markup + " </select></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb qty'  id='qty' name='qty[]' /></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 rate'  id='rate' name='rate[]'  /></td>" +
"<td><input type='number'  class='form-control total' readonly  name='total[]' placeholder='0' id='total' /></td>" +
"<td><input type='number'  class='form-control  discount' name='discount[]' id='discount'  placeholder='0.0' /></td>" +
"<td ><input type='text'  class='form-control  inputs taxablevalue' readonly id='taxablevalue' name='taxablevalue[]' placeholder='0.0' /></td>" +
// "<td> 9%</td>"+
"<td class='cgstrate'><input type='hidden'  class='form-control  inputs cgstrate' readonly  id='cgstrate' name='cgstrate[]'  placeholder='0.0' /></td>" +
// "<td> 9%</td>"+
"<td class='sgstrate'> <input type='hidden'  class='form-control  inputs sgstrate' readonly  id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
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

   var count = rowCount ;
  
   var appendTxt =   
   "<tr><td>"+  count  +"</td>"+
   "<td><select id='products' name='products[]' class='Partcode chosen-select form-control'>" + markup1 + " </select></td>" +
   "<td><input  type='number'  class='form-control col-xs-12 col-sm-12 descrb qty'  id='qty' name='qty[]' /></td>" +
   "<td><input  type='number'  class='form-control col-xs-12 col-sm-12 rate'  id='rate' name='rate[]'   /></td>" +
   "<td><input type='number'  class='form-control total' readonly  name='total[]' placeholder='0' id='total' /></td>" +
   "<td><input type='number'  class='form-control  discount' name='discount[]' id='discount'  placeholder='0.0' /></td>" +
   "<td><input type='number'  class='form-control  inputs taxablevalue' readonly id='taxablevalue' name='taxablevalue[]' placeholder='0.0' /></td>" +
//    "<td> 9%</td>"+
   "<td class='cgstrate'><input type='number'  class='form-control   cgstrate' readonly id='cgstrate' name='cgstrate[]'  placeholder='0.0' /></td>" +
//    "<td> 9%</td>"+
   "<td class='sgstrate'><input type='number'  class='form-control  sgstrate' readonly id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
   "<td><input type='number'  class='form-control  alltotalamount' readonly  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
//    "<td hidden><input type='number'  class='form-control  inputs alltotalamount'  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
   
   "</tr>";

$('#billstable').find('tbody').append(appendTxt);
markup1="<option value=''>Select a Item</option>";
}
});
}
});

$(document).on('change', '.rate', function (e) { 
    var  rate = $(this).val();
    var  qty= $(this).parent().parent().find(".qty").val();
    total = parseInt(qty) * parseInt(rate);
    $(this).parent().parent().find(".total").val(total);



});

$(document).on('change', '.qty', function (e) {


$(document).on("keyup", '.discount', function (e){

    var  discount = $(this).val();


    // console.log(discount);
    // var  qty= $(this).parent().parent().find(".qty").val();
    // console.log(qty);
    // var  rate = $(this).parent().parent().find(".rate").val();
    //  console.log(rate);
    //  total = parseInt(qty) * parseInt(rate);
    // $(this).parent().parent().find(".total").val(total);

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
    var gst = Math.round(((9 /100) * taxablevalue));
     
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

        // $(document).on("keyup", '.rate', function (e){  
        // });




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
var totalval =0;
    $("input[name='discount[]']").each(function () {
        if ($(this).val() != '') {
            var dist = parseInt($(this).val());

            totaldiscount = totaldiscount + dist;
            // console.log(dist);

        }
    });
    $("input[name='total[]']").each(function () {
        if ($(this).val() != '') {
            var dist = parseInt($(this).val()) ;

            totalval = totalval + dist; 
            // console.log(totalamount);

        }
    });

    $("input[name='alltotalamount[]']").each(function () {
        if ($(this).val() != '') {
            // var dist =  ;

            totalcash = totalcash + parseInt($(this).val()); 
            console.log(totalcash);

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
    $("#totalamount").val(totalval);
    $("#totalcgst").val(totalcgst);
    $("#totalsgst").val(totalsgst);

    

    // var otherchanges = $("#otherchanges").val();
    // var totals = $("#totalamount").val();

    // var totalinvoice = otherchanges + totals;
    $("#totalinvoicevalue").val(totalcash);




}


     



});

$(document).on('keyup', '#otherchanges', function (e) {
     var otherchanges = $("#otherchanges").val();
     var totals = $("#totalamount").val();
     if(otherchanges == 0 || otherchanges == ""){
        $("#totalinvoicevalue").val(totalcash);
     }else{
        var totalinvoice = parseInt(totals) - parseInt(otherchanges);
        $("#totalinvoicevalue").val(totalinvoice);
     }

    
 

});
    







// IGST 

var markup3 = "<option value=''>Select a Item</option>";

  $.ajax({
    url: "getbill.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {

     $.each(data, function (i, item) {
       markup3 += "<option value=" + item + ">" + item + "</option>";
   });
var i = 1;
var appendTxt = 
"<tr><td>"+  i  +"</td>" +
"<td><select id='products' name='products[]' class='Partcode chosen-select form-control'>" + markup3 + " </select></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb igstqty'  id='igstqty' name='igstqty[]' /></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 igstrate'  id='igstrate' name='igstrate[]'  /></td>" +
"<td><input type='number'  class='form-control igsttotal' readonly  name='igsttotal[]' placeholder='0' id='igsttotal' /></td>" +
"<td><input type='number'  class='form-control  igstdiscount' name='igstdiscount[]' id='igstdiscount'  placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control  inputs igsttaxablevalue' readonly id='igsttaxablevalue' name='igsttaxablevalue[]' placeholder='0.0' /></td>" +
// "<td> 18%</td>"+
"<td  class='cgstrate'><input type='number'  class='form-control  inputs igstrateigst' readonly  id='igstrateigst' name='igstrateigst[]'  placeholder='0.0' /></td>" +
// "<td> 6%</td>"+
// "<td><input type='text'  class='form-control  inputs sgstrate' readonly  id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
"<td  '><input type='text'  class='form-control  inputs totals  igstalltotalamount' readonly name='igstalltotalamount[]' id='igstalltotalamount' placeholder='0.0' /></td>" +
// "<td hidden><input type='number'  class='form-control  inputs alltotalamount'  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +

"</tr>";

$('#igsttable').find('tbody').append(appendTxt);
}
});


var markup4 = "<option value=''>Select a Item</option>";
$(document).on("keydown", '#igstdiscount', function (e) {
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
       markup4 += "<option value=" + item + ">" + item + "</option>";
   });


   var table = document.getElementById("igsttable");
    
   var rowCount = table.rows.length;
//    var row = table.insertRow(rowCount);

   var count = rowCount ;
  
   var appendTxt =   
   "<tr><td>"+  count  +"</td>"+
   "<td><select id='products' name='products[]' class='Partcode chosen-select form-control'>" + markup4 + " </select></td>" +
   "<td><input  type='number'  class='form-control col-xs-12 col-sm-12 descrb igstqty'  id='igstqty' name='igstqty[]' /></td>" +
   "<td><input  type='number'  class='form-control col-xs-12 col-sm-12 igstrate'  id='igstrate' name='igstrate[]'   /></td>" +
   "<td><input type='number'  class='form-control igsttotal' readonly  name='igsttotal[]' placeholder='0' id='igsttotal' /></td>" +
   "<td><input type='number'  class='form-control  igstdiscount' name='igstdiscount[]' id='igstdiscount'  placeholder='0.0' /></td>" +
   "<td><input type='number'  class='form-control  inputs igsttaxablevalue' readonly id='igsttaxablevalue' name='igsttaxablevalue[]' placeholder='0.0' /></td>" +
//    "<td  type='hidden'> 18%</td>"+
   "<td  class='cgstrate'><input type='number'  class='form-control  inputs igstrateigst' readonly id='igstrateigst' name='igstrateigst[]'  placeholder='0.0' /></td>" +
//    "<td> 6%</td>"+
//    "<td><input type='number'  class='form-control  inputs sgstrate' readonly id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
   "<td '><input type='number'  class='form-control  inputs igstalltotalamount' readonly  name='igstalltotalamount[]' id='igstalltotalamount' placeholder='0.0' /></td>" +
//    "<td hidden><input type='number'  class='form-control  inputs alltotalamount'  name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
   
   "</tr>";

$('#igsttable').find('tbody').append(appendTxt);
markup1="<option value=''>Select a Item</option>";
}
});
}
});

$(document).on("keyup", '.igstrate', function (e){

    var  igstrate = $(this).val();
    var  igstqty= $(this).parent().parent().find(".igstqty").val();
    // var  igstrate = $(this).parent().parent().find(".igstrate").val();
     var igsttotal = parseInt(igstqty) * parseInt(igstrate);
    $(this).parent().parent().find(".igsttotal").val(igsttotal);


});



$(document).on('change', '.igstqty', function (e) {


$(document).on("keyup", '.igstdiscount', function (e){


    // $(document).on("keyup", '.igstrate', function (e){
    var  igstdiscount = $(this).val();

    var igsttotals = $(this).parent().parent().find(".igsttotal").val();
    // console.log(discount);
    // var  igstqty= $(this).parent().parent().find(".igstqty").val();
    // console.log(qty);
    // var  igstrate = $(this).parent().parent().find(".igstrate").val();
    //  console.log(rate);
    //  var igsttotal = parseInt(igstqty) * parseInt(igstrate);
    // $(this).parent().parent().find(".igsttotal").val(igsttotal);

    // if (discount != "" && discount != 0) {
    //     discount = parseInt(discount);
        
        igsttaxabletot = igsttotals-igstdiscount;
     console.log(igsttaxabletot);
     $(this).parent().parent().find(".igsttaxablevalue").val(igsttaxabletot);

     var igsttaxablevalue = $(this).parent().parent().find(".igsttaxablevalue").val();

    // if (taxablevalue != "" && taxablevalue != 0) {
    //     taxablevalue = (taxablevalue);
    
    // }
//   console.log(taxablevalue);
    // var multiple = 6*100;
    // var gst = multiple /taxablevalue;
    var igstgst = Math.round(((18 /100) * igsttaxablevalue));
     
    // var percentage = Math.round(((6 * 100) / taxablevalue));
        // console.log(gst);


        $(this).parent().parent().find(".igstrateigst").val(igstgst);
        // $(this).parent().parent().find(".sgstrate").val(gst);


        var igsttaxablevalue = $(this).parent().parent().find(".igsttaxablevalue").val();
        var igstigstrate = $(this).parent().parent().find(".igstrateigst").val();
        // var sgstrate = $(this).parent().parent().find(".sgstrate").val();


        var igstallamount = (parseInt(igsttaxablevalue) + parseInt(igstigstrate) );
        // console.log(allamount);
          $(this).parent().parent().find(".igstalltotalamount").val(igstallamount);
        //  console.log(vals);

        // $(document).on("keyup", '.rate', function (e){  
        // });


// })

    });


    $(".igstdiscount").keyup(function (e) {
        totals();
    });
    // $(".alltotalamount").keyup(function (e) {
    //     totals();
    // });
    
function totals() {
var igsttotaldiscount = 0;
var igsttotalcash = 0;
var igsttotaligst = 0;
// var totalsgst =0;
var igsttotalval =0;
    $("input[name='igstdiscount[]']").each(function () {
        if ($(this).val() != '') {
            var dist = parseInt($(this).val());

            igsttotaldiscount = igsttotaldiscount + dist;
            // console.log(dist);

        }
    });
    $("input[name='igsttotal[]']").each(function () {
        if ($(this).val() != '') {
            // var dist =  ;

            igsttotalval = igsttotalval + parseInt($(this).val()); 
            // console.log(totalamount);

        }
    });

    $("input[name='igstalltotalamount[]']").each(function () {
        if ($(this).val() != '') {
            var dist = parseInt($(this).val()) ;

            igsttotalcash = igsttotalcash + dist; 
            // console.log(totalamount);

        }
    });

    $("input[name='igstrateigst[]']").each(function () {
        if ($(this).val() != '') {
            // var dist = ;

            igsttotaligst = igsttotaligst + parseInt($(this).val());
            // console.log(dist);

        }
    });
    // $("input[name='sgstrate[]']").each(function () {
    //     if ($(this).val() != '') {
    //         // var dist = ;

    //         totalsgst = totalsgst + parseInt($(this).val());
    //         // console.log(dist);

    //     }
    // });
    $("#igsttotaldiscount").val(igsttotaldiscount);
    $("#igsttotalamount").val(igsttotalval);
    $("#igsttotaligst").val(igsttotaligst);
    // $("#totalsgst").val(totalsgst);

    

    // var otherchanges = $("#otherchanges").val();
    // var totals = $("#totalamount").val();

    // var totalinvoice = otherchanges + totals;
    $("#igsttotalinvoicevalue").val(igsttotalcash);

}

});

$(document).on('keyup', '#otherchanges', function (e) {
     var igstotherchanges = $("#igstotherchanges").val();
     var igsttotals = $("#igsttotalamount").val();
    
     var igsttotalinvoice = parseInt(igsttotals) - parseInt(igstotherchanges);
     $("#igsttotalinvoicevalue").val(igsttotalinvoice);
    
 

});
    
