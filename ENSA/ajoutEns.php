

<?php
session_start();
if(isset($_SESSION["username"])){


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
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="http://themepixels.com/demo/webpage/bracket/index.html" method="post">
      </form><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Enseignants  <span>Nouveau</span></h2>
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
        
        <div class="col-md-6">
          <form id="basicForm" action="connection_ens.php" method="post" class="form-horizontal" >
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Ajouter un nouveau enseignant </h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">CIN <span class="asterisk">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="cin" class="form-control" placeholder="Saisir votre N° CIN" required />
                  </div>
                </div>
                
               <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">NOM <span class="asterisk">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="nom" class="form-control" placeholder="Saisir votre nom" required />
                  </div>
                </div>
                
                <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">PRENOM <span class="asterisk">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="prenom" class="form-control" placeholder="Saisir votre prenom" required />
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email <span class="asterisk">*</span></label>
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" placeholder="Saisir votre email..." required />
                  </div>
                </div>
                
               
                 <div class="form-group">
                  <label class="col-sm-3 control-label">GENRE <span class="asterisk">*</span></label>
                  <div class="col-sm-6">
                    <div class="rdio rdio-primary">
                      <input type="radio" id="masculin" value="m" name="genre" required />
                      <label for="masculin">Masculin</label>
                    </div><!-- rdio -->
                    <div class="rdio rdio-primary">
                      <input type="radio" value="f" id="feminin" name="genre">
                      <label for="feminin">Feminin</label>
                    </div><!-- rdio -->
                    <label class="error" for="genre"></label>
                  </div>
                </div><!-- form-group -->
                
                
                 <div class="form-group">
                  <label class="col-sm-3 control-label">GRADE</label>
                  <div class="col-sm-6">
                    <select id="grade" class="form-control" name="grade" required>
                      <option value="">Choisir une</option>
                      <option value="DR">Docteur</option>
                      <option value="Ingenieur">Ingenieur</option>
                      <option value="assistanttechnologue">Assistant Professeur</option>
                      <option value="PR superieur">Professeur de l'enseignent Superieur</option>
                      <option value="PR/CH">Professeur/chercheur</option>

                    </select>
                    <label class="error" for="grade"></label>
                  </div>
                </div><!-- form-group -->
                
                
                
                
                
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Spécialite</label>
                  <div class="col-sm-6">
                    <select id="specialite" class="form-control" name="specialite" required>
                      <option value="">Choisir une</option>
                      <option value="informatique">Informatique</option>
                      <option value="sciences economique et de gestion">Sciences Economique et de Gestion</option>
                      <option value="mecanique">Mecanique</option>
                      <option value="electrique">Electrique</option>
                      
                 
                      <option value="anglais">Anglais</option>
                      <option value="français">Français</option>
                      <option value="mathematique">Mathematique</option>
                      <option value="sport">Sport</option>
                      <option value="PHY">Physique</option>

                    </select>
                    <label class="error" for="specialite"></label>
                  </div>
                </div><!-- form-group -->
				
              
                
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary" type="submit">Ajouter</button>
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