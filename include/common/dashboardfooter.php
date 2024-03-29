<?php $current_page = isset($_GET['page']) ? $_GET['page'] : null; ?>


		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Datepickers -->
		<script src="vendor/datepicker/js/picker.js"></script>
		<script src="vendor/datepicker/js/picker.date.js"></script>
		<script src="vendor/datepicker/js/custom-picker.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>
		<!--<script src="js/itemcreation.js"></script>-->
		
		
			<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
	<!-- Font -->
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="jsd/datatables.min.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {

     
        var branch_info = $('#branch_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbranchfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});

	var company_info = $('#company_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxcompanyfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
	'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
 var item_info = $('#item_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxitemfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
			'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	 var employee_info = $('#employee_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxemployeemasterfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	  var vendor_info = $('#vendor_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxvendorfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	
	
	var customer_info = $('#customer_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxcustomerfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	

	var taxmaster_info = $('#taxmaster_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxtaxmaster.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	
	var bank_info = $('#bank_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbankmaster.php',
			'data': function(data){
                var search = $('#search').val();						// Append to data
                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});


	var goods_info = $('#goods_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxgoodsinfo.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});

// billing table

	var billing_info = $('#billing_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbilling.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});



	// billing2 table

	var billing2_info = $('#billing2_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbilling2.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});


	// billing3 table

	var billing3_info = $('#billing3_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbilling3.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});




	// billing4 table

	var billing4_info = $('#billing4_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbilling4.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});




	// billing5 table

	var billing5_info = $('#billing5_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbilling5.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});


	


	// billsetting table

	var billsetting_info = $('#billsetting_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbillsetting.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});



	
	// godowncreation

	var godowncreation_info = $('#godowncreation_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxgodowncreation.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});


	// usercreation

	var usercreation_info = $('#usercreation_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxusercreation.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data                           
		  	data.search      = search;
			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'csv', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	$('#search').change(function(){
		usercreation_info.draw();
		billsetting_info.draw();
		billing5_info.draw();
		billing4_info.draw();
		billing3_info.draw();
		billing2_info.draw();
		billing_info.draw();
        branch_info.draw();
		company_info.draw();
		item_info.draw();
		employee_info.draw();
		customer_info.draw();
		taxmaster_info.draw();
		bank_info.draw();
		goods_info.draw();
            });
	});
	
	</script>

<?php   if($current_page == 'branch') { ?>
<script src="js/branchcreation.js"></script>
<?php  } if($current_page == 'company') { ?>
<script src="js/companycreation.js"></script>
<?php  } if($current_page == 'item') { ?>
<script src="js/itemcreation.js"></script>
<?php }  if($current_page == 'employeemaster') { ?>
		<script src="js/employeemaster.js"></script>
<?php } if($current_page == 'addvendor') { ?>
		<script src="js/addvendor.js"></script>
<?php } if($current_page == 'finance') { ?>
		<script src="js/finance.js"></script>
<?php } if($current_page == 'customer') { ?>
        <script src="js/customer.js"></script>
<?php } if($current_page == 'taxmaster') { ?>
		<script src="js/taxmaster.js"></script>
<?php }  if($current_page == 'finance') { ?>
		<script src="js/finance.js"></script>
<?php } if($current_page == 'billing') { ?>
		<script src="js/billing.js"></script>
<?php } if($current_page == 'billing2') { ?>
		<script src="js/billing2.js"></script>
<?php } if($current_page == 'billing3') { ?>
		<script src="js/billing3.js"></script>
<?php } if($current_page == 'billing4') { ?>
		<script src="js/billing4.js"></script>
<?php } if($current_page == 'billing5') { ?>
		<script src="js/billing5.js"></script>
<?php } if($current_page == 'settings') { ?>
		<script src="js/setting.js"></script>	
<?php } if($current_page == 'billsetting') { ?>
		<script src="js/billsetting.js"></script>
<?php } if($current_page == 'godownoutward') { ?>
		<script src="js/godownoutward.js"></script>
<?php } if($current_page == 'branchoutward') { ?>
		<script src="js/branchoutward.js"></script>
<?php } if($current_page == 'usercreation') { ?>
		<script src="js/usercreation.js"></script>
<?php } ?>