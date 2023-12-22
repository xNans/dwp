<!-- initialize sørger for at indlæse indholdet fra filen "functions.php", og er derfor denne fil der bliver 
kaldt til de forskellige mapper og filer. Initialize står også for at indlæse de andre "biblioteker" af funktioner og indhold,
der bruges i projektet. Det er initialize der "samler" alt materiale, og vidergiver til relevante filer på hjemmesiden -->

<?php
    require('include/connection.php');
    /* For at effektivisere stierne der bruges, når filer skal kaldes ind på de forskellige sider, har jeg har lavet 
    constants, der definere hvordan stierne skal håndteres.
     - Uddeler stier til PHP constants
     - __FILE__ retunere den nuværende sti til denne fil
     - dirname() retunere stien til parent directory */

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    /* Da jeg ikke har defineret hele stien i mine links, for at gøre dem dynamiske, får serveren problemer med at finde det korrekte link. 
    F.eks har jeg flere index.php sider, og webserveren til tage den index.php fil, der er i samme mappe som koden.
    For at fikse dette, har jeg lavet parametre, der definere en root URL til en PHP constant. 
    Dette gør, at jeg ikke behøver at tilføje domænet i linket, Jeg har defineret samme root som webserveren bruger, og jeg kan 
    lave en hardcoded værdi, samtidig med at webserveren dynamisk kan finde alt URL op til public. 
    Dette behøver ikke laves til private, eftersome webserveren ikke skal have adgang til andet end hvad initialize.php 
    og mappen "shared" giver adgang til */ 

    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    //Functions.php skal kun indlæses én gang.
    require_once('functions.php');

?>