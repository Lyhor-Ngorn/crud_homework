<?php include_once('patial/header.php'); ?>
<?php include_once('patial/navbar.php'); ?>
    <div class="container mt-5">
        <form action="create.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="ចំណងជើង">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="price"placeholder="តម្លៃ">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" name="btn" value="ដាក់លក់">
            </div>
        </form>
    </div>
<?php include_once('patial/footer.php'); ?>