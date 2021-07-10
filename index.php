<?php
    include('navbar.php');
    $bd=mysqli_connect("localhost","root","","vw");
?>

<!-- slide show -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/pic1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/Golf8.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/Golf81.jpeg" class="d-block w-100" alt="...">
        </div>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    
   <?php
   

   
 
        $req="SELECT * FROM produits where category='hatchback'    ";
        $extt=mysqli_query($bd,$req);
        
    
      ?>
      <!-- last-car -->
<div class="container px-4 py-5">
    <div class="row last-car">
        <div class="col-12">
            <h2 class="text-center py-3">Hatchback</h2>
        </div>
    </div>
    <div class="row ">
    <?php
    while ($row=mysqli_fetch_array($extt)) {

      ?>
 
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="image/<?php echo $row['image'];?>" class="card-img-top w-100" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['libelle']; ?> </h5>
                <p class="card-text">  <?php echo $row['detail'];?> </p>

                 <a href="produit.php?id=<?php echo ($row['id']);?>" class="btn btn-primary d-block">visit it</a>
                 
            </div>
        </div>
        
      </div>
      
      <?php } ?>
    </div>
  </div>

  <?php /////////////////////////////////////////////////////?>
  <?php
   

   
 
        $req="SELECT * FROM produits where category='electric'   ";
        $extt=mysqli_query($bd,$req);
        
    
      ?>
      <!-- last-car -->
<div class="container px-4 py-5">
    <div class="row last-car">
        <div class="col-12">
            <h2 class="text-center py-3">Electric</h2>
        </div>
    </div>
    <div class="row ">
    <?php
    while ($row=mysqli_fetch_array($extt)) {

      ?>
 
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="image/<?php echo $row['image'];?>" class="card-img-top w-100" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['libelle']; ?> </h5>
                <p class="card-text">  <?php echo $row['detail'];?> </p>
                 <a href="produit.php?id=<?php echo ($row['id']);?>" class="btn btn-primary d-block">visit it</a>

                 
            </div>
        </div>
        
      </div>
      
      <?php } ?>
    </div>
  </div>
  
 



  <?php
   

   
 
   $req="SELECT * FROM produits where category='suv'     ";
   $extt=mysqli_query($bd,$req);
   

 ?>
 <!-- last-car -->
<div class="container px-4 py-5">
<div class="row last-car">
   <div class="col-12">
       <h2 class="text-center py-3">SUV</h2>
   </div>
</div>
<div class="row ">
<?php
while ($row=mysqli_fetch_array($extt)) {

 ?>

 <div class="col-lg-4">
   <div class="card" style="width: 18rem;">
       <img src="image/<?php echo $row['image'];?>" class="card-img-top w-100" alt="...">
       <div class="card-body">
           <h5 class="card-title"><?php echo $row['libelle']; ?> </h5>
           <p class="card-text">  <?php echo $row['detail'];?> </p>
            <a href="produit.php?id=<?php echo ($row['id']);?>" class="btn btn-primary d-block">visit it</a>
            
       </div>
   </div>
   
 </div>
 
 <?php } ?>
</div>
</div>
  

<?php
   include('footer.php');
?>