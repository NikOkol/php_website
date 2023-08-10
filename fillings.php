<?php 
    session_start();
    $title = 'Начинки';
    include 'head.php';
    
?>
<body>
    <?php require 'navpanel.php' ?>
    <?php 
        if (isset($_SESSION['filling'])) 
        { 
            echo "\n" . '<div class="selected-fil"><p>Выбрано: ' . $_SESSION['filling'] . '</p></div>' . "\n";
        }
        ?>
    <div class="content" id="site">
        
    </div>
    <script src="fillings.js" type="module"></script>
    
</body>
</html>