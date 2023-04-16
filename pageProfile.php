<!-- php require_once "D:/Downloads/xampp/htdocs/test.loc/baseEntrance.php"?> -->
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
?>
<script>
	console.warn = () => {};
</script>
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
</head>
<body>
    <div class="background-img">
        <div class="line"></div><!--END LINE-->
        <div class="hat" >
        	<div class="horizontal" >
        		<div class="buttons" >
        	    <div id="SiteNameBackgr"><a href="index.php" id="SiteName">Hudojniki<img src="https://img.icons8.com/wired/64/000000/paint-brush.png"></a></div>
        		<div id="menu"  >
        			<ul>
        			<li ><a href="index.php" id="m1">Home</a></li>
        			</ul>
        		</div>
        		<div id="menu" >
        			<ul>
        			<li ><a  target="_blank"  href="htmldovidka/profil.htm" id="m1">Help</a></li>
        			</ul>
        		</div>
        		<div id="menu" >
        			<ul>
        			<li ><a href="pageSignin.php" id="m1"> Log in
					</a></li>
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
        				    <div id="menu" style="margin-left:15px; text-align:center" >
        				    	<ul>
        				    	<li><a href="index.php" id="m1">Refresh</a></li>
        				    	<li><a href="MyQuestions.html" id="m1">My questions</a></li>
        				    	</ul>
        				    </div>
        				    <div id="header_top" style="margin-left:150px; text-align:center">
        				    	<a href="#" class="smp" >
								<?php 
								$login=htmlspecialchars($_COOKIE['Login']);
								$pass=htmlspecialchars($_COOKIE['Pass']);
								if($login){
									$checkEmailQuery= $conn->query(
										"SELECT NICK, BPLACE
								        FROM account
										WHERE EMAIL= '$login' AND PASS= '$pass'");
									
							        if($checkEmailQuery){
								    	$result=$checkEmailQuery->fetch_assoc();
								    	
										echo($result['NICK']);
										echo('<br>');
										echo($result['BPLACE']);
										
								    }
                                }else{
                                	error_reporting(E_ERROR | E_PARSE);
                                }
								
                                ?>
								</a>
								
							</div><!--END HEADER_TOP-->
								
							<form name="fnick" class="login" style="margin-left:15px; margin-top:15px;" autocomplete="off" method="post" action="actionOnProfile.php">
							            <p>Edit Profile:</p>
										<p><input type="text" style="margin-left:15px; margin-top:15px;"  name="nic" placeholder="New Nick">
				                        <a target="_blank" href="htmldovidka/redaguvannya_profilyu.htm#nick" ><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
										</p>
										<p><input type="file" style="margin-left:15px; margin-top:15px;" name="pic" value="imgicon.jpg" accept="image/*">
				                        <a target="_blank" href="htmldovidka/redaguvannya_profilyu.htm#iconfile"><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
										</p>
										<p><input type="text" style="margin-left:15px; margin-top:15px;" name="desc" placeholder="New Description">
				                        <a target="_blank" href="htmldovidka/redaguvannya_profilyu.htm#description"><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
										</p>
									    <p><input type="submit" style="margin-left:15px; margin-top:15px;" value="save" onclick="showPrompt()"></p>
							</form>
							
        				    <div id="header_bot" style="margin-left:15px;">	
        				    	<p>Online magazine "Hudojniki"</p>
        				    </div><!--END HEADER_bot-->
							<p style="margin-top:30px; margin-left:50%">Likes: 0</p>
        			    </td>	
        		        <td width="40%" valign="top">
        		            <div>
								<?php
								$login=htmlspecialchars($_COOKIE['Login']);
								$pass=htmlspecialchars($_COOKIE['Pass']);
								if($login){
									$checkPic= $conn->query(
										"SELECT PROFPIC_URL
								        FROM account
										WHERE EMAIL= '$login' AND PASS= '$pass'");
							        if($checkPic){
										$result=$checkPic->fetch_assoc();
										echo('<img class="large"  style="margin-right:100px; margin-top:15px;" id="profilepic" src="');
										echo($result['PROFPIC_URL']);
										echo('" />');
								    }else{
									    echo('<img class="large"  style="margin-right:55px;" id="profilepic" src="picture_emptyprofile.png"/>');
									}
                                }else{
									error_reporting(E_ERROR | E_PARSE);
									
                                }
								?>
        			            <div class="description">
        				            <p>About me:</p>
									
        				            <em id="description">
									<?php
								        $login=htmlspecialchars($_COOKIE['Login']);
								        $pass=htmlspecialchars($_COOKIE['Pass']);
								        if($login){
								        	$checkDesc= $conn->query(
								        		"SELECT `DESCRIPTION` 
												FROM `account`
												WHERE `EMAIL`= '$login' AND `PASS`= '$pass'");
							                if($checkDesc){
								        		$result=$checkDesc->fetch_assoc();
								        		echo($result['DESCRIPTION']);
								            }
                                        }else{
								        	error_reporting(E_ERROR | E_PARSE);
                                        }
								        ?>
									</em>
									   
        			            </div>
        		            </div>
        		        </td>
        		    </tr>
        	   </table>
			<?php
			
           
			
			    $login=htmlspecialchars($_COOKIE['Login']);
				$pass=htmlspecialchars($_COOKIE['Pass']);
				if($login){
					$checkDesc= $conn->query(
						"SELECT `ID`, `IS_ARTIST` 
						FROM `account`
						WHERE `EMAIL`= '$login' AND `PASS`= '$pass'");
					if($checkDesc){
						$result=$checkDesc->fetch_assoc();
						$id = $result['ID'];

						if($result['IS_ARTIST']==1)
			            {
						    echo('<div class="line"></div>
						        <p style="margin-left: 20px;">Paintings</p>');
						}

						$checkIMG= $conn->query("SELECT IMG, NAME FROM painting
						WHERE ARTIST= '$id'");

						
						if($checkIMG){
							$result2=$checkIMG->fetch_assoc();
							if($result2!=NULL){
								echo('<div class="blocking">');
								do{
									echo('
									<div class="blockeach" >
										<a href="pagePicProfile.php">
										<img height="300px" src="');echo($result2['IMG']);echo('"/></a></td>
										 <div id="header_top" class="textblock" >
											<a href="#" class="smp" style="font-size: 19px; font-weight: bold;" >');
											echo($result2['NAME']);
											echo('</a></div>
											
									</div>
								');
								}while($result2=$checkIMG->fetch_assoc());
								echo('</div>');

							}
							
						}
					}
				    
				}
			
			

			echo('<div class="line"></div>');
			if($result['IS_ARTIST']==1)
			{
							            
			echo('						
			<form name="fgallery" class="login" style="margin-left:15px; margin-top:15px;" autocomplete="off" method="post" action="actionOnProfileGallery.php">
			    <p>Add Painting</p>
				<p><input type="file" accept="image/*" style="margin-left:15px; margin-top:15px;" alt="JPG, PNG" name="img" value="imgicon.jpg">
				<a target="_blank" href="htmldovidka/dodavannya_kartini.htm#file"><img style=" height: 10px;"src="question-mark.png"></a>
				</p>
				
				 

				<p><input type="text" style="margin-left:15px; margin-top:15px;" name="name" placeholder="Name">
				<a target="_blank" href="htmldovidka/dodavannya_kartini.htm#picname"><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a>
				</p>

				<p><select style="margin-left:15px; margin-top:15px;" name ="tools">
				    <option value="tools">tools</option>
				    <option value="oils">oils</option>
				    <option value="watercolor">watercolor</option>
				    <option value="pencil">pencil</option>
				    <option value="gouashe">gouashe</option>
				    <option value="acrilics">acrilics</option>
				    <option value="other">other</option>
				</select>
				<a target="_blank" href="htmldovidka/dodavannya_kartini.htm#tools"><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
				</p>
				
				<p><select style="margin-left:15px; margin-top:15px;" name ="genre">
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
				<a  target="_blank" href="htmldovidka/dodavannya_kartini.htm#genre"><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
				</p>

				<p><input style="margin-left:15px; margin-top:15px;" type="date" name="time" value="date">
				<a  target="_blank" href="htmldovidka/dodavannya_kartini.htm#date"><img style="padding-left: 5px; height: 10px;"src="question-mark.png"></a> 
				</p>

				<input type="submit" style="margin-left:15px; margin-top:15px;" value="save" onclick="showPrompt()">
			</form>
			<div id="header_bot" style="margin-left:15px;">	
        		<p style="margin-bottom: 50px;">Online magazine "Hudojniki"</p>
			</div><!--END HEADER_bot-->');
		    }
			?>
			<div class="line"></div>
		    <p style="margin-left: 20px;">My likes &#x1F90D;</p>
			<div class="line"></div>
			<?php
			    $login=htmlspecialchars($_COOKIE['Login']);
				$pass=htmlspecialchars($_COOKIE['Pass']);
				if($login){
					$checkDesc= $conn->query(
						"SELECT `ID` 
						FROM `account`
						WHERE `EMAIL`= '$login' AND `PASS`= '$pass'");
					if($checkDesc){
						$result=$checkDesc->fetch_assoc();
						$id = $result['ID'];
						

						$checkIMG= $conn->query("SELECT IMG, NAME FROM painting
						WHERE ARTIST= '$id'");

						
						if($checkIMG){
							$result2=$checkIMG->fetch_assoc();
							if($result2!=NULL){
								echo('<div class="blocking">');
								do{
									echo('
									<div class="blockeach" >
										<a href="pagePicProfile.php">
										<img height="300px" src="');echo($result2['IMG']);echo('"/></a></td>
										 <div id="header_top" class="textblock" >
											<a href="#" class="smp" style="font-size: 19px; font-weight: bold;" >');
											echo($result2['NAME']);
											echo('</a></div>
											
									</div>
								');
								}while($result2=$checkIMG->fetch_assoc());
								echo('</div>');

							}
							
						}
					}
				    
				}
			?>
			
			<div id="wrap2">
			
       
        	<div class="line"></div>
            
        		<em style="margin-left: 20px">All rights reserved. Design by </em><a href="#" target="blank">Marina Pelin</a>
        	 <address style="margin-left: 20px"> city Dnipro, Ukraine. 2022</address> 
        	 
            	
        </div><!--END WRAP2-->
	</div><!--END BACKGR-->
	<?php mysqli_close($conn);?>
</body>
</html>