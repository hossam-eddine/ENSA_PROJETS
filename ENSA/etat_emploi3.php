<?php
session_start();
include("connection.php");
if(isset($_SESSION["username"])){

//requette de selection
//anneeA+codeG
//---------------------lundi-------------------------------------//
//------------------
	$req_lundi_morning1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='lundi' and horaires.heureD='08:30'
    and horaires.heureF='10:20' and  horaires.Groupe='".$_POST["codeG"]."'";
    $query=$conn->query($req_lundi_morning1);
 //------------------  
    $req_lundi_morning2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='lundi' and horaires.heureD='10:40'
    and horaires.heureF='12:30' and  horaires.Groupe='".$_POST["codeG"]."'";
    $query1=$conn->query($req_lundi_morning2);
 //------------------ 
 $req_lundi_afternoon1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='lundi' and horaires.heureD='14:30'
 and horaires.heureF='16:20' and  horaires.Groupe='".$_POST["codeG"]."'";
 $query3=$conn->query( $req_lundi_afternoon1);  
 //------------------
 $req_lundi_afternoon2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='lundi' and horaires.heureD='16:30'
 and horaires.heureF='18:30' and  horaires.Groupe='".$_POST["codeG"]."'";
 $query4=$conn->query( $req_lundi_afternoon2);  
//------------------------------------------------------------------------

  //---------------Mardi------------------------------------------//
  //----------
  $req_Mardi_morning1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='Mardi' and horaires.heureD='08:30'
  and horaires.heureF='10:20' and  horaires.Groupe='".$_POST["codeG"]."'";
  $mardi1=$conn->query($req_Mardi_morning1);
  //----------
  $req_Mardi_morning2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='mardi' and horaires.heureD='10:40'
  and horaires.heureF='12:30' and  horaires.Groupe='".$_POST["codeG"]."'";
  $mardi2=$conn->query($req_Mardi_morning2);
  //----------
  $req_mardi_afternoon1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='mardi' and horaires.heureD='14:30'
  and horaires.heureF='16:20' and  horaires.Groupe='".$_POST["codeG"]."'";
  $mardi3=$conn->query( $req_mardi_afternoon1);
//---------
$req_mardi_afternoon2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='mardi' and horaires.heureD='16:30'
 and horaires.heureF='18:30' and  horaires.Groupe='".$_POST["codeG"]."'";
 $mardi4=$conn->query( $req_mardi_afternoon2);
 //-----------------------------------------------------------------------------

 //--------Mercredi-------------------------------------
 //----------
$req_Mercredi_morning1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='Mercredi' and horaires.heureD='08:30'
and horaires.heureF='10:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$mercredi1=$conn->query($req_Mercredi_morning1);
//----------
$req_mercredi_morning2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='mercredi' and horaires.heureD='10:40'
and horaires.heureF='12:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$mercredi2=$conn->query($req_mercredi_morning2);
//----------
$req_mercredi_afternoon1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='mercredi' and horaires.heureD='14:30'
and horaires.heureF='16:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$mercredi3=$conn->query( $req_mercredi_afternoon1);
//---------
$req_mercredi_afternoon2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='mercredi' and horaires.heureD='16:30'
and horaires.heureF='18:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$mercredi4=$conn->query( $req_mercredi_afternoon2);
//--------------------------------------------------------------
//--------Jeudi----------------------------------------------
//----------
$req_Jeudi_morning1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='jeudi' and horaires.heureD='08:30'
and horaires.heureF='10:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$jeudi1=$conn->query($req_Jeudi_morning1);
//----------
$req_jeudi_morning2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='jeudi' and horaires.heureD='10:40'
and horaires.heureF='12:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$jeudi2=$conn->query($req_jeudi_morning2);
//----------
$req_jeudi_afternoon1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='jeudi' and horaires.heureD='14:30'
and horaires.heureF='16:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$jeudi3=$conn->query( $req_jeudi_afternoon1);
//---------
$req_jeudi_afternoon2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='jeudi' and horaires.heureD='16:30'
and horaires.heureF='18:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$jeudi4=$conn->query( $req_jeudi_afternoon2);
//--------------------------------------------------------------------------
//---------Vendredi------------------------------
//----------
$req_vendredi_morning1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='vendredi' and horaires.heureD='08:30'
and horaires.heureF='10:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$vendredi1=$conn->query($req_vendredi_morning1);
//----------
$req_vendredi_morning2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='vendredi' and horaires.heureD='10:40'
and horaires.heureF='12:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$vendredi2=$conn->query($req_vendredi_morning2);
//----------
$req_vendredi_afternoon1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='vendredi' and horaires.heureD='14:30'
and horaires.heureF='16:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$vendredi3=$conn->query( $req_vendredi_afternoon1);
//---------
$req_vendredi_afternoon2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='vendredi' and horaires.heureD='16:30'
and horaires.heureF='18:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$vendredi4=$conn->query( $req_vendredi_afternoon2);
//-----------------------------------------------------------------------------
//-----------------Samedi------------------
//----------
$req_samedi_morning1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='samedi' and horaires.heureD='08:30'
and horaires.heureF='10:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$samedi1=$conn->query($req_samedi_morning1);
//----------
$req_samedi_morning2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='samedi' and horaires.heureD='10:40'
and horaires.heureF='12:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$samedi2=$conn->query($req_samedi_morning2);
//----------
$req_samedi_afternoon1="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='samedi' and horaires.heureD='14:30'
and horaires.heureF='16:20' and  horaires.Groupe='".$_POST["codeG"]."'";
$samedi3=$conn->query( $req_samedi_afternoon1);
//---------
$req_samedi_afternoon2="select horaires.Enseignant,horaires.salle,matieres.libM from horaires,matieres where  matieres.codeM=horaires.matiere and horaires.jour='samedi' and horaires.heureD='16:30'
and horaires.heureF='18:30' and  horaires.Groupe='".$_POST["codeG"]."'";
$samedi4=$conn->query( $req_samedi_afternoon2);



?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>ENSA - GET</title>

  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
  function imprimer_page(){
  window.print();
  location.href="etat_emploi.php";
  }
  </script>
  <style>
    th{
          background-color: rgb(117, 145, 221);
          color:white
      }
      td{
        background-color:rgb(176, 194, 221);
          color:white;
      }
      h4{
        
          color:black;
      }
      h5{
          color:teal;
      }
      td{
      padding: 10px;
      
    }
    table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
      
  </style>
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><img src="images/logo.jpg" width="87" height="68" alt="iset tozeur"></h1>
    </div>
    <!-- logopanel -->
        
  
      
    <h5 class="sidebartitle">Navigation</h5>
    <ul class="nav nav-pills nav-stacked nav-bracket">
      <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
      

      <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Enseignants</span></a>
        <ul class="children">
          <li><a href="ajoutEns.php"><i class="fa fa-caret-right"></i> Nouveau</a></li>
          <li><a href="edit_ens.php"><i class="fa fa-caret-right"></i> Edition</a></li>
    <li><a href="supEns.php"><i class="fa fa-caret-right"></i> Suppression</a></li>
          <li><a href="etats_enseignants.php"><i class="fa fa-caret-right"></i> Etats</a></li>
        </ul>
      </li>
      <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Etudiants</span></a>
        <ul class="children">
          <li><a href="ajoutEtudiant.php"><i class="fa fa-caret-right"></i> Nouveau</a></li>
          <li><a href="edit_Etu.php"><i class="fa fa-caret-right"></i> Edition</a></li>
    <li><a href="supEtud.php"><i class="fa fa-caret-right"></i> Suppression</a></li>
          <li><a href="etats_etudiants.php"><i class="fa fa-caret-right"></i> Etats</a></li>
        </ul>
      </li>
             <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Matieres</span></a>
        <ul class="children">
          <li><a href="ajout_matiere.php"><i class="fa fa-caret-right"></i> Nouveau</a></li>
          <li><a href="edit_matiere.php"><i class="fa fa-caret-right"></i> Edition</a></li>
    <li><a href="sup_matiere.php"><i class="fa fa-caret-right"></i>Suppression</a></li>
          <li><a href="etats_matiere.php"><i class="fa fa-caret-right"></i> Etats</a></li>
        </ul>
      </li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Locaux</span></a>
        <ul class="children">
          <li><a href="ajout_locau.php"><i class="fa fa-caret-right"></i> Nouveau</a></li>
      <li><a href="edit_locau.php"><i class="fa fa-caret-right"></i> Edition</a></li>
    <li><a href="sup_locau.php"><i class="fa fa-caret-right"></i>Suppression</a></li>
          <li><a href="etats_locaux.php"><i class="fa fa-caret-right"></i> Etats</a></li>          </ul>
      </li>


        
      <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Emplois de temps</span></a>
       <ul class="children">
          <li><a href="add_emploi.php"><i class="fa fa-caret-right"></i> Creation</a></li>
          <li><a href="edit_emploi.php"><i class="fa fa-caret-right"></i> Edition</a></li>
          <li><a href="etat_emploi.php"><i class="fa fa-caret-right"></i> Etats</a></li>
        </ul>
      </li>


      
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Groupe</span></a>
       <ul class="children">
        <li><a href="ajout_groupe.php"><i class="fa fa-caret-right"></i> Nouveau</a></li>
         <li><a href="edit_groupe.php"><i class="fa fa-caret-right"></i> Edition</a></li>
     <li><a href="sup_groupe.php"><i class="fa fa-caret-right"></i>Suppression</a></li>
          <li><a href="etat_groupes.php"><i class="fa fa-caret-right"></i> Etats</a></li>
        </ul>
      </li>
   
      
    </ul>
  </div><!-- leftpanelinner -->
</div><!-- leftpanel -->

  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="http://themepixels.com/demo/webpage/bracket/index.html" method="post">
      </form><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Groupes  <span>Etats</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">Vous êtes dans:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">GET</a></li>
          <li class="active"><a href="deconnect.php">se deconnecter</a></li>
        </ol>
      </div>
    </div>
    
       <div class="contentpanel">
      
      <div class="row">
        
        <div class=" container col-md-9">
         
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
			  
              </div>
              
              <table class="table">
              <caption><h1><?= $_POST["codeG"]?></h1></caption>
  <thead>
    <tr>
      <th scope="col">JOUR</th>
      <th scope="col">8h30-10h40</th>
      <th scope="col">10h40-12h30</th>
      <th scope="col">14h30-16h20</th>
      <th scope="col">16h40-18h30</th>

    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">Lundi</th>
      <!--08--!-->
      <td>
      <?php  
      foreach($query as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <!--10--!-->
      <td>
      <?php  
      foreach($query1 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      
      </td>
 <!--14--!-->
      <td>
      <?php  
      foreach($query3 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
       <!--16--!-->
      <td>
      <?php  
      foreach($query4 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Mardi</th>
      <!--08--!-->
      <td>
      <?php  
      foreach($mardi1 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <!--10--!-->
      <td>
      <?php  
      foreach($mardi2 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <!--14--!-->
      <td>
      <?php  
      foreach($mardi3 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <!--16--!-->
      <td>
      <?php  
      foreach($mardi4 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Mercredi</th>
      <td>
      <?php  
      foreach($mercredi1 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($mercredi2 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($mercredi3 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($mercredi4 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Jeudi</th>
      <td>
      <?php  
      foreach($jeudi1 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($jeudi2 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($jeudi3 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($jeudi4 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Vendredi</th>
      <td>
      <?php  
      foreach($vendredi1 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($vendredi2 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($vendredi3 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      
      </td>
      <td>
      <?php  
      foreach($vendredi4 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      
      </td>

    </tr>
    <tr>
      <th scope="row">Samedi</th>
      <td>
      <?php  
      foreach($samedi1 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($samedi2 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      
      <td>
      <?php  
      foreach($samedi3 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
      <td>
      <?php  
      foreach($samedi4 as $row){
       echo "<h4>".$row[2]."</h4>";
       echo "<h5>".$row[0]." ".$row[1]."</h5>";
      }
      ?>
      </td>
    </tr>
  </tbody>
</table>                               
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary" type="submit" onClick="imprimer_page()">Imprimer</button>
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
         
        </div><!-- col-md-6 -->
          
      </div><!--row -->

     
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/flot/flot.min.js"></script>
<script src="js/flot/flot.resize.min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/raphael-2.1.0.min.js"></script>

<script src="js/jquery.datatables.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/dashboard.js"></script>



</body>
</html>
<?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 