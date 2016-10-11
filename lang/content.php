<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 04/06/15
 * Time: 12:18
 */


$site_lang = get_bloginfo('language');


if ($site_lang == 'fr-FR') {

    $no_document = "Aucun document disponible actuellement";
    $read_article = "Lire l'article";

    // invest page FR

    $invest_communication_schedule = "Agenda financier";
    $invest_cp_title = "Communiqués financiers";
    $invest_cp_press_title = "Communiqués de presse";
    $invest_doc_txt = "Prospectus en vue de l'admission des actions HiPay Group aux négociations sur le marché réglementé d'EuroNext à Paris :";
    $invest_pdf_btn = "Télécharger le prospectus";
    $invest_pdf_link = "http://s3.amazonaws.com/Hipay/doc-hipay-group.pdf?AWSAccessKeyId=AKIAIC77KSBBIEHIGW4A&Expires=1453237246&Signature=Ty4Eo52x8/HSA0BZemIC8pwj%2B%2B8%3D";
    $invest_doc_link = "https://www.hipay.com/documentation-financiere/";

    $invest_cp_btn = "Voir plus";
    $invest_cp_link = "../documentation-financiere/";
    $invest_cp_press_link = "../communiques-de-presse/";

        // data finance
        $finance_currency_txt = "Devise";
        $finance_price_txt = "Cours";
        $finance_volume_txt = "Volume";
        $finance_change_txt = "Variation";
        $finance_change_percent_txt = "Variation (%)";

    // documentation page FR

    $all_documents = "Tous les documents";
    $operation_bourse = "Opération d'introduction en Bourse";
    $infos_trimestriels = "Informations trimestrielles";
    $resultats_financiers = "Résultats financiers";
    $autres_communiques = "Autres communiqués";
    $assemblee_generale = "Assemblée générale";
    $documents_reference = "Documents de référence";
    $annual_reports = "Rapports annuels";
    $operation_titres = "Opération sur titres";
    $cp_finance = "Communiqués financiers";
    $vote = "Droits de vote";
    $liquidite = "Contrat de liquidité";

    // career page FR

    $career_all_offers = "Toutes les offres";
    $career_sales = "Ventes";
    $career_marketing = "Marketing";
    $career_finance = "Finance";
    $career_administration = "Administration";
    $career_it = "IT";
    $career_bi = "Business Analysis";
    $career_customers = "CRM";
    $career_partners = "Partners management";
    $career_bi = "Business Analysis";
    $career_others = "Autres";
    $career_spontane_txt = "Candidature spontanée";
    $career_spontane_url = "https://hi-media-openhire.silkroad.com/epostings/index.cfm?fuseaction=app.newsubmission&jobid=0&company_id=30038&version=5&source=ONLINE";

    $career_data_fix = "";

    $job_description_txt = "Description de l'offre";
    $job_skills_txt = "Compétences requises";
    $job_apply_txt = "Postuler";
    $job_single_url = "/recrutement";


    // contact page FR

    $contact_siege = "Siège France";
    $contact_belgique = "Belgique";
    $contact_italie = "Italie";
    $contact_portugal = "Portugal";
    $contact_espagne = "Espagne";
    $contact_usa = "USA";
    $contact_bresil = "Brésil";

    $contact_title = "Écrivez-nous !";
    $contact_text = "Nos équipes sont à votre écoute";
    $contact_required = "Champs obligatoires";

    $contact_title_call = "Appelez-nous au +33173038900";

    $contact_select_label = "Nature de votre demande";
    $contact_select_option_merchant = "Je vends avec les solutions HiPay";
    $contact_select_option_buyer = "J'achète avec les solutions HiPay";
    $contact_select_option_commercial = "Je souhaite un contact commercial";
    $contact_select_option_media = "Je souhaite un contact média/presse";
    $contact_select_option_invest = "Je souhaite un contact investisseur";
    $contact_select_option_other = "Autres";

    $contact_name_label = "Nom";
    $contact_name_input = "Nom";
    $contact_first_name_label = "Prénom";
    $contact_first_name_input = "Prénom";
    $contact_email_label = "Email";
    $contact_email_input = "Email";
    $contact_company_label = "Société";
    $contact_company_input = "Société";
    $contact_telephone_label = "Numéro de téléphone";
    $contact_telephone_input = "Numéro de téléphone";
    $contact_message_label = "Message";
    $contact_message_input = "Message";
    $contact_send = "Envoyer";

    //sidebar

    $rss = "Flux RSS";
    $rss_link = "https://www.hipay.com/category/blog/feed/";

    //derniers articles

    $last_press = "Nos derniers articles dans les médias";
    $last_cp = "Nos derniers articles de presse";
    $last_blog = "Nos derniers articles de blog";

    $tag_press = "Dans les médias";
    $tag_cp = "Communiqués de presse";
    $tag_blog = "Articles de blog";

}

else {

    $no_document = "No document available";
    $read_article = "Read the article";

    // invest page EN

    $invest_communication_schedule = "Communication schedule";
    $invest_cp_title = "Finance Press Release";
    $invest_cp_press_title = "Press Release";
    $invest_doc_txt = "Prospectus in view of the admission to trading of HiPay Group’s shares on the regulated market of Euronext Paris";
    $invest_pdf_btn = "Download the prospectus";
    $invest_pdf_link = "http://s3.amazonaws.com/Hipay/doc-hipay-group.pdf?AWSAccessKeyId=AKIAIC77KSBBIEHIGW4A&Expires=1453237246&Signature=Ty4Eo52x8/HSA0BZemIC8pwj%2B%2B8%3D";
    $invest_doc_link = "https://www.hipay.com/documentation-en";

    $invest_cp_btn = "See more";
    $invest_cp_link = "../documentation-en/";
    $invest_cp_press_link = "../press-releases/";

        // data finance
        $finance_currency_txt = "Currency";
        $finance_price_txt = "Price";
        $finance_volume_txt = "Volume";
        $finance_change_txt = "Change";
        $finance_change_percent_txt = "Change (%)";

    // documentation page EN

    $all_documents = "All documents";
    $operation_bourse = "Initial Public Offering";
    $infos_trimestriels = "Quaterly Financial Information";
    $resultats_financiers = "Financial Results";
    $autres_communiques = "Other Ongoing Disclosure";
    $assemblee_generale = "General Meeting";
    $documents_reference = "Reference Document";
    $annual_reports = "Annual Reports";
    $operation_titres = "HiPay Share Movements";
    $cp_finance = "Financial Press Release";
    $vote = "Voting rights";
    $liquidite = "Liquidity contracts";

    // career page EN

    $career_all_offers = "All job offers";
    $career_sales = "Sales";
    $career_marketing = "Marketing";
    $career_finance = "Finance";
    $career_administration = "Administration";
    $career_it = "IT";
    $career_bi = "Business Analysis";
    $career_customers = "CRM";
    $career_partners = "Partners management";
    $career_others = "Others";
    $career_spontane_txt = "Open Application";
    $career_spontane_url = "https://hi-media-openhire.silkroad.com/epostings/index.cfm?fuseaction=app.newsubmission&jobid=0&company_id=30038&version=6&source=ONLINE";

    //$career_data_fix = "-en";

    $job_description_txt = "Job Description";
    $job_skills_txt = "Required Skills";
    $job_apply_txt = "Apply";
    $job_single_url = "https://www.hipay.com/jobs";

    // contact page EN

    $contact_siege = "France - Headquarters";
    $contact_belgique = "Belgium";
    $contact_italie = "Italy";
    $contact_portugal = "Portugal";
    $contact_espagne = "Spain";
    $contact_usa = "USA";
    $contact_bresil = "Brazil";

    $contact_title = "Contact us!";
    $contact_text = "Our support teams will be happy to answer your queries.";
    $contact_required = "Mandatory fields";

    $contact_title_call = "Call Us: +33173038900";

    $contact_select_label = "What can we help you with?";
    $contact_select_option_merchant = "I use HiPay solutions as a seller";
    $contact_select_option_buyer = "I use HiPay solutions as a buyer";
    $contact_select_option_commercial = "I am looking for Sales Contacts";
    $contact_select_option_media = "I am looking for Media/Press Contacts";
    $contact_select_option_invest = "I am looking for Investor Contacts";
    $contact_select_option_other = "Other";

    $contact_name_label = "Last name";
    $contact_name_input = "Last name";
    $contact_first_name_label = "First name";
    $contact_first_name_input = "First name";
    $contact_email_label = "Email address";
    $contact_email_input = "Email address";
    $contact_company_label = "Company";
    $contact_company_input = "Company";
    $contact_telephone_label = "Phone number";
    $contact_telephone_input = "Phone number";
    $contact_message_label = "Questions/Comments";
    $contact_message_input = "Message";
    $contact_send = "Send";

    //sidebar

    $rss = "RSS Feed";
    $rss_link = "https://www.hipay.com/category/articles-blog-en/feed/";

    //last articles

    $last_press = "Our last media posts";
    $last_cp = "Our recent press releases";
    $last_blog = "Our recent blog posts";

    $tag_press = "In the Media";
    $tag_cp = "Press Releases";
    $tag_blog = "Blog Posts";

}


?>