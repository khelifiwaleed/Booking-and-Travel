<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Collateral - Free Template for Zymic!</title>
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
                

            </ul>






<br><br><br><br>


<?php
 $id = $_GET["idnom"] ;
 include('config.php');
 construct() ;


if(isset($_POST['submit']))
{
        $id  = $_GET["idnom"] ;
		$x1 = $_POST['a1'];
        $x2 = $_POST['a2'];
        $x3 = $_POST['a3'];
        $x4 = $_POST['a4'];
		$x5 = $_POST['a5'];
		$x6 = $_POST['a6'];
		$x7 = $_POST['long'];
        $x8 = $_POST['lati'];
		

    
	$sqlh = "UPDATE `db_pfe`.`hotel` SET `nom` = '$x1' , `adresse` = '$x2' , `star` = '$x3' , `prix` = '$x4' , `description` = '$x5' , `description2` = '$x6' WHERE `hotel`.`id` = '$id';";
    $reqh = mysql_query($sqlh)  ;
		$sql4 = "UPDATE `db_pfe`.`geolocalisation` SET `longitude` = '$x7' , `latitude` = '$x8'  WHERE `geolocalisation`.`select_id` = '$id' ";
        $req4 = mysql_query($sql4)  ;
		

if($reqh || $req4)
  {
    echo("<center>La <b><font color=#FF0000>Modification </font> </b>à été correctement effectuée</center>") ;
	
  }
  else
  {
    echo("<center>La <font color=#FF0000> Modification </font> à échouée</center>") ;
	

  }

}
		

	
// afficher le formulaire 
        $id  = $_GET["idnom"] ;
        $sql = "SELECT * FROM `hotel` WHERE `id` = '$id'  ";
        $req = mysql_query($sql)  ;
		$sql2 = " SELECT * FROM `geolocalisation` WHERE `select_id` = '$id' && `type` = 'h'  ";
        $req2 = mysql_query($sql2)  ;

while($var = mysql_fetch_assoc($req))
{ 
   ?>
	  
	  <center>

         <form action="" method="post" id="form1" enctype="multipart/form-data" >
				
		    id :<input type="text"  readonly="readonly" value=" <?php echo $var['id'] ;    ?>"><br><br>
			Nom Hotel :<input type="text" name="a1" value=" <?php echo $var['nom'] ;    ?>"><br><br>
           Adresse Hotel :<textarea name="a2" cols="45" id="textarea"> <?php echo $var['adresse'] ;    ?>  </textarea> <br><br>
         Star :<input type="text" name="a3" value="<?php echo $var['star'] ;    ?>"><br><br>
          Prix  :<input type="text" name="a4" value="<?php echo $var['prix'] ;    ?>"> <br><br>
         Annonce : <textarea name="a5" cols="45" id="description"> <?php echo $var['description'] ;    ?>  </textarea> <br><br>
         Description : <textarea name="a6" cols="45" id="description"> <?php echo $var['description2'] ;    ?>  </textarea> <br><br>
         <?php
		 while($var2 = mysql_fetch_assoc($req2))
              { 
		 ?>
        Longitude  :<input type="text" name="long" value="<?php echo $var2['longitude'] ;    ?>"><br><br> 
          Latitude  :<input type="text" name="lati" value="<?php echo $var2['latitude'] ;    ?>" /><br><br>
         <?php } ?>
					<br><br>   
  <input type="submit" name="submit" value="Modifier">
  <input type="reset" name="Annuler" value="Annuler" >        
</form>  
   </center>     
      <?php } ?>
   
       
</div>
</body>
</html>