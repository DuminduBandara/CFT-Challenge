<?php


	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$pswd = $_POST['pswd']; 
		if($uname == 'user' && $pswd == 'user')
		{
			session_start();
			
			if(empty($_SESSION['token']))
			{
				$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
			}

			header('Location: ADindex.html');

		}
		else
			header('Location: ADlogin.html');
	}	
?>
