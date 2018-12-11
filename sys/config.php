<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=registration", "root", "");
    }
    catch(PDOException $e){
        die("FATAL ERROR");
    }