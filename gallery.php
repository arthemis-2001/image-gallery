<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<div class="gallery-container">
    <?php foreach ($imageTitles as $image => $title): ?>
        <a href="image.php?<?= http_build_query(['image' => $image]); ?>" class="gallery-item">
            <h3><?= escape($title); ?></h3>
            <img src="<?= "./images/" . rawurlencode($image); ?>" alt="<?= rawurlencode($title); ?>" />
        </a>
    <?php endforeach; ?>
</div>


<?php include './views/footer.php'; ?>
