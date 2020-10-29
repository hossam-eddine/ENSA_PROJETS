<?php
session_start();
require_once("connection.php");
if(isset($_SESSION["username"])){
$cin=$_POST['cinE'];
$email=$_POST['email'];
//requette de selection
$chaine="update etudiants set email='" .$email. "',nomE='".$_POST["nomE"]."', prenomE='".$_POST["prenomE"]."',codeG='".$_POST["codeG"]."',date_naiss='".$_POST["date_naiss"]."',lieu_naiss='".$_POST["lieu_naiss"]."' where cinE = '" . $cin . "'";$dbprepare=$conn->prepare($chaine);
$dbexecute=$dbprepare->execute();
if($dbexecute){
    echo "<script>alert(' etudiant bien modifier');
    location.href = 'edit_Etu.html';
    </script>";


}
else{
echo " <script>alert('modification non effectuee');
location.href = 'edit_Etu.html';

</script>";
}

?>
<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 