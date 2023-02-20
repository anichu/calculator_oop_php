<?php  
declare(strict_types=1);
include "includes/class-autoload.inc.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculator</title>
</head>
<body>

<form action="includes/calc.inc.php" method="post">
  <p>My own Calculator</p>
  <input type="number" name="num1" placeholder="first number">
  <select name="operation" id="">
    <option value="add">add</option>
    <option value="subtraction">subtraction</option>
    <option value="multiplication">multiplication</option>
    <option value="division">division</option>
  </select>
  <input type="number" name="num2" placeholder="second number">

  <button type="submit" name="submit">Calculation</button>
</form>
  
</body>
</html>