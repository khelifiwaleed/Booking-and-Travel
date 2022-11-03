<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>admin</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/style2.css" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">

        <div id="logo">
        </div>
        <div id="updates">
        <span>Interface de l'administrateur</span>
        </div>
        <div id="login">
        <div id="loginwelcome">Welcome </div>

<?php
  session_start();
if(isset($_POST['submit']))
{
$x1 = htmlspecialchars(trim ($_POST['a1']));
$x2 = htmlspecialchars(trim ($_POST['a2']));
if($x1 && $x2) 
{ 

 include('include/config.php');
 construct() ;
$req = mysql_query("      SELECT * FROM `admin` WHERE `usernam` = '$x1' && `mot_de_passe` = '$x2'  ")  ;
$rows = mysql_num_rows($req) ;
if ($rows == 1)
{ 
$_SESSION['usernam'] = $x1 ;

header('Location:path/login.php') ;
}else {
print("<center>SVP il y'a un '<b><font color=#FF0000 >  champ </font> </b>' incorrects !</center>");	
}
}
else 
{ 
print("<center>SVP il y'a un '<b><font color=#FF0000 >  champ </font> </b>' vide !</center>");

}
}
?>       

 






             <form method="post" >
                <p>
               <input type="text" name="a1" class="username"  >
                <input type="password" name="a2" class="password"  >
                <input type="submit"  value="Connecter" name="submit">
                </p>
            </form>
        </div></div></div>

           

</body>
</html>