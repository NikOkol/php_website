<?php 
    session_start();
    $title = 'Калькулятор';
    include 'head.php'; 
    include 'fill_list.php';
?>
<body>
    <?php require 'navpanel.php' ?>
    <div class="header">Калькулятор стоимости торта</div>
    <div class="content">
        <p>Начинка:</p>
        <?php
            if(isset($_SESSION['filling']))
            {
                echo '<p>' . $_SESSION['filling'] . '</p>';
                echo '<form action="calc_reset.php" method="post">
                        <input type="submit" value="Сброс">
                    </form>';
            }
            else
            {
                echo '<p>Не выбрано</p>';
                echo '<a href="fillings.php"><button>Выбрать</button></a><br>';
            }
        ?>
        <br>
        <p>Введите массу торта (в кг.):</p>
        <input type="number" id="input">
        Сумма: <span id="result"></span>
        <script src="index.js"></script>
        <br>
        <br>
        
    </div>
</body>
</html>