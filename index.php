<!doctype html>
<?php
    require_once 'vektor.php';

    $a=new vektor(0,0);
    $b=new vektor(0,0);

    //$b->vypis();
?>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <title>Vektory</title> 
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--<script type="text/javascript" href="https://code.jquery.com/jquery-2.1.4.min.js"></script>-->
    </head>
<body>
<header>
    <h1>Vektory</h1>
</header>    
 
    <form class="form" method="post" action="index.php">
            <label for="A1" class="col-sm-5 control-label">BOD A1</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="A1" name="A1" placeholder="A1" value=<?php if(isset($_POST["submit"]))$a->prvni($_POST['A1'])?>>
            </div>
            <label for="A2" class="col-sm-5 control-label">BOD A2</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="A2" name="A2" placeholder="A2" value=<?php if(isset($_POST["submit"]))$a->druhy($_POST['A2'])?>>
            </div>
            <label for="B1" class="col-sm-5 control-label">BOD B1</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="B1" name="B1" placeholder="B1" value=<?php if(isset($_POST["submit"]))$b->prvni($_POST['B1'])?>>
            </div>
            <label for="B2" class="col-sm-5 control-label">BOD B2</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="B2" name="B2" placeholder="B2" value=<?php if(isset($_POST["submit"]))$b->druhy($_POST['B2'])?>>
            </div>
            <div class="col-md-7 col-sm-offset-5">
                    <input id="submit" name="submit" type="submit" value="Odeslat" class="btn btn-primary">
            </div>
    </form>
        
    <?php
    //echo $_POST['A1'];
    $a->vypis();
    $b->vypis();
    ?>
</body>
</html>