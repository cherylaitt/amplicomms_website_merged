<?php include('header.php') ?>
<?php include 'db.php'; ?>

<div class="container-fluid">
    <div class="maintxt">
        <img src="../images/CORDLESS PHONES2.jpg" class="img-fluid" alt="Responsive image">
        <span class="overlay-text font_3">CORDLESS PHONES</span>
    </div>
</div>

<div class="container-fluid bg-light" style="padding-top: 400px;">
    <div class="row justify-content-center">

        <?php
        $category = "cordless phones";
        $query = "SELECT * FROM product where category=\"$category\"";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <div class="col-sm-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                        <div class="card-body">
                            <h5 class="card-title font_8"><?php echo $row["productName"]; ?></h5>
                        </div>
                    </div>
            <?php
            }
        }
            ?>
                </div>
    </div>
</div>

    <?php include('footer.php') ?>