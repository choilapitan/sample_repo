<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-28">
    <title></title>
  </head>
  <body>
    <br>
    <br>
    <h2>Crisologo Lapitan IV</h2>
    <br>
    <br>
    <form class="" action="index.php" method="post" style="margin-left: 320px; margin-top: -150px ">
      <h3>Calculator</h3>
      <p>Input first number:</p>
      <input type="text" name="num1" value="" ><br>
      <p>Input second number:</p>
      <input type="text" name="num2" value=""><br>
      <br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="sub" value="-">
      <input type="submit" name="mul" value="*">
      <input type="submit" name="div" value="/">
    </form>
    <br>
    <br>
    <form class="" action="index.php" method="post" style="margin-left: 610px; margin-top: -265px ">
      <h3>Finding GCD</h3>
      <p>Input first number:</p>
      <input type="text" name="num1" value=""><br>
      <p>Input second number:</p>
      <input type="text" name="num2" value=""><br>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <p style="margin-left: 500px; margin-top: 50px">
    <?php
      if (!empty($_POST)){
        echo "The answer is: ";
        if (isset($_POST['add'])){
          echo $_POST['num1'] + $_POST['num2'];
        } else if (isset($_POST['sub'])){
          echo $_POST['num1'] - $_POST['num2'];
        } else if (isset($_POST['mul'])){
          echo $_POST['num1'] * $_POST['num2'];
        } else if (isset($_POST['div'])){
          echo $_POST['num1'] / $_POST['num2'];
        } else{
          $gcd = 1;
          for ($i=1; $i <= $_POST['num1'] && $i <= $_POST['num2'] ; $i++){
            if($_POST['num1'] % $i == 0 && $_POST['num2'] % $i == 0)
              $gcd = $i;
          }
          echo $gcd;
        }
      }
    ?>
    </p>
  </body>
</html>
