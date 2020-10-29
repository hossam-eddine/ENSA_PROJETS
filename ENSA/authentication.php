

<?php 
session_start();  
require_once("connection.php");
if(isset($_POST["submit"])){
$req="select *from utilisateur where username='".$_POST["username"]."' and password='".$_POST["pass"]."' ";
$query=$conn->query($req);
if($query->rowCount()>0){
    foreach($query as $row){
        $_SESSION["username"]=$row[0];
    }
    header("location:add_emploi.php");
   
}
else{
    echo "<script>alert('Veuiller verifier les champs');
   
    </script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>GET--ENSA</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> GET <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Bienvenue 	</strong></h5>
                  
                    <div class="mb20"></div>
                    <strong> <a href="signup.html">Connecté à votre compte</a></strong>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" >
                    <h4 class="nomargin">Connection</h4>
                   
                
                    <input type="text" class="form-control uname" placeholder="nom utilisateur"  name="username" required/>
                    <input type="password" class="form-control pword" placeholder="mot de passe" name="pass" required />
                   
                   
                    <input name="submit" type="submit" class="btn btn-success btn-block" value="Connecté"  />
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
          
            
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>
