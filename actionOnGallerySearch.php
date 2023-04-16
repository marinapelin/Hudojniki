	
<style>
	.greentext{
		color: #66Bfb7;
        text-decoration: none;
		text-align: center;
        font-size: 36px;
		
	}
	#wrap{
		height: 1100px;
		background: LightBlue;
	}
	
	.roundicon{
		height: 100px;
		border-radius: 80%;
		width: 100px;
		padding: 20px;
	}
	p{
		text-align: center;
		padding-top: 70px;
		
		font-size: 10pt;
		font-family: monospace;
		color:#cd66cc;
	}
	.blocking{
		display: flex;
        align-items: stretch;
		flex-wrap: wrap;
		min-height: 400px;
		min-width: 800px;
		background: LightYellow;
	}
	.blockeach{
        align-items: stretch;
		margin-top: 50px;
		margin-left: 40px;
		flex-wrap: wrap;
		min-height: 100px;
		min-width: 200px;
		
	}
	.textblock{
		display: flex;
		align-items: stretch;
		width: 130px;
		
	}
	
	.block1{
		display: none;
		width:15%;
		align-items: stretch;
		height: 300px;  
		background-size: contain;
		
		
	}
	
	.block2{
		width: 53%;
		display: inline-block;
		border-radius: 2px;
		margin-left: 40px;
		
		border: solid green;
		height: 300px;  
		background-size: contain;
		background: LightPink;
	}
	.block3{
		width: 40%;
		display: inline-block;
		align-items: stretch;
		height: 200px;  
		background-size: contain;
		background: url("birdscolor.jpg") center;
		background-size: cover;

		/* background: lightblue url("birdscolor.jpg") no-repeat  center; fixed */
	}
</style>
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
	
	$tools = $_POST['tools'];
	$words = $_POST['words'];
	$genre = $_POST['genre'];
	$ispic=true;

	$check=null;
	$check2=null;

	if($tools!='tools' && $words!=null && $genre!='genre'){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE TOOLS= '$tools' AND GENRE= '$genre' AND NAME='$words'");

        $check2= $conn->query("SELECT PROFPIC_URL, NICK, BPLACE FROM account
        WHERE NICK='$words'");

	}else if( $words!=null && $genre!='genre'){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE GENRE= '$genre' AND NAME='$words'");

        $check2= $conn->query("SELECT PROFPIC_URL, NICK, BPLACE FROM account
        WHERE NICK='$words'");


	}else if( $genre!='genre'){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE GENRE= '$genre' ");

	}else if( $words!=null){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE NAME='$words'");
		
		$check2= $conn->query("SELECT PROFPIC_URL, NICK, BPLACE FROM account
		WHERE NICK='$words'");
		

	}else if($tools!='tools'){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE TOOLS= '$tools'");

	}else if($tools!='tools' && $words!=null){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE TOOLS= '$tools' AND NAME='$words'");

        $check2= $conn->query("SELECT PROFPIC_URL, NICK, BPLACE FROM account
        WHERE NICK='$words'");
        

	}else if($tools!='tools' && $genre!='genre'){
		$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE TOOLS= '$tools' AND GENRE= '$genre'");

	}
	//error_reporting(E_ERROR | E_PARSE);

	
	if($check || $check2 || $check && $check2){
		echo'Gallery is found!';
		$chosen=null;
		$chosen2=null;
		if($check) {
			$chosen = $check->fetch_assoc();
		}
		
		if($check2) {
			$chosen2 = $check2->fetch_assoc();
		}
		
		
			
			//header('Location: '.$uri.'/test.loc/indexGallery.php');
			echo('<!DOCTYPE html>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<head>
			<meta charset=utf-8 />
			<meta name="author" content="Marina Pelina" />
			<meta name="keywords" content="marina, art, design, oil painting"/>
			<meta name="description" content="A website for an art lovers. Displays intro, shows catalog of paintings, and ended with YouTube-related videos." />
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="shortcut icon" href="https://img.icons8.com/wired/64/000000/paint-brush.png"/>
			</head>
			<body > <!--background="backgr.jpg"-->
				 <div class="background-img">
				
					<div class="line"></div><!--END LINE-->
					<div class="hat" >
						<div class="horizontal" >
							<div class="buttons" >
							<div id="SiteNameBackgr"><a href="MyQuestions.html" id="SiteName">Hudojniki<img src="https://img.icons8.com/wired/64/000000/paint-brush.png"></a></div>
							<div id="menu" >
								<ul>
								<li ><a href="index.php" id="m1">Home</a></li>
								</ul>
							</div>
							<div id="menu" >
								<ul>
								<li ><a href="MyQuestions.html" id="m1">Settings</a></li>
								</ul>
							</div>
							<div id="menu" >
								<ul>
								<li ><a href="pageSignin.php" id="m1">Log in</a></li>
								</ul>
							</div>
								</div>
						</div>
					</div>
					<div class="line"></div>
					<div id="wrap2">
						
						
						<!-- <button class="btn" id="back">Back</button>
						<button class="btn" id="next" >Next</button> -->
						<div id="wrap">
							<div class="line"></div>
				
								<div id="header_top" class="flexbox"  style="padding-left: 40px;">
								   <a href="#" class="smp">
										Sort Art
										<form name="search" method="post" action="actionOnGallerySearch.php">
											<select name ="tools">
												<option value="tools">tools</option>
												<option value="oils">oils</option>
												<option value="watercolor">watercolor</option>
												<option value="pencil">pencil</option>
												<option value="gouashe">gouashe</option>
												<option value="acrilics">acrilics</option>
												<option value="other">other</option>
											</select>
										
											<select name ="genre">
												<option value="genre">genre</option>
												<option value="renaissance">THE RENAISSANCE</option>
												<option value="rococo">ROCOCO</option>
												<option value="romanticism">ROMANTICISM</option>
												<option value="impressionism">IMPRESSIONISM</option>
												<option value="expressionism">EXPRESSIONISM</option>
												<option value="surrealism">SURREALISM</option>
												<option value="abstract">ABSTRACT</option>
												<option value="bauhaus">BAUHAUS</option>
												<option value="pop">POP ART</option>
												<option value="realism">REALISM</option>
												<option value="modern">MODERN ART</option>
												<option value="other">other</option>
											</select>
											<input type="search" placeholder="Search painting or artist" name="words" >
							 
											<input type="submit" value="search" onclick="showPrompt()">
										</form>
									</a>
								</div>
								<div class="blocking">
								');
								//echo($chosen['NAME']);
								if($chosen || $chosen2){
								if($chosen){
									do{
										echo('
										<div class="blockeach">
											<a href="pagePicProfile.php">
											<img height="300px" src="');echo($chosen['IMG']);echo('"/></a></td>
											 <div id="header_top" class="textblock">
												 <a href="#" class="smp">');
												echo($chosen['NAME']);
												echo('</a>
											  </div><p>');
												// echo($result['BPLACE']);
												// echo('<br>');
												// echo($result['DATE']);
												echo('</p>
												<em style="font-size: 120%; font-family: monospace; color:#580957">');
												// echo($result['DESCRIPTION']);
												echo('</em></td>
										
										</div>
									');
									}while($chosen=$check->fetch_assoc());

								}else if($chosen2){
									
									do{
										echo('
											<div class="blockeach">
												<img class="roundicon" src="');echo($chosen2['PROFPIC_URL']);echo('"></img>
												<div class="textblock">
													<p><a name="info" href="pageDifProfile.php" onClick="fsetcookie()"> '); // 
													echo($chosen2['NICK']);
													
													echo(' ');
													echo($chosen2['BPLACE']);
													echo(' ');
													
													echo('</a></p>
												</div>
											</div>
										');
										}while($chosen2=$check2->fetch_assoc());
						
								}
							}
								
							echo('
							</div> <!--END Blocking-->
						</div><!--END WRAP-->
						<div class="line"></div>
						<div id="cop">
						   <p style="font-size: 14pt; font-family: monospace; color:#cd66cc">All rights reserved. Design by <a href="#" target="blank">Marina Pelin</a></p>
						   <address style="text-align: center; font-size: 20pt; font-family: monospace; color:#f1c5f1"> city Dnipro, Ukraine. 2021</address> 
						   <p style="font-size: 20pt; font-family: monospace; color:#cd66cc">Used materials</p>
						  
						</div><!--END COP--> 	
					</div><!--END WRAP2-->
				</div><!--END BACKGROUND-->
			</body>
			</html>');
		
	}else{
		header('Location: '.$uri.'/test.loc/index.php');
	}
	




	mysqli_close($conn);
?>

