<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="switchStatements.php" name="grade">
    <input type="submit">
  </form>

  <?php
    $grade =$_POST["grade"];

    switch($grade) {
      case "A":
        echo 'You did amazing';
      break;
      case "B": 
        echo "You did pretty good";
      break;
      case "C":
      default: 
        echo "Invalid Grade";
    };
  ?>
</body>
</html>