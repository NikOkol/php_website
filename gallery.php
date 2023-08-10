<?php 
    $title = 'Галерея';
    include 'head.php'; 
?>
<body>
    <?php 
        require 'navpanel.php';
    ?>
    <div class="albums">
        <div class="album">
            <a href="wedding.php">Свадебные</a>
            <div class="img-box"><a href="wedding.php"><img src="./gallery_images/wedding/1.jpg" alt="Свадебные"></div></a>
        </div>
        <div class="album">
            <a href="baby.php">Детские</a>
            <div class="img-box"><a href="baby.php"><img src="./gallery_images/baby/2.jpg" alt="Детские"></div></a>
        </div>
        <div class="album">
            <a href="other.php">Разное</a>
            <div class="img-box"><a href="other.php"><img src="./gallery_images/other/1.jpg" alt="Разное"></div></a>
        </div>
    </div>

</body>
</html>