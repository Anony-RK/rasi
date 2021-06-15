<?php
include('config-file.php');
@session_start();  
include("iedit-config.php");

include("adminclass.php");
$userObj = new admin();
$where = '';
$idupd ='';


$getuserdetails             = $userObj->getuser($mysqli,$idupd); 




?>


