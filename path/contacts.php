<?php
$erreur = NULL;
$info = NULL;
if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){
    extract($_POST);
    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
    $pseudo = htmlspecialchars(addslashes($nom));
    $email = htmlspecialchars(addslashes($email));
    $site = htmlspecialchars(addslashes($tel));
    $message = htmlspecialchars(addslashes($message));
    $destinataire = "wkhelifi64@gmail.com";
    $sujet = "Formulaire de contact";
    $entete = 'From : '.$email.'';
    $message = 'Nom : '.$nom.' '."\n".' Telephone : '.$tel.'  '."\n".' Message : '.$message.'';
    mail($destinataire, $sujet, $message, $entete);
    $info = "Votre email à été envoyé";
    unset($_POST, $message, $nom, $email, $tel);
    }
    else{
    $erreur="Adresse email invalide";
    }
}
else{
    $erreur = "Veuillez remplir tous les champs obligatoires *";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agence de voyage</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/superfish.js"></script>
	 <script type="text/javascript" src="..js/jquery.responsivemenu.js"></script>
	 <script type="text/javascript" src="../js/jquery.mobilemenu.js"></script>
	 <script src="../js/script.js"></script>
     

	
</head>
<body>

<!--==============================header=================================-->
   	<header>
      <div class="container_24">
        <div class="header_box">
          <div class="header_top">
            <h1><a class="logo" href="../index.html">Motive</a></h1>
            <div class="social">
              <a href="#"><img src="../images/soc1.png" alt=""></a>
              <a href="#"><img src="../images/soc2.png" alt=""></a>
              <a href="#"><img src="../images/soc3.png" alt=""></a>
            </div>
            <div class="call">
              Appelez-nous  :  <span>+ 216 76641805</span>
            </div>
            <div class="clear"></div>
          </div>
          <nav>
             
              <ul class="sf-menu">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="hotel.php">Notre Hôtel</a></li>
                <li><a href="promotion.php">Notre Promos</a></li>
                <li><a href="voyage.php">Vols</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li class="current"><a href="contacts.php">contacts</a></li>
             </ul>
             
             
             
             
             <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                <input type="text" name="s" list = "datalist1" />
                  <a onClick="document.getElementById('search').submit()"></a>
              </form>
                <datalist id ="datalist1">
				<?php 
                 $rech = $_get['s'];
				 $rech='%'.$rech.'%'; 
				 $rech = trim($rech);
				 
                 include('../include/connect.php');
                 construct() ;
                 
                $sql = "SELECT * FROM `hotel` WHERE `nom` like '$rech'  ";
                 $req = mysql_query ($sql) ;
                 while ($row = mysql_fetch_assoc($req))
                 {
                     
                    ?>   <option value= "<?php   echo $row['nom'];    ?>" >  <?php 
                     
                 }
                 $sql = "SELECT * FROM `promotion` WHERE `nom_h` like '$rech'  ";
                 $req = mysql_query ($sql) ;
                 while ($row = mysql_fetch_assoc($req))
                 {
                     
                    ?>   <option value= "<?php   echo $row['nom_h'];    ?>" >  <?php 
                     
                 }
				 
				  $sql = "SELECT * FROM `voyage` WHERE `nom` like '$rech'  ";
                 $req = mysql_query ($sql) ;
                 while ($row = mysql_fetch_assoc($req))
                 {
                     
                    ?>   <option value= "<?php   echo $row['nom'];    ?>" >  <?php 
                     
                 }
				 
				 
				 
                ?> 
                          <option value=" <?php echo $rech ; ?>" >
                   
                </datalist>
                
                
                 
             <div class="clear"></div>
            </nav>
        </div>
        <div class="clear"></div>
      </div>
    </header>
<!--==============================content================================-->
    <section id="content">
    	<div class="container_24">
        <div class="wrapper">
          <article class="grid_8">
            <h2 class="ind4">contact info</h2>
            <span class="map_wrapper">
              <iframe width="350" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.tn/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Lafayette,+Gouvernorat+de+Tunis&amp;aq=3&amp;oq=la&amp;sll=36.924616,10.445931&amp;sspn=0.596124,1.352692&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lafayette,+Bab+Bhar,+Gouvernorat+de+Tunis&amp;ll=36.81327,10.18012&amp;spn=0.021989,0.027466&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                <a href="https://maps.google.tn/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Lafayette,+Gouvernorat+de+Tunis&amp;aq=3&amp;oq=la&amp;sll=36.924616,10.445931&amp;sspn=0.596124,1.352692&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lafayette,+Bab+Bhar,+Gouvernorat+de+Tunis&amp;ll=36.81327,10.18012&amp;spn=0.021989,0.027466&amp;z=14&amp;iwloc=A" class="button"><span>Agrandir</span></a>
             </span>
            <dl class="adress">
              <dt class="f_14">6 Rue ENNAKHIL,<br>Lafayette, Gouvernorat de Tunis.</dt>
              <dd><span>Freephone:</span>+ 216 76641805</dd>
              <dd><span>Telephone:</span>+ 216 98517784</dd>
              <dd><span>FAX:</span>+216 22205879</dd>
              <dd>E-mail: <a href="#" class="demo">wkhelifi64@gmail.com</a></dd>
            </dl>

          </article>
          <article class="grid_15 prefix_1 last-col">
            <h2 class="ind4">Contacer Nous</h2>
            <form id="contact-form" method="post" action="">
              
              <fieldset>
                <p> Nom : <br>
                <label class="name">
                  <input type="text" value="" name="nom">   
                </label> </p>
                <p> E-mail : <br>
                <label class="email">
                  <input type="text" value="" name="email">   
                </label></p>  
                 <p> Telephone : <br>
                <label class="phone">
                  <input type="text" value="" name="tel">  
                </label></p>
                <p> Message : 
                <label class="message">
                  <textarea name="message"></textarea>  
                </label> </p> <br>
                
                <input type="submit" class="buttons2" value="Envoyer" name="submit" ><span style="color:red;"><?php echo $erreur; ?></span><span style="color:green"><?php echo $info;?></span>
                <input type="reset" class="buttons2" value="Annuler" >  
                
              </fieldset>
            </form>
          </article>
        </div>
      </div>
    </section>
<!--==============================footer=================================-->
    <footer>
      <div class="container_24">
        <div>
          <div class="grid_8">
            <div class="privacy">
              <a href="#" class="f_logo"><img src="../images/f_logo.png" alt="" /></a> <span>&nbsp;
              &copy;&nbsp; 2013&nbsp; |  <a href="">Politique de confidentialité</a></span>
            </div>
          </div>
          <div class="grid_7">
            <h2>articles</h2>
            <ul class="articles">
               <li>
                <a href="voyage.php">Reserver ou meilleurs Voyage Dans la page Voyage .</a>
                
              </li>
              <li>
                <a href="hotel.php">Reserver ou meilleurs Hotel Dans la page Notre Hotel .</a>
                
              </li>
            </ul>
          </div>
          <div class="grid_4 prefix_1">
            <h2>Navigation</h2>
            <ul class="links_list">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="hotel.php">Nos Hôtel</a></li>
                <li><a href="promotion.php">Nos Promos</a></li>
                <li><a href="voyage.php">Vols</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li class="current"><a href="contacts.php">contacts</a></li>
            </ul>
          </div>
          <div class="grid_4 last-col">
            <h2>liens rapides</h2>
            <ul class="links_list">
              <li><a href="">Blog </a></li>
              <li><a href="">Facebook</a></li>
              <li><a href="">Twitter</a></li>
            </ul>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </footer>
</body>
</html>