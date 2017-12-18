<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 15/03/16
 * Time: 11:18
 */

$template_directory = get_stylesheet_directory_uri();

if ( is_front_page() ) { $page_css_url = 'home'; }
if ( is_page_template( 'news-home.php' ) ) { $page_css_url = 'news'; }
if ( is_page_template( 'home-1.1.php' ) ) { $page_css_url = 'home-1.1'; }
if ( is_page_template( 'bourse.php' ) ) { $page_css_url = 'bourse'; }
if ( is_page_template( 'applepay.php' ) ) { $page_css_url = 'applepay'; }
if ( is_page_template( 'invest-home.php' ) ) { $page_css_url = 'invest'; }
if ( is_page_template( 'invest-home_fr.php' ) ) { $page_css_url = 'invest'; }
if ( is_page_template( 'blog.php' ) ) { $page_css_url = 'feed'; }
if ( is_page_template( array( 'cp.php', 'cp-it.php', 'cp-en.php' ) ) ) { $page_css_url = 'feed'; }
if ( is_page_template( 'press.php' ) ) { $page_css_url = 'feed'; }
if ( is_page_template( 'thankyou.php' ) ) { $page_css_url = 'thankyou'; }
if ( is_page_template( 'sentinel.php' ) ) { $page_css_url = 'sentinel'; }
if ( is_page_template( 'career.php' ) ) { $page_css_url = 'career'; }
if ( is_page_template( 'ressources.php' ) ) { $page_css_url = 'ressources'; }
if ( is_page_template( 'partners.php' ) ) { $page_css_url = 'partners'; }
if ( is_page_template( array('contact.php', 'contact-confirmation.php' ) ) ) { $page_css_url = 'contact'; }
if ( is_page_template( 'single-job.php' ) ) { $page_css_url = 'single-job'; }
if ( is_page_template( 'signup.php' ) ) { $page_css_url = 'signup'; }
if ( is_page_template( 'customers.php' ) ) { $page_css_url = 'customers'; }
if ( is_page_template( 'documentation.php' ) ) { $page_css_url = 'documentation'; }
if ( is_page_template( 'documentation_fr.php' ) ) { $page_css_url = 'documentation'; }
if ( is_page_template( 'documentation_en.php' ) ) { $page_css_url = 'documentation'; }
if ( is_page_template( 'event.php' ) ) { $page_css_url = 'events'; }
if ( is_page_template( 'belfius.php' ) ) { $page_css_url = 'belfius'; }
if ( is_page_template( 'enterprise.php' ) ) { $page_css_url = 'enterprise'; }
if ( is_single() ) { $page_css_url = 'single'; }
if ( is_page_template( 'case_study.php' ) ) { $page_css_url = 'case-study'; }
if ( is_page_template( 'simple.php' ) ) { $page_css_url = 'simple'; }
if ( is_page_template( 'payment-methods.php' ) ) { $page_css_url = 'payment-methods'; }
if ( is_page_template( 'intelligence.php' ) ) { $page_css_url = 'intelligence'; }
if ( is_page( array( 'products', 'paiement' ) ) ) { $page_css_url = 'products'; }
if ( is_page_template( 'pos.php' ) ) { $page_css_url = 'pos'; }
if ( is_page( array( 'payment-solution-professional', 'solution-paiement-professional', 'soluzioni-professional' ) ) ) { $page_css_url = 'professional'; }

if ( is_page( array( 'payment-solution-marketplace', 'solution-paiement-marketplace', 'soluzioni-marketplace' ) ) ) { $page_css_url = 'marketplace'; }
if ( is_page( array('leadership', 'board-of-directors', 'equipe-dirigeante', 'conseil-dadministration', 'cda' ) ) ) { $page_css_url = 'leadership'; }
if ( is_page( array ( 'company', 'societe', 'azienda' ) ) ) { $page_css_url = 'company'; }
if ( is_page( array ( 'conditions-generales-dutilisation', 'terms' ) ) ) { $page_css_url = 'terms'; }
if ( is_page( array( 'sitemap', 'plan-site', 'sitemap-it' ) ) ) { $page_css_url = 'sitemap'; }
if ( is_page( array( 'stage-intelligent-payments', 'stage-intelligent-payments-en', 'intelligent-payments-test') ) ) { $page_css_url = 'home-1.1'; }
if ( is_page( array( 'elements-graphiques', 'brand-assets', 'elementi-grafici') ) ) { $page_css_url = 'branding'; }
if ( is_tag() ) { $page_css_url = 'tag'; }

?>