<?php
require 'function.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
   echo "<script type='text/javascript'>alert('JOSS');location.href = 'index.php'</script>";
} else {
   echo "<script type='text/javascript'>alert('NGGA JOSS');location.href = 'index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>hapus</title>
</head>
<body>
   
</body>
</html>