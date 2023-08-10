<?php
    session_start();
    function redirect()
    {
        header('Location: calculator.php');
        exit;
    }
    
    unset($_SESSION['filling']);
        
    redirect();
?>