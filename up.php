<?php
include('navbar.php');
$bd=mysqli_connect("localhost","root","","vw");
$id=$_GET['id'];
$requete="SELECT * FROM produits where id='$id'";
$result=mysqli_query($bd,$requete);
$row=mysqli_fetch_array($result);
echo  $id;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
     
        <meta charset="UTF-8"/>
         <script src="bootstrap/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>

    <body>

    
<div class="container">
</br></br>
            <form method="POST" action="send_update.php?id=<?php echo $row ['id'];?>">
               <fieldset>
                 <legend class="mt-4">modification </legend>
                 
                 
                 
                 <div class="form-group">
                   <label for="ref">title</label>
                   <input type="text" class="form-control" name="libelle" placeholder="insert titel"
                   value="<?php echo $row['libelle'];?>">
                 </div>

                 <div class="form-group">
                   <label for="text">detail</label>
                   <input type="text" class="form-control" name="detail" placeholder="insert description"
                   value="<?php echo $row['detail'];?>">
                 </div>

                 <div class="form-group">
                   <label for="text">category</label>
                   <input type="text" class="form-control" name="category" placeholder="insert category"
                   value="<?php echo $row['category'];?>">
                 </div>
                 
            
               <div class="modal-footer">
                    <button type="rest" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
              </div>
             </form>
         </div>