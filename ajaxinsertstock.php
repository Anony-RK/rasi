<?php
include('ajaxconfig.php');

if (isset($_POST['stockid'])) {
    $stockid = $_POST['stockid'];
}
if (isset($_POST['stockname'])) {
    $stockname = $_POST['stockname'];
}
$stocklist=[1];
$stocks=$con->query("SELECT stock FROM stocks");
while ($row=$stocks->fetch_assoc()){
	$stocklist[]=$row["stock"];
}


if(in_array($stockname, $stocklist)){
	$message="Stock Already Exists, Please Enter a Different Name!";
}else{
	if($stockid>0){
		$update=$con->query("UPDATE stocks SET stock='".$stockname."' WHERE stockid='".$stockid."' ");
		if($update == true){
		$message="Stock Updated Succesfully";
	    }}
	    else{
	    $insert=$con->query("INSERT INTO stocks(stock) VALUES('".strip_tags($stockname)."')");
	    if($insert == true){
		$message="Stock Added Succesfully";
	}}} 

	echo json_encode($message);
	?>

