<?php
$pageTitle = "Home";
$headerTitle = "Home";
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
            <div class="col-md-9 p-5 align-self-center">
                <h1><?php echo $headerTitle; ?></h1>
                <div class="row"> 
                    <div class="col-12 col-md-5">
                        <img src="INDEX_img1.jpg" class="img-thumbnail shadow-sm" alt="a pic of toby">
                    </div>
                    <div class="col">
                        <div class="row">
                            <h1>Hi There 👋</h1>
                            <ul>
                                <li class="ms-5 mt-2">😄 Call me Toby, keepin' life low-key.</li>
                                <li class="ms-5 mt-2">🔭 I'm currently working on things</li>
                                <li class="ms-5 mt-2">📫 How to reach me: <a href="mailto:tobyyjavelona@gmail.com"><i>tobyyjavelona@gmail.com</i></a></li>
                            </ul>
                        </div>
                        <div class="row mt-4">
                            <h1>🌐 Socials</h1>
                            <div class="d-flex justify-content-around mt-4">
                                <a href="https://github.com/2BYYYY" class="btn-expand-home btn">
                                    <span class="btn-icon-home"><i class="fa-brands fa-github"></i></span>
                                </a>
                                <a href="https://www.linkedin.com/in/ignatius-warren-benjamin-javelona-bab7272a4/" class="btn-expand-home btn">
                                    <span class="btn-icon-home"><i class="fa-brands fa-linkedin-in"></i></span>
                                </a>
                                <a href="https://web.facebook.com/TTOO33YY/" class="btn-expand-home btn">
                                    <span class="btn-icon-home"><i class="fa-brands fa-facebook"></i></span>
                                </a>
                                <a href="https://www.instagram.com/tobyjavelona/" class="btn-expand-home btn">
                                    <span class="btn-icon-home"><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>