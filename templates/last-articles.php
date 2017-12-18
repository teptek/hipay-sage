<h4><?php echo $career_last_offers; ?></h4>

<ul class="item-list">
    <?php
    $i = 0;
    foreach ($data->job as $job) {
        ?>
        <li>
            <a class="article-title" href="<?php echo $job_single_url . '?job_id=' . $job->jobId; ?>">
<!--                <p class="meta">-->
<!--                    --><?php //echo $job_category; ?>
<!--                </p>-->
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
        <a class="article-title all-offers" href="<?php echo $career_link_offers; ?>">
            <h4>
                <?php echo $career_see_offers; ?>
            </h4>
        </a>
    </li>
</ul>