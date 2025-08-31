<?php
$pageTitle = "Home";
$headerTitle = "Home";
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
                        <div class="col-12 col-md-5 d-flex">
                            <img src="img/INDEX_img1.jpg" class="img-thumbnail shadow-sm img-fluid align-self-stretch" style="object-fit: cover;" alt="a pic of toby">
                        </div>
                        <div class="col d-flex flex-column">
                            <div class="col-12">
                                <h3>Hi There 👋</h3>
                                <ul>
                                    <li class="ms-5 mt-2">😄 Call me Toby, keepin' life low-key.</li>
                                    <li class="ms-5 mt-2">🔭 I'm currently working on things</li>
                                    <li class="ms-5 mt-2">🎯 Hobbies: Coding, Football, Pickleball, Softball, reading Tech Blogs.</li>
                                    <li class="ms-5 mt-2">🎬 Favorite Movies: Otto, Aladdin, All the John Wick movies, Serendipity.</li>
                                    <li class="ms-5 mt-2">📄 Resume: <a href="https://docs.google.com/document/d/1JBB_fzpzYS-qVbCO7CIhhOuMEf6fB_SeNnIP27ebDnY/edit?usp=sharing" target="_blank"><i>Check it out here</i></a></li> 
                                    <li class="ms-5 mt-2">📫 How to reach me: <a href="mailto:tobyyjavelona@gmail.com" target="_blank"><i>tobyyjavelona@gmail.com</i></a></li>
                                </ul>
                            </div>
                            <div class="col-12 mt-3">
                                <h3>🌐 Socials  </h3>
                                <div class="d-flex justify-content-around mt-4">
                                    <a href="https://github.com/2BYYYY" class="btn-expand-home btn" target="_blank">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/ignatius-warren-benjamin-javelona-bab7272a4/" class="btn-expand-home btn" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://web.facebook.com/TTOO33YY/" class="btn-expand-home btn" target="_blank">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/tobyjavelona/" class="btn-expand-home btn" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 mt-5 d-none d-md-flex">
                                <img src="img/index_img2.jpg" class="img-thumbnail shadow-sm w-100" style="object-fit: cover; height: 170px;" alt="filler pic"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>