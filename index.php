<?php	
date_default_timezone_set('Asia/Calcutta');
@session_start();

include("api/main.php");
$msg="";
/* Log In Start  */

if(isset($_POST['lusername'])) 
	{   
		$username  = $_POST['lusername'];
		$password  =  $_POST['lpassword'];
		if($_POST['lusername'] != '')
		{
			$qry     = "SELECT * FROM user WHERE user_name = '".$username."' AND user_password = '".$password."' and status=0";
			 
			$res = mysqli_query($mysqli,$qry)or die("Error in Get All Records".mysqli_error()); 
			$result = mysqli_fetch_array($res);
		if ($mysqli->affected_rows>0)
			{  
				 $_SESSION['username']    = $result['user_name'];
				 $_SESSION['userid']          = $result['user_id'];
						

		 
		//The value of $ip at this point would look something like: "192.0.34.166"
		$ip = $_SERVER['REMOTE_ADDR']; 
		 
		 $date = date('Y-m-d h:i:s');
		 
	   	 $qry  = "INSERT INTO user_logs(ipaddress,login_date,fk_user_id)
		          VALUES('".$ip."','".$date."','".$_SESSION['userid']."')";
			 	// echo $qry;
//die;				 
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
        $_SESSION['loginid'] = 	$id;   
        
	 ?>
          <script>location.href='<?php  echo $HOSTPATH; ?>editbranch';</script>  
     	
		<?php
		}
				
		else
		{ 
		$msg="Enter Valid Email Id and Password";
       } 
    }
}
//	echo $msg;
	// die;
		?>


<?php include("include/common/accounthead.php"); ?>
			<form  id="loginform" name="loginform" action="" method="post">
			
				<div class="row justify-content-md-center">
			
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/logo.png" alt="Rasi Admin Dashboard" />
								</a>
							<span class="text-danger" id="cinnocheck">		 <?php
            if($msg != '')
            {
             echo $msg;
            }
             ?></span>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" name="lusername" id="lusername" class="form-control" placeholder="Enter email" />
								</div>
								<div class="form-group">
									<input type="password" name="lpassword" id="lpassword" class="form-control" placeholder="Password" />
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit"  id="lbutton" name="lbutton" class="btn btn-primary">Login</button>
								</div>
								
								<hr>
								
							</div>
						</div>
					</div>
				</div>
			</form>
<?php include("include/common/accountfooter.php"); ?>
		