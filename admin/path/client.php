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
?><p align="center"> <?php echo " Bienvenue " .$_SESSION['usernam']."!<br/><a href='logout.php'> Se deconnecter </a>" ; ?></p> <?php
 
 }else { header('Location:../admin.php'); }
 ?>  
        
        
        
        </div></div></div></div> 
            <ul id="navigation">

                <li><a href="hotel.php">Hotels</a></li>
                <li><a href="promos.php">Promos</a></li>
                <li><a href="vols.php">Voyage</a></li>
                <li class="on"><a href="client.php">Client</a></li>
                

            </ul>
        
<?php  
echo"<br><br><br>  <fieldset>";    


	                    include('../include/config.php');
                        construct() ;
		               $sql = 'SELECT *
                               FROM `reservation` ';
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									  
									  echo(
           "<div align=\"right\">
          
           <a href=\"../include/supprimer_client.php?idnom=".$var['id'] ."\">  <img src=../images/supprimer.jpg width=30 height=30> </a></div><br>"
       ) ;
	   
	                    ?><br><br>
                            
                      <b><?php echo $var['type'] ; ?> : </b> <?php      echo $var['nom_type'] ; ?><br>
                            <b> nom et prenom : </b>
                      <?php   echo $var['nom_client'] ;  echo $var['prenom_client'] ;   ?> <br>
                             <b> Adresse E-mail : </b>
                     <?php   echo $var['email_client'] ;   ?> <br>
                      <b> Telephone : </b>
                     <?php   echo $var['tel_client'] ;   ?> <br>
                      <b> CIN : </b>
                     <?php   echo $var['cin_client'] ;   ?> <br>
                      <b> Nombre De Bebe : </b>
                     <?php   echo $var['nb_bebe'] ;   ?> <br>
                      <b> Nombre D'Enfant : </b>
                     <?php   echo $var['nb_enfant'] ;   ?> <br>
                      <b> Date : </b>
                     <?php   echo $var['date'] ;   ?> <br>
                     <b> Nombre De Nuit : </b>
                     <?php   echo $var['nb_nuit'] ;   ?> <br>
                     <b> chambre a : </b>
                     <?php   echo $var['chambre'] ;   ?> <br>
                     <b> prix  : </b>
                     <?php   echo $var['prix_final'] ;   ?> $ <br>
 
                   <hr color="#666666" size="+2" > <br>             
         <?php
		} 
		
		?>   
            
    </fieldset>       
</div>
</body>
</html>