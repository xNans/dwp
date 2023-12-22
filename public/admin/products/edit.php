<?php require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
    //Hvis der er sket fejl ved indlæsning af id, skal der redictes til index siden
    redirect_to(url_for('admin/products/index.php'));
}
// Findes der et id, skal dette kaldes
$id = $_GET['id'];
$position = '';
$visible = '';
$product_img = '';
$product_name = '';
$price = '';


if(is_post_request()) {

    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
    $product_img = $_POST['product_img'] ?? '';
    $product_name = $_POST['product_name'] ?? '';
    $price = $_POST['price'] ?? '';
    
    echo "Form parameters<br />";
    echo "Position: " . $position . "<br/>";
    echo "Synlighed: " . $visible . "<br/>";
    echo "Produktbillede: " . $product_img . "<br/>";
    echo "Produkt navn: " . $product_name . "<br/>";
    echo "Pris: " . $price . "<br/>";
    }
?>

<?php $page_title = 'Rediger produkt';?>
<?php include(SHARED_PATH . '/admin_header.php') ?>

<div id="content">
    <a class ="back-link" href="<?php echo url_for('/admin/products/index.php'); ?>">&laquo; Tilbage til produkter</a>

    <div class="product edit"><h1>Rediger produkt</h1>
        <form action="<?php echo url_for('/admin/products/edit.php?id=' . h(u($id))); ?>" method="post">
        <dl>
                <dt>position</dt>
                <dd>
                    <select name="position">
                    <option value="1"<?php if($position == "1") { echo " selected";}?>>1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Synlighed</dt>
                <dd>
                    <input type="hidden" name="visible" value="0">
                    <input type="checkbox" name="visible" value="1"<?php if($visible == "1") { echo " checked";} ?>>
                </dd>
            </dl>
            <dl>
                <dt>Billede</dt>
                <dd><input type="text" name="product_img" value="<?php echo $product_img; ?>"></dd>
            </dl>
            <dl>
                <dt>Produkt navn</dt>
                <dd><input type="text" name="page_name" value="<?php echo h($product_name); ?>"></dd>
            </dl>
            <dl>
                <dt>Pris</dt>
                <dd><input type="text" name="price" value="<?php echo h($price); ?>"></dd>
            </dl>
            <div id="operations">
                <input type="submit" name="edit product">
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php')?>