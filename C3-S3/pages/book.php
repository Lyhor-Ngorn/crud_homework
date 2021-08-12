<li class="nav-item list-unstyled">
    <a class="nav-link  text-dark text-decoration-none" href="create_html.php">បង្កើតសៀវភៅ</a>
</li>
<?php
        require_once('data/data.php');
        $data = selectAllFromBook();
        foreach($data as $value):
    ?>
    <div class="p-3 container mt-3">
        <div class="card">
            <div class="card-body">
                <h3 class="display-4"><?= $value['title'] ?></h3>
                <div class="d-flex justify-content-end">
                    <a href="delete.php?id=<?= $value['book_id'] ?>" class='btn btn-danger btn-sm mr-3'>Delete</a>
                    <a href="edit_html.php?id=<?= $value['book_id'] ?>" class='btn btn-warning btn-sm'>Edit</a>
                </div>
                <p><?= $value['price'] ?> $</p>
                <div class="d-flex justify-content-end">
                    <span><?= $value['date'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>