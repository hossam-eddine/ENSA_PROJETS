<?php
session_start();
include("connection.php");
if(isset($_SESSION["username"])){
$codeG=$_POST['codeG'];
$anneeA=$_POST['anneeA'];
$codeD=$_POST['codeD'];
//requette de suppression
$chaine="Delete  from  groupes  where codeG = '" . $codeG . "' ";
$result = $conn->prepare($chaine);
$exec=$result->execute();


if ($exec)
	{
        echo "<script>alert('Supression bien effectuer');
        location.href = 'sup_groupe.php';
        </script>";


}
else{
echo " <script>alert('supression non effectuee')
location.href = 'sup_groupe.php';
</script>";
}

	
?>
<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 