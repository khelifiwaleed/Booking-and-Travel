<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agence de Reservation</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/superfish.js"></script>
	 <script type="text/javascript" src="../js/jquery.responsivemenu.js"></script>
	 <script type="text/javascript" src="../js/jquery.mobilemenu.js"></script>
   <script type="text/javascript" src="../js/jquery.equalheights.js"></script>
	 <script src="../js/script.js"></script>
     <link rel="stylesheet" type="text/css" href="../css/style_cal.css"/>
	<script type="text/javascript" src="../js/tcal.js"></script> 

	
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
                <li><a href="../path/hotel.php">Notre Hôtel</a></li>
                <li><a href="../path/promotion.php">Notre Promos</a></li>
                <li><a href="../path/voyage.php">Vols</a></li>
                <li><a href="../path/gallery.php">Gallery</a></li>
                <li><a href="../path/contacts.php">contacts</a></li>
             </ul>
              
              
              
              
              <form id="search" action="../search.php" method="GET" accept-charset="utf-8">
                  <input type="text" name="s" />
                  <a onclick="document.getElementById('search').submit()"></a>
               </form>   
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
          <article class="grid_24"> 
            <p align="right"><font color="#000000"><b>Nous sommes le : <?php echo date("d/m/Y") ?> il est <?php echo date("H:i"); ?></b></font></p>
            
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="YSPMT2WKQ8X7J">
            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
            </form>

            <br><br>
            <center>
            <?php      
		     $id = $_GET["id_client"] ;
			 include('connect.php');
			 construct() ;
			 $sql = " SELECT * FROM `reservation` WHERE `id` = '$id' AND `type` = 'hotel' ";
			 $req = mysql_query($sql) ;
	         while($var = mysql_fetch_assoc($req))
                    {   
					    
					    ?> <h2 align="center"><font color="#FF0000"> <?php
						echo("La Reservation sur") ;
						echo "&nbsp;&nbsp;" ;
						echo $var['type']  ; 
						echo "&nbsp;&nbsp;" ;
						echo $var['nom_type'] ;
						echo "&nbsp;&nbsp;" ;
						echo " à été correctement effectuée " ;
						?> </font></h1><br><br><br> <?php
						 echo " <b>  Monsieu  </b>" ;  echo $var['nom_client']  ; echo "&nbsp;&nbsp;" ; echo $var['prenom_client']; echo " <br> " ; 
						 echo " <b>  Bla Bla Bla Bla Bla paiment    </b>" ;  echo $var['prix_final']  ;  echo " $ " ; echo " <br> " ;
						 echo " <b>  Votre E-mail :  </b>" ; echo $var['email_client']  ; echo " <br> " ;
						 echo " <b>  Votre Telephon :  </b>" ; echo $var['tel_client']  ; echo " <br> " ;
						 
						 
						 
					} 
			       
             ?>
              
              
              
           <br><br><br><br> 
          </center>   
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
                <a href="../path/voyage.php">Reserver ou meilleurs Voyage Dans la page Voyage .</a>
                
              </li>
              <li>
                <a href="../path/hotel.php">Reserver ou meilleurs Hotel Dans la page Notre Hotel .</a>
                
              </li>
            </ul>
          </div>
          <div class="grid_4 prefix_1">
            <h2>Navigation</h2>
            <ul class="links_list">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../path/hotel.php">Nos Hôtel</a></li>
                <li><a href="../path/promotion.php">Nos Promos</a></li>
                <li><a href="../path/voyage.php">Vols</a></li>
                <li><a href="../path/gallery.php">Gallery</a></li>
                <li><a href="../path/contacts.php">contacts</a></li>
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