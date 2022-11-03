<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php
  include('connect.php');
  construct() ;

  function afficher_hotel($page,$per_page)  // afficher tous les hotel
  { 
		$debut = (int)($page-1)*$per_page ;
		$per_page = (int)$per_page;
		
		
		$results = array() ;
		$sql = mysql_query(" SELECT * FROM `hotel` LIMIT {$debut}, {$per_page}");  
		while($row = mysql_fetch_assoc($sql))
	  {
		   $results[] = $row ; 
	  }
	  return $results ; 
  }
  
  function nbr_pays()     // nombre des hotels 
{	
	$req = mysql_query("SELECT COUNT(id) FROM `hotel` ");
	return mysql_result($req,0) ;
	
		
}
  
  
  
  function afficher_promos($page,$per_page)   // afficher tous les promos
  { 
		$debut = (int)($page-1)*$per_page ;
		$per_page = (int)$per_page;
		
		
		$results = array() ;
		$sql = mysql_query(" SELECT * FROM `promotion` LIMIT {$debut}, {$per_page}");  
		while($row = mysql_fetch_assoc($sql))
	  {
		   $results[] = $row ; 
	  }
	  return $results ; 
  }
  
   function nbr_promos()  // nb de promos
{	
	$req = mysql_query("SELECT COUNT(id) FROM `promotion` ");
	return mysql_result($req,0) ;
	
		
}
  
  
   
   function afficher_vol($page,$per_page)   // tous les voyages
  { 
		$debut = (int)($page-1)*$per_page ;
		$per_page = (int)$per_page;
		
		
		$results = array() ;
		$sql = mysql_query(" SELECT * FROM `voyage` LIMIT {$debut}, {$per_page}");  
		while($row = mysql_fetch_assoc($sql))
	  {
		   $results[] = $row ; 
	  }
	  return $results ; 
  }
  
  
 function nbr_vol()    // nb de tous les voyages
{	
	$req = mysql_query("SELECT COUNT(id) FROM `voyage` ");
	return mysql_result($req,0) ;
	
		
}
   






?>


</body>
</html>