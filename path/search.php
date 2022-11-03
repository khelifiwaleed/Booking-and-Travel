<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recherche</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/superfish.js"></script>
	 <script type="text/javascript" src="../js/jquery.responsivemenu.js"></script>
	 <script type="text/javascript" src="../js/jquery.mobilemenu.js"></script>
   <script type="text/javascript" src="../js/jquery.equalheights.js"></script>
	 <script src="js/script.js"></script>
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
                <li><a href="contacts.php">contacts</a></li>
             </ul>
              
              
              
              
              <form id="search" action="../index.php">
                <input type="text" name=""  />
                  <a onClick="document.getElementById('search').submit()"></a>
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
          <?php 
          $rech = $_GET['s'];
		  $rech = trim($rech);
		  include('../include/connect.php');
          construct() ;
		  if ($rech == '')
		  { echo "<h2>La rechrche est vide !</h2>" ;  } else {
           ?><h2>Recherche Sur<?php   echo $rech ; ?></h2>  
                
                
                 <?php 
				 $rech = trim($rech);
				 $rech='%'.$rech.'%';
                 $sql_rech = "SELECT * FROM `hotel` WHERE `nom` LIKE '$rech' LIMIT 0, 30 ";
                 $req_rech = mysql_query ($sql_rech) ;
					while($row_rech = mysql_fetch_assoc($req_rech))	
						{   ?>    <article class="grid_7"> <?php
							?> <dl class="menu"> <?php
							?> <dd><span> <?php echo $row_rech['nom'] ;    ?> </span><em>  <?php  echo $row_rech['prix'];   ?> $ </em></dd> <?php
							?> <dd><span> <?php echo $row_rech['adresse'] ;    ?> </span></dd> </dl> <?php
							?>  <a href="descriptif_detaille_hotel.php?idnom=<?php echo $row_rech['id'] ;?>"class="button"><span>Voir </span></a>   <?php
						  	?> </article> <?php
								
						}
				  
		  }
			    ?> 
                
                
                
          
          
          
          
        </div>
        <div class="stripe1"></div>
        <div class="wrapper">
          <article class="grid_7">
            <h2 class="ind3"> Nouveau Annonce Sur Des Voyages :</h2>
            
                <?php
             $sql3 = " SELECT * FROM `voyage` ORDER BY `voyage`.`id` DESC LIMIT 0, 1 ";
             $req3 = mysql_query($sql3)  ;
              while($var3 = mysql_fetch_assoc($req3))
                                  { 
								     $hotel_id2 = $var3['id'] ;  
								     ?>  
								        
                                     <?php   
									           $sql4 = "SELECT * FROM `image` WHERE `select_id` = '$hotel_id2' && `type` = \"v\" LIMIT 0 , 1";
                                               $req4 = mysql_query($sql4)  ;
                                               while($var4 = mysql_fetch_assoc($req4))
                                                          {
															?>
															   <p class="p2"><a href="descriptif_detaille_voyage.php?idnom=<?php echo $var3['id'] ; ?> " class="img_wrap"> <img height="150" width="280" src="../<?php echo $var4['path'] ; ?>" /></a></p>
                                                            <?php 
														  }
														  
								  								?>
            <p class="f_14 p3"><a href="descriptif_detaille_voyage.php?idnom=<?php echo $var3['id'] ; ?> "><?php       echo $var3['description'] ;  ?> .<br></a></p>
           
           <?php       
				    echo(
           "<div align=\"left\">
          
           <a class= button href=\"descriptif_detaille_voyage.php?idnom=".$var3['id'] ."\"> Voir </a></div><br>"
       ) ;             
	   }
	    ?>
       
          </article>
          <article class="grid_16 last-col prefix_1">
            <h2 class="ind4">Nouveau Annonce Sur Des Hotels :</h2>
            <ul class="ext_list s_overview">
            
            
             <?php
             $sql3 = " SELECT * FROM `promotion` ORDER BY `promotion`.`id` DESC LIMIT 0, 2 ";
             $req3 = mysql_query($sql3)  ;
              while($var3 = mysql_fetch_assoc($req3))
                                  { 
								     $promo_id2 = $var3['id'] ;  
								     ?>  
								       
                                     <?php   
									           $sql4 = "SELECT * FROM `image` WHERE `select_id` = '$promo_id2' && `type` = \"p\" LIMIT 0 , 1";
                                               $req4 = mysql_query($sql4)  ;
                                               while($var4 = mysql_fetch_assoc($req4))
                                                          {
															?>
															  <li> <figure><a href="descriptif_detaille_promotion.php?idnom=<?php echo $var3['id'] ; ?> " class="img_wrap"> <img height="144" width="202" src="../<?php echo $var4['path'] ; ?>" alt="" /></a></figure>
                                                                <?php 
														  }
											?>
            
                <div>
                  <p class="f_14"><a href="descriptif_detaille_promotion.php?idnom=<?php echo $var3['id'] ; ?> "><?php       echo $var3['description'] ;  ?>. <br></a></p>
                   <?php      
				    echo $var3['adresse_h'] ;  ?> . <br/>
                 <?php
				  echo(
           "<div align=\"left\">
          
           <a class= button href=\"descriptif_detaille_promotion.php?idnom=".$var3['id'] ."\"> Voir </a></div><br>"
       ) ;              ?>
											 <?php			  
								  }
		?>							
                </div>
              </li>
            </ul>
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
                <li><a href="hotel.php">Notre Hôtel</a></li>
                <li><a href="promotion.php">Noter Promos</a></li>
                <li><a href="voyage.php">Vols</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contacts.php">contacts</a></li>
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