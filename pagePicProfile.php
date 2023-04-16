<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<meta charset=utf-8 />
<meta name="author" content="Marina Pelina" />
<meta name="keywords" content="marina, art, design, oil painting"/>
<meta name="description" content="A website for an artist Marina. Displays intro, shows catalog of paintings, and ended with YouTube-related videos." />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="stylegallery.css">
<link rel="shortcut icon" href="https://img.icons8.com/wired/64/000000/paint-brush.png"/>
	
<style>
	.picwide{
		
	height: 600px;
	margin-right: 50px;
	}
	.blocking{
		display: flex;
        align-items: stretch;
		flex-wrap: wrap;
		min-height: 400px;
		min-width: 800px;

		margin-top: 50px;
		margin-left: 40px;
		
	}
	.blockeach{
        align-items: stretch;
		margin-top: 50px;
		margin-left: 40px;
		flex-wrap: wrap;
		min-height: 50px;
		min-width: 50px;
		width: 100%;
		height: 100%;
		
	}
	.textblock{
		display: flex;
		align-items: stretch;
		width: 130px;
		
	}
</style>
<?php
	// $db='mainbd';
    // $dbhost = 'localhost';
	// $dbuser = 'root';
	// $dbpass = '';
	// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	// if(! $conn ) {
	//    die('Could not connect: ' . mysql_error());
	// } 
	// if($conn){
	// 	echo 'Успешно соединились!!!';
	// }

// 	$artist=htmlspecialchars($_COOKIE['id']);

	
// 	$check= $conn->query("SELECT IMG, NAME FROM painting
// 		WHERE ARTIST= '$artist'");
// 	if($check){
// 		echo'Gallery is found!';
// 		$chosen = $check->fetch_assoc();
// 		if($chosen['IMG']!="picture_emptyprofile.png"){
// 	do{
// 		echo('
// 		<div>
// 			<a href="pagePicProfile.php">
// 			<img height="300px" src="');echo($chosen['IMG']);echo('"/></a></td>
// 			 <div id="header_top">
// 				 <a href="#" class="smp">');
// 				echo($chosen['NAME']);
// 				echo('</a></div><p>');
// 				// echo($result['BPLACE']);
// 				// echo('<br>');
// 				// echo($result['DATE']);
// 				echo('</p>
// 				<em style="font-size: 120%; font-family: monospace; color:#580957">');
// 				// echo($result['DESCRIPTION']);
// 				echo('</em></td>
		
// 		</div>
// 	');
// 	}while($chosen=$check->fetch_assoc());

// }}
// $selectall="SELECT * FROM `account` WHERE `IS_ARTIST`=1";
// $allguys=$conn->query($selectall);
// $result=$allguys->fetch_assoc();

		
// 	do{
// 		echo('
// 		<div>
// 			<a href="pagePicProfile.php">
// 			<img height="300px" src="');echo($chosen['IMG']);echo('"/></a></td>
// 			 <div id="header_top">
// 				 <a href="#" class="smp">');
// 				echo($chosen['NAME']);
// 				echo('</a></div><p>');
// 				// echo($result['BPLACE']);
// 				// echo('<br>');
// 				// echo($result['DATE']);
// 				echo('</p>
// 				<em style="font-size: 120%; font-family: monospace; color:#580957">');
// 				// echo($result['DESCRIPTION']);
// 				echo('</em></td>
		
// 		</div>
// 	');
// 	}while($chosen=$check->fetch_assoc());

// }}
// 	mysqli_close($conn);

?>
</head>
<body>
    <div class="background-img">
        <div class="line"></div><!--END LINE-->
       
        	<div class="horizontal" >
        		<div class="buttons" >
				    <div id="SiteNameBackgr"><a href="index.php" id="SiteName">Hudojniki</a>
			        </div>
					<div id="menu" >
        			<ul>
        			<li style="margin-left:100px"><a href="index.php" id="m1">Home</a></li>
        			</ul>
        		</div>
        		
        		<div id="menu" >
        			<ul>
        			<li ><a href="pageSignin.php" id="m1"> Yourname</a></li>
        			</ul>
        		</div>
        		</div>
        	</div>
        
        <div id="wrap">
        	<div class="line"></div><!--END LINE-->
        		<table width="100%" cellspacing="10" cellpadding="50">
        			<tr> 
        				<td>
        				    <div id="menu" style="margin-left:15px; text-align:center" >
        				    	<ul>
        				    	<li ><a onclick="history.back()" href="#" id="m1">Back</a></li>
								<li style="margin-top:25px;" ><a href="MyQuestions.html" id="m1">Add to &#x1F90D;</a></li>
        				    	<li style="margin-top:25px;"><a href="MyQuestions.html" id="m1">More similar</a></li>
        				    	<li style="margin-top:25px;"><a href="MyQuestions.html" id="m1">Buy &#128230;</a></li>
								<a href="pageDifProfile.php"><img style="margin-top:25px; margin-right: 10px;" class="minilogo" src="iconRaccoon.jpg"/></a>
								
        				    	</ul>
        				    </div><!--END MENU-->
        				    <div id="header_top">
        				    	<a href="#" class="smp">
									<div id="usednick" value="YourNick"></div>

										
								</a>
        				    </div><!--END HEADER_TOP-->				
        				    <div id="header_bot">	
        				    	<p>Online magazine "Hudojniki"</p>
        				    </div><!--END HEADER_bot-->
        			    </td>	
        		        <td width="40%" valign="top">
        		            <div>
								
								<img class="picwide" src="titanic.jpg" />
        	                        <div class="horizontal" >
        	                        </div>
								
        			            <div class="description">
        				            <p>About :</p>
        				            <em id="description" style="margin-left: 100px;">Work made by NAME is full of natural colors and bring all the sweet atmosphere to every lovely heart &#x2661; </em>
								
									   
        			            </div>
        		            </div>
        		        </td>
        		    </tr>
        	   </table>
        	
            <div class="line"></div>
            

			<div id="cop">
        		All rights reserved. Design by <a href="#" target="blank">Marina Pelin</a>
        	 <address> city Dnipro, Ukraine. 2021</address> 
        	
        </div><!--END WRAP2-->
	</div><!--END BACKGR-->
	
</body>
</html>