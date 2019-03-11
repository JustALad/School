<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <title>Mason Fah - Form Page</title>
  <style>
    input {
      width: 25%;
      border-radius: 4px;
      padding: 12px 20px;
      margin: 10px 0;
      box-sizing: border-box;
    }

  </style>
</head>
<body>


  <form action="Form.php" method="post">
      Name :<br>  <input type="text" name= "name"><br>
      Address : <br> <input type="text" name= "address"><br>
      Telephone Number :<br> <input type="tel" name= "tel"><br>
      Zip Code : <br> <input type="number" name= "zip" min="10000" max="99999"><br>
      <input type="submit">

  </form>
  <?php  echo "<p style='text-align:center;'>".$_POST["name"];  ?><br>
  <?php  echo "<p style='text-align:center;'>".$_POST["address"];  ?><br>
  <?php  echo "<p style='text-align:center;'>".$_POST["tel"];  ?><br>
  <?php  echo "<p style='text-align:center;'>".$_POST["zip"];  ?><br>
</body>
</html>
