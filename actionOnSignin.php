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
	
	$email = $_POST['login'];
    $pass = $_POST['password'];
	$check= $conn->query("SELECT IS_ARTIST FROM account
		WHERE EMAIL= '$email' AND PASS= '$pass'");
	if($check){
		echo'Вы найдены';
		setcookie("Login", $email, time()+3600, "/");
		setcookie("Pass", $pass, time()+3600, "/");
		$is_artist = $check->fetch_assoc();
		//echo $is_artist['IS_ARTIST'];
		// /echo  $is_artist;
		// if($is_artist['IS_ARTIST']==-1){
		// 	echo "correct";
		// 	header('Location: '.$uri.'/test.loc/index.php');// перекидывает на этот адрес
		// }else 
		//if($is_artist['IS_ARTIST']!=0){
			header('Location: '.$uri.'/test.loc/pageProfile.php');// перекидывает на этот адрес
		//}
	}else{
		echo "Not found email";
	}
	

	// $name = $_POST['nickname'];
	// $email = $_POST['login'];
	// $contry = $_POST['contry'];
	// $pass =$_POST['password'];
	// $verpass =$_POST['verpassword'];
	// $tools =$_POST['tools'];
	// $sql = "INSERT INTO `account` (`ID`, `IS_ARTIST`, `EMAIL`,
	//  `PASS`, `NICK`, `BPLACE`, `DATE`, `LIKES`, `TOOLS`) VALUES 
	//  (NULL, '1', '$email', '$pass', '$name', '$contry',
	//   current_timestamp(), '0', '$tools')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
	// }
	// //$pass = 'kekKEK123@';
	// //$email ='marinapelina@gmail.com';
	// header('Location: '.$uri.'/test.loc/pageSignin.html');// перекидывает на этот адрес
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
