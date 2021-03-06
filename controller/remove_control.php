<?php
	require 'config/config.php';

	if(isset($_POST['removeuser'])) {
		$errMsg = '';
		// Get username from FORM
		$usernameid = $_POST['usernameid'];

		if($usernameid == '')
			$errMsg = 'Enter username/ id to remove';

		if($errMsg == '') {
			try{
				$stmt = $connect->prepare('DELETE FROM pdo WHERE id = :id OR username = :username LIMIT 1');
				$stmt->execute(array(
					':id' => $usernameid,
					':username' => $usernameid
					));

				$errMsg = 'User ' . $usernameid . ' successfully removed.';

			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>