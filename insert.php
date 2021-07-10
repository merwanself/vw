<?php
	$bd=mysqli_connect("localhost","root","","vw");
 
	$nom=$_POST['nom'];
    $adress=$_POST['adress'];
    $messag=$_POST['messag'];

    if(!empty($nom))
    {
        if (!empty($adress))
        {
            if(!empty($messag))
               {
                   
                    $reqt="INSERT INTO  message (nom,adress,messag) values ('$nom','$adress','$messag')";
                    $rest=mysqli_query($bd,$reqt);
               
                 
                

                if ($rest) 
                ?> 

                
            
                <?php
               
                { 
                header('location:contactus.php'); }
                    
                }}} ?>
                
               

               

            


            