<?php //include_once('config.php');
if(isset($_REQUEST['action']) and $_REQUEST['action']=="addDataRow"){
	?>

<tr >
											  <td>1.</td>
											  <td>

                <select class="form-control" id="products" name="products">
                 <option disabled selected>-- Select City --</option>
    <?php
        //  include "api/iedit-config.php";  // Using database connection file here
        // $records = mysqli_query($mysqli, "SELECT itemname From item");  // Use select query here 

        // while($data = mysqli_fetch_array($records))
        // {
        //     echo "<option value='". $data['itemname'] ."'>" .$data['itemname'] ."</option>";  // displaying data in option menu
        // }	
    ?>  
  </select>
                                                </td>
                                              <td><input type="text"  class="form-control"  id="qty" name="qty"></td>											 																						  
                                              <td><input type="text"  class="form-control" onkeyup="calculate()"  id="rate" name="rate"></td>
                                              <td><label  type="text" id="total" name="total" ></label></td>
                                              <td><input type="text"  class="form-control"  onkeyup="discount()" name="discount" id="discount"></td>
                                              <td><input type="text"  class="form-control"  name="taxablevalue" id="taxablevalue"></td>
                                              <td> 6%</td>
                                              <td><input type="text" readonly class="form-control" value="" id="cgstrate" name="cgstrate"></td>
                                              <td>6%</td>
                                              <td><input type="text" readonly class="form-control" value="" id="sgstrate" name="sgstrate"></td>
                                              <td><input type="text"  class="form-control" value="" onchange='addItem();' id="totalamount" name="totalamount"></td>
											                      </tr>
	<?php
// 	echo '|***|addmore';
// }


// if(isset($_REQUEST['action']) and $_REQUEST['action']=="saveAddMore"){
// 	extract($_REQUEST);
	
// 	foreach($username as $key=>$un){
// 		$db->query('INSERT INTO reorderusers (username, useremail, userphone, usercountry) VALUES ("'.$un.'", "'.$useremail[$key].'", "'.$userphone[$key].'", "'.$usercountry[$key].'") ');
// 	}
// 	echo '<div class="alert alert-success"><i class="fa fa-fw fa-thumbs-up"></i> Record added successfully!</div>|***|add';
 }