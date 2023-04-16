<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<meta charset=utf-8 />
<meta name="author" content="Marina Pelina" />
<meta name="keywords" content="marincoon, art, design, oil painting"/>
<meta name="description" content="A website for an artist Marinccoon. Displays intro, shows catalog of paintings, and ended with YouTube-related videos." />
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
            <figure>
            	<img id="long" src="imgTiny.png">
            </figure>	
            <!-- <button class="btn" id="back">Back</button>
            <button class="btn" id="next" >Next</button> -->
            <div id="wrap">
				<div class="line"></div>
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
				$selectall="SELECT * FROM `account` WHERE `IS_ARTIST`=1";
				$allguys=$conn->query($selectall);
				$result=$allguys->fetch_assoc();
				do{
					echo('
				<table>
				    <tr>
						<td><a href="pageDifProfile.php">
						<img class="minilogo" src="');echo($result['PROFPIC_URL']);echo('"/></a></td>
						<td><div id="header_top">
						    <a href="#" class="smp">');
						    echo($result['NICK']);
							echo('</a></div><p>');
							echo($result['BPLACE']);
							echo('<br>');
							echo($result['DATE']);
							echo('</p>
							<em style="font-size: 120%; font-family: monospace; color:#580957">');
							echo($result['DESCRIPTION']);
							echo('</em></td>
				    </tr><div class="line"></div>
			    </table>');
				}while($result=$allguys->fetch_assoc())
				?>	
            	<!-- <table>
            		<tr>
            			<td><a href="pageDifProfile.php"><img class="minilogo" src="imgicon.jpg" alt="Marinccoon"/></a></td>
            			<td>
            				<p>About me:</p>
            				<em>Artist from school. Love to paint what I want. I am going to post procceses of art creation, tips, sketchbooks and vlogs. I am also a student, who is studying to be a programmer.</em>
            			</td>
            		</tr><div class="line"></div>
            	</table>	
            	<table>
            		<tr>
            			<td><a href="pageDifProfile.php"><img class="minilogo" src="imgTinyartists.jpg" alt="Marinccoon"/></a></td>
            			<td>
            				<p>About me:</p>
            				<em>Artist from school. Love to paint what I want. I am going to post procceses of art creation, tips, sketchbooks and vlogs. I am also a student, who is studying to be a programmer.</em>
            			</td>
            		</tr><div class="line"></div>
            	</table> -->
            </div><!--END WRAP-->
            <div class="line"></div>
            <div id="cop">
            	<p style="font-size: 14pt; font-family: monospace; color:#cd66cc">All rights reserved. Design by <a href="#" target="blank">Marina Pelin</a></p>
            	<address style="font-size: 20pt; font-family: monospace; color:#f1c5f1"> city Dnipro, Ukraine. 2021</address> 
            	<p style="font-size: 20pt; font-family: monospace; color:#cd66cc">Used materials</p>
            	<a href='https://www.freepik.com/vectors/school'>School vector created by pch.vector - www.freepik.com</a>
            </div><!--END COP--> 	
        </div><!--END WRAP2-->
    </div><!--END BACKGROUND-->
</body>
</html>