<?php require_once('../../../private/initialize.php')?>

<?php
 // denne parameter henter indholdet ind fra produkterne i products, og sætter en default side i tilfælde af, den ikke finder det efterspurgte id
$id = $_GET['id'] ?? '1';


?>

<?php $page_title = 'Se produkter';?>
<?php include(SHARED_PATH . '/admin_header.php') ?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('/admin/products/index.php');?>">&laquo;Tilbage til overblik</a>
    <div class="products show">
        Page ID: <?php echo h($id); ?>
    </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>

