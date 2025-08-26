<?php
$pageTitle = "Home";
$headerTitle = "Welcome to My Portfolio";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> - Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include('menu.php') ?>

        <div class="col-sm-9 p-4">
            <h1><?php echo $headerTitle; ?></h1>
            <p>Hello! I am a Computer Science student passionate about learning and building projects. This portfolio showcases my achievements and works so far.</p>
            <img src="https://via.placeholder.com/500" class="img-fluid rounded shadow" alt="Portfolio Image">
        </div>
    </div>
</div>
</body>
</html>