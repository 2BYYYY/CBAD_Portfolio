<?php
$pageTitle = "Projects";
$headerTitle = "Projects";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> - Portfolio</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include('menu.php') ?>
        <div class="col-md-9 p-4 align-self-center">
            <h1><?php echo $headerTitle; ?></h1>
            <div class="row">
                <div class="col-12 col-md-7">
                    <a href="https://github.com/ChocoCodes/solcha-bb" target="_blank">
                        <img src="img/projects_img_b.png" class="projects-img img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="bantala">
                    </a>
                </div>
                <div class="col-12 col-md-5">
                    <a href="https://github.com/2BYYYY/AI_Spotify_Wrapped" target="_blank">
                        <img src="img/projects_img_s.png" class="projects-img img-thumbnail shadow-sm img-fluid w-100 h-100" style="object-fit: cover;" alt="ai spotify thing">
                    </a>
                </div>
                <div class="col-12 col-md-5 mt-3">
                    <a href="https://github.com/2BYYYY/Twolingo" target="_blank">
                        <img src="img/projects_img_t.png" class="projects-img img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="twolingo">
                    </a>
                </div>
                <div class="col-12 col-md-1 d-none d-md-flex mt-3">
                    <img src="img/INDEX_img2.jpg" class="img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="filler">
                </div>
                <div class="col-12 col-md-5 mt-3">
                    <a href="https://github.com/jarede-dev/coverage-united" target="_blank">
                        <img src="img/projects_img_cu.png" class="projects-img img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="coverage united">
                    </a>
                </div>
                <div class="col-12 col-md-1 d-none d-md-flex mt-3">
                    <img src="img/INDEX_img2.jpg" class="img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="filler">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
