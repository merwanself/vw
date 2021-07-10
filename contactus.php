<?php 
include('navbar.php');
$bd=mysqli_connect('localhost','root','','vw');
?>






<div class="contact-us">
    <div class="container pt-5 mt-5">
        
    <div class="row">
        <div class="col-md-12 mt-3 mb-5">
            <h2 class="text-center">Contact Us</h2>
            
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204891.9363162851!2d2.8899813257457434!3d36.63994824364256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fbaac886a8e5d%3A0xc22ec758b9d1b56f!2sSOVAC%20ALGERIE!5e0!3m2!1sfr!2sdz!4v1623102329617!5m2!1sfr!2sdz" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6">
            <form method="POST" action="insert.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >Email address</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="adress">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >Message</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="messag">
                </div>
                <button type="submit" class="btn btn-primary" value="Envoyer">Submit</button>


            </form>
        </div>


    </div>
</div>
</div>


  <?php
  include('footer.php');
 
 
 ?>
        
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>