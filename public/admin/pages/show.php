<?php require_once('../../../private/initialize.php')?>

<?php
 // denne parameter henter indholdet ind fra produkterne i products, og sætter en default side i tilfælde af, den ikke finder det efterspurgte id
$id = $_GET['page_id'] ?? '1';


?>

<?php $page_title = 'Se side';?>
<?php include(SHARED_PATH . '/admin_header.php') ?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('/admin/pages/index.php');?>">&laquo;Tilbage til overblik</a>
    <div class="page show">
        Page ID: <?php echo h($id); ?>
    </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>

