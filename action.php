	<!-- Здравствуйте, <-?php echo htmlspecialchars($_POST['name']); ?>.
	Вам <!-?php echo (int)$_POST['age']; ?> лет. -->
	<?php
	// $name = $_POST['name'];
	// $login = $_POST['login'];
	// $pass =$_POST['password'];
	$server=1;
	$db='mainbd';
    $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	
	if(! $conn ) {
	   die('Could not connect: ' . mysql_error());
	} 
	echo 'Успешно соединились!!!';
	// $mname =mysqli_real_escape_string($name, '%_');
	// $mlogin =mysqli_real_escape_string($login, '%_');
	// $mpass =mysqli_real_escape_string( $pass, '%_');	
// $query = mysqli_query("INSERT INTO account (`ID`, `EMAIL`, `PASS`, `NICK`) VALUES
//        (NULL, 'ssdasd', 'sdssss', 'nvkjnv'), $conn);");
// if ($query) {
//     // Success!
// } else {
//     echo 'MySQL Error: ' . mysqli_error($conn); // this will tell you whats wrong
// }

//  $query = "INSERT INTO `account` (`ID`, `EMAIL`, `PASS`, `NICK`) VALUES
//        (NULL, '" . $mlogin . "', '" . $mpass . "', '" . $mname . "');";
// if ($insert = mysql_query($query, $conn)) {
//     // Success!
// } else {
//     echo 'MySQL Error: ' . mysql_error($conn); // this will tell you whats wrong
// }
//$conn->query("INSERT INTO account( EMAIL, PASS, NICK) VALUES ($login, $pass, $name)");
	//$insert = mysqli_query("INSERT INTO account( EMAIL, PASS, NICK) VALUES ($login, $pass, $name) ");
	//VALUES ($_POST['name'],$_POST['login'],$_POST['password'],$_POST['name'])
	//INSERT INTO `account` (`ID`, `EMAIL`, `PASS`, `NICK`) VALUES (NULL, "marinapelina@gmail.com", "kekKEK123@", "Marinccoon");
	
	// $insert = "INSERT INTO account( EMAIL, PASS, NICK) VALUES ($login, $pass, $name)";//
	// $insertresult = $conn->mysqli_query($insert);
	// // if($insertresult == $conn->mysqli_query($insert, $conn)){
	// // 	echo 'Yes';
	// // }else{
	// // 	echo "no";
	// // }
	$query2 = "INSERT INTO `account` (`ID`, `IS_ARTIST`, `EMAIL`, `PASS`, `NICK`, `BPLACE`, `DATE`, `LIKES`, `TOOLS`) VALUES (NULL, '0', 'kkkk@kkk', 'dfdfgdfg', 'ffffff', 'Ukraine', current_timestamp(), '0', 'oils');";
	mysql_query($query2, $conn);//$conn->


// 	$sql = "SELECT IS_ARTIST, EMAIL, PASS, NICK FROM account";//
// $result = $conn->mysqli_query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
	//$q = mysql_query ( "SELECT IS_ARTIST, EMAIL, PASS, NICK FROM account");
	
	//INSERT <account>(IS_ARTIST, EMAIL, PASS, NICK)
   // VALUES ($_POST['name'],$_POST['login'],$_POST['password'],$_POST['name'])
// 	$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Ошибка соединения: ' . mysql_error());
// }
// echo 'Успешно соединились';
    mysqli_close($conn);
	








	//$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
	$options = [
		'cost' => 12,
	];
	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	if (password_verify($_POST['verifypassword'], $hash)) {
		echo 'Пароль правильный!';
	} else {
		echo 'Пароль неправильный.';
	}
	// $hashed_password = crypt(()$_POST['password']);
	// printf($hashed_password);
	// if (hash_equals($hashed_password, crypt((string)$_POST['verifypassword'], $hashed_password))) {
	// 	echo "Пароль верен!";
	//  }
	
	//("(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\\S+$).{8,}");
		/*
		(?=.*[0-9]) цифра должна встречаться по крайней мере один раз
		(?=.*[a-z]) строчная буква должна встречаться по крайней мере один раз
        (?=.*[A-Z]) заглавная буква должна встречаться по крайней мере один раз
        (?=.*[@#$%^&+=]) специальный символ должен встречаться по крайней мере один раз
        (?=\\S+$) нет whitespace разрешено во всей строке
        .{8,} не менее 8 символов
		*/
		//password "aaZZa44@";
	$pattern_name = '/\w{3,}/'; //все буквенно и цифровые символы
	$pattern_mail = '/\w+@\w+\.\w+/'; //все буквенно-цифровые, @ все буквенно-цифровые, экранировать метасимвол как обычный символ
	$pattern_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'; //   
	if (preg_match($pattern_name, $_POST['name'])
	&&
	 preg_match($pattern_mail, $_POST['login']) 
	 &&
	 preg_match($pattern_password, $_POST['password'])
	 ) {
			echo "correct data";
             # тут происходит, к примеру, регистрация нового пользователя, отправка ему письма, и внесение в базу данных 
		}
	 ?>