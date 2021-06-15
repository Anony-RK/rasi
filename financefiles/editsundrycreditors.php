<?php
include '../ajaxconfig.php';
if(isset($_POST["selectledger"])){
  $selectledger=$_POST["selectledger"];
}
$select=$con->query("SELECT * FROM ledger WHERE ledgername='".$selectledger."' ");
while($row=$select->fetch_assoc()){ ?>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Excise Duty Reg</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" id="eexciseduty" name="eexciseduty" class="form-control" placeholder="Enter Ledger Excise Duty Reg" value="<?php echo $row["exciseduty"] ?>" >
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address1</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text"  id="eaddress1" name="eaddress1" class="form-control" placeholder="Enter Address1" value="<?php echo $row["address1"] ?>">
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">PAN</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" id="epan" name="epan" class="form-control" placeholder="Enter PAN" value="<?php echo $row["pan"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address2</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text"  id="eaddress2" name="eaddress2" class="form-control" placeholder="Address2" value="<?php echo $row["address2"] ?>">
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">TIN No</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="number" id="etin" name="etin" class="form-control" placeholder="Enter TIN No" value="<?php echo $row["tin"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address3</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text"  id="eaddress3" name="eaddress3" class="form-control" placeholder="Address3" value="<?php echo $row["address3"] ?>">
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Service Tax</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="number" id="eservicetax" name="eservicetax" class="form-control" placeholder="Enter Service Tax" value="<?php echo $row["servicetax"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Address4</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text"  id="eaddress4" name="eaddress4" class="form-control" placeholder="Address4" value="<?php echo $row["address4"] ?>">
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Contact Person</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" id="econtactperson" name="econtactperson" class="form-control" placeholder="Enter Contact Person" value="<?php echo $row["contactperson"] ?>">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Contact Number</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="number"  id="econtactnumber" name="econtactnumber" class="form-control" placeholder="Enter Contact Number" value="<?php echo $row["contactnumber"] ?>">
    </div>
    </div>
  </div>

  <?php } ?>