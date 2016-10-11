<?php
/**
 * Template Name: Contact
 */
?>

<?php
require('lang/content.php');
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="container-sm">
        <div class="contact-form" class="container">
            <form method="post" onsubmit="window.open('mailto:'+document.forms[0]['type'].options[document.forms[0]['type'].selectedIndex].value+'?subject=Message%20hipay.com&body=Hi,%0D%0A%0D%0ANature demande: '+document.forms[0]['type'].options[document.forms[0]['type'].selectedIndex].text+'%0D%0ANom : '+document.forms[0]['lastname'].value+'%0D%0APrenom : '+document.forms[0]['firstname'].value+'%0D%0AEmail : '+document.forms[0]['email'].value+'%0D%0ASociete : '+document.forms[0]['company'].value+'%0D%0ANumero : '+document.forms[0]['telephone'].value+'%0D%0AMessage : '+document.forms[0]['comments'].value+'%0D%0ANewsletter : '+document.forms[0]['newsletter'].value,'_blank','')" action="">
                <div class="form-select">
                    <div class="col-md-6">
                        <label><?php echo $contact_select_label; ?></label><br>
                        <select name="type">
                            <option value="commercial@hipay.com">Sales</option>
                            <option value="info@hipay.com">Support / Existing Customer</option>
                            <option value="info@hipay.com">Partnerships</option>
                            <option value="press@hipay.com">Press / Media Inquiries</option>
                            <option value="contact@hipay.com">General Inquiries</option>
                            <option value="investors@hipay.com">Investor Inquiries</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="single-field"><label><?php echo $contact_first_name_label; ?></label><br>
                        <input placeholder="<?php echo $contact_first_name_input; ?>" type="text" name="firstname"></p>
                    <p class="single-field"><label><?php echo $contact_name_label; ?></label><span class="required">*</span><br>
                        <input placeholder="<?php echo $contact_name_input; ?>" type="text" name="lastname" required></p>
                    <p class="single-field"><label>Job title</label><span class="required">*</span><br>
                        <input placeholder="Job title" type="text" name="jobtitle" required></p>
                    <p class="single-field"><label><?php echo $contact_email_label; ?></label><span class="required">*</span><br>
                        <input placeholder="<?php echo $contact_email_input; ?>" type="email" name="email" required></p>
                    <p class="single-field"><label><?php echo $contact_telephone_label; ?></label><span class="required">*</span><br>
                        <input placeholder="<?php echo $contact_telephone_input; ?>" type="number" name="telephone" required></p>

                </div>
                <div class="col-md-6">
                    <p class="single-field"><label><?php echo $contact_company_label; ?></label><span class="required">*</span><br>
                        <input placeholder="<?php echo $contact_company_input; ?>" type="text" name="company" required></p>
                    <p class="single-field"><label>Country</label><span class="required">*</span><br>
                        <input placeholder="Country" type="text" name="company" required></p>
                    <p class="single-field"><label><?php echo $contact_message_label; ?></label><span class="required">*</span><br>
                        <textarea placeholder="<?php echo $contact_message_input; ?>" type="text" name="comments" required></textarea>
                    </p>
                </div>
                <div class="col-md-12 captcha">
                    <div class="g-recaptcha" data-sitekey="6LcSEAgUAAAAAEMvC39U09cciVl1PIgtIgonF7B2"></div>
                </div>
                <div class="terms-content col-md-12">
                    <input required="" type="checkbox" name="newsletter">Yes, I would like to receive marketing communications regarding HiPay products, services, and events.  I can unsubscribe at any time. By submitting this form, you are confirming you have read and agree to our <a href="/terms" target="_blank">Terms and Privacy Policy</a>.
                </div>
                <div class="contact-required">
                    <p><small><span class="required">*</span> Required</small></p>
                </div>
                <div class="col-md-12 contact-submit">
                    <input type="submit" class="btn green" value="Contact Me">
                </div>
            </form>

        </div>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

