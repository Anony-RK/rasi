<?php
include('ajaxconfig.php');

if (isset($_POST['unitid'])) {
    $unitid = $_POST['unitid'];
}
if (isset($_POST['unitname'])) {
    $unitname = $_POST['unitname'];
}

if($unitid>0){
	$update=$mysqli->query("UPDATE units SET unit='".$unitname."' WHERE unitid='".$unitid."' ");
	if($update == true){
		echo "<p style='text-align:center;color:green'>"."Unit Updated Succesfully!"."</p>";
	}else{
		echo "<p style='text-align:center;color:red'>"."Error:"." ".$mysqli->error."</p>";
	}
}else{
	$insert=$mysqli->query("INSERT INTO units(unit) VALUES('".strip_tags($unitname)."')");
	if($insert == true){
		echo "<p style='text-align:center;color:green'>"."Unit Added Succesfully!"."</p>";
	}else{
		echo "<p style='text-align:center;color:red'>"."Error:"." ".$mysqli->error."</p>";
	}
}
?>
                <div class="table-container unit-table" id="starttable">
				<div class="table-responsive">
				<table class="table custom-table m-0" >
				<thead>
				<tr>
					<th>UNIT</th>
					<th>ACTION</th>
				</tr>
			    </thead>
			    <tbody>
					<?php
				$mysqli = mysqli_connect("mysql5045.site4now.net", "a6c192_rasi", "rasi1234", "db_a6c192_rasi") or die("Error in database connection".mysqli_error($mysqli));

					$unitselect="SELECT * FROM units";
					$unitresult=$mysqli->query($unitselect);
					if($unitresult->num_rows>0){
					while($units=$unitresult->fetch_assoc()){
					?>
					<tr>
					<td><?php if(isset($units["unit"])){ echo $units["unit"]; }?></td>
					<td>
						<a id="editunit" value="<?php if(isset($units["unitid"])){ echo $units["unitid"];}?>"><span class="icon-border_color"></span></a> &nbsp

						 <a id="deleteunit" value="<?php if(isset($units["unitid"])){ echo $units["unitid"]; }?>"><span class='icon-trash-2'></span>
					    </a>
			           </td>
				    </tr>
				    </tbody>
				    <?php }} ?>
				</table>
			</div>
		</div>