<?php
$pageTitle = "Achievements";
$headerTitle = "My Academic & Personal Achievements";
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