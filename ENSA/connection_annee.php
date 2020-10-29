<?php
include("connection.php");
$anneeA=$_POST['anneeA'];
$semestre=$_POST['semestre'];

//requette d insertion
$req=" Insert Into anneeu Values('" .$anneeA. "','" .$semestre. "' )";
$result = $conn->prepare($req);
$exec=$result->execute();
?>

				<?php
                   if ($exec)
                   {
                   echo "<script>alert('Annee bien ajouter');
                   location.href = 'Annee Universitaire.html';
                   </script>";
       
         
        }
        else{
         echo " <script>alert('Insertion non effectuee')
         location.href = 'Annee Universitaire.html';
         </script>";
        }
     
                ?>

      
           