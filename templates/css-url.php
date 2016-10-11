<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 15/03/16
 * Time: 11:18
 */

$template_directory = get_stylesheet_directory_uri();

if ( is_front_page() ) { $page_css_url = 'home.css'; }
if ( is_page_template( 'news-home.php' ) ) { $page_css_url = 'news.css'; }
if ( is_page_template( 'bourse.php' ) ) { $page_css_url = 'bourse.css'; }
if ( is_page_template( 'invest-home.php' ) ) { $page_css_url = 'invest.css'; }
if ( is_page_template( 'blog.php' ) ) { $page_css_url = 'feed.css'; }
if ( is_page_template( 'cp.php' ) ) { $page_css_url = 'feed.css'; }
if ( is_page_template( 'press.php' ) ) { $page_css_url = 'feed.css'; }
if ( is_page_template( 'career.php' ) ) { $page_css_url = 'career.css'; }
if ( is_page_template( 'contact.php' ) ) { $page_css_url = 'contact.css'; }
if ( is_page_template( 'single-job.php' ) ) { $page_css_url = 'single-job.css'; }
if ( is_page_template( 'signup.php' ) ) { $page_css_url = 'signup.css'; }
if ( is_page_template( 'customers.php' ) ) { $page_css_url = 'customers.css'; }
if ( is_page_template( 'documentation.php' ) ) { $page_css_url = 'documentation.css'; }
if ( is_page_template( 'event.php' ) ) { $page_css_url = 'events.css'; }
if ( is_single() ) { $page_css_url = 'single.css'; }
if ( is_page_template( 'case_study.php' ) ) { $page_css_url = 'case-study.css'; }
if ( is_page( '4281' ) ) { $page_css_url = 'fullservice-solutions.css'; }
if ( is_page( '4795' ) ) { $page_css_url = 'home_test.css'; }
if ( is_page( 'products' ) ) { $page_css_url = 'products.css'; }
if ( is_page( 'hipay-offer' ) ) { $page_css_url = 'fullservice-solutions.css'; }
if ( is_page( 'management' ) ) { $page_css_url = 'team.css'; }
if ( is_page( 'professional' ) ) { $page_css_url = 'professional.css'; }
if ( is_page( 'enterprise' ) ) { $page_css_url = 'enterprise.css'; }
if ( is_page( 'marketplace' ) ) { $page_css_url = 'marketplace.css'; }
if ( is_page( array('leadership', 'board-of-directors' ) ) ) { $page_css_url = 'leadership.css'; }
if ( is_page( 'partners' ) ) { $page_css_url = 'partners.css'; }
if ( is_page( 'about' ) ) { $page_css_url = 'about.css'; }
if ( is_page( 'terms' ) ) { $page_css_url = 'terms.css'; }
if ( is_page( 'sitemap' ) ) { $page_css_url = 'sitemap.css'; }

$page_css_url = $template_directory . '/dist/styles/' . $page_css_url;

?>