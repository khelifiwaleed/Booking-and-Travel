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
<center>
<table width="1000" height="533" border="1">
<tr>
<td>
<center> <font color="#000000"> <h2> Ajouter Un Voyage </h2> </font>
<?php

 
 
 if(isset($_POST['submit']))
{
$x1 = $_POST['a1'];
$x2 = $_POST['a2'];
$x3 = $_POST['a3'];
$x4 = $_POST['a4'];
$x5 = $_POST['a5'];
$x6 = $_POST['desc'];
$x7 = $_POST['long'];
$x8 = $_POST['lati'];
$fichier = basename($_FILES['image']['name']); // nom du l'image
if($x1 && $x2 && $x3 && $x4 && $x5 && $x6 && $fichier && $x7 && $x8 )
{ 

 include('config.php');
 construct() ;

// pour inserer la date
$xplod = explode('/',$x4); // supprimer les "/"
$xplod2 = explode('/',$x5);

$string = "$xplod[2]-$xplod[1]-$xplod[0]";        // ajouter un "-" de separation
$string2 = "$xplod2[2]-$xplod2[1]-$xplod2[0]";

$date1 = date("y-m-d", strtotime($string)) ;         // format de la date
$date2 = date("y-m-d", strtotime($string2)) ;

$sql = "INSERT INTO `db_pfe`.`voyage` (`id`, `nom`, `description`, `prix`, `date1`, `date2`, `PROGRAMME`) VALUES (NULL, '$x1', '$x2', '$x3', '$date1', '$date2', '$x6')";
$req = mysql_query($sql)  ;

                       $sql2 = "SELECT `voyage`.`id` FROM `db_pfe`.`voyage` WHERE `nom` = '$x1' LIMIT 0 , 1";
                       $req2 = mysql_query($sql2)  ;
					   while($var2 = mysql_fetch_assoc($req2))
                                  {
									  $id_voyage = $var2['id'] ;
									  
								  }
                       
					   
							   // fct image 
		$dossier = 'C:/wamp/www/walid/images_voyage/' ;  // l'upload dans le dossier images_hotel/
		$fichier = basename($_FILES['image']['name']); // nom du l'image
		$taille_maxi = 9000000000;
		$taille = filesize($_FILES['image']['tmp_name']);  // taille image
		$extensions = array('.png', '.gif', '.jpg', '.jpeg'); 
		$extension = strrchr($_FILES['image']['name'], '.');  // l'extention de l'image
		if(!in_array($extension, $extensions)) //tester l'extension de l'image dans le tableau
		{
			 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg,...'; // msg d'erreur
		}
		if($taille>$taille_maxi) //tester la taille de l'image < 1000
		{
			 $erreur = 'Le fichier est trop gros...'; // msg d'erreur
		}
		if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
			 //On formate le nom du fichier ici...
			 $fichier = strtr($fichier, 
				  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
				  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			 if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			 {
				  
				  $img = "$fichier"; // nom image + extension ex img.jpeg
				  $path = "images_voyage/$img" ;
				 
				  
				  
				  
				  $sql3 = " INSERT INTO `db_pfe`.`image` (`id`, `nom`, `path`, `select_id`, `type`) VALUES (NULL, '$img', '$path', '$id_voyage', 'v') ";
				  $req3 =  mysql_query($sql3) ;
				
			 }
			 else //Sinon (la fonction renvoie FALSE).
			 {
				  echo 'Echec de l\'upload !';
			 }
			}
			else
			{
				 echo $erreur;
			} // fin de l'upload
					   

		
		$sql4 = "INSERT INTO `db_pfe`.`geolocalisation` (`id`, `type`, `select_id`, `longitude`, `latitude`) VALUES (NULL, 'v', '$id_voyage', '$x7', '$x8');";
		$req4 = mysql_query($sql4);

		if($req && $req3 && $req4)
		  {
			echo("<center>L ' <b> <font color=#00FF00>insertion </font> </b>à été correctement effectuée</center>") ;
			
		  }else
		  {
			echo("<center>L' <font color=#FF0000> insertion </font> à échouée</center>") ;
			
		  }
	}
	else 
	{ 
	print("<center>SVP il y'a un '<b> <font color=#FF0000>  champ </font> </b>' vide !</center>");
	
	}
}




 ?>
 <br><br><br><br>              
 <center>       
  <form action="" method="post" id="form1" name="form1" enctype="multipart/form-data" >
				
		
			Nom De Voiyage :<input type="text" name="a1" value="">
					<br><br> 
          Description : <textarea name="a2" tabindex="2" cols="33" rows="1" ></textarea>
                    <br><br>
           Prix :<input type="text" name="a3" value="">
					<br><br>
          A partir de :<input type="text" name="a4" class="tcal" value="">
					<br><br>
          Jusqu'à :<input type="text" name="a5" class="tcal" value="">
					<br><br>
          Programme : <textarea name="desc" tabindex="2" cols="33" rows="1" ></textarea> 
                     <br><br>
          Longitude  :<input type="text" name="long" value="">
					<br><br> 
          Latitude  :<input type="text" name="lati" value="">
          <br><br>   
              <input type="hidden" name="size_file" value="90000000">
        L'image  : <input type="file" name="image" id="" />
 
					<br><br>
					<br><br>   
                     
  <input type="submit" name="submit" value="Valider">
  <input type="reset" name="Annuler" value="Annuler" >        
</form>  
    </center> 
   </td>
   <td>
  
  
  
  
 <center> <font color="#000000"><h2> Ajouter Un Autre Image Dans Cette Voyage </h2></font> 
  <?php

 $test = false ;
 $id_hotel2 = $_GET['idnom'] ;
 if(isset($_POST['submit2']))
{

 // fct image 
$dossier = 'C:/wamp/www/walid/images_voyage/' ;  // l'upload dans le dossier images_hotel/
$fichier = basename($_FILES['image']['name']); // nom du l'image
$taille_maxi = 9000000000;
$taille = filesize($_FILES['image']['tmp_name']);  // taille image
$extensions = array('.png', '.gif', '.jpg', '.jpeg'); 
$extension = strrchr($_FILES['image']['name'], '.');  // l'extention de l'image
if(!in_array($extension, $extensions)) //tester l'extension de l'image dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg,...'; // msg d'erreur
}
if($taille>$taille_maxi) //tester la taille de l'image < 1000
{
     $erreur = 'Le fichier est trop gros...'; // msg d'erreur
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          
		  $img = "$fichier"; // nom image + extension ex img.jpeg
		  $path = "images_voyage/$img" ;
		 
		  
		  
		  
		  
		
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
} // fin de l'upload
				   

include('config.php');
 construct() ;
 if ($fichier)
 {
$sql3 = " INSERT INTO `db_pfe`.`image` (`id`, `nom`, `path`, `select_id`, `type`) VALUES (NULL, '$img', '$path', '$id_hotel2', 'v') ";
          $req3 =  mysql_query($sql3) ;
		  $test = true ;
 }else 
{ 
print("<center>SVP il y'a un '<b> <font color=#FF0000>  champ </font> </b>' vide !</center>");


}
					   
				   

if($test)
  {
    echo("<center>L ' <b> <font color=#00FF00>insertion </font> </b>à été correctement effectuée</center>") ;
	
  }else
  {
    echo("<center>L' <font color=#FF0000> insertion </font> à échouée</center>") ;
	
  }
  
}






 ?>
 <br><br><br><br>              
       
  <form action="" method="post" id="form1" name="form1" enctype="multipart/form-data" >
              <input type="hidden" name="size_file" value="100000">
        L'image  : <input type="file" name="image" id="" />
 
					<br><br>
					<br><br>   
                     
  <input type="submit" name="submit2" value="Valider">
  <input type="reset" name="Annuler" value="Annuler" >        
</form>  

    
    
    
    </td>
  </tr>
</table></center></center>
<br><br><br><br><br><br>   
   
                

</div>
</body>
</html>