<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styleforReg.css">

<script>
function Error(){
	document.getElementById("password").style.backgroundColor = 'red';
}
function popup() 
{
	document.body.style.backgroundColor = prompt('background color?', 'green');
    document.getElementById("submit").addEventListener("click", function() 
	{
		var pattern = new RegExp("(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\\S+$).{8,}");
		/*
		(?=.*[0-9]) цифра должна встречаться по крайней мере один раз
		(?=.*[a-z]) строчная буква должна встречаться по крайней мере один раз
        (?=.*[A-Z]) заглавная буква должна встречаться по крайней мере один раз
        (?=.*[@#$%^&+=]) специальный символ должен встречаться по крайней мере один раз
        (?=\\S+$) нет whitespace разрешено во всей строке
        .{8,} не менее 8 символов
		*/
		//password "aaZZa44@";
		let form = document.forms.myform; 
        let elem = form.elements.login; 
		let elem2 = form.elements.password; 
        var passresult = elem2.value.match(pattern);
		if(passresult==elem2.value && elem.value!="" )
		{
			SessionStorage.setItem('login', elem.value);
			SessionStorage.setItem('password', elem2.value);
			//localStorage.setItem('who', output);
            let log = SessionStorage.getItem('login');
			let pass = SessionStorage.getItem('password');
	        alert("Your login is " +log);
			alert("Your password " +pass);
			window.open("actionOnReg.php");
		}
		if(passresult!=elem2.value && elem.value!="" ){
			alert("Password should be with at least 1 number, at least 1 letter small and big, with at least 1 special symbol @#$%^&, with no whitespaces, with at least 8 symbols");
			Error();
		}
	});
}	
</script> 
</head>
<body onload="popup()"> 
    <div class="line"></div>
    <div class="block1"></div>
    <div class="block2" id="SiteNameBackgr">	    
    	<a href="index.html" id="SiteName">Hudojniki<img src="https://img.icons8.com/wired/64/000000/paint-brush.png"></a>
    </div>
    <div class="block3"></div>
	<div class="line"></div>
<!-- 	
	<form name="who">
		<label for="login">Who are you?</label>
		<input type="radio" name="who" value="artist">Artist
		<input type="radio" name="who" value="guest">Guest
	</form> -->
	
    <form name="myform" class="login" method="post" action=""> <!--forms[0]-->
	    <h1>Registration</h1>
		<label for="isartist">Are you artist?</label>
		<input type="checkbox" name="isartist" >Artist 
	    <label for="login">Input email</label>
		<input type="text" id="login" name="login" required/>
		<label for="contry">Input contry</label>
		<input type="text" id="contry" name="contry" required/>
		<label for="nickname">Input nickname</label>
    	<input type="text" id="nickname" name="nickname" required/>
    	<label for="password" >Input password</label>
		<input type="password" id="password" name="password"
		minlength="8" 
		size="8" required/>
		<label for="verpassword" >Repeat password</label>
		<input type="password" name="verpassword"
		minlength="8" 
		size="8" required/>
		<select name ="tools">
		        <option value="oils">oils</option>
		        <option value="watercolor">watercolor</option>
		        <option value="pencil">pencil</option>
		        <option value="gouashe">gouashe</option>
		        <option value="acrilics">acrilics</option>
		        <option value="other">other</option>
        </select>
    	<input id="submit" type="submit" value="Submit" onclick=""/> 
	</form>
	<?php

// 	$pass = 'kekKEK123@';
// 	$email ='marinapelina@gmail.com';
// $name = $conn->query("SELECT NICK FROM account WHERE EMAIL = '$email' AND PASS = '$pass'");
// $tempname = $name->fetch_assoc();

// setcookie("Login", $email, time()+3600, "/");
// setcookie("Pass", $pass, time()+3600, "/");
// setcookie("Nick", $tempname, time()+3600, "/");
// 	?>

	
		
    <p id="demo"></p>
</body >
</html>
	<!--
			<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false">
<div id ="infbox"></div>
	</div>
			<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false">
	</div>
	
// showPrompt("Введите что-нибудь<br>...умное :)", function(value) 
// { alert(value); });
//     let fieldset = form.elements.userFields;
//     alert(fieldset); // HTMLFieldSetElement
// // мы можем достать элемент по имени как из формы, так и из fieldset с ним
//     alert(fieldset.elements.login == form.elements.login); // true


// function endform(){
// 	let form = document.createElement('form');
//     form.action = 'https://google.com/search';
//     form.method = 'GET';
//     form.innerHTML = '<input name="q" value="test">';
//     // перед отправкой формы, её нужно вставить в документ
//     document.body.append(form);
//     form.submit();
// }


			//document.body.classList.add('block2');


		// 	let script = document.createElement('script');

// // мы можем загрузить любой скрипт с любого домена
// script.src = "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.3.0/lodash.js"
// document.head.append(script);
// 	script.onload = function() {
//   // в скрипте создаётся вспомогательная функция с именем "_"
//     alert(_); // функция доступна
//     };
	//document.head.append(script);
	//new window.create('W');

	<button id="myBtn">Try it</button>
		
		<a href="#" class="btn btn-default like-button" role="button">
	(<span class="like_counter">4</span>)
	Like
	<span class="glyphicon glyphicon-thumbs-up" aria hidden="true"></span></a>	
		<form name="my"><--forms[1]->
		<input name="one" value="1"> 
		<input name="two" value="2"> 
	</form> 
		<form id="robby"><--forms[2]->
		<input type="button" onclick="alert(document.forms[2].id);" value="robby's form" />
	  </form>
	  
	  <form id="dave"><--forms[3]->
		<input type="button" onclick="alert(document.forms[3].id);" value="dave's form" />
	  </form>
	  
	  <form id="paul"><--forms[4]->
		<input type="button" onclick="alert(document.forms[4].id);" value="paul's form" />
	  </form>
	  <form id="f5" ><--forms[5]->
		<input type="radio" name="age" value="10">
		<input type="radio" name="age" value="20">
	  </form>
	  <form id="form">
		<fieldset name="userFields">
		  <legend>info</legend>
		  <input name="login" type="text">
		</fieldset> 
	// 	let form = document.forms.f5;

//     let ageElems = form.elements.age;

//     //alert(ageElems[0]); // [object HTMLInputElement]
	
// 	//document.getElementById('infbox').innerHTML += ageElems[0];
//     $(function (){
// 		$(".like-button".click(function(){
// 			var like_counter = $(".like-counter");
// 			var likes=parseInt(like-counter.text());
// 			if ($(this).hasClass('liked')){
// 				like_counter.text(likes-1);
// 			}
// 			else{
// 				like_counter.text(likes+1);
// 			}
// 			$(this).toggleClass('liked')
// 		}));

// 	});
	// получаем форму
	// let form = document.forms.my; // <form name="my"> element
	// // получаем элемент
	// let elem = form.elements.one; // <input name="one"> element
	// alert(elem.value); // 1
			// document.getElementById("myBtn").addEventListener("click", function() 
		// {
 	    // document.getElementById('infbox').innerHTML += "Helo World";
		// });
		
// 	 alert(form.elements.login); // <input name="login">

// 	$(function (){
// 		myStorage = window.localStorage;
// 		localStorage.setItem(login, password);
// 		//let tom = localStorage.getItem('Tom');
// 		let log = localStorage.getItem(login);
// 		let pass = localStorage.getItem(password);
		
// 		//alert(tom);
// 		alert(log);
// 		alert(pass);
		
// 		//delete
// 		localStorage.removeItem(password); // вернёт undefined
// 		alert(log);
// 		alert(pass);

// 		//delete all
// 		localStorage.clear();
// 		alert(log);
		

// 	});
	
	
	
	
	
	
	
	

