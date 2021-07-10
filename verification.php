<?php
include('connection.php');
$bd=con();

if(isset($_POST['username']) && isset($_POST['password'])&& !empty($_POST['username']) && !empty($_POST['password']))
{
  
 $req="SELECT count(*) as calcule from admin  where login='$_POST[username]' and password='$_POST[password]'" ;
 
 $ret=mysqli_query($bd,$req);
 $row=mysqli_fetch_array($ret);
if($row['calcule']>0)
{

            session_start();
            $_SESSION['login']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];
            $_SESSION['logtime']=time();
            header('location: admin_index.php');
 
}
else
{
  // echo "mot de passe ou login incorrect"; //ereur1
    header('location: login.php?erreur=1');
}
}
else{    // echo "login ou mot de passe non definit";//erreur2
    header('location: login.php?erreur=2'); 
}
?>