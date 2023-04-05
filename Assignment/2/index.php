<!-- ASSIGNMENT 2
project : farenheit to celcius conversion
matric number : 2112125
name : NOR DANISH FITRI BIN NOR SYAMAIZA -->

<!DOCTYPE html>
<html>
  <head>
    <title>Fahrenheit to Celsius Converter</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\Assignment\2\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  </head>
  <style>
    body {
    background-color: lightblue;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  h1 {
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    font-size: xx-large;
  }

  .container {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 20px;
    border: 2px solid navy;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
  }

  select {
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
  }
  
  p{
  font-family: 'Roboto', sans-serif;
    font-weight: bold;
    font-size: 50px;
}

  </style>
  <body>
    <div class="container">
    <h1>Fahrenheit to Celsius Converter</h1>

    <form action = "syntax.php" method="post" >

      <label for="country">Select a country:</label>
      <select id="country" name="country">
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="Mexico">Mexico</option>
      </select>
      
      <br><br>
      <label for="fahrenheit">Enter Fahrenheit temperature:</label>
      <input type="number" id="fahrenheit" name="fahrenheit" required>
      <br><br>
      <button type="submit">Convert</button>
    </form>
 <?php
// Get the country and Fahrenheit temperature from the form

$country = $_POST['country'];
$fahrenheit = $_POST['fahrenheit'];

// Convert Fahrenheit to Celsius
$celsius = ($fahrenheit - 32) * 5/9;
$celsius_rounded = round($celsius, 2);

// Display the result
echo "<p>A country of $country is currently $celsius_rounded degree Celsius.</p>";

?>

   
</div>


  </body>
</html>
