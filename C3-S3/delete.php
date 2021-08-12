<?php
    require_once("data/data.php");
    $id = $_GET['id'];
    deleteStudent($id);
    header('Location: index.php?page=book');