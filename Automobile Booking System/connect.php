<?php
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];	
$buy = $_POST['buy'];
$type = $_POST['type'];


if (!empty($name) || !empty($age) || !empty($gender) || !empty($phone) || !empty($email) || !empty($address) || !empty($buy) || !empty($type))
	{
    $host = "sql204.epizy.com";
    $dbUsername = "epiz_26831807";
    $dbPassword = "CHI6hAwLkvPK";
    $dbname = "epiz_26831807_Login";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
				or 
			die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   

    $INSERT = "INSERT Into info(name, age , gender, phone, email, address, buy, type)values('".$name."','".$age."','".$gender."','".$phone."','".$email."','".$address."','".$buy."','".$type."')";
	if(mysqli_query($conn,$INSERT))
	{
		echo  '<script type="text/javascript"> alert("Your Order will be delivered soon on the provided address")
		window.history.go(-1);
		</script>';
		
		
    
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
     $conn->close();
    
} 
?>