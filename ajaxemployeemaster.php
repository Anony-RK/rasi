<?php

include('ajaxconfig.php');

$column = array(
    'employeecode',
    'employeename',
    'dateofbirth',  
    'gender',
    'emailid',
    'designation', 
    'employeenumber',
    'dateofjoining',
    'contact',   
    'employeeimage',

    'expertise', 
    'starrating',

    'basic',
    'hra',  
    'conveyance', 
    'allowance',
    'incentivepercent', 
    'grosspay',
    'tds',
    'pf',  
    'esi',
    'loans', 
    'salaryadvance',
    'totaldeduction',
    'anyotherdeduction', 

    'institutetype1',
    'name1', 
    'positionheld1',
    'place1',
    'fromperiod1', 
    'toperiod1',
    'date1', 

    'institutetype2',
    'name2', 
    'positionheld2',
    'place2',
    'fromperiod2', 
    'toperiod2',
    'date2', 

    'institutetype3',
    'name3', 
    'positionheld3',
    'place3',
    'fromperiod3', 
    'toperiod3',
    'date3', 

    'institutetype4',
    'name4', 
    'positionheld4',
    'place4',
    'fromperiod4', 
    'toperiod4',
    'date4', 

    'institutetype5',
    'name5', 
    'positionheld5',
    'place5',
    'fromperiod5', 
    'toperiod5',
    'date5', 

    'title1',
    'certificate1',

    'title2',
    'certificate2',

    'title3',
    'certificate3',

    'title4',
    'certificate4',

    'title5',
    'certificate5',
    'status'

    
);

$query = "SELECT * FROM employee where 1  ";


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
 and employeecode LIKE  '%".$_POST['search']."%'
 OR employeename LIKE '%".$_POST['search']."%'
 OR dateofbirth LIKE '%".$_POST['search']."%'
 OR gender LIKE '%".$_POST['search']."%'
 OR emailid LIKE '%".$_POST['search']."%'
 OR designation LIKE '%".$_POST['search']."%'
 OR employeenumber LIKE '%".$_POST['search']."%'
 OR dateofjoining LIKE '%".$_POST['search']."%'
 OR contact LIKE '%".$_POST['search']."%'
 OR employeeimage LIKE '%".$_POST['search']."%'

 OR expertise LIKE '%".$_POST['search']."%'
 OR starrating LIKE '%".$_POST['search']."%'

 OR basic LIKE '%".$_POST['search']."%'
 OR hra LIKE '%".$_POST['search']."%'
 OR conveyance LIKE '%".$_POST['search']."%'
 OR allowance LIKE '%".$_POST['search']."%'
 OR incentivepercent LIKE '%".$_POST['search']."%'
 OR grosspay LIKE '%".$_POST['search']."%'
 OR tds LIKE '%".$_POST['search']."%'
 OR pf LIKE '%".$_POST['search']."%'
 OR esi LIKE '%".$_POST['search']."%'
 OR loans LIKE '%".$_POST['search']."%'
 OR salaryadvance LIKE '%".$_POST['search']."%'
 OR totaldeduction LIKE '%".$_POST['search']."%'
 OR anyotherdeduction LIKE '%".$_POST['search']."%'

 OR institutetype1 LIKE '%".$_POST['search']."%'
 OR name1 LIKE '%".$_POST['search']."%'
 OR positionheld1 LIKE '%".$_POST['search']."%'
 OR place1 LIKE '%".$_POST['search']."%'
 OR fromperiod1 LIKE '%".$_POST['search']."%'
 OR toperiod1 LIKE '%".$_POST['search']."%'
 OR date1 LIKE '%".$_POST['search']."%'

 OR institutetype2 LIKE '%".$_POST['search']."%'
 OR name2 LIKE '%".$_POST['search']."%'
 OR positionheld2 LIKE '%".$_POST['search']."%'
 OR place2 LIKE '%".$_POST['search']."%'
 OR fromperiod2 LIKE '%".$_POST['search']."%'
 OR toperiod2 LIKE '%".$_POST['search']."%'
 OR date2 LIKE '%".$_POST['search']."%'

 OR institutetype3 LIKE '%".$_POST['search']."%'
 OR name3 LIKE '%".$_POST['search']."%'
 OR positionheld3 LIKE '%".$_POST['search']."%'
 OR place3 LIKE '%".$_POST['search']."%'
 OR fromperiod3 LIKE '%".$_POST['search']."%'
 OR toperiod3 LIKE '%".$_POST['search']."%'
 OR date3 LIKE '%".$_POST['search']."%'

 OR institutetype4 LIKE '%".$_POST['search']."%'
 OR name4 LIKE '%".$_POST['search']."%'
 OR positionheld4 LIKE '%".$_POST['search']."%'
 OR place4 LIKE '%".$_POST['search']."%'
 OR fromperiod4 LIKE '%".$_POST['search']."%'
 OR toperiod4 LIKE '%".$_POST['search']."%'
 OR date4 LIKE '%".$_POST['search']."%'

 OR institutetype5 LIKE '%".$_POST['search']."%'
 OR name5 LIKE '%".$_POST['search']."%'
 OR positionheld5 LIKE '%".$_POST['search']."%'
 OR place5 LIKE '%".$_POST['search']."%'
 OR fromperiod5 LIKE '%".$_POST['search']."%'
 OR toperiod5 LIKE '%".$_POST['search']."%'
 OR date5 LIKE '%".$_POST['search']."%'

 OR title1 LIKE '%".$_POST['search']."%'
 OR certificate1 LIKE '%".$_POST['search']."%'

 OR title2 LIKE '%".$_POST['search']."%'
 OR certificate2 LIKE '%".$_POST['search']."%'

 OR title3 LIKE '%".$_POST['search']."%'
 OR certificate3 LIKE '%".$_POST['search']."%'

 OR title4 LIKE '%".$_POST['search']."%'
 OR certificate4 LIKE '%".$_POST['search']."%'

 OR title5 LIKE '%".$_POST['search']."%'
 OR certificate5 LIKE '%".$_POST['search']."%'
 
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
    $query1 = 'LIMIT ' . isset($_POST['start']) . ', ' . $_POST['length'];
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
    $sub_array[] = $row['employeecode'];
    $sub_array[] = $row['employeename'];
    $sub_array[] = $row['dateofbirth'];   
    $sub_array[] = $row['gender'];
    $sub_array[] = $row['emailid'];
    $sub_array[] = $row['designation']; 
    $sub_array[] = $row['employeenumber'];
    $sub_array[] = $row['dateofjoining'];
    $sub_array[] = $row['contact']; 
    $sub_array[] = $row['employeeimage'];

    $sub_array[] = $row['expertise'];
    $sub_array[] = $row['starrating']; 

    $sub_array[] = $row['basic'];
    $sub_array[] = $row['hra'];
    $sub_array[] = $row['conveyance']; 
    $sub_array[] = $row['allowance'];
    $sub_array[] = $row['incentivepercent'];
    $sub_array[] = $row['grosspay']; 
    $sub_array[] = $row['tds'];
    $sub_array[] = $row['pf'];
    $sub_array[] = $row['esi']; 
    $sub_array[] = $row['loans'];
    $sub_array[] = $row['salaryadvance'];
    $sub_array[] = $row['totaldeduction']; 
    $sub_array[] = $row['anyotherdeduction'];


    $sub_array[] = $row['institutetype1'];
    $sub_array[] = $row['name1']; 
    $sub_array[] = $row['positionheld1'];
    $sub_array[] = $row['place1'];
    $sub_array[] = $row['fromperiod1']; 
    $sub_array[] = $row['toperiod1'];
    $sub_array[] = $row['date1'];

    $sub_array[] = $row['institutetype2'];
    $sub_array[] = $row['name2']; 
    $sub_array[] = $row['positionheld2'];
    $sub_array[] = $row['place2'];
    $sub_array[] = $row['fromperiod2']; 
    $sub_array[] = $row['toperiod2'];
    $sub_array[] = $row['date2'];

    $sub_array[] = $row['institutetype3'];
    $sub_array[] = $row['name3']; 
    $sub_array[] = $row['positionheld3'];
    $sub_array[] = $row['place3'];
    $sub_array[] = $row['fromperiod3']; 
    $sub_array[] = $row['toperiod3'];
    $sub_array[] = $row['date3'];

    $sub_array[] = $row['institutetype4'];
    $sub_array[] = $row['name4']; 
    $sub_array[] = $row['positionheld4'];
    $sub_array[] = $row['place4'];
    $sub_array[] = $row['fromperiod4']; 
    $sub_array[] = $row['toperiod4'];
    $sub_array[] = $row['date4'];

    $sub_array[] = $row['institutetype5'];
    $sub_array[] = $row['name5']; 
    $sub_array[] = $row['positionheld5'];
    $sub_array[] = $row['place5'];
    $sub_array[] = $row['fromperiod5']; 
    $sub_array[] = $row['toperiod5'];
    $sub_array[] = $row['date5'];

    $sub_array[] = $row['title1'];
    $sub_array[] = $row['certificate1'];

    $sub_array[] = $row['title2'];
    $sub_array[] = $row['certificate2'];

    $sub_array[] = $row['title3'];
    $sub_array[] = $row['certificate3'];

    $sub_array[] = $row['title4'];
    $sub_array[] = $row['certificate4'];

    $sub_array[] = $row['title5'];
    $sub_array[] = $row['certificate5'];


    $status      = $row['status'];

    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['employeeid'];
	
	$action="<a href='student&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	<a href='student&del=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm js-sweetalert' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></button></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM employee";
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