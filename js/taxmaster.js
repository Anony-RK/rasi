$(document).ready(function () {
  // Validate Stocktype
  $("#financialyearcheck").hide();
  let financialyearerror = true;
  $("#financialyear").keyup(function () {
    financialyear();
  });

  function financialyear() {
    let financialyearValue = $("#financialyear").val();
    if (financialyearValue.length == "") {
      $("#financialyearcheck").show();
      financialyearerror = false;
      return false;
    } else {
      $("#financialyearcheck").hide();
      financialyearerror = true;
    }
  }

  //classification
  $("#classificationcheck").hide();
  let classificationerror = true;
  $("#classification").keyup(function () {
    classification();
  });

  function classification() {
    let classificationValue = $("#classification").val();
    if (classificationValue.length == "") {
      $("#classificationcheck").show();
      classificationerror = false;
      return false;
    } else {
      $("#classificationcheck").hide();
      classificationerror = true;
    }
  }

  //description
  $("#descriptioncheck").hide();
  let descriptionerror = true;
  $("#description").keyup(function () {
    description();
  });

  function description() {
    let descriptionValue = $("#description").val();
    if ((descriptionValue.length = "")) {
      $("#descriptioncheck").show();
      descriptionerror = false;
      return false;
    } else {
      $("#descriptioncheck").hide();
      descriptionerror = true;
    }
  }

  //tax
  $("#taxcheck").hide();
  let taxerror = true;
  $("#tax").keyup(function () {
    tax();
  });

  function tax() {
    let taxValue = $("#tax").val();
    if ((taxValue.length = "")) {
      $("#taxcheck").show();
      taxerror = false;
      return false;
    } else {
      $("#taxcheck").hide();
      taxerror = true;
    }
  }

  //cess
  $("#cesscheck").hide();
  let cesserror = true;
  $("#cess").keyup(function () {
    cess();
  });

  function cess() {
    let cessValue = $("#cess").val();
    if ((cessValue.length = "")) {
      $("#cesscheck").show();
      cesserror = false;
      return false;
    } else {
      $("#cesscheck").hide();
      cesserror = true;
    }
  }

  //addl
  $("#addlcheck").hide();
  let addlerror = true;
  $("#addl").keyup(function () {
    addl();
  });

  function addl() {
    let addlValue = $("#addl").val();
    if ((addlValue.length = "")) {
      $("#addlcheck").show();
      addlerror = false;
      return false;
    } else {
      $("#addlcheck").hide();
      addlerror = true;
    }
  }

  $("#submittax").click(function () {
    financialyear();
    addl();
    tax();
    cess();
    classification();
    description();
    if (
      addlerror == true &&
      cesserror == true &&
      taxerror == true &&
      classificationerror == true &&
      descriptionerror == true &&
      financialyearerror == true
    ) {
      return true;
    } else {
      return false;
    }
  });

  $("#taxdownload").click(function () {
    window.location.href = "uploads/downloadfiles/taxmaster.xlsx";
  });

  //Tax Calculation

  function Total() {
    var tax = 0;
    var cess = 0;
    var addl = 0;
    var tot = 0;
    if ($("#tax").val() != "" && $("#tax").val() != null) {
      tax = parseFloat($("#tax").val());
    }
    if ($("#cess").val() != "" && $("#cess").val() != null) {
      cess = parseFloat($("#cess").val());
    }
    if ($("#add").val() != "" && $("#addl").val() != null) {
      addl = parseFloat($("#addl").val());
    }
    //alert(tax+","+cess+","+addl);
    tot = parseFloat(tax) + parseFloat(cess) + parseFloat(addl);

    $("#total").val(tot);
  }
  $("#tax").keyup(function () {
    Total();
  });
  $("#cess").keyup(function () {
    Total();
  });
  $("#addl").keyup(function () {
    Total();
  });
});

function taxBulkupload() {
  var modal = document.getElementById("BulkUploadModal");
  var btn = document.getElementById("taxbulkupload");
  var span = document.getElementsByClassName("bulkclose")[0];
  btn.onclick = function () {
    modal.style.display = "block";
  };
  span.onclick = function () {
    modal.style.display = "none";
  };
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
}

var selectedRow = null;
function addtaxtable() {
  var stockFormData = readtaxForm();
  if (selectedRow == null) {
    insertNewtax(stockFormData);
    resettaxForm();
  } else {
    updatetax(stockFormData);
    resettaxForm();
  }
}
function readtaxForm() {
  var stockFormData = {};
  stockFormData["financialyear"] =
    document.getElementById("financialyear").value;
  stockFormData["classification"] =
    document.getElementById("classification").value;
  stockFormData["description"] = document.getElementById("description").value;
  stockFormData["tax"] = document.getElementById("tax").value;
  stockFormData["cess"] = document.getElementById("cess").value;
  stockFormData["addl"] = document.getElementById("addl").value;
  stockFormData["total"] = document.getElementById("total").value;
  return stockFormData;
}
function insertNewtax(data) {
  var table = document
    .getElementById("taxtable")
    .getElementsByTagName("tbody")[0];
  var newRow = table.insertRow(table.length);
  if (
    data.financialyear != "" &&
    data.financialyear != null &&
    data.financialyear != 0 &&
    data.classification != "" &&
    data.description != "" &&
    data.tax != "" &&
    data.cess != "" &&
    data.addl != "" &&
    data.total != ""
  ) {
    cell1 = newRow.insertCell(0);
    cell1.innerHTML =
      '<input type="text"  name="financialyear[]" id="financialyear" class="form-control" value="' +
      data.financialyear +
      '">';

    cell2 = newRow.insertCell(1);
    cell2.innerHTML =
      '<input type="text"  name="classification[]" id="classification" class="form-control" value="' +
      data.classification +
      '">';

    cell3 = newRow.insertCell(2);
    cell3.innerHTML =
      '<input type="text"  name="description[]" id="description" class="form-control" value="' +
      data.description +
      '">';

    cell4 = newRow.insertCell(3);
    cell4.innerHTML =
      '<input type="text"  name="tax[]" id="tax" class="form-control" value="' +
      data.tax +
      '">';

    cell5 = newRow.insertCell(4);
    cell5.innerHTML =
      '<input type="text"  name="cess[]" id="cess" class="form-control" value="' +
      data.cess +
      '">';

    cell6 = newRow.insertCell(5);
    cell6.innerHTML =
      '<input type="text"  name="addl[]" id="addl" class="form-control" value="' +
      data.addl +
      '">';

    cell7 = newRow.insertCell(6);
    cell7.innerHTML =
      '<input type="text" name="total[]" id="total" class="form-control" value="' +
      data.total +
      '">';

    cell8 = newRow.insertCell(7);
    cell8.innerHTML =
      "<a onclick='onUpdate(this)'><span class='icon-border_color'></span></a> &nbsp <a onclick='onDelete(this)'><span class='icon-trash-2'></span></a>";
  }
}

function onUpdate(td) {
  selectedRow = td.parentElement.parentElement;
  document.getElementById("financialyear").value =
    selectedRow.cells[0].querySelector("input").value;
  document.getElementById("classification").value =
    selectedRow.cells[1].querySelector("input").value;
  document.getElementById("description").value =
    selectedRow.cells[2].querySelector("input").value;
  document.getElementById("tax").value =
    selectedRow.cells[3].querySelector("input").value;
  document.getElementById("cess").value =
    selectedRow.cells[4].querySelector("input").value;
  document.getElementById("addl").value =
    selectedRow.cells[5].querySelector("input").value;
  document.getElementById("total").value =
    selectedRow.cells[6].querySelector("input").value;
}

function updatetax(data) {
  selectedRow.cells[0].innerHTML =
    '<input type="text"  name="financialyear[]" id="financialyear" class="form-control" value="' +
    data.financialyear +
    '">';
  selectedRow.cells[1].innerHTML =
    '<input type="text"  name="classification[]" id="classification" class="form-control" value="' +
    data.classification +
    '">';
  selectedRow.cells[2].innerHTML =
    '<input type="text"  name="description[]" id="description" class="form-control" value="' +
    data.description +
    '">';
  selectedRow.cells[3].innerHTML =
    '<input type="text"  name="tax[]" id="tax" class="form-control" value="' +
    data.tax +
    '">';
  selectedRow.cells[4].innerHTML =
    '<input type="text"  name="cess[]" id="cess" class="form-control" value="' +
    data.cess +
    '">';
  selectedRow.cells[5].innerHTML =
    '<input type="text"  name="addl[]" id="addl" class="form-control" value="' +
    data.addl +
    '">';
  selectedRow.cells[6].innerHTML =
    '<input type="text"  name="total[]" id="total" class="form-control" value="' +
    data.total +
    '">';
}

function onDelete(td) {
  if (confirm("Are you sure to delete this Tax?")) {
    row = td.parentElement.parentElement;
    document.getElementById("taxtable").deleteRow(row.rowIndex);
    resetStockForm();
  }
}

function resettaxForm() {
  document.getElementById("financialyear").value = "";
  document.getElementById("classification").value = "";
  document.getElementById("description").value = "";
  document.getElementById("tax").value = "";
  document.getElementById("cess").value = "";
  document.getElementById("addl").value = "";
  document.getElementById("total").value = "";
  selectedRow = null;
}

function calculatecostprice() {
  var openingstock = document.getElementById("openingstock").value;
  var costperunit = document.getElementById("costperunit").value;
  var costprice = parseInt(openingstock) * parseInt(costperunit);
  document.getElementById("costprice").value = costprice;
}
function calculatetotalsellingprice() {
  var openingstock = document.getElementById("openingstock").value;
  var tablesellingpriceperpc =
    document.getElementById("sellingpriceperpc").value;
  var totalsellingprice =
    parseInt(openingstock) * parseInt(tablesellingpriceperpc);
  document.getElementById("totalsellingprice").value = totalsellingprice;
}
function cleartaxtable() {
  document.getElementById("financialyear").value ="";
  document.getElementById("classification").value = "";
  document.getElementById("description").value = "";
  document.getElementById("tax").value = "";
  document.getElementById("cess").value = "";
  document.getElementById("addl").value = "";
  document.getElementById("total").value = "";
}