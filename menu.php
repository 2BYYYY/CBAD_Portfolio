<?php
$siteTitle = "My Student Portfolio";
?>


<button class="btn btn-dark d-md-none" style="width:50px" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
    ☰
</button>

<!-- Desktop -->
<div class="col-sm-3 bg-dark text-white p-3 d-none d-md-block" id="sidebar">
    <h2 class="text-center"><?php echo $siteTitle; ?></h2>
    <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link text-white">About Me</a></li>
        <li class="nav-item"><a href="skills.php" class="nav-link text-white">Skills</a></li>
        <li class="nav-item"><a href="projects.php" class="nav-link text-white">Projects</a></li>
        <li class="nav-item"><a href="achievements.php" class="nav-link text-white">Achievements</a></li>
    </ul>
    <div class="mt-5 text-center">
        <small id="D_date"></small>
    </div>
</div>

<!-- Mobile -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasSidebar">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title"><?php echo $siteTitle; ?></h2>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link text-white">About Me</a></li>
            <li class="nav-item"><a href="skills.php" class="nav-link text-white">Skills</a></li>
            <li class="nav-item"><a href="projects.php" class="nav-link text-white">Projects</a></li>
            <li class="nav-item"><a href="achievements.php" class="nav-link text-white">Achievements</a></li>
        </ul>

        <div class="mt-5 text-center">
            <small id="M_date"></small>
        </div>
    </div>

</div>

<script>
    document.getElementById("M_date").innerHTML = new Date().toDateString();
    document.getElementById("D_date").innerHTML = new Date().toDateString();
</script>

