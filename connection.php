<?php
function con(){
      $connect=mysqli_connect("localhost","root","","vw")
     
     or
     die('pleach check connettion to data base');
     return $connect;
}
?>