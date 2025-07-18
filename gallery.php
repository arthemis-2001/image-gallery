<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php foreach ($imageTitles as $image => $title): ?>
    <a href="image.php?image=<?= http_build_query(['image' => $image]); ?>">
        <h3><?= escape($title); ?></h3>
        <img src="<?= "./images/" . rawurlencode($image); ?>" alt="<?= rawurlencode($title); ?>" />
    </a>
<?php endforeach; ?>


<?php include './views/footer.php'; ?>
