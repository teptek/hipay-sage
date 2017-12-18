<div class="job-title">
    <h1><?php echo $job_title; ?></h1>
    <h5><?php echo $job_category; ?></h5>
</div>

<div class="job-description">
    <h3><?php echo $job_description_txt; ?></h3>
    <?php echo $job_description; ?>
</div>

<div class="job-skills">
    <h3> <?php echo $job_skills_txt; ?></h3>
    <?php echo $job_skills; ?>
</div>

<button class="btn blue" data-target="#myModal" data-toggle="modal" type="button">
    <?php echo $job_apply_txt; ?>
</button>