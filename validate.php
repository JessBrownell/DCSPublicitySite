<?php
	$errors = array ('dealerErr' => '', 'firstErr' => '','lastErr' => '', 'emailErr' => '', 'phoneErr' => '');

	$Dealership = $First = $Last = $Email = $Phone = $Comment = "";
	

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//Dealership
		if (empty($_POST["Dealership"])) {
			$errors['dealerErr'] = "Dealership is required";
		} else {
			$Dealership = test_input($_POST["Dealership"]);
		}

		//First Name
		if (empty($_POST["First"])) {
			$errors['firstErr'] = "Name is required";
		} else {
			$First = test_input($_POST["First"]);
		}

		//Last Name
		if (empty($_POST["Last"])) {
			$errors['lastErr'] = "Name is required";
		} else {
			$Last = test_input($_POST["Last"]);
		}

		//Email
		if (empty($_POST["Email"])) {
			$errors['emailErr'] = "Email is required";
		}
		else {
			$Email = test_input($_POST["Email"]);

			// check if e-mail address is well-formed
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				$errors['emailErr'] = "Invalid email format";
			}
		}

		//Phone
		if (empty($_POST["Phone"])) {
			$errors['phoneErr'] = "Phone is required";
		}
		else {
			$Phone = test_input($_POST["Phone"]);

			if (!preg_match('/^[0-9]{10}+$/', $Phone)) {
				$errors['phoneErr'] = "Invalid format";
			}
		}

		//Message
		if (empty($_POST["Comment"])) {
			$Comment = "";
		}
		else {
			$Comment = test_input($_POST["Comment"]);
		}



		//Checking for errors
		if(array_filter($errors)) {
			//Errors exits
		} 
		else {
			$url = 'https://hook.integromat.com/roq8q62dce7mgd5xa5ppstuyk035wixo';
			$data = array('Dealership' => $Dealership, 'First' => $First, 'Last' => $Last, 'Email' => $Email, 'Phone' => $Phone, 'Comment' => $Comment);
			$options = array (
				'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data),
				)
			);

			$context = stream_context_create($options);
			$result = file_get_contents($url, false, $context);
			var_dump($result);


			header("Location: index.html");
			exit();
		}
	}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


?>
