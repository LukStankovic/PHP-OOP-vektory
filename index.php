<!doctype html>
<?php
    require_once 'vektor.php';

    $a=new vektor(0,0);
    $b=new vektor(0,0);
?>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <title>Vektory</title> 
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" href="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
<body class="container">
<header>
    <h1>Vektory</h1>
</header>    
    <div class="row">
    <form class="form col-md-12" method="post" action="index.php">
            <div class="col-xs-8 col-md-6">
                <input type="text" class="form-control" id="A1" name="A1" placeholder="A1" value=<?php if(isset($_POST["submit"]))$a->prvni($_POST['A1'])?>>
            </div>
            <div class="col-xs-8 col-md-6">
                <input type="text" class="form-control" id="A2" name="A2" placeholder="A2" value=<?php if(isset($_POST["submit"]))$a->druhy($_POST['A2'])?>>
            </div>
            <div class="col-xs-8 col-md-6">
                <input type="text" class="form-control" id="B1" name="B1" placeholder="B1" value=<?php if(isset($_POST["submit"]))$b->prvni($_POST['B1'])?>>
            </div>
            <div class="col-xs-8 col-md-6">
                <input type="text" class="form-control" id="B2" name="B2" placeholder="B2" value=<?php if(isset($_POST["submit"]))$b->druhy($_POST['B2'])?>>
            </div>
            <div class="col-xs-8 col-md-6 col-md-offset-10">
                    <input id="submit" name="submit" type="submit" value="Odeslat" class="btn btn-primary">
            </div>
    </form>
    </div>
    <?php if(isset($_POST["submit"]))
    {
    echo "<div class='alert alert-success row col-xs-8 col-md-12'>
        <strong>Vzdálenost zadaných bodů".$a->vypis()." a ".$b->vypis()."= ".$a->vzdalenost($b)."</strong>
    </div>";
    }
    ?>
</body>
</html>