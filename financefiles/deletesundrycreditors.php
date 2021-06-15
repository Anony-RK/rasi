<?php
include '../ajaxconfig.php';
if(isset($_POST["dledgername"])){
  $dledgername=$_POST["dledgername"];
}
$select=$con->query("SELECT * FROM ledger WHERE ledgername='".$dledgername."' ");
while($row=$select->fetch_assoc()){ ?>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Excise Duty Reg</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="dexciseduty" name="dexciseduty" class="form-control" placeholder="Enter Ledger Excise Duty Reg" value="<?php echo $row["exciseduty"] ?>" >
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address1</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="daddress1" name="daddress1" class="form-control" placeholder="Enter Address1" value="<?php echo $row["address1"] ?>">
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">PAN</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" id="dpan" readonly name="dpan" class="form-control" placeholder="Enter PAN" value="<?php echo $row["pan"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address2</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text"  id="daddress2" readonly name="daddress2" class="form-control" placeholder="Address2" value="<?php echo $row["address2"] ?>">
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">TIN No</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="number" id="dtin" readonly name="dtin" class="form-control" placeholder="Enter TIN No" value="<?php echo $row["tin"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address3</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text"  id="daddress3" readonly name="daddress3" class="form-control" placeholder="Address3" value="<?php echo $row["address3"] ?>">
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Service Tax</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="number" readonly id="dservicetax" name="dservicetax" class="form-control" placeholder="Enter Service Tax" value="<?php echo $row["servicetax"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address4</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="daddress4" name="daddress4" class="form-control" placeholder="Address4" value="<?php echo $row["address4"] ?>">
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Contact Person</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="dcontactperson" name="dcontactperson" class="form-control" placeholder="Enter Contact Person" value="<?php echo $row["contactperson"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Contact Number</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="number" readonly id="dcontactnumber" name="dcontactnumber" class="form-control" placeholder="Enter Contact Number" value="<?php echo $row["contactnumber"] ?>">
    </div>
    </div>
  </div>

  <?php } ?>