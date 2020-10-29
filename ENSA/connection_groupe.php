<?php
session_start();

include("connection.php");
if(isset($_SESSION["username"])){
$codeG=$_POST['codeG'];
$libG=$_POST['libG'];
$anneeA=$_POST['anneeA'];
$semestre=$_POST['semestre'];
$codeD=$_POST['codeD'];
//requette d insertion
$req=" Insert Into groupes (codeG,libG,anneeA,semestre,codeD) Values('" .$codeG. "','" .$libG. "','" .$anneeA. "','" .$semestre. "','" .$codeD. "' )";
$result = $conn->prepare($req);
$exec=$result->execute();

                  if ($exec)
                  {
                  echo "<script>alert('Nouveau groupe ajouter');
                  location.href = 'ajout_groupe.php';
                  </script>";
      
        
       }
       else{
        echo " <script>alert('Insertion non effectuee');
        location.href = 'ajout_groupe.php';   
        </script>";
       }
	
                  ?>
                <?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 