<?php
$pageTitle = "My Works";
$headerTitle = "Projects I’ve Built";
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
                <li>Photo Booth Organizer (Python)</li>
                <li>Spotify Data ETL Pipeline (Airflow + Docker)</li>
                <li>Volcano Analytics Chatbot (GCP + Web Scraping)</li>
            </ul>
            <img src="https://via.placeholder.com/450" class="img-fluid border rounded" alt="Projects Image">
        </div>
    </div>
</div>
</body>
</html>