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
		width: 200px;
		
	}
	
	.large{

		height: 400px;
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
        <div class="hat" >
        	<div class="horizontal" >
        		<div class="buttons" >
        	    <div id="SiteNameBackgr"><a href="index.php" id="SiteName">Hudojniki<img src="https://img.icons8.com/wired/64/000000/paint-brush.png"></a></div>
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
        			<li ><a href="pageSignin.php" id="m1"> Yourname</a></li>
        			</ul>
        		</div>
        			</div>
        	</div>
        </div>
        <div class="line"></div><!--END LINE-->
        <div id="wrap">
        	<div class="line"></div><!--END LINE-->
        		<table width="100%" cellspacing="10" cellpadding="50">
        			<tr> 
        				<td>
        				    <div id="menu" >
        				    	<ul>
        				    	<li><a href="index.html" id="m1">Refresh</a></li>
        				    	<li><a href="MyQuestions.html" id="m1">My questions</a></li>
        				    	</ul>
        				    </div><!--END MENU-->
        				    <div id="header_top" style="margin-left:150px; text-align:center">
        				    	<a href="#" class="smp">
									
								ArtistName
								<br>Ukraine</br>

										
								</a>
        				    </div><!--END HEADER_TOP-->				
        				    <div id="header_bot" style="margin-left:15px;">	
        				    	<p>Online magazine "Hudojniki"</p>
        				    </div><!--END HEADER_bot-->
        			    </td>	
        		        <td width="40%" valign="top">
        		            <div>
							
        			            <img class="large" style="margin-right:100px; margin-top:15px;" id="profilepic" src="iconRaccoon.jpg" />
        			            <div class="description">
        				            <p>About me:</p>
        				            <em id="description">A learned person or Master of Arts.
One who pursues a practical science, traditionally medicine, astrology, alchemy, chemistry.
A follower of a pursuit in which skill comes by study or practice.
A follower of a manual art, such as a mechanic.
One who makes their craft a fine art.
One who cultivates one of the fine arts – traditionally the arts presided over by the muses.</em>
								
									   
        			            </div>
        		            </div>
        		        </td>
        		    </tr>
        	   </table>
        	
            <div class="line"></div>
            <p style="margin-left: 20px;">Paintings</p>
            <div class="line"></div>
			<!-- <div class="blocking">
			                    <div class="blockeach">
								    <a href="pagePicProfile.php">
									<img height="300px" src="ear.jpg"/></a></td>
									 <div id="header_top" class="textblock">
									 	<a href="#" class="smp">
										 PictureName
										</a></div>
										
								</div>
								<div class="blockeach">
								    <a href="pagePicProfile.php">
									<img height="300px" src="rays.jpg"/></a></td>
									 <div id="header_top" class="textblock">
									 	<a href="#" class="smp">
										 PictureName
										</a></div>
										
								</div><div class="blockeach">
								    <a href="pagePicProfile.php">
									<img height="300px" src="underwatergirl.jpg"/></a></td>
									 <div id="header_top" class="textblock">
									 	<a href="#" class="smp">
										 PictureName
										</a></div>
										
								</div><div class="blockeach">
								    <a href="pagePicProfile.php">
									<img height="300px" src="titanic.jpg"/></a></td>
									 <div id="header_top" class="textblock">
									 	<a href="#" class="smp">
										 PictureName
										</a></div>
									
								</div>
			</div>  style="margin-top='50px'; margin-left='40px'"-->
            <!-- <div class="gallery, blocking" >
            	<img src="ear.jpg" class="mini" alt="The ear" >
            	<img src="rays.jpg" class="mini" alt="Mobula rays" >
            	<img src="eye.jpg" class="mini" alt="The eye" >
            	<img src="bro.jpg" class="mini" alt="Brother Lord" >
            	<img src="rose.jpg" class="mini" alt="Roses" >
            	<img src="teapot.jpg" class="mini" alt="The teapot" >
            	<img src="underwatergirl.jpg" class="mini" alt="Roses" >
            	<img src="sharkclose.jpg" class="mini"  alt="Roses" >
            	<img src="titanic.jpg" class="mini"  alt="Roses" >
              </div> -->
			  <div class="blocking">
			    <div class="blockeach" >
			        <a href="pagePicProfile.php">
					    <img height="300px" src="ear.jpg"/>
					</a>
					<div id="header_top" class="textblock" >
						<a href="#" class="smp" style="font-size: 19px; font-weight: bold;">
						Ear
						</a>
					</div>
				</div>
				<div class="blockeach" >
			        <a href="pagePicProfile.php">
					    <img height="300px" src="rays.jpg"/>
					</a>
					<div id="header_top" class="textblock" >
						<a href="#" class="smp" style="font-size: 19px; font-weight: bold;">
						Rays
						</a>
					</div>
				</div>
				<div class="blockeach" >
			        <a href="pagePicProfile.php">
					    <img height="300px" src="eye.jpg"/>
					</a>
					<div id="header_top" class="textblock" >
						<a href="#" class="smp" style="font-size: 19px; font-weight: bold;">
						Eye
						</a>
					</div>
				</div>
			</div>
			
										
            <!-- <marquee>
                <div class="line"></div><--END LINE->
            	<div id="wormstoo"><img class="gifsize" src="weirdworm.gif" alt=""></div>
            </marquee>
        	<marquee>
        		<div id="worms" ><img class="gifsize" src="worm.gif" alt=""></div>
            </marquee>
        	<table>
        		<tr>
        			<td><img class="medium" height="600px" src="How.png" /></td>
        			<td><img class="medium" src="summer.jpg" /></td>
        		</tr>
        	</table>	 -->
			<div class="blockeach">
        	<iframe width="content" src="https://www.youtube.com/embed/7j5Z8ThUOmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        	<iframe width="content" src="https://www.youtube.com/embed/lnIWV_GxLb8?start=6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        	</div>
			<div class="blockeach">
        		<a href="https://www.youtube.com/"><img class="minilogo" src="logo.png" alt=""/></a>
        	    <a href="https://www.instagram.com/marina_pelina_art/"><img class="minilogo" src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-instagram-new-logo-vector-download-13.png" alt="My insta chanell"/></a>
            </div>
        	<div class="line"></div>

			<div id="cop">
        		All rights reserved. Design by <a href="#" target="blank">Marina Pelin</a>
        	 <address> city Dnipro, Ukraine. 2021</address> 
        	 <p>Used materials</p>
        	 <a href='https://www.freepik.com/vectors/school'>School vector created by pch.vector - www.freepik.com</a>
            </div> 	
        </div><!--END WRAP2-->
	</div><!--END BACKGR-->
	
</body>
</html>