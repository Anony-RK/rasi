<?php

include('ajaxconfig.php');

$column = array(
    'companyname',
	'cinno',
    'address',
    'address1',
    'address2',
    'district',
    'state',
    'country',
    'pincode',
    'phonenumber',
	'faxnumber',
    'email',    
	'website', 
	'panno',
    'itwardcircleno', 
	'tanno', 
	'gst', 
	'pfno', 
    'esicno', 
    'loginshortername', 
    'booksstartfrom',    
	'status'
);

$query = "SELECT * FROM company where 1  ";

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
 and companyname LIKE  '%".$_POST['search']."%'
 OR cinno LIKE '%".$_POST['search']."%'
 OR address LIKE '%".$_POST['search']."%'
 OR address1 LIKE '%".$_POST['search']."%'
 OR address2 LIKE '%".$_POST['search']."%'
 OR district LIKE '%".$_POST['search']."%'
 OR state LIKE '%".$_POST['search']."%'
 OR country LIKE '%".$_POST['search']."%'
 OR pincode LIKE '%".$_POST['search']."%'
 OR phonenumber LIKE '%".$_POST['search']."%'
 OR faxnumber LIKE '%".$_POST['search']."%'
 OR email LIKE '%".$_POST['search']."%'
 OR website LIKE '%".$_POST['search']."%'
 OR panno LIKE '%".$_POST['search']."%'
 OR itwardcircleno LIKE '%".$_POST['search']."%'
 OR tanno LIKE '%".$_POST['search']."%'
 OR gst LIKE '%".$_POST['search']."%'
 OR pfno LIKE '%".$_POST['search']."%'
 OR esicno LIKE '%".$_POST['search']."%'
 OR loginshortername LIKE '%".$_POST['search']."%' 
 OR booksstartfrom LIKE '%".$_POST['search']."%'";
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
    $sub_array[] = $row['companyname'];
	$sub_array[] = $row['cinno'];
    $sub_array[] = $row['address'];
    $sub_array[] = $row['address1'];
	$sub_array[] = $row['address2'];
    $sub_array[] = $row['district'];
    $sub_array[] = $row['state'];
    $sub_array[] = $row['country'];  
    $sub_array[] = $row['pincode'];
    $sub_array[] = $row['phonenumber'];
	$sub_array[] = $row['faxnumber'];
    $sub_array[] = $row['email'];    
	$sub_array[] = $row['website']; 
	$sub_array[] = $row['panno']; 
	$sub_array[] = $row['itwardcircleno']; 
    $sub_array[] = $row['tanno'];
    $sub_array[] = $row['gst'];
    $sub_array[] = $row['pfno'];
    $sub_array[] = $row['esicno'];
    $sub_array[] = $row['loginshortername'];
	$sub_array[] = $row['booksstartfrom'];
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['companyid'];
	
	$action="<a href='company&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='company&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM company";
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