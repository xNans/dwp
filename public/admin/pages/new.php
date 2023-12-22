<?php require_once('../../../private/initialize.php');

$page_name = '';
$position = '';
$visible = '';

if(is_post_request()) {

    $page_name = $_POST['page_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters<br />";
    echo "Navn: " . $page_name . "<br/>";
    echo "Position: " . $position . "<br/>";
    echo "Synlighed: " . $visible . "<br/>";
    
}

?>

<?php $page_title = 'Opret side';?>
<?php include(SHARED_PATH . '/admin_header.php') ?>

<div id="content">
    <a class ="back-link" href="<?php echo url_for('/admin/pages/index.php'); ?>">&laquo; Tilbage til produkter</a>

    <div class="page new"><h1>Opret side</h1>

        <form action="<?php echo url_for('/admin/pages/new.php')?>" method="post">
            <dl>
                <dt>Navn</dt>
                <dd><input type="text" name="page_name" value="<?php echo h($page_name); ?>"></dd>
            </dl>
        
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
            
            <div id="operations">
                <input type="submit" name="create product">
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php')?> 