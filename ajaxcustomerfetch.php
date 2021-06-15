<?php

include('ajaxconfig.php');

$column = array(
    'customercode',
    'customername',
    'gender',
    'dateofbirth',
    'customerimage',
    'age',
    'mobilenumber',
    'whatsappnumber',
    'anniverserydate',
    'emailid',    
	'needmembership',

    'gstno',
    'contactpersion',
    'address1',
    'address2',
    'pincode',    
	'state',

	'typeofcustomer',
    'noofvisit', 
    'frequencyofvisit', 

    'subgroup',
    'groupsnew', 
    'ledgername',

    'costcenter', 
    'inventory',
    
	'status'
);

$query = "SELECT * FROM customer where 1  ";

if(isset($_POST['search'])!="");
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
   and customercode LIKE  '%".$_POST['search']."%'
 and customername LIKE  '%".$_POST['search']."%'
 OR gender LIKE '%".$_POST['search']."%'
 OR dateofbirth LIKE '%".$_POST['search']."%'
 OR customerimage LIKE '%".$_POST['search']."%'
 OR age LIKE '%".$_POST['search']."%'
 OR mobilenumber LIKE '%".$_POST['search']."%'
 OR whatsappnumber LIKE '%".$_POST['search']."%'
 OR anniverserydate LIKE '%".$_POST['search']."%'
 OR emailid LIKE '%".$_POST['search']."%'
 OR needmembership LIKE '%".$_POST['search']."%'

 OR gstno LIKE '%".$_POST['search']."%'
 OR contactpersion LIKE '%".$_POST['search']."%'
 OR address1 LIKE '%".$_POST['search']."%'
 OR address2 LIKE '%".$_POST['search']."%'
 OR pincode LIKE '%".$_POST['search']."%'
 OR state LIKE '%".$_POST['search']."%'


 OR typeofcustomer LIKE '%".$_POST['search']."%'
 OR noofvisit LIKE '%".$_POST['search']."%'
 OR frequencyofvisit LIKE '%".$_POST['search']."%'

 OR subgroup LIKE '%".$_POST['search']."%'
 OR groupsnew LIKE '%".$_POST['search']."%'
 OR ledgername LIKE '%".$_POST['search']."%'

 OR costcenter LIKE '%".$_POST['search']."%'
 OR inventory LIKE '%".$_POST['search']."%'
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
    $sub_array[] = $row['customercode'];
    $sub_array[] = $row['customername'];
    $sub_array[] = $row['gender'];
    $sub_array[] = $row['dateofbirth'];
    $sub_array[] = $row['customerimage'];
    $sub_array[] = $row['age'];
    $sub_array[] = $row['mobilenumber'];  
    $sub_array[] = $row['whatsappnumber'];
    $sub_array[] = $row['anniverserydate'];
    $sub_array[] = $row['emailid'];
    $sub_array[] = $row['needmembership'];

    $sub_array[] = $row['gstno'];
    $sub_array[] = $row['contactpersion'];  
    $sub_array[] = $row['address1'];
    $sub_array[] = $row['address2'];
    $sub_array[] = $row['pincode'];
    $sub_array[] = $row['district'];

    $sub_array[] = $row['state'];
    $sub_array[] = $row['country'];

    $sub_array[] = $row['typeofcustomer'];
    $sub_array[] = $row['noofvisit'];
    $sub_array[] = $row['frequencyofvisit'];

    $sub_array[] = $row['subgroup'];
    $sub_array[] = $row['groupsnew'];
    $sub_array[] = $row['ledgername'];

    $costcenter      = $row['costcenter'];
    if($costcenter==0)
	{
        $costcenter="Yes";
    }
    if($costcenter==1)
	{
        $costcenter="No";
    }
    $sub_array[] = $costcenter;
    $inventory      = $row['inventory'];
    if($inventory==0)
	{
        $inventory="Yes";
    }
    if($inventory==1)
	{
        $inventory="No";
    }
    $sub_array[] = $inventory;

    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['customid'];
	
	$action="<a href='customer&upd=$id' title='Edit details'><span class='icon-border_color'></span></a>&nbsp;&nbsp; 
	<a href='customer&del=$id' title='Edit details'><span class='icon-trash-2'></span></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = 'SELECT * FROM customer';
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