<?php 
session_start();
include('connection.php');

if(isset($_SESSION["username"])){


if(isset($_POST['submit'])){

$req=" update horaires set heureD='" .$_POST['HD']. "',heureF='" .$_POST['HF']. "',Enseignant='" .$_POST['ens']. "',matiere='" .$_POST['MT']. "',salle='" .$_POST['codeL']. "',jour='" .$_POST['jour']. "' where jour='".$_GET["jour"]."' and heureD='".$_GET["HD"]."' and heureF='".$_GET["HF"]."'  ";

$dbprep=$conn->prepare($req);
$dbexecut=$dbprep->execute();
if($dbexecut){
  echo "<script>alert('modification effectuee');
  location.href = 'edit_emploi.php';
  </script>";


}
else{
echo " <script>alert('Modification non effectuee');
location.href = 'edit_emploi.php';
</script>";
}
}

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
  <style>
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
  
  <div   class="leftpanel">
    
    <div class="logopanel">
        <h1><img src="images/logo.jpg" width="87" height="68" alt="iset tozeur"></h1>
    </div>
    <!-- logopanel -->
        
    <div  class="leftpanelinner">    
        
          
           
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
  
  <div class="mainpanel ">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="http://themepixels.com/demo/webpage/bracket/index.html" method="post">
      </form><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Enploi  <span>Nouveau</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">Vous êtes dans:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">GET</a></li>
          <li class="active"><a href="deconnect.php">se deconnecter</a></li>
        </ol>
      </div>
    </div>
    
       <div class="contentpanel ">
      
      <div class="row">
        
        <div class="col-md-12">
          <form id="basicForm"  method="post" class="form-horizontal" >
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Ajouter un nouveau emploi</h4>
              </div>
              <div class="panel-body">
             

            
<!--------enseignant---!-->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Enseignants</label>
                    <div class="col-sm-6">
                    <select id="codeEN" class="form-control" name="ens" required>
                    
                      <?php
						$sql = "SELECT *FROM enseignants ";
						$sql_result = $conn->query($sql);
						while ($row = $sql_result->fetch()) {
							echo "<option value='".$row["1"]."'".">".$row["1"]."</option>";
							}
						?>
                       </select>
                    
                    </div>
                  </div><!-- form-group -->
                
                
               
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jour <span class="asterisk">*</span></label>
                  <div class="col-sm-6">
                  <select id="jour" class="form-control" name="jour" required>
                      <option value="">Choisir une</option>
                      <option value="Lundi">Lundi</option>
                      <option value="Mardi">Mardi</option>
                      <option value="Mercredi">Mercredi</option>
                      <option value="Jeudi">Jeudi</option>
                      <option value="vendredi">Vendredi</option>
                      <option value="samedi">Samedi</option>

                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Heure Debut : </label>
                  <div class="col-sm-6">
                  <input type="time"   class="form-control" name="HD"  required>
                    
                   
					</div>
               </div><!-- form-group -->
               <div class="form-group">
                <label class="col-sm-3 control-label">Heure De Fin : </label>
                <div class="col-sm-6">
                <input type="time"   class="form-control" name="HF"  required>
                  
                 
        </div>
             </div><!-- form-group -->
             
                <table >
  <tr>
  <th bgcolor="#40ACB5"><strong>Matiere</strong></th>
    <th  bgcolor="#40ACB5"><strong>Salle</strong></th>
   
  
  </tr>

  <tr>
    <td>
   
                    <label>Matiere</label>
                    
                    <select id="codeM"   name="MT" required>
                      <option value=""></option>
                      <?php
						$sql = "SELECT *FROM matieres ";
						$sql_result = $conn->query($sql);
						while ($row = $sql_result->fetch()) {
							echo "<option value='".$row["1"]."'".">".$row["1"]."</option>";
							}
						?>
                       </select>
                      <label class="error" for="codeM"></label>
                    
    </td>
    <td>
<!-------Salle---------!-->
<label >Salle</label>

<select id="codeL" name="codeL" required>
  <option value=""></option>
  <?php
$sql = "SELECT DISTINCT(codeL) FROM locaux ,groupes where  locaux.codeD=groupes.codeD and groupes.codeG='".$_GET["codeG"]."' ";
$sql_result = $conn->query($sql);
while ($row = $sql_result->fetch()) {
echo "<option value='".$row["0"]."'".">".$row["0"]."</option>";
}
?>
   </select>
  <label class="error" for="codeL"></label>


</td>



  </tr>
  
 
 


</table>                               

                
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                  <input  type="submit" value="Modifier" name="submit" class="btn btn-primary"        />
                    <button type="reset" class="btn btn-default">Annuler</button>
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
          </form>
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