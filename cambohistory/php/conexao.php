<?php
    function conectar() {
        try {
            $conn = new PDO("mysql:host=localhost; dbname=cambohistory", "root", "");
        } catch (PDOException $erro){
            echo $erro->getMessage();
            echo $erro->getCode();
        }
        return $conn;
    }
?>