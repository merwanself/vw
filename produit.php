<?php
$id =$_GET['id'];    
    $bd=mysqli_connect("localhost","root","","vw");
    $get="SELECT *FROM produits WHERE id='$id'";
    $query=mysqli_query($bd,$get);
    $data =mysqli_fetch_array($query);
    include('navbar.php');
?>
<section class="single ">
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mt-4">
        <img src="./image/<?php echo $data['image'];  ?>" width="500px" height="300px" />
        </div>
        <div class="col-lg-6 mt-4">
        <h2><?php echo $data['libelle']; ?></h2>
        <p> <?php  echo $data['detail']; ?></p>
          
 </div>
</div>
</div>

</section>


