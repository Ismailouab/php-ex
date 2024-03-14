<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form  method="post">
         <label class="form-check-label" >l'age de l'enfant :</label>
         <input class="form-control mt-3" type="text" name="age" >
         <input class="btn btn-secondary ms-4 mt-4" type="submit" value="Calculate">
    </form>
  <?php
     if(isset($_POST['submit'])){
        $age=$_POST['age'];
        if ($age>=6 && $age<=7){
           echo " « Poussin »";
        } 
        elseif ($age>=8 && $age<=9){
           echo "« Pupille »";
        }
        elseif ($age>=10 && $age<=11){
            echo "« Minime »";
        }
        elseif ($age>=12 && $age<=17){
            echo "« Cadet »";
        }
        else {
           echo "error";
        }
     }
    

    ?> 
</div>
</body>
</html>