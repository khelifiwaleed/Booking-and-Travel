<!DOCTYPE html >



<head>
  <title>admin</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/style2.css" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
        </div>
        <div id="updates">
        <span>Interface de l'administrateur</span>
        </div>
        <div id="login">
        <div id="loginwelcome"> </div>

         <div id="contents">
		<div class="background">
     <?php
 
 session_start();
 
 if($_SESSION['usernam']) 
 {
?><p align="center"> <?php echo " Bienvenue " .$_SESSION['usernam']."!<br/><a href='../path/logout.php'> Se deconnecter </a>" ; ?></p> <?php
 
 }else { header('Location:../admin.php'); }
 ?>  
        
        
        
        </div></div></div></div> 
            <ul id="navigation">

                <li><a href="../path/hotel.php">Hotels</a></li>
                <li><a href="../path/promos.php">Promos</a></li>
                <li><a href="../path/vols.php">Voyage</a></li>
                <li><a href="../path/client.php">Client</a></li>
                

            </ul><br><br><br>
        <?php
		$id  = $_GET["idnom"] ;
		include('config.php');
        construct() ;
		$sql2 = "SELECT `image`.`id` FROM `db_pfe`.`image` WHERE `select_id` = '$id' && `type` = 'h' ";
        $req2 = mysql_query($sql2)  ;
					   while($var2 = mysql_fetch_assoc($req2))
                                  {
									  $id_image = $var2['id'] ;
									  
									  
									  $sql3 = "DELETE FROM `db_pfe`.`image` WHERE `image`.`id` = '$id_image' && `image`.`type` = 'h' " ;
                                      $req3 = mysql_query($sql3)  ;  
								  }
								  
	    $sql6 = " SELECT `geolocalisation`.`id` FROM `db_pfe`.`geolocalisation` WHERE `select_id` = '$id' && `type` = 'h'  ";
        $req6 = mysql_query($sql6)  ;
					   while($var6 = mysql_fetch_assoc($req6))
                                  {
									  $id_geo = $var6['id'] ;
								  
									$sql4 = "DELETE FROM `db_pfe`.`geolocalisation` WHERE `geolocalisation`.`id` = '$id_geo' && `geolocalisation`.`type` = 'h' ";
									$req4 = mysql_query($sql4)  ;									
								  }
											
	    $sql = "DELETE FROM `db_pfe`.`hotel` WHERE `hotel`.`id` ='$id' " ;
	    $req = mysql_query($sql)  ;
		
		
		
		
		
		



if($req && $req2 && $req6)
  {
    echo("<center>La <b><font color=#FF0000>suppression </font> </b>à été correctement effectuée</center>") ;
  }
  else
  {
    echo("<center>La <font color=#FF0000> suppression </font> à échouée</center>") ;
  }	
		?>
           
</div>
</body>
</html>