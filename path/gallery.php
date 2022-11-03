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
                <li class="current"><a href="gallery.php">Gallery</a></li>
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
          <article class="grid_24">
            <h2 class="ind4">Gallery</h2>
 
            <div class="wrapper m_bot2">
             <?php	
			$adresse="../images_voyage/";
            $dossier= Opendir($adresse);
			echo"<center>";
		              
	                       while ($Fichier = readdir($dossier))
			                     { 	
								   if ($Fichier != "." && $Fichier != "..") // Filtre anti-point ! 
								    {
			                 ?>
                              <div class="grid_8 alpha">  <! repeter 3 foi >
                                 <div class="solution">
                                <?php 
								    echo '<a href='.$adresse.$Fichier.' target="_self"><img src="'.$adresse.$Fichier.'"  WIDTH=290 HEIGHT=280 BORDER=3/></a>';                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;" ;
								?>                                   
                                
                                 <div class="f_14 title"><a href="#"></a></div>
                                 
                                 
                                 
                                 
                                 
                                </div>
                             </div> 
                     <?php 
		                              }	
		                  }
                    echo"</center>";
	                closedir($dossier);
			?>
             
             
             </div> 
			 <div class="wrapper m_bot2"> 
              <?php	
			$adresse="../images_promos/";
            $dossier= Opendir($adresse);
			echo"<center>";
		              
	                       while ($Fichier = readdir($dossier))
			                     { 	
								   if ($Fichier != "." && $Fichier != "..") // Filtre anti-point ! 
								    {
			                 ?>
                              <div class="grid_8 alpha">  <! repeter 3 foi >
                                 <div class="solution">
                                <?php echo '<a href='.$adresse.$Fichier.' target="_self"><img src="'.$adresse.$Fichier.'"  WIDTH=290 HEIGHT=280 BORDER=3/></a>';                                 ?>                                   
                                
                                 
                                 
                                 
                                 
                                 
                                </div>
                             </div> 
                  <?php 
		   }	
		}
	  echo"</center>";
	  closedir($dossier);
?>
             
             
           </div> 
			 <div class="wrapper m_bot2"> 
             
              <?php	
			$adresse="../images_hotel/";
            $dossier= Opendir($adresse);
			echo"<center>";
		              
	                       while ($Fichier = readdir($dossier))
			                     { 	
								   if ($Fichier != "." && $Fichier != "..") // Filtre anti-point ! 
								    {
			                 ?>
                              <div class="grid_8 alpha">  <! repeter 3 foi >
                                 <div class="solution">
                                <?php echo '<a href='.$adresse.$Fichier.' target="_self"><img src="'.$adresse.$Fichier.'"  WIDTH=290 HEIGHT=280 BORDER=3/></a>'; ?>                                   
                                
                                 
                                 
                                 
                                 
                                 
                                </div>
                             </div> 
                  <?php 
		   }	
		}
	  echo"</center>";
	  closedir($dossier);
?>
             
              
              
              
             </div>
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
                <li><a href="hotel.php">Notre Hôtel</a></li>
                <li><a href="promotion.php">Notre Promos</a></li>
                <li><a href="voyage.php">Vols</a></li>
                <li class="current"><a href="gallery.php">Gallery</a></li>
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