

<?php

include('navbar.php');
//////////////////////////////
  $tailMax=1000000000;
  $extensionPermis=array('jpeg','jpg','png','gif');
 ///
  @$extensionTLg=strrchr($_FILES['img']['name'],'.');
  $extensionTLg=substr($extensionTLg,1);
  $extensionTLg=strtolower($extensionTLg);
  //echo $extensionTLg;
 //$extensionTLg=strtolower(substr(strrchr($_FILES['img']['name'],'.'),1));
 
  
    $bd=mysqli_connect("localhost","root","","vw");
    @$v1=$_POST['des'];
    @$v2=$_POST['det'];
    @$v3=$_POST['category'];
          if(!empty($_FILES['img']['name'])) {
                     if($_FILES['img']['size']<= $tailMax){
                         if(in_array($extensionTLg,$extensionPermis)){

                ///renommer image
              $nomImage='prod'.date("d-m-Y-H-i-s").".".$extensionTLg;
              $chemin="image/";
             $resultat=move_uploaded_file($_FILES['img']['tmp_name'],$chemin.$nomImage);
             if($resultat){
              $image= $nomImage;
  
    $reqt="INSERT INTO produits(image,libelle,detail,category) VALUES('$image','$v1','$v2','$v3')";
              $rest=mysqli_query($bd,$reqt);
                
                if ($rest)
            {
              ?>
              <script type="text/javascript">
                          alert("Enregistrement reussi.");
                          window.location = "modifie.php";
            </script>
          <?php
            }
            else{
                // header('location:index.php?erreur=1');
                echo "ereuuuur!!!!!!";
            } 
                    }
                        else{echo"erreur de telechargement de l'image";}
                    }
                    else{
                        echo"extension non valide";
                    }
                                                          }
        else
        {
            echo "la taille de votre image doit etre inferier à 10MO";
        }
           }
           else{echo "";}

                             
   
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  title="style" href="style.css"/>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<body>

<div class="container">
</br></br>
            <form method="POST" action="" enctype="multipart/form-data">
               <fieldset>
                 <legend>Add new product </legend>
                 
                 <div class="form-group">
                   <label for="file">insert product image:</label>
                   <input type="file" class="form-control" name="img">
                 </div>
                 
                 <div class="form-group">
                   <label for="ref"> Title of product:</label>
                   <input type="text" class="form-control" name="des">
                 </div>
                 <div class="form-group">
                   <label for="ref"> detail of product :</label>
                   <input type="text" class="form-control" name="det">
                 </div>

                 <div class="form-group">
                   <label for="ref"> category of product :</label>
                   <input type="text" class="form-control" name="category">
                 </div>

                              
               <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="aaa" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
              </div>
             </form>
         </div>
    </body>
</html>
</body>
</html>