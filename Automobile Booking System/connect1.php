<?php
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$str_pass= password_hash($pass,PASSWORD_BCRYPT);

if (!empty($uname) || !empty($pass))
{
    $host = "sql204.epizy.com";
    $dbUsername = "epiz_26831807";
    $dbPassword = "CHI6hAwLkvPK";
    $dbname = "epiz_26831807_Login";
    //create connection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname)
				or 
			die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   

    $INSERT = "INSERT Into login(uname, pass )values('".$uname."','".$str_pass."')";
	if(mysqli_query($conn,$INSERT))
	{
		echo  '<script type="text/javascript"> alert("DATA SAVED")
		window.history.go(-1);
		</script>';
		header('location: Building.html');
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
     
    

    $conn->close();
}

?>