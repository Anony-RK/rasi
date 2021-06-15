<?php

include('ajaxconfig.php');

$column = array(
    'pono',
    'grnno',
    'grndate',
    'choosetype',
    'voucherno',
    'debitledger',
    'creditledger',
    'narration',
    'invoiceno',
    'valueofinvoice',
    'finalvalueofinvoice',
    'currencytype',
    'equaltoinr',
    'advancepaidintotal',  
	'status'
);

$query = "SELECT * FROM goodsreceivingnote where 1  ";

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
 and pono LIKE  '%".$_POST['search']."%'
 OR grnno LIKE '%".$_POST['search']."%'
 OR grndate LIKE '%".$_POST['search']."%'
 OR choosetype LIKE '%".$_POST['search']."%'
 OR voucherno LIKE '%".$_POST['search']."%'
 OR debitledger LIKE '%".$_POST['search']."%'
 OR creditledger LIKE '%".$_POST['search']."%'
 OR narration LIKE '%".$_POST['search']."%'
 OR invoiceno LIKE '%".$_POST['search']."%'
 OR valueofinvoice LIKE '%".$_POST['search']."%'
 OR finalvalueofinvoice LIKE '%".$_POST['search']."%'
 OR currencytype LIKE '%".$_POST['search']."%'
 OR equaltoinr LIKE '%".$_POST['search']."%'
 OR advancepaidintotal LIKE '%".$_POST['search']."%'
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

    $sub_array[] = $row['pono'];
    $sub_array[] = $row['grnno'];
    $sub_array[] = $row['grndate'];
    $sub_array[] = $row['choosetype'];
    $sub_array[] = $row['voucherno'];
    $sub_array[] = $row['debitledger'];  
    $sub_array[] = $row['creditledger'];

    
    $sub_array[] = $row['narration'];
    $sub_array[] = $row['invoiceno'];
    $sub_array[] = $row['valueofinvoice'];
    $sub_array[] = $row['finalvalueofinvoice'];
    $sub_array[] = $row['currencytype'];
    $sub_array[] = $row['equaltoinr'];  
    $sub_array[] = $row['advancepaidintotal'];

  
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['goodsreceivingnoteid'];
	
	$action="<a href='goodsreceivingnote&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	         <a href='goodsreceivingnote&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = 'SELECT * FROM bankmaster';
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