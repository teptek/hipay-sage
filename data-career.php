<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 02/07/15
 * Time: 11:44
 */

$site_lang = get_bloginfo('language');

// switch lang footer cta

if ($site_lang == 'fr-FR') {
    $xmlstr = file_get_contents ("https://hi-media-openhire.silkroad.com/api/index.cfm?fuseaction=app.getJobListings&FORMAT=xml&KEYWORD=&LANGUAGE=fr&JOBPLACEMENT=external&VERSION=5");
    $data = new SimpleXMLElement($xmlstr);
}
else {
    $xmlstr = file_get_contents ("https://hi-media-openhire.silkroad.com/api/index.cfm?fuseaction=app.getJobListings&FORMAT=xml&KEYWORD=&LANGUAGE=en&JOBPLACEMENT=external&VERSION=6");
    $data = new SimpleXMLElement($xmlstr);
}

?>
