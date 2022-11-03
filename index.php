<!DOCTYPE html>
<html lang="en">
<head>
    <title>rohban</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	 <script type="text/javascript" src="js/jquery.responsivemenu.js"></script>
	 <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
	 <script type="text/javascript" src="js/jquery.flexslider.js"></script>
	 <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	 <script src="js/jquery.equalheights.js"></script>
   <script src="js/script.js"></script>
	 <script type="text/javascript">
		  $(window).load(function() {
				$('.flexslider').flexslider({
				  animation: "fade"
				});
			 });
	 </script>
	
</head>
<body>

<!--==============================header=================================-->
   	<header>
      <div class="container_24">
        <div class="header_box">
          <div class="header_top">
            <h1><a class="logo" href="index.html">Motive</a></h1>
            <div class="social">
              <a href="#"><img src="images/soc1.png" alt=""></a>
              <a href="#"><img src="images/soc2.png" alt=""></a>
              <a href="#"><img src="images/soc3.png" alt=""></a>
            </div>
            <div class="call">
             Appelez-nous  :  <span>+ 216 76641805</span>
            </div>
            <div class="clear"></div>
          </div>
          <nav>
          
          
            <ul class="sf-menu">
                <li class="current"><a href="index.php">Accueil</a></li>
                <li><a href="path/hotel.php">Notre Hôtel</a></li>
                <li><a href="path/promotion.php">Notre Promos</a></li>
                <li><a href="path/voyage.php">Vols</a></li>
                <li><a href="path/gallery.php">Gallery</a></li>
                <li><a href="path/contacts.php">contacts</a></li>
             </ul>
             
             
             
             
              <form id="search" action="path/search.php" method="GET" accept-charset="utf-8">
                <input type="text" name="s" list = "datalist1" />
                  <a onClick="document.getElementById('search').submit()"></a>
              </form>
                <datalist id ="datalist1">
				<?php 
                  
				 
                 include('include/connect.php');
                 construct() ;
                 
                $sql = "SELECT * FROM `hotel` ";
                 $req = mysql_query ($sql) ;
                 while ($row = mysql_fetch_assoc($req))
                 {
                     
                    ?>   <option value= "<?php   echo $row['nom'];    ?>" >  <?php 
                     
                 }
                 $sql = "SELECT * FROM `promotion`    ";
                 $req = mysql_query ($sql) ;
                 while ($row = mysql_fetch_assoc($req))
                 {
                     
                    ?>   <option value= "<?php   echo $row['nom_h'];    ?>" >  <?php 
                     
                 }
				 
				  ?>
                   
                </datalist>
                
                
                
              
               
             <div class="clear"></div>
           </nav>
        </div>
        <div class="clear"></div>
      </div>
    </header>
    <div class="slider_box">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="images/slide1.jpg" alt=""></li>
						<li><img src="images/slide2.jpg" alt=""></li>
						<li><img src="images/slide3.jpg" alt=""></li>
					</ul>
				</div>
    </div>
<!--==============================content================================-->



    <section id="content" class="cont_pad">
    	<div class="container_24">
    	<div class="wrapper">
        
        
             <?php
			 		   
	                   
					   
		               $sql = 'SELECT *
                               FROM `hotel`
                               LIMIT 0 , 4 ';
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									$hotel_id = $var['id'] ;  
									   ?>
                 <article class="grid_6">
                      <div class="offer maxheight">
                          <div class="title ">
                              <span>Hotel</span>
                        <?php echo $var['nom'] ; ?>
                          </div>
                                               <?php
                                               $sql2 = "SELECT * FROM `image` WHERE `select_id` = '$hotel_id' && `type` = \"h\" LIMIT 0 , 1";
                                               $req2 = mysql_query($sql2)  ;
                                               while($var2 = mysql_fetch_assoc($req2))
                                                          {
															  ?>
															  
															  <img src="<?php echo $var2['path'] ; ?>" alt="" width="229" height="175" />
                                                            <?php    
                                                          } 
											 ?>
                     <div class="text ">
                     <?php       echo $var['description'] ;  ?> .<br>
                 <?php       
				    echo(
           "<div align=\"left\">
          
           <a href=\"path/descriptif_detaille_hotel.php?idnom=".$var['id'] ."\"><font color=#FF0000> Voir le descriptif détaillé </font> </a></div><br>"
       ) ;              ?>
                   </div>    
                </div> 
             </article> 
                       <?php
		} ?>   
    
      </div><br>
      <div class="wrapper">
      
         <?php
	                   
		               $sql = 'SELECT *
                               FROM `voyage`
                               LIMIT 0 , 4 ';
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									$voyage_id = $var['id'] ;  
									   ?>
                 <article class="grid_6">
                      <div class="offer maxheight">
                          <div class="title ">
                              <span>voyage</span>
                        <?php echo $var['nom'] ; ?>
                          </div>
                                               <?php
                                               $sql2 = "SELECT * FROM `image` WHERE `select_id` = '$voyage_id' && `type` = \"v\" LIMIT 0 , 1";
                                               $req2 = mysql_query($sql2)  ;
                                               while($var2 = mysql_fetch_assoc($req2))
                                                          {
															  ?>
															  
															  <img src="<?php echo $var2['path'] ; ?>" alt="" width="229" height="175" />
                                                            <?php    
                                                          } 
											 ?>
                     <div class="text ">
                     <?php       echo $var['description'] ;  ?> .<br>
                  <?php       
				    echo(
           "<div align=\"left\">
          
           <a href=\"path/descriptif_detaille_voyage.php?idnom=".$var['id'] ."\"><font color=#FF0000> Voir le descriptif détaillé </font> </a></div><br>"
       ) ;              ?>
                   </div>    
                </div> 
             </article> 
                       <?php
		} ?>   
 </div><br>
      <div class="wrapper">
     
       <?php
	                  
		               $sql = 'SELECT *
                               FROM `promotion`
                               LIMIT 0 , 4 ';
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									$promotion_id = $var['id'] ;  
									   ?>
                 <article class="grid_6">
                      <div class="offer maxheight">
                          <div class="title ">
                              <span>promotion</span>
                        <?php echo $var['nom_h'] ; ?>
                          </div>
                                               <?php
                                               $sql2 = "SELECT * FROM `image` WHERE `select_id` = '$promotion_id' && `type` = \"p\" LIMIT 0 , 1";
                                               $req2 = mysql_query($sql2)  ;
                                               while($var2 = mysql_fetch_assoc($req2))
                                                          {
															  ?>
															  
															  <img src="<?php echo $var2['path'] ; ?>" alt="" width="229" height="175" />
                                                            <?php    
                                                          } 
											 ?>
                     <div class="text ">
                     <?php       echo $var['description'] ;  ?> .<br>
                   <?php       
				    echo(
           "<div align=\"left\">
          
           <a href=\"path/descriptif_detaille_promotion.php?idnom=".$var['id'] ."\"><font color=#FF0000> Voir le descriptif détaillé </font> </a></div><br>"
       ) ;              ?>
                   </div>    
                </div> 
             </article> 
                       <?php
		} ?>   
      </div>
         
       
       
       
       
       
           
           
        
          <div class="wrapper">
            <article class="grid_24">
              <div class="welcome">
                <div class="title1">bienvenue sur notre agence</div>
                <div class="title2">Réservez un vol ou un hotel pour Tunis sur notre site.</div>
                <div class="buttons">
                  <a href="path/voyage.php" class="button1"><span>Voyage</span></a>
                  <strong>OU</strong>
                  <a href="path/hotel.php" class="button1"><span>Hotel</span></a>
                </div>
              </div>
            </article>
          </div>
          <div class="wrapper">
            <article class="grid_7">
              <h2 class="ind">localisation de l'agence </h2>
                <iframe width="280" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.tn/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Lafayette,+Gouvernorat+de+Tunis&amp;aq=3&amp;oq=la&amp;sll=36.924616,10.445931&amp;sspn=0.596124,1.352692&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lafayette,+Bab+Bhar,+Gouvernorat+de+Tunis&amp;ll=36.81327,10.18012&amp;spn=0.021989,0.027466&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                <a href="https://maps.google.tn/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Lafayette,+Gouvernorat+de+Tunis&amp;aq=3&amp;oq=la&amp;sll=36.924616,10.445931&amp;sspn=0.596124,1.352692&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lafayette,+Bab+Bhar,+Gouvernorat+de+Tunis&amp;ll=36.81327,10.18012&amp;spn=0.021989,0.027466&amp;z=14&amp;iwloc=A" class="button"><span>Agrandir</span></a>
            </article>
            <article class="grid_7 prefix_1">
              <h2 class="ind1">plus d'infos </h2>
              <p class="f_14">
                Service que nous offrons sur notre site
              </p>
              
              Notre page Noter Hôtels présente un classement des hôtels par popularité. <br>
              La page Voyage  propose les meilleurs articles  des voyages . <br>
              Utilisez le formulaire de recherche pour trouver des établissements dans d'autres villes à proximité! <br>
              Consultez notre page de contactes pour poser des questions et obtenir des conseils sur cette destination.<br>
              Trouverez locations de vacances pour Tunis.<br> 
              
              
            </article>
            <article class="grid_8 prefix_1 last-col">
              <h2 class="ind2">ce que disent les autres</h2>
              <div class="testimonial">
                <blockquote>
                  <p>" En fin de compte, j'espère que vous aimez ce Site . poser Vos questions et obtenir des conseils sur cette destination."</p>
                  <div class="f_14">
                    MERCI A VOTRE VISITE 
                  </div>
                </blockquote>
                <figure>
                  <a href="#" class="img_wrap">
                    <img src="images/1page_img1.jpg" alt="" />
                  </a>
                </figure>
              </div>
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
              <a href="" class="f_logo"><img src="images/f_logo.png" alt="" /></a> <span>&nbsp;
              &copy;&nbsp; 2013&nbsp; | <a href="">Politique de confidentialité</a></span><br>
              <!-- {%FOOTER_LINK} -->
            </div>
          </div>
          <div class="grid_7">
            <h2>articles</h2>
            <ul class="articles">
              <li>
                <a href="path/voyage.php">Reserver ou meilleurs Voyage Dans la page Voyage .</a>
                
              </li>
              <li>
                <a href="path/hotel.php">Reserver ou meilleurs Hotel Dans la page Notre Hotel .</a>
                
              </li>
            </ul>
          </div>
          <div class="grid_4 prefix_1">
            <h2>Navigation</h2>
            <ul class="links_list">
                <li class="current"><a href="index.php">Accueil</a></li>
                <li><a href="path/hotel.php">Notre Hôtel</a></li>
                <li><a href="path/promotion.php">Notre Promos</a></li>
                <li><a href="path/voyage.php">Vols</a></li>
                <li><a href="path/gallery.php">Gallery</a></li>
                <li><a href="path/contacts.php">contacts</a></li>
            </ul>
          </div>
          <div class="grid_4 last-col">
            <h2>liens rapides</h2>
            <ul class="links_list">
              <li><a href="">Blog </a></li>
              <li><a href="">Facebook</a></li>
              <li><a href="">Twitter</a></li>
              <li><a href="admin/admin.php">administrateur </a></li>
            </ul>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </footer>


</body>
</html>