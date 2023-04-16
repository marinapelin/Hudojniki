<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styleforReg.css">

<script>
function GoToReg()
{
	window.open("pageRegistration.html")
}
</script> 
<script>
// function popup() 
// {
//     // document.getElementById("myBtn").addEventListener("click", function() {
// 	// 	document.getElementById('infbox').innerHTML += log + pass;
//     // });
//     document.getElementById('infbox').innerHTML = 'Добро пожаловать: ';
// // 	let givenlog=document.getElementById('login').value;
// // 	let givenpass =document.getElementById('password').value;
// // 	//$hash = password_hash(givenpass, PASSWORD_DEFAULT);
// // 	//$hashforlogin = password_hash(qivenlog, PASSWORD_DEFAULT);
			
// // 	let login = SessionStorage.getItem('login');//($hash)
// //     let pass = SessionStorage.getItem('password');//($hashforlogin)
// // //  document.getElementById('infbox').innerHTML += logindb;
// //     document.getElementById('login').value=login;
// //     document.getElementById('password').value=pass;
//     document.getElementById("submit").addEventListener("click", function() 
//     {
//     	// if(givenlog==login && givenpass==pass ){
//     	// 	alert("You're signed in");
//     	// 	window.open("pageProfile.html"); //, "resizable,scrollbars,status"
// 		// }
// 		if(!pass && !login){
// 			window.open("actionOnSignin.php"); 
// 		}
// 		else{
// 			document.getElementById('infbox').innerHTML = 'SOMETHING WRONG';
// 		alert("SOMETHING WRONG")
// 		}
//     });
//}
</script>
</head>
<?php 
error_reporting(E_ERROR | E_PARSE);
if($_COOKIE['Login']){
	echo htmlspecialchars($_COOKIE['Login']);
}else{
	error_reporting(E_ERROR | E_PARSE);
}
?>
<body onload="popup()"> 
	<div class="line"></div>
	<div class="block1"></div>
	<div class="block2" id="SiteNameBackgr">	    
		<a href="index.php" id="SiteName"  style=" margin-left: 35%">Hudojniki<img src="https://img.icons8.com/wired/64/000000/paint-brush.png"></a>
	</div>
	<div class="block3"></div>
	<div class="line"></div>
	<form name="myform" class="login" method="post" action="actionOnSignin.php">
		<label for="login">Input email</label>
		<input type="text" id="login" name="login" value="
		<?php echo htmlspecialchars($_COOKIE['Login'])?>" required/>
		<label for="password">Input password</label>
		<input type="password" id="password" name="password" value="
		<?php echo htmlspecialchars($_COOKIE['Pass'])?>" required/>
		<input id="submit" type="submit" value="Submit" onclick="showPrompt()" />
		<label for="registration">Not Registered yet?</label>
		<input id="regsubmit" type="submit" value="Go Register" onclick="GoToReg()"/> 
	</form>

	<div id="fb-root"></div>
	<div id ="infbox"></div>
	<p id="demo"></p>
</body >
</html>
