<?php
/*
Template Name: Carrières
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<?php
require('lang/content.php');
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $career_spontane_txt; ?></h4>
            </div>
            <div class="modal-body">
                <iframe src="<?php echo $career_spontane_url; ?>" height="320" width="100%"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="row clear-row">

    <div id="content" class="clearfix">

        <div id="main" class="col-md-12 clearfix" role="main">
            <div class="container">
                <?php include('data-career.php'); ?>
                <ul class="masonry-filter" id="job-offers">
                    <li class="btn filter-name active" data-filter="item"><?php echo $career_all_offers; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-sales<?php echo $career_data_fix; ?>"><?php echo $career_sales; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-marketing<?php echo $career_data_fix; ?>"><?php echo $career_marketing; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-finance<?php echo $career_data_fix; ?>"><?php echo $career_finance; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-administration<?php echo $career_data_fix; ?>"><?php echo $career_administration; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-it<?php echo $career_data_fix; ?>"><?php echo $career_it; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-bi<?php echo $career_data_fix; ?>"><?php echo $career_bi; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-rh<?php echo $career_data_fix; ?>"><?php echo $career_rh; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-partners<?php echo $career_data_fix; ?>"><?php echo $career_partners; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-support<?php echo $career_data_fix; ?>"><?php echo $career_support; ?></li>
                    <li class="btn filter-name" data-filter="category-carrieres-others<?php echo $career_data_fix; ?>"><?php echo $career_others; ?></li>
                </ul>
                <div id="masonry-container">

                    <div id="masonry-container">

                        <?php foreach ($data->job as $job) {

                            $payments = stripos($job->businessUnit, 'Payments'); // ligne à supprimer


                            if ( $payments !== false ) { // ligne à supprimer

                                $job_description_cut = $job->requiredSkills;
                                $job_description_cut = strip_tags($job_description_cut);

                                if (strlen($job_description_cut)>220) {
                                    $job_description_cut = substr($job_description_cut, 0, 180);
                                }

                                $finance = stripos($job->category, 'Finance');
                                $marketing = stripos($job->category, 'Marketing');
                                $administration = stripos($job->category, 'Administration');
                                $it = stripos($job->category, 'coms');
                                $sales = stripos($job->category, 'Ventes');
                                $am = stripos($job->category, 'Account');
                                $bi = stripos($job->category, 'Analysis');
                                $rh = stripos($job->category, 'Humaines');
                                $legal = stripos($job->category, 'Juridique');
                                $partners = stripos($job->category, 'Partenaires');
                                $operator = stripos($job->category, 'opérateurs');
                                $support = stripos($job->category, 'Business support');
                                $others = stripos($job->category, 'Autres');

                                if ( $finance !== false ) {
                                    $category = 'category-carrieres-finance';
                                    $category_txt = $career_finance;
                                }

                                if ( $it !== false ) {
                                    $category = 'category-carrieres-it';
                                    $category_txt = $career_it;
                                }

                                if ( $administration !== false ) {
                                    $category = 'category-carrieres-administration';
                                    $category_txt = $career_administration;
                                }

                                if ( $sales !== false ) {
                                    $category = 'category-carrieres-sales';
                                    $category_txt = $career_sales;
                                }

                                if ( $am !== false ) {
                                    $category = 'category-carrieres-sales';
                                    $category_txt = $career_sales;
                                }

                                if ( $marketing !== false ) {
                                    $category = 'category-carrieres-marketing';
                                    $category_txt = $career_marketing;
                                }

                                if ( $bi !== false ) {
                                    $category = 'category-carrieres-bi';
                                    $category_txt = $career_bi;
                                }

                                if ( $rh !== false ) {
                                    $category = 'category-carrieres-rh';
                                    $category_txt = $career_rh;
                                }

                                if ( $legal !== false ) {
                                    $category = 'category-carrieres-rh';
                                    $category_txt = $career_rh;
                                }

                                if ( $partners !== false ) {
                                    $category = 'category-carrieres-partners';
                                    $category_txt = $career_partners;
                                }

                                if ( $support !== false ) {
                                    $category = 'category-carrieres-support';
                                    $category_txt = $career_support;
                                }

                                if ( $operator !== false ) {
                                    $category = 'category-carrieres-support';
                                    $category_txt = $career_support;
                                }

                                if ( $others !== false ) {
                                    $category = 'category-carrieres-others';
                                    $category_txt = $career_others;
                                }

                                echo '<div class="item col-md-4 '; echo $category; echo '">';

                                echo '<div class="article-tag">';
                                echo $category_txt;
                                echo '</div>';

                                echo '<h3 class="job-title">';
                                echo $job->title;
                                echo '</h3>';

                                echo '<div class="item-content">';
                                echo $job_description_cut;
                                echo "...<br>";
                                echo '</div>';

                                echo '<div class="job-link-container"><a class="job-link" href="';
                                echo $job_single_url;
                                echo '?job_id=';
                                echo $job->jobId;
                                echo '">';
                                echo $invest_cp_btn;
                                echo '</a></div>';

                                echo '</div>';
                            }

                        } // ligne à supprimer
                        ?>
                    </div>

                </div> <!-- end #masonry-container -->
            </div>
        </div> <!-- end #main -->
    </div> <!-- end #content -->


</div> <!-- end #container -->

<div class="md-overlay"></div>

</body>

</html>