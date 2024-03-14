<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <form action="" method="get">
         <label class="form-check-label" >NB1 :</label>
         <input class="form-control mt-3" type="Number" name="NB1" >
         <label class="form-check-label" >NB2 :</label>
         <input class="form-control mt-3" type="Number" name="NB2" >
         <label class="form-check-label" >NB3 :</label>
         <input class="form-control mt-3" type="Number" name="NB3" >
         <input class="btn btn-secondary ms-4 mt-4" type="submit" value="submit">
    </form>
    <?php

        if ((isset($_GET["NB1"]) == isset($_GET["NB2"])) & (isset($_GET["NB3"]) == isset($_GET["NB1"]))& (isset($_GET["NB3"]) == isset($_GET["NB2"]))){
           echo " les tois variables sont identique";
        } 
        elseif ((isset($_GET["NB1"])== isset($_GET["NB2"])) &(isset($_GET["NB3"])!=isset($_GET["NB1"]))||(isset($_GET["NB1"])!= isset($_GET["NB2"])) &(isset($_GET["NB3"])==isset($_GET["NB2"]))){
           echo "deux des variables sont de valeurs égales";
        }
        else {
           echo "Les trois variables sont différentes.";
        }

    ?>
</div>


</body>
</html>