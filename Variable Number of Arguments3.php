<!DOCTYPE html>
<html>
<body>

<?php
function myFamily(...$firstname, $lastname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
?>

</body>
</html>
