

<?php
include('navbar.php');
session_start();
include('connection.php');
$bd=con();
if ($_SESSION['login']) {
?>
 <?php 
 $req =  " SELECT * FROM `message` ";
 $rep = mysqli_query($bd, $req);

    ?>



    <div class="container pt-5 mt-5">
      <div class="row col custyle"></br></br></br>
        <table class="custab table table-hover">
          <thead>
            <tr class="info">
              <th class="text-center col-2">Nom </th>
              <th class="text-center col-2">Email </th>
              <th class="text-center col-4">messag </th>
              
              <th class="text-center col-3">Answer</th>
              

              
            </tr>
          </thead>
          <?php
          
          while ($row = mysqli_fetch_array($rep)) { ?>
          
            <tr>
              
              <td><?= $row['nom']; ?></td>
              <td><?= $row['adress']; ?></td>
              <td><?= $row['messag']; ?></td>
              <td><input type="text" class="col-12" ></td>
              
               <td class="text-center"><a href="repons.php?id=<?php echo $row['id']; ?> " class='btn btn-danger btn-xs' data-toggle="modal" data-whatever="@getbootstrap"><span class="glyphicon glyphicon-remove"></span>Answer</a></td>
             
            
              </td>
            </tr>

            
          <?php } ?></br></br></br>
      </div>
    </div>
    <a class="btnb1 btn-primary col-3 " href="logout.php" role="button">Logout</a>
    <a href="modifie.php" class="btn btn-primary active col-2  aria-current="page">Modofie</a>
    

  <?php }
  else {
  header('location:login.php');
}
  
    
  



?>