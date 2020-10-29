
<?php 
session_start();
require_once("connection.php");
if(isset($_SESSION["username"])){
$q=$_GET["q"];
?>
<div class="form-group">
                  <label class="col-sm-3 control-label">Groupe : </label>
                  <div class="col-sm-6">
                    <select id="codeG" class="form-control" name="codeG" required>
                      <option value=""></option>
                      <?php
					
						$sql = "SELECT * FROM groupes where codeD='".$q."' ";
						$sql_result = $conn->query($sql);
						while ($row = $sql_result->fetch()) {
							echo "<option value='".$row["0"]."'".">".$row["0"]."</option>";
							}
                       
                     
					?>
					
                    </select>
                    <label class="error" for="codeG"></label>
					</div>
               </div><!-- form-group -->
               <?php  
     }else{
    header("location:authentication.php");
   
    }
 
     ?> 