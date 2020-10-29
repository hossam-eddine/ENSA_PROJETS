<?php
session_start();
require_once("connection.php") ?>
<?php
 if(isset($_SESSION["username"])){
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$genre=$_POST['genre'];
$grade=$_POST['grade'];
$specialite=$_POST['specialite'];



//requette d insertion

$query="select *from enseignants where cin=$cin";
$req=" Insert Into enseignants Values('" .$cin. "','" .$nom. "','" .$prenom. "','" .$email. "','" .$genre. "','" .$grade. "','" .$specialite. "' )";

$dbprep=$conn->prepare($req);
$dbexecut=$dbprep->execute();
if($dbexecut){
  echo "<script>alert('Nouveau ensegnat ajouter');
              location.href = 'ajoutEns.html';
              </script>";
  
    
   }
   else{
    echo " <script>alert('Insertion non effectuee')</script>";
   }

?>
<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 