<?php

include('ajaxconfig.php');

$column = array(

'partnumber',
'stocktype',
'itemname',
'unitofmeasure',
'hsncode',
'gstrate',
'barcode',
'vendor',
'type',
'noofgmpcs',
'reorderlevel',
'lowerlevelqty',
'isincentive',
'isreuse'

);

$query = "SELECT * FROM item where 1 ";

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
 and partnumber LIKE  '%".$_POST['search']."%'
 OR stocktype LIKE '%".$_POST['search']."%'
 OR itemname LIKE '%".$_POST['search']."%'
 OR unitofmeasure LIKE '%".$_POST['search']."%'
 OR hsncode LIKE '%".$_POST['search']."%'
 OR gstrate LIKE '%".$_POST['search']."%'
 OR barcode LIKE '%".$_POST['search']."%'
 OR vendor LIKE '%".$_POST['search']."%'
 OR type LIKE '%".$_POST['search']."%'
 OR noofgmpcs LIKE '%".$_POST['search']."%'
 OR reorderlevel LIKE '%".$_POST['search']."%'
 OR lowerlevelqty LIKE '%".$_POST['search']."%'
 OR isincentive LIKE '%".$_POST['search']."%'
 OR isreuse LIKE '%".$_POST['search']."%' ";
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
    $sub_array[] = $row['partnumber'];
    $sub_array[] = $row['stocktype'];
    $sub_array[] = $row['itemname'];
    $sub_array[] = $row['unitofmeasure'];
    $sub_array[] = $row['hsncode'];  
    $sub_array[] = $row['gstrate'];
    $sub_array[] = $row['barcode'];
    $sub_array[] = $row['vendor'];
    $sub_array[] = $row['type'];
    $sub_array[] = $row['noofgmpcs'];
    $sub_array[] = $row['reorderlevel'];
    $sub_array[] = $row['lowerlevelqty'];
    $sub_array[] = $row['isincentive'];
    $sub_array[] = $row['isreuse'];
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['itemid'];
	
	$action="<a href='item&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='item&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM item";
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