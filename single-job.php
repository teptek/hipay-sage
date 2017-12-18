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
                    <iframe src="https://hipay-openhire.silkroad.com/epostings/submit.cfm?fuseaction=app.presubmission&amp;jobid=<?php echo $current_id; ?>&amp;company_id=30038&amp;version=5" height="320" width="100%"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
        if (empty($current_id)) {
            echo '<div class="col-md-12 last-articles-blog">';
            include('templates/last-articles.php');
            echo '</div>';
        } else {
            echo '<div class="col-md-8 job-content">';
            include('templates/content-job.php');
            echo '</div>';
            echo '<div class="col-md-4 last-articles-blog">';
            include('templates/last-articles.php');
            echo '</div>';
        }
        ?>
    </div> <!-- end #content -->