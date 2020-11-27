<?php
$name = $_POST['name'];
$uname = $_POST['uname'];
$pass= $_POST['pass'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];	
$email = $_POST['email'];

$str_pass= password_hash($pass,PASSWORD_BCRYPT);
if (!empty($name) || !empty($uname) || !empty($pass) || !empty($age) || !empty($gender) || !empty($phone) || !empty($email))
	{
    $host = "sql204.epizy.com";
    $dbUsername = "epiz_26831807";
    $dbPassword = "CHI6hAwLkvPK";
    $dbname = "epiz_26831807_Login";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
				or 
			die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   

    $INSERT = "INSERT Into signup(name, uname ,pass, age, gender, phone, email)values('".$name."','".$uname."','".$str_pass."','".$age."','".$gender."','".$phone."','".$email."')";
    if(mysqli_query($conn,$INSERT))
	{
		
        echo  '<script type="text/javascript"> alert("DATA SAVED")
		window.history.go(-1);
		</script>';
		header('location: login.html');
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
    $conn->close();
    
} 
?>