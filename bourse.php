<?php
/**
 * Template Name: Bourse
 */
?>
<?php
    require('lang/content.php');
    require 'config/data-finance.php';
?>

<div class="row invest">
    <div class="container">
        <div class="col-md-9" id="invest-amcharts">
            <div id="chartdiv" style="width:100%; height: 228px;"></div>
        </div>
        <div class="col-md-3" id="invest-infos">
            <ul>
                <li id="invest-hipay-title"><h3><?php echo $finance_title ?></h3><small><?php echo $finance_time ?></small></li>
                <li><span class="invest-i-title"><?php echo $finance_currency_txt ?></span> <?php echo $finance_currency ?></li>
                <li id="invest-i-last"><span class="invest-i-title"><?php echo $finance_price_txt ?></span> <?php echo $finance_price ?></li>
                <li><span class="invest-i-title"><?php echo $finance_volume_txt ?></span> <?php echo $finance_volume ?></li>
                <li><span class="invest-i-title"><?php echo $finance_change_txt ?></span> <?php echo $finance_change ?></li>
                <li><span class="invest-i-title"><?php echo $finance_change_percent_txt ?></span> <?php echo $finance_change_percent ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', 'page');?>
        <?php endwhile; ?>
    </div>
</div>

