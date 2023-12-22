<!-- Ved at indlæse "initialize" hertil, bliver alle mine filer sider med funktionalitet indlæst hertil. Eftersom det er min
header, der bruges på alle sider på hjemmesiden, vil "initialize" blive eksekveret på alle sider, og indholdet vil være tilgængeligt. 
Det er kun nødvendigt at indlæse det hele én gang-->



<!-- Ved indlæsning af initialize, kan jeg ikke bruge de definerede constants, da de ligger inde i initialize.php, og derfor er funktionerne 
endnu ikke indlæst, ved indlæsning af siden -->
<?php require_once('../../private/initialize.php')?>

<!-- Eftersom tagget "title" ligger i headeren og jeg ønsker varierede titler, indsætter jeg parameteret $page_title.
På denne måder tilføjer jeg tekst til den eksisterende titel i headeren. -->
<?php $page_title = 'Admin menu' ?>

<!-- Her bruges de php constants, der er defineret i initialize, til at dynamisk at finde de rigtige stier. -->

<?php include(SHARED_PATH . '/admin_header.php')?>


    <div id="content">
        <div id="main-menu">
            <h2>Main menu</h2>
            <ul>
                
                <li><a href="<?php echo url_for('/admin/products/index.php'); ?>">Produkter</a></li>
                <li><a href="<?php echo url_for('/admin/pages/index.php'); ?>">Sider</a></li>
            </ul>
        </div>

    </div>
    <?php include(SHARED_PATH . '/admin_footer.php')?>


