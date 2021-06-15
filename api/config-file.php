<?php
//$URLPATH="https://".$_SERVER['HTTP_HOST']."/"; 

//$HOSTPATH = $URLPATH. "rasi/";

//$HOSTPATH = $URLPATH. "rasi/";
//echo $HOSTPATH;
//die;
//$ROOTPATH = $_SERVER['DOCUMENT_ROOT']."/";

$URLPATH="http://localhost/rasi/"; 
$HOSTPATH = $URLPATH;
$ROOTPATH = "http://localhost/";
//$ROOTPATH = $_SERVER['DOCUMENT_ROOT']."/";

$companyImagePath = $URLPATH."uploads/companyphoto/";
$companyDocumentPath = $URLPATH."uploads/companydocument/";


$allowedUploadFileExtension = array("jpg", "bmp", "jpeg", "gif", "png");
 

define('HOSTPATH',$HOSTPATH);
define('ROOTPATH',$ROOTPATH); 



define('UPLOADCOMPANYIMAGEPATH',$companyImagePath); 

define('UPLOADACOMPANYDOCUMENTPATH',$companyDocumentPath); 


  

?>
