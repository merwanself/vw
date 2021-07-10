<?php
session_start();
if ($_SESSION['login']){
?>

<!DOCTYPE html>
<html>
<head>
	<title>supprimer</title>
		<meta charset="utf-8">
		</head>
<body>
<?php
include('connection.php');
$bd=con();
$id=$_GET['id'];
$resultat="DELETE FROM `produits` WHERE  id='$id'";
$req=mysqli_query($bd,$resultat);
if ($resultat)
{
    ?>
    <script type="text/javascript">
				alert("Enregistrement supprimer.");
				window.location = "modifie.php";
  </script>
<?php
}
else{
    echo"erreur!!!!!!!!!!!!!";
    //header('location:index_membre.php');
}
}
else{
    header('location:#');  
}
?>
	
	
</body>
</html>
