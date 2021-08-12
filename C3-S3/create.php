<?php
    require_once('data/data.php');
    if(isset($_POST['btn'])){
        $title = $_POST['title'];
        $value = $_POST['price'];
        create($title,$value);
        header('Location: index.php?page=book');
    }
?>