<?php
session_start();
$_SESSION["Login"] = 'Romain';
$_SESSION["Password"] = '2020';

?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="connexion.php">
<html>

 

<head>
    <header>
    
</header>
</head>
<body>

<title>Securite</title>

<p> <?php echo $_SESSION["Login"]; 
echo"<p> </p>";
echo $_SESSION["Password"]; ?> <br/>
 </p>
 
<?php if ($_SESSION["Password"] <> 2020) 
echo "Mauvais couple identifiant / mot de passe";
if ($_SESSION["Login"] <> "Romain") 
echo "Mauvais couple identifiant / mot de passe";
if ($_SESSION["Password"] = 2020) 
$_SESSION ['Key'] = "id";
header ("mini-site-rooting.php");
if ($_SESSION["Login"] = "Romain") 
$_SESSION ['Key'] = "id";
header ("mini-site-rooting.php");;


?>



</body>



<footer>
  




</footer>
