$(document).ready(function () {
  $("#showmodel1").hide();
  $("#showmodel2").hide();
  $("#showmodel3").hide();
  $("#showmodel4").hide();
  $("#showmodel5").hide();

  $("#viewmodel1").hide();
  $("#viewmodel2").hide();
  $("#viewmodel3").hide();
  $("#viewmodel4").hide();
  $("#viewmodel5").hide();

  $("#model1").click(function () {
    $("#viewmodel1").show();
    $("#viewmodel2").hide();
    $("#viewmodel3").hide();
    $("#viewmodel4").hide();
    $("#viewmodel5").hide();
  });
  // $("#viewmodel1").click(function(){  $("#showmodel2").hide();  });

  $("#model2").click(function () {
    $("#viewmodel1").hide();
    $("#viewmodel2").show();
    $("#viewmodel3").hide();
    $("#viewmodel4").hide();
    $("#viewmodel5").hide();
  });

  $("#model3").click(function () {
    $("#viewmodel1").hide();
    $("#viewmodel2").hide();
    $("#viewmodel3").show();
    $("#viewmodel4").hide();
    $("#viewmodel5").hide();
  });

  $("#model4").click(function () {
    $("#viewmodel1").hide();
    $("#viewmodel2").hide();
    $("#viewmodel3").hide();
    $("#viewmodel4").show();
    $("#viewmodel5").hide();
  });

  $("#model5").click(function () {
    $("#viewmodel1").hide();
    $("#viewmodel2").hide();
    $("#viewmodel3").hide();
    $("#viewmodel4").hide();
    $("#viewmodel5").show();
  });



  $("#viewmodel1").click(function() {
    $("#showmodel1").show();
    $("#showmodel2").hide();
    $("#showmodel3").hide();
    $("#showmodel4").hide();
    $("#showmodel5").hide();

  });
  $("#viewmodel2").click(function() {
    $("#showmodel1").hide();
    $("#showmodel2").show();
    $("#showmodel3").hide();
    $("#showmodel4").hide();
    $("#showmodel5").hide();

  });

  $("#viewmodel3").click(function() {
    $("#showmodel1").hide();
    $("#showmodel2").hide();
    $("#showmodel3").show();
    $("#showmodel4").hide();
    $("#showmodel5").hide();
  });
    
    $("#viewmodel4").click(function() {
      $("#showmodel1").hide();
      $("#showmodel2").hide();
      $("#showmodel3").hide();
      $("#showmodel4").show();
      $("#showmodel5").hide();
  
    });

    $("#viewmodel5").click(function() {
      $("#showmodel1").hide();
      $("#showmodel2").hide();
      $("#showmodel3").hide();
      $("#showmodel4").hide();
      $("#showmodel5").show();
  
    });
  // $("#viewmodel1").click(function(){
  //   // Assowme that this content fot from the $.ajax method
  //   var newPageContent = 'New content';

  //   $('#showmodel1').html(newPageContent);
  // });

  // $("#typedata").click(function(){
  //   $("#typedatabtn").css('visibility','visible');
  //   $("#podownload").css('visibility','hidden');
  //   $("#poupload").css('visibility','hidden');
  // });

  // $("#exceldownload").click(function(){
  //   $("#typedatabtn").css('visibility','hidden');
  //   $("#podownload").css('visibility','visible');
  //   $("#poupload").css('visibility','visible');
  //   $("#grnmatchingdetail").empty();
  // });

  // $("#viewmodel1").click(function () {
  //   $.ajax({
  //     url: "ajaxviewbilling.php",
  //     data: {},
  //     cache: false,
  //     type: "post",
  //     success: function (data) {
  //       $("#showmodel1").html(data);
  //     },
  //   });
  // });

  // $("#viewmodel2").click(function () {
  //   var pono = $(this).val();
  //   // var grnno=$("#grnno").val();
  //   if (pono == "") {
  //     $("#showmodel2").show();
  //     return false;
  //   } else {
  //     $.ajax({
  //       url: "ajaxviewbilling2.php",
  //       data: { pono: pono },
  //       cache: false,
  //       type: "post",
  //       success: function (html) {
  //         $("#showmodel2").html(html);
  //       },
  //     });
  //   }
  // });

  // $("#viewmodel3").click(function(){
  //   var pono = $(this).val();
  //   // var grnno=$("#grnno").val();
  //   if(pono==''){
  //     $("#showmodel3").hide();
  //     return false;
  //   }
  //   else
  //   {
  //   $.ajax({
  //   url: "ajaxviewbilling3.php",
  //   data:{"pono":pono},
  //   cache: false,
  //   type: "post",
  //  success: function (html) {
  //   $("#showmodel3").html(html);
  //  }
  //  });
  // }
  // });

  // $("#viewmodel4").click(function(){
  //   var pono = $(this).val();
  //   // var grnno=$("#grnno").val();
  //   if(pono==''){
  //     $("#showmodel4").hide();
  //     return false;
  //   }
  //   else
  //   {
  //   $.ajax({
  //   url: "ajaxviewbilling4.php",
  //   data:{"pono":pono},
  //   cache: false,
  //   type: "post",
  //  success: function (html) {
  //   $("#showmodel4").html(html);
  //  }
  //  });
  // }
  // });

  // $("#viewmodel5").click(function(){
  //   var pono = $(this).val();
  //   // var grnno=$("#grnno").val();
  //   if(pono==''){
  //     $("#showmodel5").hide();
  //     return false;
  //   }
  //   else
  //   {
  //   $.ajax({
  //   url: "ajaxviewbilling5.php",
  //   data:{"pono":pono},
  //   cache: false,
  //   type: "post",
  //  success: function (html) {
  //   $("#showmodel5").html(html);
  //  }
  //  });
  // }
  // });

  // $("#viewmodel1").click(function() {
  //   $.ajax({
  //     type: "GET",
  //     url: "ajaxviewbilling.php",
  //     data: html,
  //     success: function(data) {
  //         $('.showmodel1').append(data);

  //     }
  // });
  // });

  // $(document).ready(function(){
  //   $("#viewmodel1").click(function(){
  //     $.ajax({url: "ajaxviewbilling.php", success: function(result){
  //       $("#showmodel1").html(result);
  //     }});
  //   });
  // });

  // $(document).ready(function(){
  //   $("#viewmodel2").click(function(){
  //     $.ajax({url: "ajaxviewbilling2.php", success: function(result){
  //       $("#showmodel2").html(result);
  //     }});
  //   });
  // });

  // $(document).ready(function(){
  //   $("#viewmodel3").click(function(){
  //     $.ajax({url: "ajaxviewbilling3.php", success: function(result){
  //       $("#showmodel3").html(result);
  //     }});
  //   });
  // });

  // $(document).ready(function(){
  //   $("#viewmodel4").click(function(){
  //     $.ajax({url: "ajaxviewbilling4.php", success: function(result){
  //       $("#showmodel4").html(result);
  //     }});
  //   });
  // });

  // $(document).ready(function(){
  //   $("#viewmodel5").click(function(){
  //     $.ajax({url: "ajaxviewbilling5.php", success: function(result){
  //       $("#showmodel5").html(result);
  //     }});
  //   });
  // });

  //   $("#viewmodel1").click(function(){

  //      $("#showmodel1").show();
  //      $("#showmodel2").hide();
  //      $("#showmodel3").hide();
  //      $("#showmodel4").hide();
  //      $("#showmodel5").hide();
  // });

  //    $("#viewmodel2").click(function(){

  //     $("#showmodel1").hide();
  //     $("#showmodel2").show();
  //     $("#showmodel3").hide();
  //     $("#showmodel4").hide();
  //     $("#showmodel5").hide();
  //    });

  //    $("#viewmodel3").click(function(){

  //     $("#showmodel1").hide();
  //      $("#showmodel2").hide();
  //     $("#showmodel3").show();
  //    $("#showmodel4").hide();
  //     $("#showmodel5").hide();
  //    });

  //    $("#viewmodel4").click(function(){

  //     $("#showmodel1").hide();
  //      $("#showmodel2").hide();
  //     $("#showmodel3").hide();
  //    $("#showmodel4").show();
  //     $("#showmodel5").hide();
  //    });
     
  //    $("#viewmodel5").click(function(){

  //     $("#showmodel1").hide();
  //      $("#showmodel2").hide();
  //     $("#showmodel3").hide();
  //    $("#showmodel4").hide();
  //     $("#showmodel5").show();
  //    });

  // });
});


// document.getElementById("viewmodel2").addEventListener("click", button1);

// function button1() {
//   var xhr = new XMLHttpRequest();
//   xhr.open('GET','ajaxviewbilling2.php',true);
//   xhr.onload = function() {
//       $("#showmodel1").append(this.response);
//   }
//   xhr.send();
// }