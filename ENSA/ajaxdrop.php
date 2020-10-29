<?php
require_once("connection.php");

$q =$_GET['q'];

?>
<div class="form-group">
<label class="col-sm-3 control-label">Local: </label>
<div class="col-sm-6">
  <select id="codeL" class="form-control" name="codeL" required>
    <option value=""></option>
    <?php
      $sql = "SELECT codeL FROM locaux where codeD='".$q."' ";
      $sql_result = $conn->query($sql);
      while ($row =$sql_result->fetch()) {
          echo "<option value='".$row["0"]."'".">".$row["0"]."</option>";
}

      ?>
     </select>
  <label class="error" for="codeL"></label>
</div>
</div>