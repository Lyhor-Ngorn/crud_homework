<?php
        require_once('data/data.php');
        $data = selectAllFromProgramming();
        foreach($data as $value):
    ?>
    <div class="p-3 container mt-3">
        <div class="card">
            <div class="card-body">
                <h3 class="display-4 font-weight-bold"><?= $value['name'] ?></h3>
                <div class="d-flex justify-content-end">
                    <span class="font-weight-bold"><?= $value['date'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>