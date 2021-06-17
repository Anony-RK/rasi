<?php

include('ajaxconfig.php');

$column = array(
    'billid',
    'date',   
    'customerdetails',  
    'shippingdetails', 
    'products',
    'qty',
    'rate',
    'total',
    'discount',
    'taxablevalue',
    'cgst',
    'sgst',
    'igst',
    'alltotalamount',
    'totalamount',
    'totaldiscount',
    'taxablevalue',    
	'totalcgst',
	'totalsgst',
    'totaligst',
    'otherchanges',
    'totalinvoicevalue',   
    'basis',   
	'status'
);

$query = "SELECT * FROM billing where 1";

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
 and billid LIKE  '%".$_POST['search']."%'
 OR date LIKE '%".$_POST['search']."%'
 OR customerdetails LIKE '%".$_POST['search']."%'
 OR shippingdetails LIKE '%".$_POST['search']."%'

 OR products LIKE '%".$_POST['search']."%'
 OR qty LIKE '%".$_POST['search']."%'
 OR rate LIKE '%".$_POST['search']."%'
 OR total LIKE '%".$_POST['search']."%'
 OR discount LIKE '%".$_POST['search']."%'
 OR taxablevalue LIKE '%".$_POST['search']."%'
 OR cgst LIKE '%".$_POST['search']."%'
 OR sgst LIKE '%".$_POST['search']."%'
 OR igst LIKE '%".$_POST['search']."%'
 OR alltotalamount LIKE '%".$_POST['search']."%'
 OR totalamount LIKE '%".$_POST['search']."%'
 OR totaldiscount LIKE '%".$_POST['search']."%'
 OR taxablevalue LIKE '%".$_POST['search']."%'
 OR cgst LIKE '%".$_POST['search']."%'
 OR sgst LIKE '%".$_POST['search']."%'
 OR igst LIKE '%".$_POST['search']."%'
 OR otherchanges LIKE '%".$_POST['search']."%'
 OR totalinvoicevalue LIKE '%".$_POST['search']."%'
 OR basis LIKE '%".$_POST['search']."%'
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
    $sub_array[] = $row['billid'];
    $sub_array[] = $row['date'];
    $sub_array[] = $row['customerdetails'];
    $sub_array[] = $row['shippingdetails'];
    $sub_array[] = $row['products'];  
    $sub_array[] = $row['qty'];
    $sub_array[] = $row['rate'];
    $sub_array[] = $row['total'];
    $sub_array[] = $row['discount'];
    $sub_array[] = $row['taxablevalue'];
    $sub_array[] = $row['cgst'];
    $sub_array[] = $row['sgst'];
    $sub_array[] = $row['igst'];
    $sub_array[] = $row['alltotalamount'];
    $sub_array[] = $row['totalamount'];
    $sub_array[] = $row['totaldiscount'];
    $sub_array[] = $row['taxablevalue'];
    $sub_array[] = $row['cgst'];
    $sub_array[] = $row['sgst'];
    $sub_array[] = $row['igst'];
    $sub_array[] = $row['otherchanges'];
    $sub_array[] = $row['totalinvoicevalue'];
    $sub_array[] = $row['basis'];
    
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
	
	$action="<a href='customer&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='customer&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM billing";
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