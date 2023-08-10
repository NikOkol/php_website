<?php 
    $title = 'Разное';
    include 'head.php'; 
?>
<body>
    <?php 
        require 'navpanel.php';
        $wedd_images = glob('gallery_images/baby/*.jpg');
        echo '<div class="gallery">';
        
        foreach ($wedd_images as $img)
        {
            
            echo '<div class="img-box"><a  target="_blank" href="' . $img . '"><img src="' . $img . '"></a></div>';
            
        }
        echo '</div>';
    ?>

</body>
</html>