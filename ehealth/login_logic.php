

<?php 

	include_once('config.php');
session_start();
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE username=:username";

		$prep = $con->prepare($sql);
		$prep->bindParam(':username',$username);
		$prep->execute();
		$data = $prep->fetch();

		if ($data == false) {
			echo "Username doesnt exist";

			

		}else if(password_verify($password, $data['password'])){

			$_SESSION['username'] = $data['username'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['id'] = $data['id'];

			
     header("Location: user.php");
			}
         
     }
 ?>

