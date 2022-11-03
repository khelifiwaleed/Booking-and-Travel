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
		include('config.php');
        construct() ;
		
		$id  = $_GET["idnom"] ;									
	    $sql = "DELETE FROM `db_pfe`.`reservation` WHERE `reservation`.`id` ='$id' " ;
	    $req = mysql_query($sql)  ;


		if($req)
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