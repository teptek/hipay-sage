<?php
/**
 * Template Name: Contact_back
 */
?>

<?php require('lang/content.php'); ?>




<div class="row clear-row">

    <div id="content" class="clearfix">

        <div id="main" role="main">
            <div class="row map">
                <div id="map-nav">
                    <ul>
                        <li id="map-france" class="active"><?php echo $contact_siege; ?></li>
                        <li id="map-belgique"><?php echo $contact_belgique; ?></li>
                        <li id="map-italie"><?php echo $contact_italie; ?></li>
                        <li id="map-portugal"><?php echo $contact_portugal; ?></li>
                        <li id="map-espagne"><?php echo $contact_espagne; ?></li>
                        <li id="map-usa"><?php echo $contact_usa; ?></li>
                        <li id="map-bresil"><?php echo $contact_bresil; ?></li>
                    </ul>
                </div>
                <div id="map-office"></div>
            <!-- <div class="col-md-6 text-side contact-form-side">
                    <form method="post" onsubmit="window.open('mailto:'+document.forms[0]['type'].options[document.forms[0]['type'].selectedIndex].value+'?subject=Message%20hipay.com&body=Hi,%0D%0A%0D%0ANature demande: '+document.forms[0]['type'].options[document.forms[0]['type'].selectedIndex].text+'%0D%0ANom : '+document.forms[0]['lastname'].value+'%0D%0APrenom : '+document.forms[0]['firstname'].value+'%0D%0AEmail : '+document.forms[0]['email'].value+'%0D%0ASociete : '+document.forms[0]['company'].value+'%0D%0ANumero : '+document.forms[0]['telephone'].value+'%0D%0AMessage : '+document.forms[0]['comments'].value,'_blank','')" action="">
                        <fieldset>
                            <div class="col-md-6">
                                <p class="single-field"><label><?php echo $contact_select_label; ?></label><br>
                                    <select name="type">
                                        <option value="commercial@hipay.com"><?php echo $contact_select_option_merchant; ?></option>
                                        <option value="press@hipay.com"><?php echo $contact_select_option_media; ?></option>
                                        <option value="investors@hipay.com"><?php echo $contact_select_option_invest; ?></option>
                                        <option value="info@hipay.com"><?php echo $contact_select_option_other; ?></option>
                                    </select>
                                </p>
                                <p class="single-field"><label><?php echo $contact_name_label; ?></label><span class="required">*</span><br>
                                    <input placeholder="<?php echo $contact_name_input; ?>" type="text" name="lastname" required></p>
                                <p class="single-field"><label><?php echo $contact_first_name_label; ?></label><br>
                                       <input placeholder="<?php echo $contact_first_name_input; ?>" type="text" name="firstname"></p>
                                <p class="single-field"><label><?php echo $contact_email_label; ?></label><span class="required">*</span><br>
                                    <input placeholder="<?php echo $contact_email_input; ?>" type="email" name="email" required></p>

                            </div>
                            <div class="col-md-6">
                                <p class="single-field"><label><?php echo $contact_company_label; ?></label><span class="required">*</span><br>
                                    <input placeholder="<?php echo $contact_company_input; ?>" type="text" name="company" required></p>
                                <p class="single-field"><label><?php echo $contact_telephone_label; ?></label><span class="required">*</span><br>
                                    <input placeholder="<?php echo $contact_telephone_input; ?>" type="number" name="telephone" required>
                                </p>
                                <p class="single-field"><label><?php echo $contact_message_label; ?></label><span class="required">*</span><br>
                                    <textarea placeholder="<?php echo $contact_message_input; ?>" type="text" name="comments" required></textarea>
                                </p>
                                <div class="g-recaptcha" data-sitekey="6LdwnBATAAAAACWMpsibKwps7g6msGWN60oGsFJZ"></div>
                            </div>
                            <div class="col-lg-12" id="form-valid">
                                <input type="submit" class="btn green square" value="<?php echo $contact_send; ?>">
                            </div>
                        </fieldset>
                    </form>

                </div> -->

            </div>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>

        </div> <!-- end #main -->

    </div> <!-- end #content -->
</div>