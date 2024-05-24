<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["favfood"] = "mie";
echo "Session variables are set.";
?>

</body>
</html>