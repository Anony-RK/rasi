<!-- Page header start -->
<div class="page-header">
<ol class="breadcrumb">
<li class="breadcrumb-item">Finance Creation</li>
</ol>
</div>
<!-- Page header end -->

<!-- Main container start -->

<div class="main-container">
<!-- Create Sub Group -->
    <div id="subgroupinsertok" class="successalert">Subgroup Added Succesfully!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="subgroupinsertnotok" class="unsuccessalert">Sub-group Already Exists, Please Enter a Different Name!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Edit Sub Group -->
    <div id="subgroupupdateok" class="successalert">Subgroup Has been Updated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="subgroupupdatenotok" class="unsuccessalert">Sub-group Already Exists, Please Enter a Different Name!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!--  Delete Sub Group -->
    <div id="subgroupdeleteok" class="successalert">Subgroup Has been Inactivated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="subgroupdeletenotok" class="unsuccessalert">You Don't Have Rights To Delete This Subgroup!
    <span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Create Cost- centre -->
    <div id="costcentreinsertok" class="successalert">Cost Centre Added Succesfully!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="costcentreinsertnotok" class="unsuccessalert">Cost Centre Already Exists, Please Enter a Different Name!
    <span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Edit Cost centre -->
    <div id="costcentreupdateok" class="successalert">Cost Centre Has been Updated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="costcentreupdatenotok" class="unsuccessalert">Cost Centre Already Exists, Please Enter a Different Name!
    <span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Edit Delete Group -->
    <div id="costcentredeleteok" class="successalert">Cost Centre Has been Inactivated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="costcentredeletenotok" class="unsuccessalert">You Don't Have Rights To Delete This Cost Centre!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Create Ledger -->
    <div id="ledgerinsertok" class="successalert">Ledger Added Succesfully!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="ledgerinsertnotok" class="unsuccessalert">Ledger Already Exists, Please Enter a Different Name!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Edit Ledger -->
    <div id="ledgerupdateok" class="successalert">Ledger Has been Updated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

    <div id="ledgerupdatenotok" class="unsuccessalert">Ledger Already Exists, Please Enter a Different Name!
    <span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<!-- Delete Ledger  -->
    <div id="ledgerdeleteok" class="successalert">Ledger Has been Inactivated!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
    </div>

<div>
<div id="LedgerBulkUploadModal" class="modal">
  <div class="modal-content">
    <span class="bulkclose" style="width:4%;">&times;</span>
  <iframe src="financefiles/ledgerbulkupload.php" height="210px"></iframe>
  </div>
</div>
</div>


<br />
<!-- Row start -->
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">



<div class="tab">
  <button class="tablinks" onclick="openFinance(event, 'groupcreation');document.getElementById('createsubgrp').click();" id="defaultopen">Group Creation</button>
  <button class="tablinks" onclick="openFinance(event, 'costcentre');document.getElementById('createcostcentre').click();">Cost Centre</button>
  <button class="tablinks" onclick="openFinance(event, 'ledgercreation');updatesubgroupdropdown();document.getElementById('createledger').click();">Ledger Creation</button>
</div>


<!-- Group Creation -->
<div id="groupcreation" class="tabcontent">
<br /><br />

<center><table>
  <td><input type="radio" id="createsubgrp"  name="subgrp"  onclick="openFinanceinner(event, 'createsubgrpfield')"></td>
  <td><label for="createsubgrp">Create a Sub-Group</label></td>

  <td><input type="radio" id="editsubgrp" name="subgrp"  onclick="openFinanceinner(event, 'editsubgrpfield');"></td>
  <td><label for="editsubgrp">Edit a Sub-Group</label></td>

  <td><input type="radio" id="deletesubgrp" name="subgrp"  onclick="openFinanceinner(event, 'deletesubgrpfield')"></td>
  <td> <label for="deletesubgrp">Delete a Sub-Group</label></td>
</table></center>

<br /><br />

<!-- Create a Sub-Group -->
<div id="createsubgrpfield" class="tabcontentin">
<form name="subgrpaddform" id="subgrpaddform" method="post">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <select id="groupname" name="groupname" class="form-control">
      <option value="">-- Select Group Name --</option>
      <option value="Capital Account">Capital Account</option>
      <option value="Current Liabilities">Current Liabilities</option>
      <option value="Current Assets">Current Assets</option>
      <option value="Purchase Accounts">Purchase Accounts</option>
      <option value="Direct Income">Direct Income</option>
      <option value="Direct Expenses">Direct Expenses</option>
      <option value="Indirect Income">Indirect Income</option>
      <option value="Indirect Expenses">Indirect Expenses</option>
      <option value="Profit, Loss A/c">Profit &amp; Loss A/c</option>
      <option value="Diff.in Opening Balances">Diff. in Opening Balances</option>
    </select>
    <span class="text-danger" id="groupnamecheck">Select Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-3">
    <label class="label" style="float: right">Enter Sub-Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <input type="text" id="subgroupname" name="subgroupname" class="form-control" placeholder="Enter Sub-Group Name">
    <span class="text-danger" id="subgroupnamecheck">Enter Sub-Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-3">
    <label class="label" style="float: right">Status</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <input type="checkbox" id="subgroupstatus" name="subgroupstatus">
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>

<br />

<div class="row">
<div class="col-md-5">
 </div>
  <div class="col-md-2">
    <button type="button" id="createsubgroupsubmit" name="createsubgroupsubmit" value="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>

  <div class="col-md-5">
  </div>
</div>
</form>
</div>

<!-- Edit a Sub-Group -->
<div id="editsubgrpfield" class="tabcontentin">

<form name="editsubgrpform" id="editsubgrpform" method="post">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <input type="hidden" id="egroupid" name="egroupid" value="">

    <select id="egroupname" name="egroupname" class="form-control">
      <option value="">-- Select Group Name --</option>
      <option value="Capital Account">Capital Account</option>
      <option value="Current Liabilities">Current Liabilities</option>
      <option value="Current Assets">Current Assets</option>
      <option value="Purchase Accounts">Purchase Accounts</option>
      <option value="Direct Income">Direct Income</option>
      <option value="Direct Expenses">Direct Expenses</option>
      <option value="Indirect Income">Indirect Income</option>
      <option value="Indirect Expenses">Indirect Expenses</option>
      <option value="Profit, Loss A/c">Profit &amp; Loss A/c</option>
      <option value="Diff.in Opening Balances">Diff. in Opening Balances</option>
    </select>
    <span class="text-danger" id="egroupnamecheck">Select Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-3">
    <label class="label" style="float: right">Enter Sub-Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <select id="esubgroupname" name="esubgroupname" class="form-control">
      <option value="">Select Subgroup</option>
    </select>
    <span class="text-danger" id="esubgroupnamecheck">Select Sub-Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
<br />

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-3">
    <label class="label" style="float: right">Enter New Sub-Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <input type="text" id="newsubgroupname" name="newsubgroupname" class="form-control" placeholder="Enter New Subgroup Name">
    <span class="text-danger" id="newsubgroupnamecheck">Select Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-3">
    <label class="label" style="float: right">Status</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <input type="checkbox" id="esubgroupstatus" name="esubgroupstatus">
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
<br />

<div class="row">
  <div class="col-md-5">
  </div>

  <div class="col-md-2">
    <button type="button" id="editsubgroupsubmit" name="editsubgroupsubmit" value="Submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>

  <div class="col-md-5">
  </div>
</div>
</form>
</div>

<!-- Delete a Sub-Group -->
<div id="deletesubgrpfield" class="tabcontentin">
<form name="subgrpdeleteform" id="subgrpdeleteform" method="post">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <input type="hidden" id="dgroupid" name="dgroupid" value="">
    <select id="dgroupname" name="dgroupname" class="form-control">
      <option value="">-- Select Group Name --</option>
      <option value="Capital Account">Capital Account</option>
      <option value="Current Liabilities">Current Liabilities</option>
      <option value="Current Assets">Current Assets</option>
      <option value="Purchase Accounts">Purchase Accounts</option>
      <option value="Direct Income">Direct Income</option>
      <option value="Direct Expenses">Direct Expenses</option>
      <option value="Indirect Income">Indirect Income</option>
      <option value="Indirect Expenses">Indirect Expenses</option>
      <option value="Profit, Loss A/c">Profit &amp; Loss A/c</option>
      <option value="Diff.in Opening Balances">Diff. in Opening Balances</option>
    </select>
    <span class="text-danger" id="dgroupnamecheck">Select Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-3">
    <label class="label" style="float: right">Enter Sub-Group Name :</label>
  </div>
  <div class="col-md-3">
    <div class="form-group">
    <select id="dsubgroupname" name="dsubgroupname" class="form-control">
      <option value="">Select Subgroup</option>
    </select>
    <span class="text-danger" id="dsubgroupnamecheck">Select Sub-Group Name</span>
  </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
<br />

<div class="row">
  <div class="col-md-5">
  </div>

  <div class="col-md-2">
    <button type="button" id="deletesubgroupbtn" name="deletesubgroupbtn" value="Submit" class="btn btn-primary">Delete</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>

  <div class="col-md-5">
  </div>
</div>
</form>
</div>


</div>



<!-- Cost centre -->
<div id="costcentre" class="tabcontent">
<br /><br />

<center><table>
  <td><input type="radio" id="createcostcentre"  name="costcentretab"  onclick="openFinanceinner(event, 'createcostcentrefield')"></td>
  <td><label for="createcostcentre">Create a CostCentre</label></td>

  <td><input type="radio" id="editcostcentre" name="costcentretab"  onclick="openFinanceinner(event, 'editcostcentrefield');updatcostcenterdropdown();"></td>
  <td><label for="editcostcentre">Edit a CostCentre</label></td>

  <td><input type="radio" id="deletecostcentre" name="costcentretab"  onclick="openFinanceinner(event, 'deletecostcentrefield');updatcostcenterdropdown();"></td>
  <td> <label for="deletecostcentre">Delete a CostCentre</label></td>
</table></center>

<br /><br />

<!-- Create a Costcentre -->

<div id="createcostcentrefield" class="tabcontentin">
<form name="costcentrecreateform" id="costcentrecreateform" method="post">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Cost Centre :</label>
  </div>
   <div class="col-md-4">
    <div class="form-group">
    <input type="text" id="costcentrename" name="costcentrename" class="form-control" placeholder="Enter Cost Centre">
    <span class="text-danger" id="costcentrenamecheck">Enter Cost Centre</span>
  </div>
  </div>
  <div class="col-md-3">
  </div>
</div>

<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Status</label>
  </div>
   <div class="col-md-4">
    <div class="form-group">
    <input type="checkbox" id="costcentrestatus" name="costcentrestatus">
  </div>
  </div>
  <div class="col-md-3">
  </div>
</div>

<div class="row">
  <div class="col-md-5">
  </div>

  <div class="col-md-2">
    <button type="button" id="createcostcentrebtn" name="createcostcentrebtn" value="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>

  <div class="col-md-5">
  </div>
</div>
</form>
</div>

<!-- Edit a Costcentre -->

<div id="editcostcentrefield" class="tabcontentin">
<form name="costcentreeditform" id="costcentreeditform" method="post">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Cost centre Name : </label>
  </div>
  <div class="col-md-4">
    <div class="form-group">

    <select id="ecostcentrename" name="ecostcentrename" class="form-control">
    <option value="">-- Select Cost centre --</option>   
    </select>
    <input type="hidden" id="costcentreid" name="costcentreid">
    <span class="text-danger" id="ecostcentrenamecheck">Select Cost centre</span>
  </div>
</div>
<div class="col-md-3">
</div>
</div>

<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Cost Centre New Name </label>
  </div>
  <div class="col-md-4">
    <input type="text" id="costcentrenewname" name="costcentrenewname" class="form-control" placeholder="Enter Cost centre New Name">
    <span class="text-danger" id="costcentrenewnamecheck">Enter Cost Centre New Name</span>
  </div>
  <div class="col-md-3">
  </div>
</div>
<br />
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Status</label>
  </div>
  <div class="col-md-4">
    <div class="form-group">
    <input type="checkbox" id="ecostcentrestatus" name="ecostcentrestatus">
  </div>
</div>
  <div class="col-md-3">
  </div>
</div>

<br />

<div class="row">
  <div class="col-md-5">
  </div>
    <div class="col-md-2">
    <button type="button" id="editcostcentrebtn" name="editcostcentrebtn" value="Submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
    <div class="col-md-5">
  </div>
  </div>
</div>

</form>
</div>

<!-- Delete a Costcentre -->

<div id="deletecostcentrefield" class="tabcontentin">

<form name="costcentredeleteform" id="costcentredeleteform" method="post">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-2">
    <label class="label" style="float: right">Cost Centre Name : </label>
  </div>
  <div class="col-md-4">
    <div class="form-group">
    <input type="hidden" id="dcostcentreid" name="dcostcentreid">
    <select id="dcostcentre" name="dcostcentre" class="form-control">
    <option value="">-- Select Cost Centre --</option>
    </select>
    <span class="text-danger" id="dcostcentrecheck">Enter Cost Centre</span>
  </div>
</div>
<div class="col-md-3">
</div>
</div>

<div class="row">
  <div class="col-md-5">
  </div>
    <div class="col-md-2">
    <button type="button" id="deletecostcentrebtn" name="deletecostcentrebtn" value="Submit" class="btn btn-primary">Delete</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
    <div class="col-md-5">
  </div>
  </div>
</div>
</form>
</div>

</div>




<!-- Ledger Creation -->
<div id="ledgercreation" class="tabcontent">
<br /><br />

<center><table>
  <td><input type="radio" id="createledger" name="subgrp"  onclick="openFinanceinner(event, 'createledgerfield')"></td>
  <td><label for="createledger">Create a Ledger</label></td>

  <td><input type="radio" id="editledger" name="subgrp"  onclick="openFinanceinner(event, 'editcreateledgerfield');updateledgerdropdown();"></td>
  <td><label for="editledger">Edit a Ledger</label></td>

  <td><input type="radio" id="deleteledger" name="subgrp"  onclick="openFinanceinner(event, 'deleteledgerfield');updateledgerdropdown();"></td>
  <td><label for="deleteledger">Delete a Ledger</label></td>
</table></center>

<br /><br />

<!-- Create Ledger -->
<div id="createledgerfield" class="tabcontentin">
<form method="post" name="ledgercreationform" id="ledgercreationform">
  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Ledger Name<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" id="ledgername" name="ledgername" class="form-control" placeholder="Enter Ledger Name">
      <span class="text-danger" id="ledgernamecheck">Enter Ledger Name</span>
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Group</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="ledgergroup" name="ledgergroup" class="form-control">
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Under Sub-Group<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <select id="ledgersubgroup" name="ledgersubgroup" class="form-control">
        <option value="">Select Sub-Group</option>
      </select>
      <span class="text-danger" id="ledgersubgroupcheck">Select Subgroup</span>
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Inventory</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="checkbox" id="inventory" name="inventory">
    </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Cost Centre</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input disabled type="checkbox" id="ledgercostcentre" name="ledgercostcentre">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Status</label>
    </div>
    <div class="col-md-3">
      <input  type="checkbox" id="ledgerstatus" name="ledgerstatus">
    </div>
  </div>


  <div id="sundrycreditors">
    
  </div>

<br /><br />
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <button type="button" id="createledgerbtn" name="createledgerbtn" value="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>
  <div class="col-md-4">
  </div>
</div>

</form>
</div>


<!-- Edit Ledger -->
<div id="editcreateledgerfield" class="tabcontentin">
    <form method="post" name="ledgereditform" id="ledgereditform">

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Select a Ledger<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <select name="selectledger" id="selectledger" class="form-control">
      <option value="">Select a Ledger</option> 
      </select>
      <span class="text-danger" id="selectledgercheck">Select Ledger</span>
    </div>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-3">
    </div>
  </div>
<br />
  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Ledger Name<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" id="eledgername" name="eledgername" class="form-control" placeholder="Enter Ledger Name">
      <span class="text-danger" id="eledgernamecheck">Enter Ledger Name</span>
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Group</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="eledgergroup" name="eledgergroup" class="form-control">
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Under Sub-Group<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="hidden" name="ledgerid" id="ledgerid">
      <select id="eledgersubgroup" name="eledgersubgroup" class="form-control">
      <option value="">Select Sub-Group</option>
      </select>
      <span class="text-danger" id="eledgersubgroupcheck">Select Sub-Group</span>
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Inventory</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="checkbox"  id="einventory" name="einventory">
    </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Cost Centre</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="checkbox" id="eledgercostcentre" name="eledgercostcentre">
    </div>
    </div>
    <div class="col-md-2">
           <label class="label" style="float: right;">Status</label>
    </div>
    <div class="col-md-3">
      <input type="checkbox" id="eledgerstatus" name="eledgerstatus">
    </div>
  </div>

  <div id="esundrycreditors">
    
  </div>
  
<br /><br />
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <button type="button" id="editledgerbtn" name="editledgerbtn" value="Submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>
  <div class="col-md-4">
  </div>
</div>
</form>
</div>

<!-- Delete Ledger -->
<div id="deleteledgerfield" class="tabcontentin">
<form method="post" name="ledgerdeleteform" id="ledgerdeleteform">

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Select a Ledger<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="hidden" name="dledgerid" id="dledgerid">
      <select name="dselectledger" id="dselectledger" class="form-control">
      <option value="">Select a Ledger</option>
      </select>
      <span id="dselectledgercheck" class="text-danger">Select Ledger</span>
    </div>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-3">
    </div>
  </div>
<br />
  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Ledger Name<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="dledgername" name="dledgername" class="form-control">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Group</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="text" readonly id="dledgergroup" name="dledgergroup" class="form-control">
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Under Sub-Group<span class="text-danger">*</span></label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <select readonly id="dledgersubgroup" name="dledgersubgroup" class="form-control">
        <option value="">Select Sub-Group</option>
      </select>
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Inventory</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="checkbox" disabled id="dinventory" name="dinventory">
    </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-2">
      <label class="label" style="float: right;">Cost Centre</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="checkbox" disabled id="dledgercostcentre" name="dledgercostcentre">
    </div>
    </div>
    <div class="col-md-2">
      <label class="label" style="float: right;">Status</label>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <input type="checkbox" disabled id="dledgerstatus" name="dledgerstatus">
    </div>
    </div>
  </div>

  <div id="dsundrycreditors">
    
  </div>

<br /><br />
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
     <button type="button" id="deleteledgerbtn" name="deleteledgerbtn" value="Submit" class="btn btn-primary">Delete</button>
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
  </div>
  <div class="col-md-4">
  </div>
</div>
</form>
</div>


  <div class="row">
  <div class="col-md-4">
      <button type="button" id="downloadledger" name="downloadledger"  class="btn btn-primary"><span class="icon-download"></span>Download</button>
    <button type="button" id="uploadledger" onclick="LedgerBulkupload()" name="uploadledger1" class="btn btn-primary"><span class="icon-upload"></span>Upload</button>
  </div>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  </div>
</div>
</div>

</div>
</div>
</div>





