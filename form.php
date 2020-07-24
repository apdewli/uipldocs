<?php
include 'header.php';
?>
<?php if( !empty($user) ): ?>
  <h1>Enter the Detail in below form</h1>
<form>
  <label for="fname">Background:</label><br><textarea rows = "5" cols = "60" name = "background">
            Enter details here...
         </textarea><br><br>
  <label for="lname">Proposed Solution :</label><br><textarea rows = "5" cols = "60" name = "proposed solution">
            Enter details here...
         </textarea><br>
  <input type = "submit" value = "submit" />
</form>

<?php endif; ?>

<?php
include 'footer.php';
?>
