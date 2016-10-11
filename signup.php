<?php
/**
 * Template Name: Signup
 */
?>

<?php
add_action( 'after_setup_theme', 'remove_default_menu', 20 );
function remove_default_menu(){
  unregister_nav_menu( 'primary_navigation' );
}
?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<div class="row">
  <div class="container-sm">
    <h5>Tell us about your business</h5>
    <h2>Select a product</h2>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">My annual sales are below 1M €</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My annual sales are over 1M €</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">I need a solution for a marketplace</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">I need a solution for micropayments</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <h3>Professional - HiPay Direct</h3>
        <p>
          Start accepting payments online in minutes with our simple and powerful payment platform.
          Quick and easy integration to local and international payment methods.
        </p>
        <a class="btn green" target="_blank" href="https://www.hipaydirect.com/registration/register">Sign Up</a>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
        <h3>Enterprise - HiPay Fullservice</h3>
        <p>
          An advanced single solution to handle all your payment needs.<br>
          End-to-end customizable fraud protection, industry-leading data and analytics, seamless omni-channel support and automated financial reconciliation.
        </p>
        <a class="btn green" target="_blank" href="https://merchant.hipay-tpp.com/default/register/signup">Sign Up</a>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
        <h3>Marketplace - HiPay Marketplace</h3>
        <p>
          Manage payments between all stakeholders within your ecosystem.<br>
          Provides multiple local and international payment methods, fund allocation, automated reconciliation and ensures compliance with current regulations.
        </p>
        <a class="btn green" target="_blank" href="https://merchant.hipay-tpp.com/default/register/signup">Sign Up</a>
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
        <h3>Micropayment - HiPay Mobile</h3>
        <p>
          Accept mobile payments. Micropayment platform connected to 250+ global telecom providers offering direct carrier billing, 50+ payment methods in 85 countries.
        </p>
        <a class="btn green" target="_blank" href="https://merchant.hipaymobile.com/security/registration/">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<script>
  
</script>

