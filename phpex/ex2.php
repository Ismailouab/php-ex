<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
  <form  method="get">
     <label class="form-check-label" >age :</label>
     <input class="form-control mt-3" type="Number" name="age" min="0" max="100">
     <input class="btn btn-secondary ms-5 mt-5" type="submit" value="submit">
  </form>
</div>
 <?php
 
    if (empty($_GET["age"])) {
      echo "Age is required";
    } else {
      echo "voici votre age:";
      echo $_GET["age"];
    }
  
  ?>
</body>
</html>