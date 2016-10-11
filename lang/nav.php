<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 04/06/15
 * Time: 11:32
 */

$site_lang = get_bloginfo('language');


if ($site_lang == 'fr-FR') {

    //header FR

    $menu_cta = "Contactez-nous";
    $menu_cta_link = "../nos-bureaux/";

    //footer FR

    $site_legal = "Mentions légales";
    $site_legal_link = "../mentions-legales/";
    $news_btn = "S'abonner à la newsletter";
    $form_placeholder = "Votre adresse email";
    $form_send = "Envoyer";

    // modal invest FR

    $modal_title_invest = "Note information";
    $modal_content_invest = "Ces informations ne constituent ni une offre de vente ni la sollicitation d'une offre d'achat ou d'acquisition d'actions de HiPay Group dans les pays dans lesquels il est illégal d'effectuer une telle offre ou sollicitation. L'accès aux informations et documents contenus dans les pages qui suivent est susceptible d'être illégal dans certains pays et seules certaines catégories de personnes peuvent être autorisées à accéder à ces informations et documents. Toute personne résidant dans un pays autre que la France et souhaitant avoir accès aux informations et documents contenus sur le site doit au préalable s'assurer qu'elle n'est pas soumise à des lois ou règlementations locales lui interdisant ou restreignant ce droit d'accès ou requérant l'enregistrement ou l'approbation des valeurs mobilières pour leur acquisition. Aucun enregistrement ou approbation n'a été obtenu hors de la France. HiMedia et HiPay Group n'endosseront aucune responsabilité du fait de la violation des normes légales ou règlementaires applicables par toute personne.";
    $modal_return_btn_invest = "Retour au site";

    // invest page

    $communication_shedule = "Agenda financier";

}
else {

    // header EN

    $menu_cta = "Contact us";
    $menu_cta_link = "../offices/";

    // footer EN

    $site_legal = "Terms of Use";
    $site_legal_link = "../terms/";
    $news_btn = "Subscribe to our newsletter";
    $form_placeholder = "Your email address";
    $form_send = "Send";

    // modal invest EN

    $modal_title_invest = "Information";
    $modal_content_invest = "The information contained herein does not constitute an offer to sell or the solicitation of an offer to buy or acquire any shares of HiPay Group in any jurisdiction in which it is unlawful to make such an offer or solicitation. Access to the information and documents contained on the following pages may be illegal in certain jurisdictions and only certain categories of persons may be authorised to access such information and documents. All persons resident outside France who wish to have access to the documents contained on this website should first ensure that they are not subject to local laws or regulations that prohibit or restrict their right to access this website, or require registration or approval for any acquisition of securities by them. No such registration or approval has been obtained outside France. HiMedia and HiPay Group assume no responsibility if there is any violation of applicable law and regulations by any person.";
    $modal_return_btn_invest = "Back to website";

    // invest page

    $communication_shedule = "Communication shedule";

}


?>