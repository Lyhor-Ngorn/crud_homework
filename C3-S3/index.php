<?php
include_once('patial/header.php');
include_once('patial/navbar.php');
include_once('patial/footer.php');

if(isset($_GET['page'])) {
    include_once('pages/'.$_GET['page'].'.php');
}else{
    include_once('pages/home.php');
}