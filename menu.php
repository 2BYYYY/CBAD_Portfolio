<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
    </head>
    <body>
        <button class="btn d-md-none" style="width:50px; height:50px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
        ☰
        </button>
        <!-- Desktop -->
        <div class="col-sm-3 text-black p-5 d-md-flex d-none flex-column justify-content-center align-items-center" id="sidebar">
            <div class="d-flex flex-column align-items-start">
                <a href="index.php" class="btn-expand btn mb-4">
                    <span class="btn-icon"><i class="fa-solid fa-house"></i></span>
                    <span class="btn-text">Home</span>
                </a>
                <a href="skills.php" class="btn-expand btn mb-4">
                    <span class="btn-icon"><i class="fa-solid fa-computer"></i></span>
                    <span class="btn-text">Skills</span>
                </a>
                <a href="projects.php" class="btn-expand btn mb-4">
                    <span class="btn-icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                    <span class="btn-text">Projects</span>
                </a>
                <a href="achievements.php" class="btn-expand btn mb-4">
                    <span class="btn-icon"><i class="fa-solid fa-trophy"></i></span>
                    <span class="btn-text">Achievements</span>
                </a>
            </div>
            <div class="mt-5 text-center">
                <small id="D_date"></small>
            </div>
        </div>

        <!-- Mobile -->
        <div class="offcanvas offcanvas-start text-white" style="width:200px;" id="offcanvasSidebar">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="btn-ne offcanvas-body d-flex flex-column align-items-center">
                <a href="index.php" class="btn mb-5">
                    <span class="btn-icon-m"><i class="fa-solid fa-house"></i></span>
                </a>
                <a href="skills.php" class="btn mb-5">
                    <span class="btn-icon-m"><i class="fa-solid fa-computer"></i></span>
                </a>
                <a href="projects.php" class="btn mb-5">
                    <span class="btn-icon-m"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                </a>
                <a href="achievements.php" class="btn mb-5">
                    <span class="btn-icon-m"><i class="fa-solid fa-trophy"></i></span>
                </a>
                <div class="mt-3 text-center text-black">
                    <small id="M_date"></small>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("D_date").innerHTML = new Date().toDateString();
            document.getElementById("M_date").innerHTML = new Date().toDateString();
        </script>
    </body>
</html>

