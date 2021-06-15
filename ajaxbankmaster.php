<?php

include('ajaxconfig.php');

$column = array(
    'bankcode',
    'bankname',
    'accountno',
    'branchname',
    'shortform',
    'purpose',
    'mailid',
    'ifsccode',
    'contactperson',
    'contactno',
    'micrcode',
    'typeofaccount',
    'undersubgroup',
    'fgroup',
    'ledgername',
    'costcenter',
	'status'
);


$query = "SELECT * FROM bankmaster where 1  ";

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

else
{	
   $query .= "
 and bankcode LIKE  '%".$_POST['search']."%'
 OR bankname LIKE '%".$_POST['search']."%'
 OR accountno LIKE '%".$_POST['search']."%'
 OR branchname LIKE '%".$_POST['search']."%'
 OR shortform LIKE '%".$_POST['search']."%'
 OR purpose LIKE '%".$_POST['search']."%'
 OR mailid LIKE '%".$_POST['search']."%'
 OR ifsccode LIKE '%".$_POST['search']."%'
 OR contactperson LIKE '%".$_POST['search']."%'
 OR contactno LIKE '%".$_POST['search']."%'
 OR micrcode LIKE '%".$_POST['search']."%'
 OR typeofaccount LIKE '%".$_POST['search']."%'
 OR undersubgroup LIKE '%".$_POST['search']."%'
 OR fgroup LIKE '%".$_POST['search']."%'
 OR ledgername LIKE '%".$_POST['search']."%'
 OR costcenter LIKE '%".$_POST['search']."%'
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

    $sub_array[] = $row['bankcode'];
    $sub_array[] = $row['bankname'];
    $sub_array[] = $row['accountno'];
    $sub_array[] = $row['branchname'];
    $sub_array[] = $row['shortform'];
    $sub_array[] = $row['purpose'];  
    $sub_array[] = $row['mailid'];

    
    $sub_array[] = $row['ifsccode'];
    $sub_array[] = $row['contactperson'];
    $sub_array[] = $row['contactno'];
    $sub_array[] = $row['micrcode'];
    $sub_array[] = $row['typeofaccount'];
    $sub_array[] = $row['undersubgroup'];  
    $sub_array[] = $row['fgroup'];

    $sub_array[] = $row['ledgername'];  
    $costcenter  = $row['costcenter'];
    if($costcenter==0)
	{
    $costcenter = "Yes";
    }
    if($costcenter==1)
	{
    $costcenter = "No";
    }
    $sub_array[] = $costcenter;
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['bankid'];
	
	$action="<a href='bank&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	         <a href='bank&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
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