<?php 
    $title = 'Разное';
    include 'head.php'; 
?>
<body>
    
    <?php 
        require 'navpanel.php';
        $wedd_images = glob('gallery_images/other/*.jpg');
        echo '<div class="gallery">';
        
        foreach ($wedd_images as $img)
        {
            
            echo '<div class="img-box"><a  target="_blank" href="' . $img . '"><img src="' . $img . '"></a></div>';
            
        }
        echo '</div>';
    ?>
    <script src="img_resize.js"></script>
</body>
</html>