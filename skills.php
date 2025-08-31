<?php
$pageTitle = "Skills";
$headerTitle = "Skills";
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
                        <div class="col-12 d-flex justify-content-start mt-3">
                            <b>⚙️ <i>Technical</i></b>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://www.python.org/" target="_blank">
                                <img src="img/skills_img_p.png" style="height:50px; width:50px;" alt="python">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://spark.apache.org/" target="_blank">
                                <img src="img/skills_img_as.png" style="height:50px; width:50px;" alt="spark">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://airflow.apache.org/" target="_blank">
                                <img src="img/skills_img_aa.png" style="height:50px; width:50px;" alt="airflow">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5 d-none d-md-flex">
                            <img src="img/index_img2.jpg" class="img-thumbnail shadow-sm w-100" style="object-fit: cover; height: 55px;" alt="filler pic"> 
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://cloud.google.com/" target="_blank">
                                <img src="img/skills_img_gc.png" style="height:50px; width:50px;" alt="google cloud">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5 d-none d-md-flex">
                            <img src="img/index_img2.jpg" class="img-thumbnail shadow-sm w-100" style="object-fit: cover; height: 55px;" alt="filler pic"> 
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://www.docker.com/" target="_blank">
                                <img src="img/skills_img_d.png" style="height:50px; width:50px;" alt="docker">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://www.mysql.com/" target="_blank">
                                <img src="img/skills_img_sql.png" style="height:50px; width:50px;" alt="my sql">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://www.selenium.dev/" target="_blank">
                                <img src="img/skills_img_s.png" style="height:50px; width:50px;" alt="selenium">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://www.postman.com/" target="_blank">
                                <img src="img/skills_img_po.png" style="height:50px; width:50px;" alt="postman">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5 d-none d-md-flex">
                            <img src="img/index_img2.jpg" class="img-thumbnail shadow-sm w-100" style="object-fit: cover; height: 55px;" alt="filler pic"> 
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://git-scm.com/" target="_blank">
                                <img src="img/skills_img_g.png" style="height:50px; width:50px;" alt="git">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5 d-none d-md-flex">
                            <img src="img/index_img2.jpg" class="img-thumbnail shadow-sm w-100" style="object-fit: cover; height: 55px;" alt="filler pic"> 
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://fastapi.tiangolo.com/" target="_blank">
                                <img src="img/skills_img_fa.png" style="height:50px; width:50px;" alt="fast api">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://studio.blender.org/welcome/" target="_blank">
                                <img src="img/skills_img_b.png" style="height:50px; width:50px;" alt="blender">
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mt-5">
                            <a class="a-techskills d-flex justify-content-center" href="https://www.figma.com/" target="_blank">
                                <img src="img/skills_img_f.png" style="height:50px; width:50px;" alt="figma">
                            </a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex justify-content-start mt-4">
                            <b>👥 <i>Soft</i></b>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center mt-4 shadow-sm" style="background-color:lightgray;">
                            <h3>Adaptability</h3>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center mt-4 shadow-sm">
                            <h3>Teamwork</h3>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center mt-4 shadow-sm" style="background-color:lightgray;">
                            <h3>Leadership</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>