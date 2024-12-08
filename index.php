<?php
$number3 = null;
if(isset($_POST['submit'])){
$number1 = $_POST['first_number'];
$number2 = $_POST['second_number'];
$number3 = $number1 + $number2;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pHp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
    <h1>Hello, world!</h1>
<?php
echo "<h1>". "Hello, world!" ." ". "How are You?" . "</h1>";
echo "<h1>". "Hello, world!" ." ". "How are You?" . "</h1>";
echo "<h1>". "Hello, world!" ." ". "How are You?" . "</h1>";
?>
<?php
print "<h1>". "Hello world!"." ". "How are you?". "</h1>";
?>
<?php
$name = "Arifa";
echo "<h1>". "My name is". " ". $name. "</h1>";

?>

<?php
$name = "Tauhid";
echo "<h1>". "His name is". " ". $name. "</h1>";
?>

<?php
$_name="Tashreefa";
echo "<h1>". "Her name is". " ". $_name . "</h1>";
?>
<?php
$name = "Mim";
function callingName(){
global $name;
echo "<h1>". "Her name is". " " . $name . "</h1>";
}
callingName();

// ?>
<?php
function askingName(){
  $name = "Ayman";
  echo "<h1>". "His name is" . " " . $name . "</h1>";
}
askingName();
?>
<?php
function readingBook(){
$book = "Sesher Kobita";
echo "<h1>" . "I m reading" . " " . $book . "</h1>";
}
readingBook();
?>
<?php
$name = "Tashahhud";
echo $name . "<br>";
var_dump($name);
?>
<?php
$number = false ;
echo $number . "<br>";
var_dump($number);
?>
<?php

$data = array("Arifa","Tauhid","Tashreefa");
echo $data[0] . "<br>";
var_dump($data);
?>
<?php
$result = array("Arifa" => 50, "Tauhid" => 80, "Tashreefa" => 85);
echo $result['Arifa'] . "<br>";
var_dump($result);
?>
<?php
$number1 = 9;
$number2 = 7;
$number1 += $number2;
echo $number1 . " <br>";
?>
<?php
$number1 = 5;
$number2 = "5";
if($number1 === $number2){
  echo "identical";
}else {echo "not identical";}
?>
<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <form 
      action="<?php
      echo $_SERVER['PHP_SELF']?>" 
      method="post">
      <div class="row">
  <div class="col-12">
    <label for="first_number">1st number</label>
    <input type="number" class="form-control" placeholder="first_number" id="first_number" name="first_number" required>
  </div>
  <div class="col-12">
    <label for="second_number">2nd number</label>
    <input type="text" class="form-control" placeholder="second_number"id="second_number" name="second_number" required>
  </div>
  <div class="col-lg-4">

  <input type="submit" value="submit" class="btn btn-secondary" name="submit">
  </div>
<div class="container">
  <?php echo $number3 ;
  ?>
</div>
</div>
      </form>
    </div> 
  </div>
</div>

</div>
<div class="container">
  <div class="row">
    <div class="col-lg-10">
   
    </div>
  </div>
</div>

<div class="container">
<?php 
$_data = "Hello World";
echo $_data . "<br>";
echo chunk_split($_data,5,"...");
?>
</div>
<div class="container">
  <?php
  $_data = "Hello, Universe";
  print_r(explode(" ", $_data));
  ?>
</div>
<div class="container">
<?php
$_pass = "helloworld";
echo sha1($_pass);
?>
</div>
<div class="container">
  <?php
  $_Data = "Hello, world!";
  echo str_repeat( $_Data,5);
  ?>
</div>
<div class="container">
  <?php
  $_Data = "Hello, Tauhid!";
  echo $_Data . "<br>";
  echo str_replace("Tauhid", "Tashreefa", $_Data);
  ?>
</div>
<Div class="container">
  <?php
  $_data = "Hello,php!";
  echo $_data . "<br>";
  echo str_shuffle($_data);
  ?>
</Div>
<div class="container">
  <?php
  $_data = "Bangladesh, officially the People's Republic of Bangladesh, is a country in South Asia";
  echo $_data . "<br>";
  echo str_word_count ($_data);
  ?>
</div>
<div class="container">
  <?php
  $_data = "Bangladesh, officially the People's Republic of Bangladesh, is a country in South Asia";
  echo $_data . "<br>";
  echo stripos(  $_data, "country");
  ?>
</div>
<div class="container">
  <?php
  $_data = "Bangladesh, officially the People's Republic of Bangladesh, is a country in South Asia";
  echo $_data . "<br>";
  echo strlen($_data);
  ?>
</div>
<!--Variables -->
<div class="container">
<?php
$_name = "Arifa Khanam";
$_food = "Pizza";
$_email = "f@gmail.com";
$_users = "21";
$_price = 4.99;
$_online = false;
$_for_sale = true;

echo "Hello {$_name}<br>";
echo "I love {$_food}<br>";
echo "your email is {$_email}<br>";
echo "There are {$_users} users online<br>";
echo "Your pizza is: \${$_price}<br>";
echo "Online Status: {$_online}<br>";
echo "The product is {$_for_sale}<br>";


$_food = "Pizza";
$_quantity = 5;
$_price = 20;

$_total = null;
echo "You have ordered {$_quantity} * {$_food}s<br>";

$_total = $_quantity * $_price;
echo "Your total: \${$_total}<br>";
?>
<!-- Operators -->
 <div class="container">
  <?php
  $_x = 5;
  $_Y = 8;

  $_Z = null;

  $_Z = $_x + $_Y;
  echo"Total {$_Z}";
  ?>
 </div>
</div>

<div class="container">
  <?php
  // $counter = 10;
  // $counter ++;
  // $counter --;
  // echo $counter
  $_counter = 10;
  $_counter+=8;
  echo $_counter;
  ?>
</div>
<br>
<!-- Get/POST Method -->
 <div class="container">
<form action="index.php" method="POST"> <br>
  <label for="username">username:</label> <br>
  <input type="text" name="username"> <br> 
  <label for="password">password:</label> <br>
  <input type="text" name="password"> <br>
  <input type="submit" value="log in"> 
</form>
<?php 
echo $_POST['username'];
echo $_POST['password'];
?>
</div>
<Br>
<div class="container">
  <form action="index.php" method="POST">
    <label for="quantity">quantity:</label>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  </form>
  <?php
  $_item ="Pizza";
  $_price = 5.99;
  $_quantity = $_POST["quantity"];
  $_total = null;

  $_total = $_price * $_quantity;
  
  echo "You have ordered  {$_quantity} * {$_item} <br>";
  echo "& your total is \$ {$_total}";
  ?>
</div>
<br>
<div class="container">
  <form action="index.php" method="POST">
  <label for="X">X</label>
  <input type="text" name="X"> <br>
  <label for="X">Y</label>
  <input type="text" name="Y"><br>
  <label for="Z">Z</label> 
  <input type="text" name="Z"> <br>
  <input type="submit" value="total">
  </form>
<?php
$_X = $_POST["X"];
$_Y = $_POST["Y"];
$_Z = $_POST["Z"];
$_total = null;
// $_total = abs($_X);
// $_total = round($_X);
// $_total = ceil("$_X");
// $_total= pow($_X, $_Y);
// $_total = max($_X,$_Y,$_Z);
$_total = min($_X,$_Y,$_Z);
echo $_total
?>
</div>
<!-- if/elseif/else -->
 <?php
 $_a = 10;
 $_b = 10;
 if ($_a > $_b){
  echo "a is greater than b";}
  elseif ($_a==$_b){
  echo "a is equal to b";}
  else {echo "a is smaller than b";}
 ?>
 <!-- associative array -->
 <div class="container">
  <form action="index.php" method ="POST">
    <label for="item">Enter a item</label>
    <input type="text" name = "item">
    <input type="submit">
  </form>
  <?php
  $_price = array("papaya"=> 50.00,
                  "Pineapple"=> 30.50);
                  //  foreach($_price as $_key=> $_value){echo "{$_key} = {$_value} <br>";}

                  $_price = $_POST["item"];
                  echo $_price;                
  ?>
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 


