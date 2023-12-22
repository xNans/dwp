<?php 

/*function url_for($script_path) {

    /*Hvis ikke der er en / i forvejen, sikre denne if statement, at parametrene tilføjer / i URL'en. Derefter vil den 
    retuneret linket ud fra WWW_ROOT
    
    if($script_path[0] !='/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}*/
function url_for($script_path) {
    if (!empty($script_path) && $script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

// Sørger for at konvertere tegn og mellemrum til et noget browseren forstår uden uønskede funktionstegn der kan forvirre browseren
function u($string="") {
    return urldecode($string);
}


// Sørger for at konvertere tegn og mellemrum til et noget browseren forstår uden uønskede funktionstegn der kan forvirre browseren
function raw_u($string="") {
    return rawurldecode($string);
}


// Denne parameter bruges til at konvertere essentielle tegn, således man ikke kan ændre i hjemmesidens kodning fra indtastningsfelter. 
// Jeg har lavet det som en funktion og forkortet, så jeg kun skal skrive "h"
function h($string="") {
    return htmlspecialchars($string);
}


// Error ved browserfejl
function error_404() {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 not found ");
    exit();
}

// Error ved serverfejl
function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . " 500 internal server error ");
    exit();
}


// Shortcut til redirect
function redirect_to($location) {
    header("Location: " . $location);
    exit();
}

// Følgende funktioner har jeg lavet for at se en validering af indsendt data i forms
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>


