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
     
     <style>
		.error
		{
			border:1px solid #000;
			border-color:#F9F;
			text-align:center;
			font-size:15px;
			display:none;
			
		}
		#div_carte { 
		height : 300px; /* IMPERATIF */ 
		width : 250px; 
		margin : auto; 
		border : 1px solid #888; 
		} 

</style>
	
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
            <article class="grid_7">
              <h2 class="ind1">INFORMATIONS PRATIQUES : </h2>
              <ul class="ext_list we_are">
                <li>
                  <figure>1</figure>
                  <div> <b>PROMOTION SUR L'HOTEL : </b><br>
                   <?php
				       $id  = $_GET["idnom"] ;	
		               $sql =  " SELECT * FROM `promotion` WHERE id = '$id' LIMIT 0, 1 "  ;
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									echo $var['nom_h'] ;  
								    $promotion_id = $var['id'] ;
									$nomhotel = $var['nom_h'] ;
									$sql_geo = mysql_query("SELECT * FROM `geolocalisation` WHERE `select_id` = '$promotion_id' AND `type` = \"p\" LIMIT 0 , 1 ");
										while($rows = mysql_fetch_assoc($sql_geo))
											  {
													$len = $rows['longitude'] ;
													$lon = $rows['latitude'] ;	  
											  }
				   ?>
                  </div>
                </li>
                <li>
                  <figure>2</figure>
                  <div>
                  <b> ADRESSE :</b><br>
                    <?php
					                echo $var['adresse_h'] ;
					?>
                  </div>
                </li>
                <li class="last bd_n">
                  <figure>3</figure>
                  <div>
                  <b>PRIX :  </b>
                   <?php
								  echo $var['prix'] ;
							  
				   ?> $ <br>
                   <b>ANNONCE :  </b>
                  <?php
								  echo $var['description'] ;
							  
				   ?> $ <br>                   
                  </div>
                </li>
             <li class="last bd_n">
             <figure>4</figure>
                 <b>Géolocalisation</b>
               <div id="div_carte">
               
				<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
                <script type="text/javascript"> 
						function initCarte(){ 
								// cr�ation de la carte 
								var oMap = new google.maps.Map( document.getElementById( 'div_carte'),{ 
								'center' : new google.maps.LatLng( <?php echo $len ;  ?> , <?php  echo $lon ;  ?> ), 
								'zoom' : 10, 
								'mapTypeId' : google.maps.MapTypeId.ROADMAP 
						}); 
					} 
					// init lorsque la page est charg�e 
					google.maps.event.addDomListener( window, 'load', initCarte); 
                </script> 
               
               
               </div> 
              </ul>
            </article>
            <article class="grid_16 last-col prefix_1">
              <div class="box">
                <h2 class="ind1">DESCRIPTION</h2>
                <p class="f_14">
                <?php
				                   echo $var['description2'] ;
							 
				?>
                
                
                .</p>
               <br>
                <?php echo(
           "<div class=\"button\" align=\"left\">
          
           <a href=\"../include/reserver_promo.php?idnom=".$var['id'] ."\"> <font color=#ffffff ><h1> Reserver </h1></font> </a></div><br>"
       ) ;              ?>
              </div>
              <h2 class="ind3"> <?php
				                   echo $var['nom_h'] ;
							 
				?></h2>
              <div class="wrapper team_box m_bot1">
               <?php
			   ?>  
               <?php
                      $sql2 = "SELECT * FROM `image` WHERE `select_id` = '$promotion_id' && `type` = \"p\" LIMIT 0 , 3";
                      $req2 = mysql_query($sql2)  ;
                      while($var2 = mysql_fetch_assoc($req2))
                         {
						    ?><div class="team first">
							 <img src="../<?php echo $var2['path'] ; ?>" alt="" width="175" height="160" />
                            <?php    
                         
								  
				 ?>
                 </div>
				 <?php
						 }
								  }
				 ?>
              
                  
                
                
                
               
                
                
              </div>
            </article>
        </div>
        
         <hr>
        <h3> <font color="#FF0000" > Les Commentaire sur la Promotion de Hotel <?php  echo $nomhotel ; ?> 
                                  </font></h3>
        <br><br><br><br>
            
     <?php
	 if(isset($_POST['submit']))
	  {
		  	$nom = mysql_real_escape_string(htmlentities(trim($_POST['nom'])));
			$email =  mysql_real_escape_string(htmlentities(trim( $_POST['email']))) ;		
			$message =  mysql_real_escape_string(htmlentities(trim($_POST['message']))) ; // pour securiser mysql
		if($nom && $email && $message ) 
		{
			if(strlen($nom)>25)
			{
				echo "<b><font color=#FF0000>Votre nom ne doit pas depasser Les 25 caracteres</font></b>";
			}else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				echo"<b><font color=#FF0000>Veuiller saisir un email valide</font></b>";
			}else if (strlen($message)>120)
			{
				echo "<b><font color=#FF0000>Voter message ne doit pas depasser les 120 caracteres</font></b>";
			}else
			{
			$query = mysql_query (" INSERT INTO `db_pfe`.`livredor` (`id`, `nom`, `email`, `message`, `id_select`, `type`) VALUES (NULL, '$nom', '$email', '$message', '$id', 'p') " )  ;	
			if ($query)
			{
				

			}else echo " il y'a un ereur  " ;
			
				
			}
			
			
		}else echo "   <b><font color=#FF0000>Vous dever saisir tous les champs pour pouvoir poster un commentaire </font></b>" ;
	  }
	                
		$select = mysql_query("SELECT * FROM livredor WHERE `id_select` = '$id' && `type` = \"p\"  ORDER BY id DESC ");
		while ($row = mysql_fetch_assoc($select))
					{
				       echo "<b> Poster par : </b>".$row['nom']." &nbsp;&nbsp;&nbsp; <b>Email : </b>".$row['email']."<br><strong>".$row['message']."</strong><br><br><br>";
					} 
	 
	 
	 
	 ?>       
            
            
         <form action="" method="post">               
            <hr>
            <strong> Poster un commentaire</strong>
            <p>Votre nom : </p>
            <input type="text" name="nom" id="nom" ><span class ="error"></span> 
            <p>Votre email : </p>
            <input type="text" name="email" id="mail"><span class= "error"></span>
            <p>Votre message : </p>
             <textarea id="message" name="message" rows="6" cols="35"></textarea><span class="error"></span>
             <br><br>
             <input type="submit" name="submit" value="Poster" class="button" id="submit">
             </form>
             <script type="text/javascript" src="jquery.js"></script>
             <script type="text/javascript" src="../js/func.js"></script>
            
             
        
        
        
        
        
        
        
        
        
        
        
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