<?php
	require 'config/config.php';

	// use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\Exception;

	// require 'PHPMailer/src/Exception.php';
	// require 'PHPMailer/src/PHPMailer.php';
	// require 'PHPMailer/src/SMTP.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$username = $_POST['username'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];

		// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		// try {
		//     //Server settings
		//     $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		//     $mail->isSMTP();                                      // Set mailer to use SMTP
		//     $mail->Host = 'ssl://smtp.gmail.com:465';  // Specify main and backup SMTP servers
		//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
		//     $mail->Username = 'xxxx@gmail.com';                 // SMTP username
		//     $mail->Password = 'xxxx';                           // SMTP password
		//     $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		//     $mail->Port = 465;                                    // TCP port to connect to

		//     //Recipients
		//     $mail->setFrom('xxxxx@gmail.com', 'Mailer');
		// 	$mail->addAddress($email, 'Name Of the person');     // Add a recipient

		//     //Content
		//     $mail->isHTML(true);                                  // Set email format to HTML
		//     $mail->Subject = "Registration successfull $fullname";
		//     $mail->Body    = "Credentials To login into our site <br> Name: $fullname <br>Email : $email<br> Username: $username <br>Password: $password";

		//    	$mail->send();
		//    // echo 'Message has been sent';
		// } catch (Exception $e) {
		//    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		// }	

			try {
				$stmt = $connect->prepare('INSERT INTO users (fullname, mobile, username, email, password) VALUES (:fullname, :mobile, :username, :email, :password)');
				$stmt->execute(array(
					':fullname' => $fullname,
					':username' => $username,
					':password' => md5($password),
					':email' => $email,
					':mobile' => $mobile,
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registration successfull. Now you can login';
	}
?>