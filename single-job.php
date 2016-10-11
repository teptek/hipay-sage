<?php
/*
Template Name: Job single
*/
?>

<?php
include('data-career.php');
$current_id = $_GET['job_id'];

foreach ($data->job as $job) {

    if ($job->jobId == $current_id) {
        $job_title = $job->title;
        $job_description = $job->jobDescription;
        $job_skills = $job->requiredSkills;
        $job_date = $job->postingDate;
        $job_category = $job->category;
        break;
    }
}

require('lang/content.php');

?>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $job_title; ?></h4>
                </div>
                <div class="modal-body">
                    <iframe src="https://hi-media-openhire.silkroad.com/epostings/submit.cfm?fuseaction=app.presubmission&amp;jobid=<?php echo $current_id; ?>&amp;company_id=30038&amp;version=5" height="320" width="100%"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8 job-content">

            <div class="job-title">
                <h1><?php echo $job_title; ?></h1>
                <small><?php echo $job_category; ?></small>
            </div>

            <div class="job-description">
                <h3><?php echo $job_description_txt; ?></h3>
                <?php echo $job_description; ?>
            </div>

            <div class="job-skills">
                <h3> <?php echo $job_skills_txt; ?></h3>
                <?php echo $job_skills; ?>
            </div>

            <button class="btn-blue-full-squared" data-target="#myModal" data-toggle="modal" type="button">
                <?php echo $job_apply_txt; ?>
            </button>

        </div>
        <div class="col-md-4 last-articles-blog">

            <h4>Les dernières offres d'emploi</h4>

            <ul class="item-list">
                <?php
                    $i = 0;
                    foreach ($data->job as $job) {
                ?>
                    <li>
                        <a class="article-title" href="<?php echo $job_single_url . '?job_id=' . $job->jobId; ?>">
                            <p class="meta">
                                <?php echo $job_category; ?>
                            </p>
                            <h4>
                                <?php echo $job->title; ?>
                            </h4>
                        </a>
                    </li>
                <?php
                    if($i==2) break;
                    $i++;
                } ?>
                <li>
                    <a class="article-title all-offers" href="/carrieres">
                        <h4>
                           Voir toutes nos offres
                        </h4>
                    </a>
                </li>
            </ul>
        </div>
    </div> <!-- end #content -->