<!DOCTYPE html>
<html lang="en">
<head>
    <title>rohban</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/superfish.js"></script>
	 <script type="text/javascript" src="../js/jquery.responsivemenu.js"></script>
	 <script type="text/javascript" src="../js/jquery.mobilemenu.js"></script>
	 <script type="text/javascript" src="../js/jquery.flexslider.js"></script>
	 <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	 <script src="../js/jquery.equalheights.js"></script>
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
                <li class="current"><a href="promotion.php">Notre Promos</a></li>
                <li><a href="voyage.php">Vols</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contacts.php">contacts</a></li>
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
				 
                 mysql_connect('localhost','root','');
				 mysql_select_db('db_pfe');
				 mysql_query("SET NAMES 'utf8'");
                 
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
    <section id="content" class="cont_pad1">
    	<div class="container_24">
        <div class="wrapper">
            
            
            
            
             <?php
	                     include('../include/fonction.php');
	                     $nbr_page = ceil(nbr_promos()/ 4); 
 
						 if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] > $nbr_page || $_GET['page'] <= 0 )
						 {
							 $page = $_GET['page'] = 1 ;
						 }else{
							 $page = (int)$_GET['page'];
						 }
						 
						$results = afficher_promos($page,4);
						 
						 foreach($results as $result)
						 {
							 		
									$promotion_id = $result['id'] ;  
		   ?>
                 <article class="grid_6">
                      <div class="offer maxheight">
                          <div class="title ">
                              <span>promotion</span>
                        <?php echo $result['nom_h'] ; ?>
                          </div>
                                               <?php
                                               $sql2 = "SELECT * FROM `image` WHERE `select_id` = '$promotion_id' && `type` = \"p\" LIMIT 0 , 1";
                                               $req2 = mysql_query($sql2)  ;
                                               while($var2 = mysql_fetch_assoc($req2))
                                                          {
															
															  ?>
															  
															  <img src="../<?php echo $var2['path'] ; ?>" width="229"  height="175" />
                                                            <?php    
                                                          } 
											 ?>
                     <div class="text ">
                     <?php       echo $result['description'] ;  ?> .<br>
                  <?php       
				    echo(
           "<div align=\"left\">
          
           <a href=\"descriptif_detaille_promotion.php?idnom=".$result['id'] ."\"><font color=#FF0000> Voir le descriptif détaillé </font> </a></div><br>"
       ) ;              ?>
                   </div>    
                </div> 
             </article> 
                       <?php
		} ?>   
       </div>
       <br><br>
       <center>   
         <?php // 
        $i = 1 ;
        while($i<=$nbr_page)
        {   
            echo "<a class=button href='?page={$i}'> ".$i." </a> "; // affiche le nb nombre de page
            
            $i++ ;
        }  
         // fin de l'affiche le nb nombre de page
        ?> 
        </center>
       
       
       
       
       
        <div class="stripe"></div>
        <div class="wrapper">
          <article class="grid_16">
            <h2 class="ind1">nouveau annonce sur des hotel :</h2>
            <ul class="ext_list s_overview">
              
              <?php
             $sql3 = " SELECT * FROM `hotel` ORDER BY `hotel`.`id` DESC LIMIT 0, 2 ";
             $req3 = mysql_query($sql3)  ;
              while($var3 = mysql_fetch_assoc($req3))
                                  { 
								     $hotel_id2 = $var3['id'] ;  
								     ?>  
								        <li>
                                     <?php   
									           $sql4 = "SELECT * FROM `image` WHERE `select_id` = '$hotel_id2' && `type` = \"h\" LIMIT 0 , 1";
                                               $req4 = mysql_query($sql4)  ;
                                               while($var4 = mysql_fetch_assoc($req4))
                                                          {
															?>
															   <figure><a href="descriptif_detaille_hotel.php?idnom=<?php echo $var3['id'] ; ?> " class="img_wrap"> <img height="144" width="202" src="../<?php echo $var4['path'] ; ?>" alt="" /></a></figure>
                                                            <?php 
														  }
											?>
                                             <div> 
											 <p class="f_14"> HOTEL  <?php       echo $var3['nom'] ;  ?> .</p>
											 <?php       echo $var3['description'] ;  ?> .<br>
                                             <?php       echo $var3['adresse'] ;  ?> .<br>
											  <?php       
				    echo(
           "<div align=\"left\">
          
           <a class= button href=\"descriptif_detaille_hotel.php?idnom=".$var3['id'] ."\"> Voir </a></div><br>"
       ) ;              ?>
											 <?php			  
								  }
		?>									 
              
              
              
              
            </ul>
          </article>
          </article>
          
          <article class="grid_8">
            <h2 class="ind4">localisation de l'agence :</h2>
            <span class="map_wrapper">
              <iframe width="280" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.tn/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Lafayette,+Gouvernorat+de+Tunis&amp;aq=3&amp;oq=la&amp;sll=36.924616,10.445931&amp;sspn=0.596124,1.352692&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lafayette,+Bab+Bhar,+Gouvernorat+de+Tunis&amp;ll=36.81327,10.18012&amp;spn=0.021989,0.027466&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                <a href="https://maps.google.tn/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Lafayette,+Gouvernorat+de+Tunis&amp;aq=3&amp;oq=la&amp;sll=36.924616,10.445931&amp;sspn=0.596124,1.352692&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lafayette,+Bab+Bhar,+Gouvernorat+de+Tunis&amp;ll=36.81327,10.18012&amp;spn=0.021989,0.027466&amp;z=14&amp;iwloc=A" class="button"><span>Agrandir</span></a>
             </span>
            <dl class="adress">
              <dd><span>Telephone:</span>+ 216 98517784</dd>
              <dd><span>FAX:</span>+216 22205879</dd>
              <dd>E-mail: <a href="#" class="demo">wkhelifi64@gmail.com</a></dd>
            </dl>
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
              &copy;&nbsp; 2013&nbsp; | <a href="">Politique de confidentialité</a></span>
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
                <li class="current"><a href="promotion.php">Nos Promos</a></li>
                <li><a href="voyage.php">Vols</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contacts.php">contacts</a></li>
            </ul>
          </div>
          <div class="grid_4 last-col">
            <h2>quick links</h2>
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