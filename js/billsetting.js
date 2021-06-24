$(document).ready(function(){
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

 $("#model1").click(function(){
   
  // $("#viewmodel1").show();
 
  $("#showmodel1").show();
  $("#showmodel2").hide();
  $("#showmodel3").hide();
  $("#showmodel4").hide();
  $("#showmodel5").hide();
    
  });
  // $("#viewmodel1").click(function(){  $("#showmodel2").hide();  });

  $("#model2").click(function(){
   
  $("#showmodel1").hide();
  $("#showmodel2").show();
  $("#showmodel3").hide();
  $("#showmodel4").hide();
  $("#showmodel5").hide();
      
  });

  $("#model3").click(function(){
   
  $("#showmodel1").hide();
  $("#showmodel2").hide();
  $("#showmodel3").show();
  $("#showmodel4").hide();
  $("#showmodel5").hide();
        
  });

  $("#model4").click(function(){
   
  $("#showmodel1").hide();
  $("#showmodel2").hide();
  $("#showmodel3").hide();
  $("#showmodel4").show();
  $("#showmodel5").hide();
          
  });

  $("#model5").click(function(){
   
  $("#showmodel1").hide();
  $("#showmodel2").hide();
  $("#showmodel3").hide();
  $("#showmodel4").hide();
  $("#showmodel5").show();
            
  });


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



       
  $("#viewmodel1").click(function(){
   
     $("#showmodel1").show();
     $("#showmodel2").hide();
     $("#showmodel3").hide();
     $("#showmodel4").hide();
     $("#showmodel5").hide();          
});

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


});



