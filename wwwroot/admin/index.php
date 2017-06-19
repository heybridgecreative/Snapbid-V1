<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['adusername'])) {
	header("Location: pages/index.php");
}

if(isset($_POST['admin-login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res = mysql_query("SELECT * FROM snapbid_users WHERE username='$username'");
	$row = mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['aduser'] = $row['id'];
		$_SESSION['adusername'] = $row['username'];
		$_SESSION['adfirstname'] = $row['first_name'];
		$_SESSION['adsurname'] = $row['surname'];
		$_SESSION['ademail'] = $row['email'];
		$_SESSION['adusertype'] = $row['type'];
        header('Location: index.php');
	}
	else
	{
		?>
        <script>alert('Please try again!');</script>
        <?php
	}
	
}

?>



<!DOCTYPE html>
<html lang="en">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <link rel="apple-touch-icon" sizes="114x114" href="../img/admin-iphone.jpg" />

	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="filemanager/jquery.file.manager.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fonts/snapicon/flaticon.css">
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <!-- Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="login-form">
							<form method="post">
								<table align="center" width="100%" height="100%" border="0">
									<tr style="height:97vh; width:100vw; text-align:center;">
										<td style="width:30%;">
											<p style="margin-bottom:0px;"><img width="300px" src="../img/logo-text.png" alt="Snapbid"></p>
											<p style="margin-bottom:30px;">Extranet Login</p>
											<input style="text-align:center;padding-left:0px;" id="username" type="text" name="username" placeholder="Your Username" required /><br />
											<input style="text-align:center;padding-left:0px;" id="password" type="password" name="pass" placeholder="Your Password" required /><br />
											<button type="submit" name="admin-login">Sign In</button>
										</td>
									</tr>
								</table>
							</form>
						</div>
                    </div>
                 <!-- /.col-lg-12 -->
              </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#wrapper -->


</body>

</html>
