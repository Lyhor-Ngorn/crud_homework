<?php
/**
 * Connect to database
 */
function db() {
    return new mysqli('localhost','root','','homework_db');
}


/**
 * get book
 */

function selectAllFromBook() {
    $db = db();
    return $db->query("SELECT * FROM book ORDER BY book_id DESC");
}

/**
 * get Programmming
 */

function selectAllFromProgramming() {
    $db = db();
    return $db->query("SELECT * FROM programming ORDER BY pro_id DESC");
}

/**
 * create
 */

function create($title,$price) {
    $db = db();
    return $db->query("INSERT INTO `book`(`title`, `price`) VALUES ('$title','$price')");
}

/**
 * delete
 */


function deleteStudent($id) {
    $db = db();
    return $db->query("DELETE FROM book WHERE book_id=$id");
}

/**
 * select one
 */


function selectOnlyOne($id) {
    $db = db();
    return $db->query("SELECT * FROM book WHERE book_id = $id");
}

/**
 * edit
 */
function edit($title,$price ,$id) {
    $db = db();
    return $db->query("UPDATE book SET title='$title', price='$price' where book_id = $id");
}