<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 04/06/15
 * Time: 12:18
 */

$site_lang = get_bloginfo('language');

if ($site_lang == 'fr-FR') {
    include "content/fr.php";
} elseif ($site_lang == 'it-IT') {
    include "content/it.php";
} else {
    include "content/en.php";
}

?>