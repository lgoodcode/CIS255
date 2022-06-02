<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Unit 08B</title>

<!--

Demonstrating using PHP and making GET requests through a form submit event.
PHP checks the name for the corresponding PHP variable via `$_GET` on GET requests.

-->

</head>
<body>
<?php

// Show errors, but not all...
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get data from a GET or POST (change GET to POST for post)
$size = isset($_GET['small']) ? $_GET['small'] : "";
$size = !$size && isset($_GET['medium']) ? $_GET['medium'] : "";
$size = !$size && isset($_GET['large']) ? $_GET['large'] : "";
$topping_1 = isset($_GET['pepp']) ? $_GET['pepp'] : "";
$topping_2 = isset($_GET['saus']) ? $_GET['saus'] : "";
$topping_3 = isset($_GET['vegg']) ? $_GET['vegg'] : "";

$toppings = $topping_1;

if ($toppings && $topping_2) {
  $toppings = $toppings + "and $topping_2";
} else if ($topping_2) {
  $toppings = $topping_2;
}

if ($toppings && $topping_3) {
  $toppings = $toppings + "and $topping_3";
} else if ($topping_3) {
  $toppings = $topping_3;
}

if (!$size && !$toppings) {
  print "
    <div style='width: 100%; display: flex; justify-content: center; flex-direction: column'>
      <h1>Order a Pizza</h1>
      <form method='GET' action='unit08b.php' style='display: flex; width: fit-content; flex-direction: column'>
        <div style='display: flex; flex-direction: column;'>
          <div>
            <h2>Select a size</h2>
            <div style='width: 100px; display: inline'>
              <input type='radio' name='small' value='small' />Small
              <input type='radio' name='medium' value='medium' />Medium
              <input type='radio' name='large' value='large' />Large
            </div>
          </div>
          <div>
            <h2>Select toppings</h2>
            <div style='width: 100px; display: inline'>
              <input type='checkbox' name='pepp' value='pepperoni' />Pepperoni
              <input type='checkbox' name='saus' value='sausage' />Sausage
              <input type='checkbox' name='vegg' value='veggies' />Veggies
            </div>
          </div>
          <div style='margin-top: 2rem'>
            <button type='submit'>Submit</button>
          </div>
        </div>
      </form>
    </div>
  ";
} else if (!$size) {
  print "
    <div style='width: 100%; display: flex; justify-content: center;'>
      <p>Must select at least one topping.</p>
    </div>
  ";
} else if (!$toppings) {
  print "
    <div style='width: 100%; display: flex; justify-content: center;'>
      <p>Must select a pizza size.</p>
    </div>
  ";
} else {
  print "
    <div style='width: 100%; display: flex; justify-content: center;'>
      <p>You ordered a $size pizza with $toppings</p>
    </div>
  ";
}

?>
</body>
</html>