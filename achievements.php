<?php
$pageTitle = "Achievements";
$headerTitle = "Achievements";
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
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/achevements_img_ai.png" class="img-thumbnail shadow-sm img-fluid w-100 h-100" style="object-fit: cover;" alt="ai lead">
                        </div>
                        <div class="col-md-4">
                            <img src="img/achevements_img_aiw.png" class="img-thumbnail shadow-sm img-fluid w-100 h-100" style="object-fit: cover;" alt="ai workshops">
                        </div>
                        <div class="col-md-4">
                            <img src="img/achevements_img_mod.png" class="img-thumbnail shadow-sm img-fluid w-100 h-100" style="object-fit: cover;" alt="Not the best developer but i accept the certificate">
                        </div>
                        <div class="row"> 
                            <div class="col-md-6 mt-3">
                                <a href="https://developers.google.com/profile/badges/community/solution-challenge/2025/participant" target="_blank"> 
                                    <img src="img/achevements_img_sc.png" class="projects-img img-thumbnail shadow-sm img-fluid" style="object-fit: cover; height: 100%;" alt="solcha">
                                </a>
                            </div>
                            <div class="col-md-6 d-flex flex-column mt-3">
                                <div class="d-flex mb-3">
                                    <div class="col-6 d-flex justify-content-center me-3">
                                        <a href="https://www.datacamp.com/certificate/DEA0019834177775" target="_blank"> 
                                            <img src="img/achevements_img_de.png" class="projects-img img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="data engineer">
                                        </a>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <a href="https://www.datacamp.com/certificate/SQA0015847325156" target="_blank">
                                            <img src="img/achevements_img_sa.png" class="projects-img img-thumbnail shadow-sm img-fluid" style="object-fit: cover;" alt="sql associate">
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-auto d-none d-md-flex">
                                    <img src="img/index_img2.jpg" class="img-thumbnail shadow-sm w-100" style="object-fit: cover; height: 100px;" alt="filler">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>