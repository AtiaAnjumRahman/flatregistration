<?php include '../../controller/remove_control.php' ?>

<html>
<head><title>Remove User</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Remove User</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
				Enter Username / ID <br>
					<input type="text" name="usernameid" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='removeuser' value="Remove" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
