<?php

include('ajaxconfig.php');

$column = array(
    'financialyear',
    'classification',
    'description',
    'tax',
    'cess',
    'addl',
    'total',
	'status'
);

$query = "SELECT * FROM taxmaster where 1  ";

if(isset($_POST['search']) !="");
{
if (isset($_POST['search'])) {

	if(isset($_POST['search']) == "Active")
{
	$query .="and status=0 ";
	
}
else if(isset($_POST['search']) =="Inactive")
{
	$query .="and status=1 ";
}


else{	
   $query .= "
 and financialyear LIKE  '%".$_POST['search']."%'
 OR classification LIKE '%".$_POST['search']."%'
 OR description LIKE '%".$_POST['search']."%'
 OR tax LIKE '%".$_POST['search']."%'
 OR cess LIKE '%".$_POST['search']."%'
 OR addl LIKE '%".$_POST['search']."%'
 OR total LIKE '%".$_POST['search']."%'
 ";
 
}
}
}

if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= ' ';
}

$query1 = '';

if (isset($_POST['length']) != -1) {
    $query1 = 'LIMIT ' . isset($_POST['start']) . ', ' . isset($_POST['length']);
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
    $sub_array[] = $row['financialyear'];
    $sub_array[] = $row['classification'];
    $sub_array[] = $row['description'];
    $sub_array[] = $row['tax'];
    $sub_array[] = $row['cess'];
    $sub_array[] = $row['addl'];  
    $sub_array[] = $row['total'];
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['taxid'];
	
	$action="<a href='taxmaster&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	         <a href='taxmaster&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = 'SELECT * FROM taxmaster';
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