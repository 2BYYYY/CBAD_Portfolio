<?php
$pageTitle = "Achievements";
$headerTitle = "My Academic & Personal Achievements";
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

        <div class="col-sm-9 p-4">
            <h1><?php echo $headerTitle; ?></h1>
            <ul>
                <li>Dean’s Lister (2nd Year, 1st Semester)</li>
                <li>Hackathon Participant (2025)</li>
                <li>Personal Projects on AI and Data Engineering</li>
            </ul>
            <img src="https://via.placeholder.com/400" class="img-thumbnail shadow-sm" alt="Achievement Image">
        </div>
    </div>
</div>
</body>
</html>