<?php
	session_start();

	function confirm_logged_in() {
		if(!isset($_SESSION['user_id'])){
			redirect_to("admin_login.php");
		}
	}

	// function create_time() {
	// 	$_SESSION['signinTime'] = time();
	// }
	//
	// function limit_time() {
	// 		$limitTime = 1;
	// 		if(isset($_SESSION['signinTime'])){
	//
	//     //Figure out how many seconds have passed
	//     //since the user was last active.
	//     $inactiveTime = time() - $_SESSION['signinTime'];
	//
	//     //Convert our minutes into seconds.
	//     $length = $limitTime * 60;
	//
	//     //Check to see if they have been inactive for too long.
	//     if($inactiveTime >= $length){
	//         //User has been inactive for too long.
	//         //Kill their session.
	//         session_unset();
	//         session_destroy();
	//     	}
	// 		}
	// 	}

	function logged_out() {
		session_destroy();
		redirect_to("../admin_login.php");
	}

?>
