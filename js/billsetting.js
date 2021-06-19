// function ajaxload(str) {
//     if (str.length == 0) {
//         document.getElementById("ajaxmethod").value = "";        
//         // document.getElementById("customeraddress").value = "";
//         // document.getElementById("customergst").value = "";
//         // document.getElementById("mobilenumber").value = "";
//         return;
//     }
//     else {

//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function () {

//             if (this.readyState == 4 && 
//                     this.status == 200) {
//                 var myObj = JSON.parse(this.responseText);

//                 document.getElementById("ajaxmethod").append();
//                 // document.getElementById("customergst").value = myObj[1];
//                 // document.getElementById("customeraddress").value = myObj[2];
//                 // document.getElementById("mobilenumber").value = myObj[3];

//                 // document.getElementById("receivername").value = myObj[0];
//                 // document.getElementById("receivergst").value = myObj[1];
//                 // document.getElementById("receiveraddress").value = myObj[2];
//             }
//         };

//         xmlhttp.open("GET", "ajaxbilldatafetch.php?users=" + str, true);
//         xmlhttp.send();
//     }
// }




// document.getElementById('users').addEventListener('onkeyup',ajaxload);

function ajaxload() {       

    var str = document.getElementById('users').value;

    var xmlhttp = new XMLHttpRequest();

          xmlhttp.open('GET', 'ajaxbilldatafetch.php?values='+ str, true );

          xmlhttp.onload = function() {
              $(".ajaxmethod").append();         
             }
          xmlhttp.send();
        };
    
   