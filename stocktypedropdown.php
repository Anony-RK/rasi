<?php
include 'ajaxconfig.php';

$stockselect="SELECT stock FROM stocks WHERE status=0";
$stockresult=$mysqli->query($stockselect);
$stocklist=array();
if($stockresult->num_rows>0){
while($stocks=$stockresult->fetch_assoc()){
$stocklist[]=$stocks["stock"];
}
}
echo json_encode($stocklist);
?>