<!-- Hvis ikke $page_title på diverse sider virker eller er skrevet, ønsker jeg en default værdi til titlen. Derfor bruger jeg
følgende if statement. Den er placeret i headeren, da denne kaldes på alle sider og derfor rammer alle mine sider-->

<?php 
    if(!isset($page_title)) { $page_title = 'Admin område';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/admin.css'); ?>">
    <title>Blomsterbiksen - <?php echo h($page_title); ?></title>
</head>
<body>
    <header>
        <h1>Blomsterbiksen admin område</h1>
    </header>

    <nav>
        <ul>
            <li>
                <a href="<?php echo url_for('/admin/index.php'); ?>">Menu</a>
            </li>
        </ul>
    </nav>