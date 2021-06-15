<?php
include('ajaxconfig.php');
if(isset($_POST["stockid"])){
	$stockid  = $_POST["stockid"];
}
$venstock=[1];
$venstockqry=$con->query("SELECT stocktype FROM vendor WHERE status=0");
while($row=$venstockqry->fetch_assoc()){
	$venstock[]=$row["stocktype"];
}
$itemstock=[1];
$itemstockqry=$con->query("SELECT stocktype FROM item WHERE status=0");
while($row=$itemstockqry->fetch_assoc()){
	$itemstock[]=$row["stocktype"];
}

$stockqry=$con->query("SELECT stock FROM stocks WHERE stockid='".$stockid."' ");
while($row=$stockqry->fetch_assoc()){
	$stock=$row["stock"];
}

if(in_array($stock, $venstock) || in_array($stock, $itemstock)){
	$message="<p style='color:red'>You Don't Have Rights To Delete This Stock<p>";
}else{
	$delstock=$con->query("UPDATE stocks SET status=1 WHERE stockid='".$stockid."' ");
	if($delstock){
		$message="<p style='color:green'>Stock Inactivated Successfully<p>";
	}
}
echo json_encode($message);
?>