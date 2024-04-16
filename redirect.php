<?php
session_start();
require_once __DIR__ . '/partials/function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAssword</title>
</head>

<body>
  <div>
    <?php echo "La tua password è: " . $password; ?>
  </div>
</body>

</html>