<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Collateral - Free Template for Zymic!</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/style2.css" type="text/css" />
  
   <link rel="stylesheet" type="text/css" href="../../css/style_cal.css" />
	<script type="text/javascript" src="../../js/tcal.js"></script> 
  
  
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

$id  = $_GET["idnom"] ;

if(isset($_POST['submit']))
{
$x1 = $_POST['a1'];
$x2 = $_POST['a2'];
$x3 = $_POST['a3'];
$x4 = $_POST['a4'];
$x5 = $_POST['a5'];
$x6 = $_POST['a6'];
$x7 = $_POST['long'];
$x8 = $_POST['lati'];
$id  = $_GET["idnom"] ;
		// pour inserer la date
$xplod = explode('/',$x4); // supprimer les "/"
$xplod2 = explode('/',$x5);

$string = "$xplod[2]-$xplod[1]-$xplod[0]";        // ajouter un "-" de separation
$string2 = "$xplod2[2]-$xplod2[1]-$xplod2[0]";

$date1 = date("y-m-d", strtotime($string)) ;         // format de la date
$date2 = date("y-m-d", strtotime($string2)) ;
						 
if($id && $date1 && $date2) 
{ 
		 include('config.php');
         construct() ;
		 
			
        
	   $sql = "UPDATE `db_pfe`.`voyage` SET `nom` = '$x1' , `description` = '$x2' , `prix` = '$x3' , `date1` = '$date1' , `date2` = '$date2' , `PROGRAMME` = '$x6'  WHERE `voyage`.`id` = '$id';";
    $req = mysql_query($sql)  ;
	
	$sql4 = "UPDATE `db_pfe`.`geolocalisation` SET `longitude` = '$x7' , `latitude` = '$x8'  WHERE `geolocalisation`.`select_id` = '$id' ";
        $req4 = mysql_query($sql4)  ;
}else {
	
	
	echo ' il y a un champ vide !' ;
	
	}

if($req || $req4)
  {
    echo("<center>La ' <b><font color=#FF0000>modification </font> </b>à été correctement effectuée</center>") ;
	
  }
  else
  {
    echo("<center>La <font color=#FF0000> modification </font> à échouée</center>") ;
	

  }

}
		

	
// afficher le formulaire 
        $id  = $_GET["idnom"] ;
		include('config.php');
	    construct() ;
        $sql = 'SELECT * FROM `voyage` ';
        $req = mysql_query($sql)  ;
		$sql2 = " SELECT * FROM `geolocalisation` WHERE `select_id` = '$id' && `type` = 'v'  ";
        $req2 = mysql_query($sql2)  ;

while($var = mysql_fetch_assoc($req))
{ 
  if ( $var['id'] == $id )   
  { ?>
	  
	  <center>

         <form action="" method="post" id="form1" name="form1" enctype="multipart/form-data" >
				
		    id :<input type="text"  readonly="readonly" value=" <?php echo $var['id'] ;    ?>"><br><br>
	      Nom De Voiyage :<input type="text" name="a1" value=" <?php echo $var['nom'] ;    ?>"><br><br>
          Description :  <textarea name="a2" cols="45" id="description"> <?php echo $var['description'] ;    ?>  </textarea> <br><br>
          Prix :<input type="text" name="a3" value="<?php echo $var['prix'] ;    ?>"> <br><br>
          <br><br>
          A partir de :<input type="text" name="a4" class="tcal" value=" <?php  echo $var['date1'] ;   ?> " >
					<br><br>
          Jusqu'à :<input type="text" name="a5" class="tcal" value=" <?php  echo $var['date2'] ;   ?> ">
					<br><br>
         Programme : <textarea name="a6" cols="90" rows="22" id="description"> <?php echo $var['PROGRAMME'] ;    ?>  </textarea> <br><br>
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
        
	  
	  
	  
	  
	  
      
      <?php
	  }
 
 
 
 
}


 

 ?>
   
       
</div>
</body>
</html>