<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>
<?php include './views/header.php'; ?>

<?php if (!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
    <?php 
    $image = $_GET['image']; 
    $title = $imageTitles[$image];
    $description = $imageDescriptions[$image];
    ?>
    <h2><?= escape($title); ?></h2>
    <img src="<?= "./images/" . rawurlencode($image); ?>" alt="<?= escape($title); ?>" />
    <p><?= str_replace("\n", "<br>", escape($description)); ?></p>
<?php else: ?>
    <div class="notice">
        <p>Image not found</p>
    </div>
<?php endif; ?>

<a href="gallery.php">Back to gallery</a>
<br /><br /><br />

<?php include './views/footer.php'; ?>
