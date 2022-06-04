<?php 

	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];

		$email = $_POST['email'];
		$mobilenumber = $_POST['mobilenumber'];

		$country = $_POST['country'];



		if (empty($fname) or empty($lname) or  empty($email) or empty($mobilenumber) or empty($country) ) {
			echo "please fill up the form properly";
		}
		else {
			echo "Login Successful";
		}

	}

	else {

		echo "Request Rejected";
	}
?>
