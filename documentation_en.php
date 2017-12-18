<?php
/*
Template Name: Documentation EN
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<?php
require('lang/content.php');
?>

<div class="container">
    <div class="sidebar col-md-4">
        <form method="POST" action=''>
            <input class="sidebar-link active" type="submit" name="all-btn" value="<?php echo $all_documents; ?>">
            <input class="sidebar-link" type="submit" name="operation_bourse_btn" value="<?php echo $operation_bourse; ?>">
            <input class="sidebar-link" type="submit" name="infos_trimestriels_btn" value="<?php echo $infos_trimestriels; ?>">
            <input class="sidebar-link" type="submit" name="resultats_financiers_btn" value="<?php echo $resultats_financiers; ?>">
            <input class="sidebar-link" type="submit" name="autres_communiques_btn" value="<?php echo $autres_communiques; ?>">
            <input class="sidebar-link" type="submit" name="assemblee_generale_btn" value="<?php echo $assemblee_generale; ?>">
            <input class="sidebar-link" type="submit" name="annual_reports_btn" value="<?php echo $annual_reports; ?>">
            <input class="sidebar-link" type="submit" name="operation_titres_btn" value="<?php echo $operation_titres; ?>">
            <input class="sidebar-link" type="submit" name="cp_finance_btn" value="<?php echo $cp_finance; ?>">
            <input class="sidebar-link" type="submit" name="vote_btn" value="<?php echo $vote; ?>">
            <input class="sidebar-link" type="submit" name="liquidite_btn" value="<?php echo $liquidite; ?>">
        </form>
    </div>
    <div class="col-md-7 articles-feed">
        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'documentation_en',
            'posts_per_page' =>  30,
            'paged' =>  $paged   );
        query_posts( $args );

        if (isset($_POST['all-btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'documentation_en',
                'posts_per_page' =>  30,
                'paged' =>  $paged   );
            echo "<h2>".$all_documents."</h2>";
            query_posts( $args );
        }

        //if (isset($_POST['ag-btn']))
        //{
        //    $args = array( 'tag' =>    'ag'   );
        //    query_posts( $args );
        //}

        if (isset($_POST['bourse_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'operation_bourse_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$operation_bourse."</h2>";
            query_posts( $args );
        }

        if (isset($_POST['infos_trimestriels_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'infos_trimestriels_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$infos_trimestriels."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['resultats_financiers_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'resultats_financiers_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$resultats_financiers."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['autres_communiques_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'autres_communiques_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$autres_communiques."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['assemblee_generale_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'assemblee_generale_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$assemblee_generale."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['annual_reports_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'annual_reports_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$annual_reports."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['operation_titres_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'operation_titres_en',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$operation_titres."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['cp_finance_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'cp_finance_en',
                'posts_per_page' =>  30,
                'paged' =>  $paged   );
            echo "<h2>".$cp_finance."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['vote_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'vote',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$vote."</h2>";
            query_posts( $args );
        }
        if (isset($_POST['liquidite_btn']))
        {
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'liquidite',
                'posts_per_page' =>  10,
                'paged' =>  $paged   );
            echo "<h2>".$liquidite."</h2>";
            query_posts( $args );
        }
        ?>

        <?php get_template_part('templates/articles', 'list'); ?>

    </div>
</div>