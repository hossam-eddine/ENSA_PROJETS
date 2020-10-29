<?php

session_start();
include("connection.php");
if(isset($_SESSION["username"])){
$cin=$_POST['cinE'];
$nom=$_POST['nomE'];
$prenom=$_POST['prenomE'];
$date_naiss=$_POST['date_naiss'];
$lieu_naiss=$_POST['lieu_naiss'];
$email=$_POST['email'];
$genre=$_POST['genre'];
$codeG=$_POST['codeG'];
$annee=$_POST['annee'];
$anneeA=$_POST['anneeA'];
//requette d insertion
$req=" Insert Into etudiants Values('" .$cin. "','" .$nom. "','" .$prenom. "','" .$date_naiss. "','" .$lieu_naiss. "' ,'" .$email. "','" .$genre. "','" .$codeG. "','".$annee."','".$anneeA."' )";
$dbprepare=$conn->prepare($req);
$dbexecute=$dbprepare->execute();
if($dbexecute){
  echo "<script>alert('Nouveau etudiant ajouter');
              location.href = 'ajoutEtudiant.html';
              </script>";
  
    
   }
   else{
    echo " <script>alert('Insertion non effectuee');
    location.href = 'ajoutEtudiant.html';   
    </script>";
   }
  
?>

<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 