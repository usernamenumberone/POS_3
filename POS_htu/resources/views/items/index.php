<div class="row h-100 col-10" style="text-align: justify;">
    <div class="card-container-pages">
        <div class="card">
            <a href="./index.php">
                <img src="../assets/img/all.png" alt="ALL-items">
                <p>ALL</p>
            </a>
        </div>
        <div class="card">
            <a href="./coffee.php">
                <img src="../assets/img/coffee.png" alt="COFFEE">
                <p>COFFEE</p>
            </a>
        </div>
        <div class="card">
            <a href="./juice.php">
                <img src="../assets/img/juice.png" alt="JUICES">
                <p>JUICES</p>
            </a>
        </div>
        <div class="card">
            <a href="./milk-passed.php">
                <img src="../assets/img/milk.png" alt="Milk Pased">
                <p>Milk Pased</p>
            </a>
        </div>
        <div class="card">
            <a href="./deseret.php">
                <img src="../assets/img/cover.png" alt="Deseret">
                <p>Deseret</p>
            </a>
        </div>
        <div class="card">
            <a href="./Sadwiches.php">
                <img src="../assets/img/sandwich.png" alt="sandwich">
                <p>Sandwich</p>
            </a>
        </div>
    </div>

    <div class="container-item">

        <div class="all-items">
            <h3>ALL Items (<?= $data->items_count ?>)</h3>
        </div>
        <?php foreach ($data->items as $item) : ?>
            <div class="row">
                <div class="col-3 ">
                    <a href="#" class="card">
                        <img src="../assets/img/1.jpeg" class="card-img-top" alt="Item 2">
                        <div class="card-body">
                            <p class="card-text">name: <?= $item->name ?></p>
                            <p class="card-text">Cost:<?= $item->name ?></p>
                            <p class="card-text">Selling Price:<?= $item->name ?></p>
                            <p class="card-text">Quantity:<?= $item->name ?> </p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

            </div>
    </div>
</div>