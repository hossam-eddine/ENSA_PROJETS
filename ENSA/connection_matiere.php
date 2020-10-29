<?php
session_start();

include("connection.php");
if(isset($_SESSION["username"])){
$codeM=$_POST['codeM'];
$libM=$_POST['libM'];
$nature=$_POST['nature'];
$seuil=$_POST['seuil'];

//requette d insertion
$req=" Insert Into matieres Values('" .$codeM. "','" .$libM. "','" .$nature. "' ,'" .$seuil. "' )";
$result =$conn->prepare($req);
$dbexecut=$result->execute();




			
if ($dbexecut)
	{
	echo "<script>alert('la matiere est inserer avec succee');
              location.href = 'ajout_matiere.html';
              </script>";
  
    
   }
   else{
    echo " <script>alert('Insertion non effectuee')
    location.href = 'ajout_matiere.html';
    </script>";
   }


?>
           <?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 