<?php
    require_once('data/data.php');
    if(isset($_POST['btn'])){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $id = $_POST['id'];
        edit($title,$price ,$id);
        header('Location: index.php?page=book');
    }
?>