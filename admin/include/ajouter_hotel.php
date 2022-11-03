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
<center>
<table width="1000" height="533" border="1">
<tr>
<td>
<center> <font color="#000000"> <h2> Ajouter Un Hotel </h2> </font>
<?php

 
 
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
$test = false ;
$test2 = false ;
$test3 = false ;


 // fct image 
$dossier = '../../images_hotel/' ;  // l'upload dans le dossier images_hotel/
$fichier = basename($_FILES['image']['name']); // nom du l'image
$taille_maxi = 9000000000000;
$taille = filesize($_FILES['image']['tmp_name']);  // taille image
$extensions = array('.png', '.gif', '.jpg', '.jpeg'); 
$extension = strrchr($_FILES['image']['name'], '.');  // l'extention de l'image

	
     include('config.php');
	 construct() ;
		if($x1 && $x2 && $x3 && $x4 && $x5  && $x6)
		{ 
		$sql = "INSERT INTO `db_pfe`.`hotel` (`id`, `nom`, `adresse`, `star`, `prix`, `description`, `description2`) VALUES (NULL, '$x1', '$x2', '$x3', '$x4', '$x5', '$x6');";
		$req = mysql_query($sql)  ;
		
			 $sql2 = "SELECT `hotel`.`id` FROM `db_pfe`.`hotel` WHERE `nom` = '$x1' LIMIT 0 , 1 ";
			 $req2 = mysql_query($sql2)  ;
			 while($var2 = mysql_fetch_assoc($req2))
				   {
						$id_h = (int)$var2['id'] ;
						$test = true ;
											  
				   }
		}else {
				   print("<center>SVP il y'a un '<b> <font color=#FF0000>  champ </font> </b>' vide !</center>");
		}

// insertion image
if(!in_array($extension, $extensions)) //tester l'extension de l'image dans le tableau
	{
		 echo 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg,...'; // msg d'erreur
	}
	if($taille>$taille_maxi ) //tester la taille de l'image < 1000
	{
		 echo 'Le fichier est trop gros... ou un champ vide!'; // msg d'erreur
	}
	
	if ($fichier && $test )
	  {
		//On formate le nom du fichier ici...
			 $fichier = strtr($fichier, 
				  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
				  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			 if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			 {
				  
				  $img = "$fichier"; // nom image + extension ex img.jpeg
				  $path = "images_hotel/$img" ;
				 
				  
				  
				  
				  $sql3 = " INSERT INTO `db_pfe`.`image` (`id`, `nom`, `path`, `select_id`, `type`) VALUES (NULL, '$img', '$path', '$id_h', 'h') ";
				  $req3 =  mysql_query($sql3) ;
				  $test2 = true ;
				
			 }
			 else //Sinon (la fonction renvoie FALSE).
			 {
				  echo 'Echec de l\'upload !';
			 }
	  }else 
	  {
		 print("<center>SVP le '<b> <font color=#FF0000>  champ </font> </b>' image est vide !</center>");
	  }
	if ($x7 && $x8 && $test && $test2 )
	{
		
		$sql4 = "INSERT INTO `db_pfe`.`geolocalisation` (`id`, `type`, `select_id`, `longitude`, `latitude`) VALUES (NULL, 'h', '$id_h', '$x7', '$x8');";
		$req4 = mysql_query($sql4);
		$test3 = true ;
		
    }else {
		
		print("<center>SVP le  '<b> <font color=#FF0000>  champ </font> </b>' Longitude et Latitude est vide !</center>");
		
		
	}
   if($test && $test2  && $test3 )
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
				
		
			Nom Hotel :<input type="text" name="a1" value="">
					<br><br>
           Adresse :<input type="text" name="a2" value="">
					<br><br>
          Star :<input type="text" name="a3" class="tcal" value="">
					<br><br>
          Prix :<input type="text" name="a4" class="tcal" value="">
					<br><br> 
          Sujet : <textarea name="a5" tabindex="2" cols="33" rows="1" ></textarea>
					<br><br> 
          Description  : <textarea name="a6" tabindex="2" cols="33" rows="1" ></textarea>
					<br><br>
          Longitude  :<input type="text" name="long" value="">
					<br><br> 
          Latitude  :<input type="text" name="lati" value="">
					<br><br>
              <input type="hidden" name="size_file" value="100000">
        L'image  : <input type="file" name="image" id="" />
 
					<br><br>
					<br><br>   
                     
  <input type="submit" name="submit" value="Valider">
  <input type="reset" name="Annuler" value="Annuler" >        
</form>  



   </center> 
   </td>
   <td>
  
  
  
  
 <center> <font color="#000000"><h2> Ajouter Un Autre Image Dans Ce Hotel </h2></font> 
  <?php 

 
 
 if(isset($_POST['submit2']))
{
$id_hotel2 = $_GET['idnom'] ;
$test4 = false ; 
 // fct image 
$dossier = 'C:/wamp/www/walid/images_hotel/' ;  // l'upload dans le dossier images_hotel/
$fichier = basename($_FILES['image']['name']); // nom du l'image
$taille_maxi = 9000000000;
$taille = filesize($_FILES['image']['tmp_name']);  // taille image
$extensions = array('.png', '.gif', '.jpg', '.jpeg'); 
$extension = strrchr($_FILES['image']['name'], '.');  // l'extention de l'image
include('config.php');
construct() ;
	if(!in_array($extension, $extensions)) //tester l'extension de l'image dans le tableau
		{
			 echo 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg,...'; // msg d'erreur
		}
	if($taille>$taille_maxi) //tester la taille de l'image < 1000
		{
			echo 'Le fichier est trop gros...'; // msg d'erreur
		}
if ($fichier) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          
		  $img = "$fichier"; // nom image + extension ex img.jpeg
		  $path = "images_hotel/$img" ;
		  $sqli = " INSERT INTO `db_pfe`.`image` (`id`, `nom`, `path`, `select_id`, `type`) VALUES (NULL, '$img', '$path', '$id_hotel2', 'h') ";
          $reqi =  mysql_query($sqli) ;
		  $test4 = true ;
	
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
  }else
	  {
		print("<center>SVP il y'a un '<b> <font color=#FF0000>  champ </font> </b>' vide !</center>");
	  }
	  
   if($test4)
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