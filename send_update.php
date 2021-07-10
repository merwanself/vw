<?php

$bd=mysqli_connect("localhost","root","","vw");
$id=$_GET['id'];
$libelle=$_POST['libelle'];
$detail=$_POST['detail'];
$category=$_POST['category'];


$requete="UPDATE `produits` SET  libelle='$libelle',detail='$detail' ,category='$category ' WHERE id='$id'";


$result=mysqli_query($bd,$requete);
if ($result) {
    header('location:modifie.php');
}else{
    echo"you cant save pleas chek your input";
}

?>