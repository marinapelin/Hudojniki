<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<meta charset=utf-8 />
<meta name="author" content="Marina Pelina" />
<meta name="keywords" content="marinapelina, art, design, oil painting"/>
<meta name="description" content="A website for an artist MarinaPelina. Displays intro, shows catalog of paintings, and ended with YouTube-related videos." />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="https://img.icons8.com/wired/64/000000/paint-brush.png"/>

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
		width: 43%;
		display: inline-block;
		
		margin-left: 30px;
		
		
		height: 120px;  
		background-size: contain;
		
	}
	.block3{
		width: 40%;
		display: inline-block;
		align-items: stretch;
		margin-top: 15px;
		height: 200px;  
		background-size: contain;
		background: url("birdscolor.jpg") center;
		background-size: cover;

		/* background: lightblue url("birdscolor.jpg") no-repeat  center; fixed */
	}
</style>


</head>
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
function fsetcookie(){
	echo 'HI';
	setcookie("id=x");
}

</script>
<body > <!--background="backgr.jpg"-->
     <div class="background-img">
	 
        <div class="line"></div><!--END LINE-->
        <div class="hat" >
        	<div class="horizontal" >
        		<div class="buttons" >
        	    <div id="SiteNameBackgr"><a href="javascript:alert('Hello World!');" id="SiteName">Hudojniki<img src="https://img.icons8.com/wired/64/000000/paint-brush.png"></a></div>
        		<div id="menu" >
        			<ul>
        			<li ><a href="index.php" id="m1">Home</a></li>
        			</ul>
        		</div>
        		<div id="menu" >
        			<ul>
        			<li ><a href="htmldovidka/index.htm" target=”_blank” id="m1">Settings</a></li>
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
					//echo '       Успешно соединились!!!';
				}
					echo('
					
					  			
					<div class="block2">
					<div id="header_top" class="flexbox"  style="padding-left: 40px;">
					<a href="#" class="smp">
						 Sort Art
						 <form name="search" method="post"  action="actionOnGallerySearch.php">
						 
							 <select name ="tools">
								 <option value="tools">tools</option>
								 <option value="oils">oils</option>
								 <option value="watercolor">watercolor</option>
								 <option value="pencil">pencil</option>
								 <option value="gouashe">gouashe</option>
								 <option value="acrilics">acrilics</option>
								 <option value="other">other</option>
							 </select><a href=""><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
							 <!--select name ="classification">
								 <option value="all">all</option>
								 <option value="history">History Painting</option>
								 <option value="portrait">Portrait Art</option>
								 <option value="genre">Genre Painting(scenes of everyday life)</option>
								 <option value="landscape">Landscape Painting</option>
								 <option value="still">Still Life Painting</option>
								 <option value="other">other</option>
							 </select-->
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
							 </select><a href=""><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
							 <input type="search" placeholder="Search painting or artist" name="words" >
							 <a href=""><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
							 
							 <input type="submit"  value="search" onclick="showPrompt()">
						 </form>
					 </a>
				 </div>
					</div>

					<div class="block1" id="block1">
					
					       
					        <label for="favcolor"><p>Select desired color:</p></label>
					        	<input type="color" id="favcolor" name="favcolor" value="#ff0000">
					</div>
					<div class="block1" id="block4">
					       
					    	
						
				    </div>
					<div class="block3">
					    <!--img style="width: 500px; padding-left: 50px; padding-top: 30px;" src="birdscolor.jpg"-->
					</div>
					');
				
				$selectall="SELECT * FROM `account` WHERE `IS_ARTIST`=1";
				$allguys=$conn->query($selectall);
				$result=$allguys->fetch_assoc();
				echo('<div class="blocking">');
				do{
		// 			echo('
		// 			<ul>
		// 			<li><a href="?link=1" name="link1">link 1</a></li>
		// 			<li><a href="?link=2" name="link2">link 2</a></li>
		// 			<li><a href="?link=3" name="link3">link 3</a></li>
		// 			<li><a href="?link=4" name="link4">link 4</a></li>    
		// 		</ul>
	
		//    <div id="mainSection">');
				
			// $link=$_GET['link'];
			// if ($link == '1'){
			// 	 include 'pageDifProfile.php';
			// }
			// if ($link == '2'){
			// 	include 'pageDifProfile.php';
			// }
			// if ($link == '3'){
			// 	include 'pageDifProfile.php';
			// }
			// if ($link == '4'){
			// 	include 'pageDifProfile.php';
			// }</div>
			echo('
					<div class="blockeach">
						<img class="roundicon" src="');echo($result['PROFPIC_URL']); $id = $result['ID']; echo('"></img>
						<div class="textblock">
						    <p><a name="info" href="pageDifProfile.php" onClick="fsetcookie()"> '); // 
							echo($result['NICK']);
							// if(isset($_GET['ISCLICKED'])) {
							// 	$id = $result['ID'];
							//     setcookie("id", $id, time()+3600, "/");
							// }
						
							echo(' ');
							echo($result['BPLACE']);
							echo(' ');
							//echo($result['DATE']);
							//echo(' ');
							//echo($result['DESCRIPTION']);
							echo('</a></p>
						</div>
					</div>
			    ');
				}while($result=$allguys->fetch_assoc())
				?>	
                </div></div><!--END WRAP--><!--END BLOCK-->
				<div class="line"></div>
			</div><!--END WRAP-->
			<div id="wrap2">
            <div class="line"></div>
            <div id="cop">
            	<p style="font-size: 14pt; font-family: monospace; color:#cd66cc">All rights reserved. Design by <a href="#" target="blank">Marina Pelin</a></p>
            	<address style="text-align: center; font-size: 20pt; font-family: monospace; color:#f1c5f1"> city Dnipro, Ukraine. 2021</address> 
            	<p style="font-size: 20pt; font-family: monospace; color:#cd66cc">Used materials</p>
            	<a href='https://www.freepik.com/vectors/school'>School vector created by pch.vector - www.freepik.com</a>
            </div><!--END COP--> 	
        </div><!--END WRAP2-->
    </div><!--END BACKGROUND-->
</body>
</html>