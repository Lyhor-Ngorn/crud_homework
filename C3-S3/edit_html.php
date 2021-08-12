<?php include_once('patial/header.php'); ?>
<?php include_once('patial/navbar.php'); ?>
<?php
    require_once('data/data.php');
    $id = $_GET["id"];
    $items= selectOnlyOne($id);
    foreach($items as $row):
    ?>
    <div class="container p-4">
        <form action="edit.php" method="POST">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value=<?= $row['book_id'] ?>>
                    <input type="text" class="form-control" name="title" value=<?= $row['title'] ?>>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="price" value=<?= $row['price'] ?>>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" name="btn" value="កែប្រែ">
                </div>
            </form>
    </div>
<?php 
    endforeach;
?>
<?php include_once('patial/footer.php'); ?>