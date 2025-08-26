<?php
// Sidebar Menu Variables
$siteTitle = "My Student Portfolio";
?>

<div class="col-sm-3 bg-dark text-white p-3" id="sidebar">
    <h2 class="text-center"><?php echo $siteTitle; ?></h2>
    <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link text-white">About Me</a></li>
        <li class="nav-item"><a href="skills.php" class="nav-link text-white">Skills</a></li>
        <li class="nav-item"><a href="works.php" class="nav-link text-white">Works</a></li>
        <li class="nav-item"><a href="achievements.php" class="nav-link text-white">Achievements</a></li>
    </ul>

    <div class="mt-5 text-center">
        <small id="date"></small>
    </div>

    <script>
        // Show current date
        document.getElementById("date").innerHTML = new Date().toDateString();
    </script>
</div>