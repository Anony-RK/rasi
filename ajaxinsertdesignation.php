<?php
include('ajaxconfig.php');

if (isset($_POST['designationid'])) {
    $designationid = $_POST['designationid'];
}
if (isset($_POST['designation'])) {
    $designation = $_POST['designation'];
}

if($designationid>0){
	$update=$con->query("UPDATE designation SET designation='".$designation."' WHERE designationid='".$designationid."' ");
	if($update == true){
		echo "<p style='text-align:center;color:green'>"."designation Updated Succesfully!"."</p>";
	}else{
		echo "<p style='text-align:center;color:red'>"."Error:"." ".$con->error."</p>";
	}
}else{
	$insert=$con->query("INSERT INTO designation(designation) VALUES('".strip_tags($designation)."')");
	if($insert == true){
		echo "<p style='text-align:center;color:green'>"."designation Added Succesfully!"."</p>";
	}else{
		echo "<p style='text-align:center;color:red'>"."Error:"." ".$con->error."</p>";
	}
}
?>
                <div class="table-container designation-table" id="starttable">
				<div class="table-responsive">
				<table class="table custom-table m-0" >
				<thead>
				<tr>
					<th>designation</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php
					$designationelect="SELECT * FROM designation WHERE status=0";
					$designationresult=$con->query($designationelect);
					if($designationresult->num_rows>0){
					while($designation=$designationresult->fetch_assoc()){
					?>
					<tr>
					<td><?php if(isset($designation["designation"])){ echo $designation["designation"]; }?></td>
					<td>
						<a id="editdesignation" value="<?php if(isset($designation["designationid"])){ echo $designation["designationid"];}?>"><span class="icon-border_color"></span></a> &nbsp

						 <a id="deletedesignation" value="<?php if(isset($designation["designationid"])){ echo $designation["designationid"]; }?>"><span class="icon-trash-2"></span></i>
					    </a>
			           </td>
				    </tr>
				    </tbody>
				    <?php }} ?>
				</table>
			</div>
		</div>