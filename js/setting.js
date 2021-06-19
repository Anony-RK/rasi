
//   $.ajax({
//     url: "getuser.php",
//     data: {},
//     cache: false,
//     type: "post",
//     dataType: "json",
//    success: function (data) {

//      $.each(data, function (i, item) {
//        markup += "<option name='users' value=" + item + ">" + item + "</option>";
//    });
//    var appendTxt = "<select id='users' name='users[]' class='Partcode w-100 chosen-select form-control'>" + markup + " </select>" ;
//    $('#users').append(appendTxt);
// }
// });