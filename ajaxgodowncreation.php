<?php

include('ajaxconfig.php');

$column = array(
    'godownname',
    'alias',   
    'address',  
    'under', 
    'allowstock',
    'stockwith',
    'thiredpartystock',
    
	'status'
);

$query = "SELECT * FROM godowncreation where 1";

if(isset($_POST['search'])!="");
{
if (isset($_POST['search'])) {

	if( $_POST['search'] =="Active")
{
	$query .="and status=0 ";
	
}
else if($_POST['search'] =="Inactive")
{
	$query .="and status=1 ";
}


else{	
   $query .= "
 and godownname LIKE  '%".$_POST['search']."%'
 OR alias LIKE '%".$_POST['search']."%'
 OR address LIKE '%".$_POST['search']."%'
 OR under LIKE '%".$_POST['search']."%'

 OR allowstock LIKE '%".$_POST['search']."%'
 OR stockwith LIKE '%".$_POST['search']."%'
 OR thiredpartystock LIKE '%".$_POST['search']."%'
 
 ";
}
}
}

if ( isset( $_POST['order']) ) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= ' ';
}

$query1 = '';

if ( isset($_POST['length']) != -1) {
    $query1 = 'LIMIT ' . isset( $_POST['start']) . ',' . isset($_POST['length']);
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
    $sub_array[] = $row['godownname'];
    $sub_array[] = $row['alias'];
    $sub_array[] = $row['address'];
    $sub_array[] = $row['under'];
    $sub_array[] = $row['allowstock'];  
    $sub_array[] = $row['stockwith'];
    $sub_array[] = $row['thiredpartystock'];
   
  
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['id'];
	
	$action="<a href='godowncreation&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='godowncreation&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM godowncreation";
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