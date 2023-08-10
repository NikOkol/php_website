<?php
    session_start();
    include 'fill_list.php';
    function redirect()
    {
        header('Location: fillings.php');
        exit;
    }
    foreach ($fillings as $key => $value)
    {
        if(isset($_POST[$key]))
        {
            $_SESSION['filling'] = $value;
        }
    }
        
    redirect();
?>