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
		display: flex;
        align-items: stretch;
		
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
		width: 23%;
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

<script>
function toggle(source) {
  checkboxes = document.getElementsByName('genre');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
function myFunction() {
  var x = document.getElementById("block1");
  var y = document.getElementById("block4");

  if (x.style.display === "none" && y.style.display === "none") {
    x.style.display = "inline-block";
    y.style.display = "inline-block";
  } else {
    x.style.display = "none";
    y.style.display = "none";

  }
}
</script>
	
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
	//$classification = $_POST['classification'];
	$genre = $_POST['genre'];

	$check= $conn->query("SELECT IMG, NAME FROM painting
		WHERE TOOLS= '$tools' AND GENRE= '$genre'");
	if($check){
		echo'Gallery is found!';
		$chosen = $check->fetch_assoc();
		if($chosen['IMG']!="picture_emptyprofile.png"){
			echo "correct";
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
					<div class="wrap" id="wrap">
						
					
					<div class="block2">
					<div id="header_top" >
						<p class="greentext">
							Sort Art
							
							<button onclick="myFunction()">Extra criteria</button>
							
							<form name="search" method="post" action="actionOnGallerySearch.php">
								<label for="psearch"><p>Search painting:</p></label>
									<input type="search" id="psearch" >
									<input type="submit" value="search" onclick="showPrompt()">
							</form>
						</p>
					</div>
				</div>

				<div class="block1" id="block1">
						<label for="tools"><p>Choose tools:</p></label>
						<select name ="tools" multiple>
							<option value="all">all</option>
							<option value="oils">oils</option>
							<option value="watercolor">watercolor</option>
							<option value="pencil">pencil</option>
							<option value="gouashe">gouashe</option>
							<option value="acrilics">acrilics</option>
							<option value="other">other</option>
						</select>
						<label for="favcolor"><p>Select desired color:</p></label>
							<input type="color" id="favcolor" name="favcolor" value="#ff0000">
				</div>
				<div class="block1" id="block4">
					   
						<label for="genre"><p>Choose genre:</p></label>
							<div><input type="checkbox" name="genre" onClick="toggle(this)" value="all">all</div>
							<div><input type="checkbox" name="genre" value="renaissance">THE RENAISSANCE</div>
							<div><input type="checkbox" name="genre" value="rococo">ROCOCO</option></div>
							<div><input type="checkbox" name="genre" value="romanticism">ROMANTICISM</div>
							<div><input type="checkbox" name="genre" value="impressionism">IMPRESSIONISM</div>
							<div><input type="checkbox" name="genre" value="expressionism">EXPRESSIONISM</div>
							<div><input type="checkbox" name="genre" value="surrealism">SURREALISM</div>
							<div><input type="checkbox" name="genre" value="abstract">ABSTRACT</div>
							<div><input type="checkbox" name="genre" value="bauhaus">BAUHAUS</div>
							<div><input type="checkbox" name="genre" value="pop">POP ART</div>
							<div><input type="checkbox" name="genre" value="realism">REALISM</div>
							<div><input type="checkbox" name="genre" value="modern">MODERN ART</div>
							<div><input type="checkbox" name="genre" value="other">other</div>
					
				</div>
				<div class="block3">
					<!--img style="width: 500px; padding-left: 50px; padding-top: 30px;" src="birdscolor.jpg"-->
				</div>');
				echo('<div class="blocking">');
				if($chosen['IMG']!=NULL){
					do{
						echo('
						<div class="blockeach">
							<img class="roundicon" src="');echo($chosen['IMG']);echo('"></img>
							<div class="textblock">
								<p><a href="pageDifProfile.php"> ');
								echo($chosen['NAME']);
								echo(' ');
								echo('</a>
							</div>
						</div>
					');
					}while($chosen=$check->fetch_assoc());
				}
							
							echo('
						</div><!--END WRAP-->
						<div class="line"></div>
						<div id="cop">
							<p style="font-size: 14pt; font-family: monospace; color:#cd66cc">All rights reserved. Design by <a href="#" target="blank">Marina Pelin</a></p>
							<address style="font-size: 20pt; font-family: monospace; color:#f1c5f1"> city Dnipro, Ukraine. 2021</address> 
							<p style="font-size: 20pt; font-family: monospace; color:#cd66cc">Used materials</p>
							
						</div><!--END COP--> 	
					</div><!--END WRAP2-->
				</div><!--END BACKGROUND-->
			</body>
			</html>');
		}else {
			echo "oops";
			//header('Location: '.$uri.'/test.loc/pageProfile.php');// перекидывает на этот адрес
		}
	}else{
		echo "Not found email";
	}
	




	mysqli_close($conn);
?>

