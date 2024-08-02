<?php
# enctype: "Eu quero passar texto ou dados ou arquivos.
?>
<form method="POST" action="receive_data.php" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="Send">
</form>