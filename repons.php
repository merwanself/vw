<?php
session_start();
if ($_SESSION['login']){
?>

<!DOCTYPE html>
<html>
<head>
	<title>repons</title>
		<meta charset="utf-8">
		</head>
<body>
<?php
include('connection.php');
$bd=con();
$id=$_GET['id'];
$resultat="SELECT 'adress' FROM 'message' where adress='$id'";
$req=mysqli_query($bd,$resultat);
if ($resultat)
{
    ?>
    <script type="text/javascript">
				alert("message hase been sent .");
				window.location = "admin_index.php";
  </script>
<?php
}
else{
    echo"erreur!!!!!!!!!!!!!";
    //header('location:admin_index.php');
}
}
else{
    header('location:login.php');  
}
?>
	
	
</body>
</html>
