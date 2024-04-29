<?php
    if(!$_SESSION['logado']) {
        header("Location:../index.html");
        exit();
    }
?>