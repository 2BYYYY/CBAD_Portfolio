<?php
$pageTitle = "About Me";
$headerTitle = "Who Am I?";
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
            <p>I am a dedicated student with interests in web development, data engineering, and AI. I enjoy solving problems and learning new technologies.</p>
            <img src="https://via.placeholder.com/400" class="img-thumbnail" alt="About Me Image">
        </div>
    </div>
</div>
</body>
</html>