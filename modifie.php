<?php 
 
 include('navbar.php') ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
</head>
<body>
    <?php 
$bd=mysqli_connect("localhost","root","","vw");
$req="SELECT * FROM `produits` ";
        $extt=mysqli_query($bd,$req); 

    ?>

 <div class="container">
 <br>

<td class="text-center"><a href="ajouter.php" class='btn btn-info btn-lg btn-xs mt-5 pt-2' data-toggle="modal"  data-whatever="@getbootstrap"><span class="glyphicon glyphicon-remove"></span>Ajouter un nouveau produit</a> 
</br>

    <div class="row col-md-12 custyle">
   
    </br>
    <table class="custab table table-hover">
    <thead>
        <tr class="info">
            <th class="text-center">l'image </th>
            <th class="text-center">libellé</th>
            <th class="text-center">Detail</th>
            <th class="text-center">Action </th>
            
        </tr>
    </thead>
 
<?php        
while ($row=mysqli_fetch_array($extt)) {?>
            <tr>
            <td><?php echo "<img src=\"image/".$row['image']."\" width=\"250\" height=\"150\"> </img>"; ?></td>  
            <td class="col-2"><?= $row['libelle']; ?></td>
            <td class="col-3"><?= $row['detail']; ?></td>

            
            <td class="text-center"><a href="sup.php?id=<?php echo urlencode($row['id']);?> " class='btn btn-danger btn-xs' data-toggle="modal"  data-whatever="@getbootstrap"><span class="glyphicon glyphicon-remove"></span>Supprimer</a> 
            <a href="up.php?id=<?php echo urlencode($row['id']);?> " class='btn btn-info btn-xs' data-toggle="modal"  data-whatever="@getbootstrap"><span class="glyphicon glyphicon-remove"></span>Modifier</a> 
            </td>
            </tr>
            <?php } ?>
            
  </div>
</div>  
<a class="btnb1 btn-primary col-2" href="logout.php" role="button">Logout</a>          

</body>
</html>















