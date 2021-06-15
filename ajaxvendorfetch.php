<?php

include('ajaxconfig.php');

$column = array(
    'vendorcode',
    'vendorname',
    'address1',
    'address2',
    'district',
    'pincode',
    'state',
    'country',
    'contactperson',
    'contact',    
	'mailid', 
    'stocktype', 
    'deliverytime', 
    'reorderlevel',    
	'minimumstock',
    'maximumstock',
    'isgst',
    'gststate',
    'statetype',
    'gstnumber',
    'bankname',
    'branchname',
    'accountnumber',
    'ifsccode',
    'subgroup',
    'groupname',
    'ledgername',
    'creditlimit',
    'costcentre',
    'inventory',
    'status'
);

$query = "SELECT * FROM vendor WHERE 1 ";

if($_POST['search']!="");
{
if (isset($_POST['search'])) {

	if($_POST['search']=="Active")
{
	$query .="and status=0 ";
	
}
else if($_POST['search']=="Inactive")
{
	$query .="and status=1 ";
}


else{	
   $query .= "
 and vendorcode LIKE  '%".$_POST['search']."%'
 OR vendorname LIKE '%".$_POST['search']."%'
 OR address1 LIKE '%".$_POST['search']."%'
 OR address2 LIKE '%".$_POST['search']."%'
 OR district LIKE '%".$_POST['search']."%'
 OR pincode LIKE '%".$_POST['search']."%'
 OR state LIKE '%".$_POST['search']."%'
 OR country LIKE '%".$_POST['search']."%'
 OR contactperson LIKE '%".$_POST['search']."%'
 OR contact LIKE '%".$_POST['search']."%'
 OR mailid LIKE '%".$_POST['search']."%'
 OR stocktype LIKE '%".$_POST['search']."%'
 OR deliverytime LIKE '%".$_POST['search']."%'
 OR reorderlevel LIKE '%".$_POST['search']."%'
 OR minimumstock LIKE '%".$_POST['search']."%'
 OR maximumstock LIKE '%".$_POST['search']."%'

 OR isgst LIKE '%".$_POST['search']."%'
 OR gststate LIKE '%".$_POST['search']."%'
 OR statetype LIKE '%".$_POST['search']."%'
 OR gstnumber LIKE '%".$_POST['search']."%'
 OR bankname LIKE '%".$_POST['search']."%'
 OR branchname LIKE '%".$_POST['search']."%'
 OR accountnumber LIKE '%".$_POST['search']."%'
 OR ifsccode LIKE '%".$_POST['search']."%'
 OR subgroup LIKE '%".$_POST['search']."%'
 OR groupname LIKE '%".$_POST['search']."%'
 OR ledgername LIKE '%".$_POST['search']."%'
 OR creditlimit LIKE '%".$_POST['search']."%'
 OR costcentre LIKE '%".$_POST['search']."%'
 OR inventory LIKE '%".$_POST['search']."%'

 OR status LIKE '%".$_POST['search']."%' ";
}
}
}

if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= ' ';
}

$query1 = '';

if ($_POST['length'] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();


foreach ($result as $row) {
    $sub_array   = array();
    $sub_array[] = $row['vendorcode'];
    $sub_array[] = $row['vendorname'];
    $sub_array[] = $row['address1'];
    $sub_array[] = $row['address2'];
    $sub_array[] = $row['district'];
    $sub_array[] = $row['pincode'];
    $sub_array[] = $row['state'];
    $sub_array[] = $row['country'];
    $sub_array[] = $row['contactperson'];  
    $sub_array[] = $row['contact'];
    $sub_array[] = $row['mailid'];


    $sub_array[] = $row['stocktype'];
    $sub_array[] = $row['deliverytime'];
    $sub_array[] = $row['reorderlevel'];
    $sub_array[] = $row['minimumstock'];
    $sub_array[] = $row['maximumstock'];

    $sub_array[] = $row['isgst'];
    $sub_array[] = $row['gststate'];
    $sub_array[] = $row['statetype'];
    $sub_array[] = $row['gstnumber'];

    $sub_array[] = $row['bankname'];
    $sub_array[] = $row['branchname'];
    $sub_array[] = $row['accountnumber'];
    $sub_array[] = $row['ifsccode'];

    $sub_array[] = $row['subgroup'];
    $sub_array[] = $row['groupname'];
    $sub_array[] = $row['ledgername'];
    $sub_array[] = $row['creditlimit'];
    $sub_array[] = $row['costcentre'];
    $sub_array[] = $row['inventory'];

    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['vendorid'];
	
	$action="<a href='addvendor&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='addvendor&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM vendor";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data' => $data
);

echo json_encode($output);

?>