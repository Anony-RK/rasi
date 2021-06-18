<?php 
$msc=0;
if(isset($_GET['msc']))
{
$msc=$_GET['msc'];
}
$current_page = isset($_GET['page']) ? $_GET['page'] : null; 
   define('iEditValid', 1);
	include('api/main.php'); // Database Connection File   
	?>
<!doctype html>
<html lang="en">	
<?php include "include/common/dashboardhead.php"?>
	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">
		<?php include "include/common/leftbar.php"?>

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
							
							
							</li>
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label">8</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="img/user21.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Oct 20, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="img/user10.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Oct 10, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="img/user6.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Oct 15, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Admin</span>
									<span class="avatar">
										<img src="img/user22.png" alt="avatar">
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user22.png" alt="Admin Template">
											</div>
											<h5>Admin</h5>
											<p>Admin</p>
										</div>
										<a href="#"><i class="icon-user1"></i> My Profile</a>
										<a href="#"><i class="icon-settings1"></i> Account Settings</a>
										<a href="index.php"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->
                <?php   if($current_page == 'branch') { ?>
				<?php include "include/templates/branchcreation.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbranch') { ?>
				<?php include "include/templates/editbranch.php"?>
                <?php   } ?>
				<?php   if($current_page == 'company') { ?>
				<?php include "include/templates/companycreation.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editcompany') { ?>
				<?php include "include/templates/editcompany.php"?>
                <?php   } ?>
				 <!-- Employee Master -->
                <?php   if($current_page == 'employeemaster') { ?>
				<?php include "include/templates/employeemaster.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editemployeemaster') { ?>
				<?php include "include/templates/editemployeemaster.php"?>
                <?php   } ?>
				 <!-- Item creation -->
                <?php   if($current_page == 'item') { ?>
				<?php include "include/templates/itemcreation.php"?>
                <?php   } ?>
                <?php   if($current_page == 'edititem') { ?>
				<?php include "include/templates/edititem.php"?>
                <?php   } ?>
				<!-- Vendor creation -->
                <?php   if($current_page == 'addvendor') { ?>
				<?php include "include/templates/addvendor.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editvendor') { ?>
				<?php include "include/templates/editvendor.php"?>
                <?php   } ?>
			   <!-- Customer-->
			 <?php   if($current_page == 'customer') { ?>
				<?php include "include/templates/customer.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editcustomer') { ?>
				<?php include "include/templates/editcustomer.php"?>
                <?php   } ?>


                <!-- Tax-->
                <?php   if($current_page == 'taxmaster') { ?>
				<?php include "include/templates/taxmaster.php"?>
                <?php   } ?>
                <?php   if($current_page == 'edittaxmaster') { ?>
				<?php include "include/templates/edittaxmaster.php"?>
                <?php   } ?>
				
				  <!-- Bank-->
                <?php   if($current_page == 'bank') { ?>
				<?php include "include/templates/bankcreation.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbank') { ?>
				<?php include "include/templates/editbank.php"?>
                <?php   } ?>

				<!-- Bank-->
			   <?php   if($current_page == 'goodsreceivingnote') { ?>
				<?php include "include/templates/goodsreceivingnotecreation.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editgoodsreceivingnote') { ?>
				<?php include "include/templates/editgoodsreceivingnote.php"?>
                <?php   } ?>

					<!-- Bill-->
					<?php   if($current_page == 'billing') { ?>
				<?php include "include/templates/billing.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbilling') { ?>
				<?php include "include/templates/editbilling.php"?>
                <?php   } ?>
					<!-----Bill2--->
				<?php   if($current_page == 'billing2') { ?>
				<?php include "include/templates/billing2.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbilling2') { ?>
				<?php include "include/templates/editbilling2.php"?>
                <?php   } ?>
				<!-----Bill3--->
				<?php   if($current_page == 'billing3') { ?>
				<?php include "include/templates/billing3.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbilling3') { ?>
				<?php include "include/templates/editbilling3.php"?>
                <?php   } ?>
				<!-----Bill4--->
				<?php   if($current_page == 'billing4') { ?>
				<?php include "include/templates/billing4.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbilling4') { ?>
				<?php include "include/templates/editbilling4.php"?>
                <?php   } ?>


				<!-----Bill4--->
				<?php   if($current_page == 'billing5') { ?>
				<?php include "include/templates/billing5.php"?>
                <?php   } ?>
                <?php   if($current_page == 'editbilling5') { ?>
				<?php include "include/templates/editbilling5.php"?>
                <?php   } ?>


				<!-- Main container end -->
    
                <!-- Finance -->
                <?php   if($current_page == 'finance') { ?>
				<?php include "include/templates/financecreation.php"?>
                <?php   } ?>
			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

        <?php include "include/common/dashboardfooter.php"?>
        </body>

</html>