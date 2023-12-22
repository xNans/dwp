<!-- Ved at indlæse "initialize" til hertil, bliver alle mine filer sider med funktionalitet indlæst hertil. Eftersom det er min
header, der bruges på alle sider på hjemmesiden, vil "initialize" blive eksekveret på alle sider, og indholdet vil være tilgængeligt. 
Det er kun nødvendigt at indlæse det hele én gang-->

<!-- Ved indlæsning af initialize, kan jeg ikke bruge de definerede constants, da de ligger inde i initialize.php, og derfor er funktionerne 
endnu ikke indlæst, ved indlæsning af siden -->

<?php require_once('../../../private/initialize.php')?>

<?php

$products = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'product_img' => '../images/blomster.jpg', 'product_name' => 'Blomst 1', 'price' => '20 DK'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'product_img' => '../images/blomster.jpg', 'product_name' => 'Blomst 1', 'price' => '20 DK'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'product_img' => '../images/blomster.jpg', 'product_name' => 'Blomst 1', 'price' => '20 DK'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'product_img' => '../images/blomster.jpg', 'product_name' => 'Blomst 1', 'price' => '20 DK'],
];

?>

<!-- Eftersom tagget "title" ligger i headeren og jeg ønsker varierede titler, indsætter jeg parameteret $page_title.
På denne måder tilføjer jeg tekst til den eksisterende titel i headeren. -->
<?php $page_title = 'Produkter' ?>

<!-- Her bruges de php constants, der er defineret i initialize, til at dynamisk at finde de rigtige stier. -->
<?php include(SHARED_PATH . '/admin_header.php')?>


    <div id="content">
        <div class="product_list">
            <h1>Produkter</h1>
        
            <div class="actions">
                <a class="action" href="<?php echo url_for('/admin/products/new.php'); ?>">Opret nyt produkt</a>
            </div>

            <table class="list">
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Synlighed</th>
                    <th>Billede</th>
                    <th>Navn</th>
                    <th>Pris</th> 
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>

                <?php foreach($products as $product) { ?>
                    <tr>
                        <td><?php echo h($product['id']); ?></td>
                        <td><?php echo h($product['position']); ?></td>
                        <td><?php echo $product['visible'] == 1 ? 'true' : 'false'; ?></td>
                        <td><?php echo h($product['product_img']); ?></td>
                        <td><?php echo h($product['product_name']); ?></td>
                        <td><?php echo h($product['price']); ?></td>
                        <td><a class="action" href="<?php echo url_for('/admin/products/show.php?id=' . h(u($product['id']))); ?>">Se side</a></td>
                        <td><a class="action" href="<?php echo url_for('/admin/products/edit.php?id=' . h(u($product['id']))); ?>">Rediger</a></td>
                        <td><a class="action" href="<?php echo url_for(''); ?>">Slet</a></td>  
                    </tr>
                <?php } ?> 
            </table>
        </div>
    </div>
    <?php include(SHARED_PATH . '/admin_footer.php')?>


