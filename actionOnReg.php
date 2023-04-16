	<?php
	$db='mainbd';
    $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	if(! $conn ) {
	   die('Could not connect: ' . mysql_error());
	} 
	if($conn){
		echo 'Успешно соединились!!!';
	}
	$name = $_POST['nickname'];
	$is_artist = $_POST['isartist'];
	$email = $_POST['login'];
	$contry = $_POST['contry'];
	$pass =$_POST['password'];
	$verpass =$_POST['verpassword'];
	$tools =$_POST['tools'];

	$sql = "INSERT INTO `account` (`ID`, `IS_ARTIST`, `EMAIL`,
	 `PASS`, `NICK`, `BPLACE`, `DATE`, `LIKES`, `TOOLS`) VALUES 
	 (NULL, '$is_artist', '$email', '$pass', '$name', '$contry',
	  current_timestamp(), '0', '$tools')";

    if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		setcookie("Login", $email, time()+3600, "/");
		setcookie("Pass", $pass, time()+3600, "/");
		setcookie("Nick", $nick, time()+3600, "/");
		setcookie("IsArtist", $is_artist, time()+3600, "/");
	
	    header('Location: '.$uri.'/test.loc/pageSignin.php');// перекидывает на этот адрес
		
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
	}
	

	//setcookie("Access", $id, time()+3600, "/");





	//$pass = 'kekKEK123@';
	//$email ='marinapelina@gmail.com';
	








	
    
	mysqli_close($conn);
?>


<!-- 	

	
	// $prevCon="SELECT * FROM account";
	// $result = $conn->query($prevCon);
	// if(!$result) die("GG!");
// $gg = $result->num_rows +1;//?

// $checkEmailQuery= $conn->query(
// 	"SELECT COUNT(EMAIL) AS 'Exist'
// 	FROM account
// 	WHERE EMAIL= '$email'");
// $passValidate = preg_match("(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\\S+$).{8,}", $pass);
// $emailValidate = filter_var($email, FILTER_VALIDATE_EMAIL);
// $emailAgain = $checkEmailQuery->fetch_assoc()['Exist']==0;
// $passwordsAreEqual = $pass ==$verpass;
// echo $passwordsAreEqual;
// echo $passValidate;
// echo $emailAgain;
// echo $emailValidate;

// $Suc = $passValidate && $passwordsAreEqual && $emailValidate && $emailAgain; 

// if($Suc ==false){
// 	if(!empty($_SERVER['HTTPS'])&&('on' == $_SERVER['HTTPS'])){
// 		$uri = 'https://';
// 	}else{
// 		$uri = 'http://';
// 	}
// 	$uri .=$_SERVER['HTTP_HOST'];
// 	//header('Location: '.$uri.'/test.loc/Signin.html');
// 	exit;
// } -->
