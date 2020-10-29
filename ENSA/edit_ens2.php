<?php
session_start();
include("connection.php");
if(isset($_SESSION["username"])){
$cin=$_POST['cin'];
$email=$_POST['email'];
$grade=$_POST['grade'];

//requette de selection
$chaine="update enseignants Set email = '" .$email. "' , grade = '" . $grade ."'  where cin = '" . $cin . "' ";
$dbprepare=$conn->prepare($chaine);
$dbprepare->execute();
$nbr=$dbprepare->rowCount();
if($nbr>0){
    echo "<script>alert(' enseignant bien modifier');
    location.href = 'edit_ens.html';
    </script>";


}
else{
echo " <script>alert('modification non effectuee');
location.href = 'edit_ens.html';

</script>";
}

?>

}
<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 