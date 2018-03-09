<?php
	if(isset($_POST['name']) && isset($_POST['area']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['address']) && isset($_POST['type']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['conf_password'])){

		if(!empty($_POST['name']) && !empty($_POST['area']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['address']) && !empty($_POST['type']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['conf_password'])){

			if($_POST['password'] == $_POST['conf_password']){

				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

					require('../include/db.php');
					$query = "INSERT INTO `hospital_list`(`h_id`, `h_name`, `area`, `city`, `state`, `address`, `type`, `login_id`, `password`) VALUES (DEFAULT,'".$_POST['name']."','".$_POST['area']."','".$_POST['city']."','".$_POST['state']."','".$_POST['address']."','".$_POST['type']."','".$_POST['email']."','".md5($_POST['password'])."')";
				
					if(mysqli_query($con , $query)){
						$_SESSION['code'][1] = 'Hospital Added to Database';
						header('location:'.$_SERVER['HTTP_REFERER']);
					}
					else{
						$_SESSION['code'][1] = 'Database query failed';
						header('location:'.$_SERVER['HTTP_REFERER']);
					}
				}
				else{
					$_SESSION['code'][1] = 'Invalid email formate';
					header('location:'.$_SERVER['HTTP_REFERER']);
				}
			}
			else{
				$_SESSION['code'][1] = 'Password does not metch';
				header('location:'.$_SERVER['HTTP_REFERER']);
			}

		}
		else{
			$_SESSION['code'][1] = 'Null Data Provided';
			header('location:'.$_SERVER['HTTP_REFERER']);
		}
	}
	else{
		$_SESSION['code'][1] = 'Provide Required Data';
		header('header:'.$_SERVER['HTTP_REFERER']);
	} 
?>