7	<?php
	$db='mainbd';
    $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	if(! $conn ) die('Could not connect: ' . mysql_error());
	if($conn) echo 'Успешно соединились!!!';
	$nick = $_POST['nic'];
	$desc = $_POST['desc'];
	$pic = $_POST['pic'];
	

	$login=htmlspecialchars($_COOKIE['Login']);
	$pass=htmlspecialchars($_COOKIE['Pass']);
	$checkEmailQuery= $conn->query("SELECT ID
	    FROM account
		WHERE EMAIL= '$login' AND PASS= '$pass'");

	if($checkEmailQuery){
		echo'Вы найдены';
		
		$updateAcc=null;
		
	    if($nick!=null && $desc!=null && $pic!=null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET  `DESCRIPTION`= '$desc', `PROFPIC_URL`='$pic', `NICK`='$nick'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");
    
    
	    }else if($nick!=null && $desc==null && $pic==null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET   `NICK`='$nick'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");
    
    
	    }else if($nick==null && $desc!=null && $pic==null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET  `DESCRIPTION`= '$desc'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");
    
    
	    }else if($nick==null && $desc==null && $pic!=null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET   `PROFPIC_URL`='$pic'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");
    
	    }else if($nick==null && $desc!=null && $pic!=null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET   `DESCRIPTION`= '$desc', `PROFPIC_URL`='$pic'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");
    
	    }else if($nick!=null && $desc==null && $pic!=null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET   `PROFPIC_URL`='$pic', `NICK`='$nick'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");

	    }else if($nick!=null && $desc!=null && $pic==null){
	    	$updateAcc=$conn->query("UPDATE `account` 
	    	SET  `DESCRIPTION`= '$desc', `NICK`='$nick'
	    	WHERE `EMAIL`= '$login' AND PASS= '$pass'");
    
	    }else if($nick==null && $desc==null && $pic==null){
	    	header('Location: '.$uri.'/test.loc/pageProfile.php');
    
	    }
		
		if($updateAcc){
			echo "yeeeeeeeeeeeees";
	        header('Location: '.$uri.'/test.loc/pageProfile.php');// перекидывает на этот адрес
		}
	}else{
		echo "Not found email";
	}

	
	
	


	// $sql = "INSERT INTO `account` ( `NICK`, 'DESCRIPTION', 'PROFPIC_URL') VALUES 
	//  ('$nick', '$desc', '$pic')";

    // if ($conn->query($sql) === TRUE) {
	// 	echo "New record created successfully";
	// 	setcookie("Description", $desc, time()+3600, "/");
	// 	setcookie("Pic_url", $pic, time()+3600, "/");
	// 	setcookie("Nick", $nick, time()+3600, "/");
	//     header('Location: '.$uri.'/test.loc/pagePrifile.php');// перекидывает на этот адрес
		
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
	// }
	

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
