<!-- Ved indlæsning af initialize, kan jeg ikke bruge de definerede constants, da de ligger inde i initialize.php, og derfor er funktionerne 
endnu ikke indlæst, ved indlæsning af siden -->

<?php require_once('../../../private/initialize.php')?>

<?php
$pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'page_name' => 'Forside'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'page_name' => 'Produkter'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'page_name' => 'Kontakt'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'page_name' => 'Kurv'],
];

?>

<!-- Eftersom tagget "title" ligger i headeren og jeg ønsker varierede titler, indsætter jeg parameteret $page_title.
På denne måder tilføjer jeg tekst til den eksisterende titel i headeren. -->
<?php $page_title = 'Sider' ?>

<!-- Her bruges de php constants, der er defineret i initialize, til at dynamisk at finde de rigtige stier. -->
<?php include(SHARED_PATH . '/admin_header.php')?>


    <div id="content">
        <div class="page_list">
            <h1>Sider</h1>
        
            <div class="actions">
                <a class="action" href="<?php echo url_for('/admin/pages/new.php')?>">Opret ny side</a>
            </div>

            <table class="list">
                <tr>
                    <th>ID</th>
                    <th>Navn</th>
                    <th>Position</th>
                    <th>Synlighed</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>

                <?php foreach($pages as $page) { ?>
                    <tr>
                        <td><?php echo h($page['id']); ?></td>
                        <td><?php echo h($page['page_name']); ?></td>
                        <td><?php echo h($page['position']); ?></td>
                        <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                        <td><a class="action" href="<?php echo url_for('/admin/pages/show.php?id=' . h(u($page['id']))); ?>">Se side</a></td>
                        <td><a class="action" href="<?php echo url_for('/admin/pages/edit.php?id=' . h(u($page['id']))); ?>">Rediger</a></td>
                        <td><a class="action" href="<?php echo url_for(''); ?>">Slet</a></td>  
                    </tr>
                <?php } ?> 
            </table>
        </div>
    </div>
    <?php include(SHARED_PATH . '/admin_footer.php')?>