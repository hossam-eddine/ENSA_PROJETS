<?php
session_start();
include("connection.php");
if(isset($_SESSION["username"])){
$codeG=$_POST['codeG'];
$libG=$_POST['libG'];
$anneeA=$_POST['anneeA'];
$semestre=$_POST['semestre'];
$codeD=$_POST['codeD'];
//requette de sélection
$chaine="update groupes set libG='" .$libG. "' ,anneeA ='" . $anneeA ."', semestre ='" . $semestre ."', codeD = '" .$codeD. "' where codeG = '" . $codeG . "'";
$result = $conn->prepare($chaine);
$execute=$result->execute();
if($execute){
    echo "<script>alert('bien Modifier');
                location.href = 'edit_groupe.php';
                </script>";
    
      
     }
     else{
      echo " <script>alert('Modification  non effectuee');
      location.href = 'edit_groupe.php';   
      </script>";
     }
    

?>


<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 