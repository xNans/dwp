<?php require_once('../../../private/initialize.php');

$test= $_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif($test == '500') {
    error_500();
}elseif($test == 'redirect') {
    redirect_to( url_for('/admin/products/index.php'));
}
?>

<?php $page_title = 'Opret produkt';?>
<?php include(SHARED_PATH . '/admin_header.php') ?>

<div id="content">
    <a class ="back-link" href="<?php echo url_for('/admin/products/index.php'); ?>">&laquo; Tilbage til produkter</a>

    <div class="product nyt"><h1>Opret produkt</h1>

        <form action="<?php echo url_for('/admin/products/create.php')?>" method="post">
            <dl>
                <dt>position</dt>
                <dd>
                    <select name="position">
                        <option value="1">1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Synlighed</dt>
                <dd>
                    <input type="hidden" name="visible" value="0">
                    <input type="checkbox" name="visible" value="1">
                </dd>
            </dl>
            <dl>
                <dt>Billede</dt>
                <dd><input type="text" name="product_img" value=""></dd>
            </dl>
            <dl>
                <dt>Produkt navn</dt>
                <dd><input type="text" name="product_name" value=""></dd>
            </dl>
            <dl>
                <dt>Pris</dt>
                <dd><input type="text" name="price" value=""></dd>
            </dl>
            
            
            <div id="operations">
                <input type="submit" name="create product">
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php')?>