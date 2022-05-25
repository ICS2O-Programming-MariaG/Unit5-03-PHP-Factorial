<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Factorials Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Factorials in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Calculating the Factorial of a Whole Number in PHP</h1>"; ?>
    <!-- Div for styled background -->
    <div id="blue-background">
      <?php
      echo "<h3>Welcome!</h3>";
      echo "<p>Welcome to our factorial web page! Please input a number below, and we will calculate and display the number's factorial to you using a DO... WHILE loop. Click <a href='https://www.mathsisfun.com/definitions/factorial.html'>here</a> to learn more about the definition of a factorial.</p>";
      echo "<h3>Your Input</h3>";
      ?>
      <!-- Form for user input -->
      <form action="./factorial.php" method="post" target="results">
        <label for="number">Enter a whole number:</label>
          <input type="number" step="1" min="0" name="number" placeholder="A whole number..."><br><br>
          <input type="submit" value="Calculate Factorial" id="styled-button">
      </form>
    </div>
    <!-- Iframe for factorial to be displayed -->
    <iframe id="results" name="results"></iframe>
  </body>
</html>