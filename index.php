<?php
$pageTitle = "Home";
$headerTitle = "Welcome to My Portfolio";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include('menu.php') ?>

        <div class="col-md-9 p-4">
            <h1><?php echo $headerTitle; ?></h1>
            <p>Hello! I am a Computer Science student passionate about learning and building projects. This portfolio showcases my achievements and works so far.</p>
            <img src="https://via.placeholder.com/500" class="img-fluid rounded shadow" alt="Portfolio Image">
        </div>
    </div>
</div>
</body>
</html>