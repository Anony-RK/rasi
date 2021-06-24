<?php

include('ajaxconfig.php');

$column = array(
    'role',
    'firstname',
    'lastname',
    'fullname',
    'title',
    'password',
    'email',
    'username',
    'companyname',
    'administration',    
	'master', 
    'profileallocation', 
    'purchaseorder', 
    'grn',    
	'mhepurchaseorder',
    'mhegrn',
    'damageandexpiry',
    'financeentry',
    'gstr',
    'workorder',
    'billing',
    'fixedassets',
    'financialstatement',
    'hr',
    'status'
);

$query = "SELECT * FROM  usercreation WHERE 1 ";

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
 and role LIKE  '%".$_POST['search']."%'
 OR firstname LIKE '%".$_POST['search']."%'
 OR lastname LIKE '%".$_POST['search']."%'
 OR fullname LIKE '%".$_POST['search']."%'
 OR title LIKE '%".$_POST['search']."%'
 OR password LIKE '%".$_POST['search']."%'
 OR email LIKE '%".$_POST['search']."%'
 OR username LIKE '%".$_POST['search']."%'
 OR companyname LIKE '%".$_POST['search']."%'
 OR administration LIKE '%".$_POST['search']."%'
 OR master LIKE '%".$_POST['search']."%'
 OR profileallocation LIKE '%".$_POST['search']."%'
 OR purchaseorder LIKE '%".$_POST['search']."%'
 OR grn LIKE '%".$_POST['search']."%'
 OR mhepurchaseorder LIKE '%".$_POST['search']."%'
 OR mhegrn LIKE '%".$_POST['search']."%'

 OR damageandexpiry LIKE '%".$_POST['search']."%'
 OR financeentry LIKE '%".$_POST['search']."%'
 OR gstr LIKE '%".$_POST['search']."%'
 OR workorder LIKE '%".$_POST['search']."%'
 OR billing LIKE '%".$_POST['search']."%'
 OR fixedassets LIKE '%".$_POST['search']."%'
 OR financialstatement LIKE '%".$_POST['search']."%'
 OR hr LIKE '%".$_POST['search']."%'
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
    $sub_array[] = $row['role'];
    $sub_array[] = $row['firstname'];
    $sub_array[] = $row['lastname'];
    $sub_array[] = $row['fullname'];
    $sub_array[] = $row['title'];
    $sub_array[] = $row['password'];
    $sub_array[] = $row['email'];
    $sub_array[] = $row['username'];
    $sub_array[] = $row['companyname'];  
    $sub_array[] = $row['administration'];
    $sub_array[] = $row['master'];


    $sub_array[] = $row['profileallocation'];
    $sub_array[] = $row['purchaseorder'];
    $sub_array[] = $row['grn'];
    $sub_array[] = $row['mhepurchaseorder'];
    $sub_array[] = $row['mhegrn'];

    $sub_array[] = $row['damageandexpiry'];
    $sub_array[] = $row['financeentry'];
    $sub_array[] = $row['gstr'];
    $sub_array[] = $row['workorder'];

    $sub_array[] = $row['billing'];
    $sub_array[] = $row['fixedassets'];
    $sub_array[] = $row['financialstatement'];
    $sub_array[] = $row['hr'];

   
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
	
	$action="<a href='usercreation&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='usercreation&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM  usercreation";
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