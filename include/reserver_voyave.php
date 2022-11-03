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
		               $id  = $_GET["idnom"] ;
					  include('connect.php');
			          construct() ;
					   mysql_query("SET NAMES UTF8" );
		               $sql =  " SELECT * FROM `voyage` WHERE id = '$id' LIMIT 0, 1 "  ;
                       $req = mysql_query($sql)  ;
                       while($var = mysql_fetch_assoc($req))
                                  {
									  ?><b> VOYAGE : </b><?php          echo $var['nom']  ; ?> <br> <br><?php 
								      ?><b> JOUR D'ARRIVEE </b> <?php          echo $var['date1']  ; ?> <br><br> <?php 
									$hotel = $var['nom'] ;
									$prix = $var['prix'] ;
									$d = $var['date1'] ;
								  }
					   
					   
			  if(isset($_POST['submit']))
                   { 
					$x1 = $_POST['nom'];
					$x2 = $_POST['prenom'];
					$x3 = $_POST['email'];
					$x4 = $_POST['tel'];
					$x5 = $_POST['cin'];
					
	                
					if($x1 && $x2 && $x3 && $x4 && $x5 )
					{
						
						$sql = "INSERT INTO `db_pfe`.`reservation` (`id`, `type`, `nom_type`, `id_type`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `cin_client`, `nb_bebe`, `nb_enfant`, `date`, `nb_nuit`, `chambre`, `prix_final`) VALUES (NULL, 'voyage', '$hotel', '$id', '$x1', '$x2', '$x3', '$x4', '$x5', ' ', ' $d ', ' ', ' ', ' ', ' $prix ');";	
						$req = mysql_query($sql)  ;
						
						
						if($req )
  {
    $sqlid = "SELECT * FROM `reservation` WHERE `nom_client` = '$x1' LIMIT 0, 1 ";
	$reqid = mysql_query($sqlid) ;
	 while($var2 = mysql_fetch_assoc($reqid))
                    {
						$id_client = $var2['id'] ;
					}
	header('Location:confermer_reservation_voyage_paypal.php?id_client='.$id_client.'') ;
	
  }else
  {
    echo("<center>L' <font color=#FF0000> insertion </font> à échouée</center>") ;
	
  }
						
					}else {
						print("<center>SVP il y'a un '<b> <font color=#FF0000>  champ </font> </b>' vide !</center>");
					}
			}
              ?>
              
              
              
              <form action="#" method="post" id="form1" name="form1" enctype="multipart/form-data" >
              <font color="#000000" size="+2">
              
              Votre Nom : <input type="text" name="nom" id="nom" value=""><span class ="error"></span><br><br>
              Votre Prenom : <input type="text" name="prenom" id="prenom" value=""><span class ="error"></span><br><br>
              Votre E-mail : <input type="text" name="email" id="email" value=""><span class ="error"></span><br><br>
              Votre Telephon : <input type="text" name="tel" id="tel" value=""><span class ="error"></span><br><br>
              CIN : <input type="text" name="cin" id="cin" value=""><span class ="error"></span><br><br>
           
                <br><br><br>
                 
             <input type="submit" class="button" value="Valider" name="submit" >
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