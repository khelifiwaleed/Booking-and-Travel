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
<style>
.error
{
	border:1px solid #000;
	border-color:#F9F;
	text-align:center;
	font-size:15px;
	display:none;
	
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
          
              <center>
                 <?php      
		               $id  =(int)$_GET["idnom"] ;
					   if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] > $nbr_page || $_GET['page'] <= 0 )
						 {
							 $page = $_GET['page'] = 1 ;
						 }else{
							 $page = (int)$_GET['page'];
						 }
					   include('connect.php');
			           construct() ;
					   mysql_query("SET NAMES UTF8" );
		               $sql =  " SELECT * FROM `hotel` WHERE id = '$id' LIMIT 0, 1 "  ;
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									  ?><b> HOTEL : </b><?php          echo $var['nom']  ; ?> <br> <br><?php 
								      ?><b> ADRESSE : </b> <?php          echo $var['adresse']  ; ?> <br><br> <?php 
									$hotel = $var['nom'] ;
									$prix = $var['prix'] ;
								  }
					   
					   
			  if(isset($_POST['submit']))
                   { 
					$x1 = $_POST['nom'];
					$x2 = $_POST['prenom'];
					$x3 = $_POST['email'];
					$x4 = $_POST['tel'];
					$x5 = $_POST['cin'];
					$x6 = $_POST['bebe'];
					$x7 = $_POST['enfant'];
					$x8 = $_POST['date'];
					$x9 = $_POST['nb_nuit'];
					$x10 = $_POST['chambre'];
	                
					if($x1 && $x2 && $x3 && $x4 && $x5 && $x8)
					{    
					    $prix_final =  ((( $x7 + $x10 ) * ( $prix )) * $x9 )   ;
						// pour inserer la date
                        $xplod = explode('/',$x8); // supprimer les "/"
                        $string = "$xplod[2]-$xplod[1]-$xplod[0]";        // ajouter un "-" de separation
                        $date = date("y-m-d", strtotime($string)) ;         // format de la date
						$sql = "INSERT INTO `db_pfe`.`reservation` (`id`, `type`, `nom_type`, `id_type`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `cin_client`, `nb_bebe`, `nb_enfant`, `date`, `nb_nuit`, `chambre` , `prix_final`) VALUES (NULL, 'hotel', '$hotel', '$id', '$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$date', '$x9', '$x10' , '$prix_final');";	
						$req = mysql_query($sql)  ;
						if($req )
  {
    $sqlid = "SELECT * FROM `reservation` WHERE `nom_client` = '$x1' LIMIT 0, 1 ";
	$reqid = mysql_query($sqlid) ;
	 while($var2 = mysql_fetch_assoc($reqid))
                    {
						$id_client = $var2['id'] ;
					}
	header('Location:confermer_reservation_hotel_paypal.php?id_client='.$id_client.'') ;
	
  }else
  {
    echo("<center>L' <font color=#FF0000> insertion </font> à échouée</center>") ;
	
  }
						
					}else {
						print("<center>SVP il y'a un '<b> <font color=#FF0000>  champ </font> </b>' vide !</center>");
					}
			}
              ?>
              
              
              
              <form action="#" method="post" id="form1" name="form1" enctype="multipart/form-data">
              <font color="#000000" size="+2">
              
              Votre Nom : <input type="text" name="nom" id="nom" value="" ><span class ="error"></span> <br><br>
              Votre Prenom : <input type="text" name="prenom" id="prenom" value=""><span class ="error"></span><br><br>
              Votre E-mail : <input type="text" name="email" id="email" value=""><span class ="error"></span><br><br>
              Votre Telephon : <input type="text" name="tel" id="tel" value=""><span class ="error"></span><br><br>
              CIN : <input type="text" name="cin" value="" id="cin"><span class ="error"></span><br><br>
              Bébé(s) (0-3 ans ) : &nbsp;&nbsp;&nbsp;  Enfant(s)(2-12 ans  ) : <br> 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="bebe" size="+1" >
						<option value="0">  0           </option>
                        <option value="1">  1           </option>
                        <option value="2">  2           </option>
                        
                 </select>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="enfant" size="+1" >
						<option value="0">  0           </option>
                        <option value="1">  1          </option>
                        <option value="2">  2          </option>
                        <option value="3">  3            </option>
                  
                 </select>
               <br><br>
               Votre jour d'arrivée à l'hôte : <input type="text" name="date" class="tcal" value="" id="date"> <span class ="error"></span><br><br>
                Le nombre de nuit :  
                  <select name="nb_nuit" id="nb_nuit"> 
					  				     <option value="1">2 jours / 1 nuit</option>
							  		     <option value="2">3 jours / 2 nuits</option>
					  				     <option value="3">4 jours / 3 nuits</option>
					  					 <option value="4">5 jours / 4 nuits</option>	
					  					 <option value="5">6 jours / 5 nuits</option>	
					  					 <option value="6">7 jours / 6 nuits</option>	
					  					 <option value="7">8 jours / 7 nuits</option>	
			      </select> <br><br>
                
        
              Nombre De Perssone : 
                <select name="chambre" size="+1" id="chambre" >
						<option value="1">  1           </option>
                        <option value="2">  2           </option>
                        <option value="3">  3           </option>
                        <option value="4">  4            </option>
                        <option value="5">  autre            </option>
                 </select>
                 
                  <br><br><br>
                 
             <input type="submit" class="button" value="Valider" name="submit" id="submit" >
             <input type="reset" class="button" value="Annuler" >    
          </font>  
          </form>
          <script type="text/javascript" src="jquery.js"></script>
          <script type="text/javascript" src="../js/func2.js"></script>
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