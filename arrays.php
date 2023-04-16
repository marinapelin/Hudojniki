<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<meta charset=utf-8 />
</head>
<body > 
	<div class="block1"></div>
	<div class="block2">
	<?php
	//$server=1;
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

	$sql = "INSERT INTO `account` (`ID`, `IS_ARTIST`, `EMAIL`,
	 `PASS`, `NICK`, `BPLACE`, `DATE`, `LIKES`, `TOOLS`) VALUES 
	 (NULL, '1', 'mmmmm@gmail.com', 'asdasAAAAA123', 'fssik', 'USA',
	  current_timestamp(), '0', 'oils')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$pass = 'kekKEK123@';
	$email ='marinapelina@gmail.com';
	$name = $conn->query("SELECT NICK FROM account WHERE EMAIL = '$email' AND PASS = '$pass'");
	$tempname = $name->fetch_assoc();
	setcookie("Login", $email, time()+3600, "/");
	setcookie("Pass", $pass, time()+3600, "/");
	setcookie("Nick", $tempname['account'], time()+3600, "/");

	//header('Location: '.$uri.'/test.loc/index.html'); перекидывает на этот адрес








	
    
	mysqli_close($conn);

?>

</body>
</html>

<!-- 
// 	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('html', 'css', 'html5css@example.com')";
<script>
// function GoToReg()
// {
// 	window.open("pageRegistration.php")
// }
// function popup() 
// {
//     document.getElementById('infbox').innerHTML = 'Добро пожаловать: ';
//     let log = localStorage.getItem("login");
//     document.getElementById('login').value=log;
// }
</script>
	//$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
	// $options = [
	// 	'cost' => 12,
	// ];
	// $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	// if (password_verify($_POST['verifypassword'], $hash)) {
	// 	echo 'Пароль правильный!';
	// } else {
	// 	echo 'Пароль неправильный.';
	// }
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
	// $pattern_name = '/\w{3,}/'; //все буквенно и цифровые символы
	// $pattern_mail = '/\w+@\w+\.\w+/'; //все буквенно-цифровые, @ все буквенно-цифровые, экранировать метасимвол как обычный символ
	// $pattern_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'; //   
	// if (preg_match($pattern_name, $_POST['name'])
	// &&
	//  preg_match($pattern_mail, $_POST['login']) 
	//  &&
	//  preg_match($pattern_password, $_POST['password'])
	//  ) {
	// 		echo "correct data";
    //          # тут происходит, к примеру, регистрация нового пользователя, отправка ему письма, и внесение в базу данных 
	// 	}
	


	// $a=array();
    // $a[1]="січень";
	// $a[2]="лютий";
	// $input = array(12, 10, 9);
	// $result = array_pad($input, 12, 0);
	// print("<br>1. Функция array_pad<br><br>");
	// foreach($result as $r){
	// 	echo $r . "\n";
	// }
	// print("<br><br>2. Функция array_count_values !=0 ( тоді напише лютий)</br>");
	// if(array_count_values ($a)!=0){
	// 	print($a[2]);
	// }
	// $ar1 = array(10, 110, 100, 0);
	// $ar2 = array(1, 3, 2, 4);
	// print("<br><br>3. Функция array_multisort. Дано два масива:<br><br>");
	// foreach($ar1 as $r){
	// 	echo $r . "\n";
	// }
	// print("<br>");
    // foreach($ar2 as $r){
	// 	echo $r . "\n";
	// }
	// print("<br>Після сортування за першим масивом:<br><br>");
	// array_multisort($ar1, $ar2);
    // foreach($ar1 as $r){
	// 	echo $r . "\n";
	// }
	// print("<br>");
    // foreach($ar2 as $r){
	// 	echo $r . "\n";
	// }
	// print("<br><br>4. Функция in_array</br>");
	// print("<br>Перевірка в масиві группі імені 'марина'</br>");
	// $names = array("ален", "марина","лена", "света");
	// //array_keys()
	// if(in_array("марина",$names)){
	// print("<br>присутствует<br>");
	// }else{
	// 	print("<br>не присутствует<br>");
	// }
	// print("<br>5. Функция array_keys</br>");
	// $array = array(0 => 100, "color" => "red");
    // var_dump($array);
	// print("<br>Ключи: число 0 и color. <br>");
	// print_r(array_keys($array));
	// print("<br><br>Полезно если совпадают значения. Например ключи со значением blue:<br><br>");
	// $array = array("blue", "red", "green", "blue", "blue");
	// foreach($array as $r){
	// 	echo $r . "\n";
	// }
	// print("<br>");
	// print_r(array_keys($array, "blue"));

 -->


<!-- 
		<form class="login" method="POST">
		<label for="login">Input name</label>
		<input type="text" id="login" name="login" />
		<label for="password">Input password</label>
		<input type="password" id="password" name="password" /> 
		<input type="submit" value="Submit" />
		</form> -->
		<!-- <form action="action.php" method="post">
			<p>Ваше имя: <input type="text" name="name" /></p>
			<p>Ваш возраст: <input type="text" name="age" /></p>
			<p>Ваш email: <input type="text" id="login" name="login" required/>
			<p>Ваш пароль: <input type="password" name="password" /></p>
			<p>Повторите пароль: <input type="password" name="verifypassword" /></p>

			<p><input type="submit" /></p>
		</form>
	</div>
	<div class="block3"></div> -->

<!-- <style>
	body{
	    background-color: #026873;
        background-image: linear-gradient(90deg, rgba(255,255,255,.07) 50%, transparent 50%),
        linear-gradient(90deg, rgba(255,255,255,.13) 50%, transparent 50%),
        linear-gradient(90deg, transparent 50%, rgba(255,255,255,.17) 50%),
        linear-gradient(90deg, transparent 50%, rgba(255,255,255,.19) 50%);
        background-size: 13px, 29px, 37px, 53px;}
	div{
		display: inline-block;
		border-radius: 2px;
		border: solid black;
		margin-left: 20px;
		height: 1000px;  
		background-size: contain;
	}
	.block1{
		background-image: url(gifblink.gif);
		width:15%;
		margin-left: 10%;
	}
	.block2{
		background: white;
		width: 45%;
	}
	.block3{
		background-image: url(gifblink.gif);
		width: 15%;
	}

	form{
	    display: inline-block;
        width:250px;
        margin:50px auto;
        padding:15px 20px;
	    margin-left:34%;
        background:#f5f5f5; 
	    border-radius: 10px;
    }
    label{
        display:block;
    	margin-top:1em;
    	margin-bottom:0.5em;
    	}
    	
    label:first-child{
        margin-top:0;
    }
    input[type="text"],
    input[type="password"]{
        width:100%;
        border:1px solid #ccc;
    	padding:4px 5px;
    	background:white;
    	border-radius: 5px;
    	box-shadow:inset 0 4px 2px rgba(0, 0, 0, 0.2);
    	box-sizing:border-box;
    	}
    input[type="text"]:focus,
    input[type="password"]:focus{
        box-shadow:0 0 5px rgba(50, 200, 255, 0.5);
    	outline: none;
    	}
    input[type="submit"]{
        display:block;
    	margin-top:1em;
    	padding:5px 15px;
    	font-weight: bold;
    	color:#333;
    	background: white;
    	border: none;
    	border-radius: 12px; 
    	background-image: linear-gradient(to bottom, #fff, #ddd);
    	box-shadow:inset 0 1px 2px rgba(0, 0, 0, 0.3);
    	text-shadow:0 1px 1px white;
    	}	
</style> -->
<!-- 
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-( -->