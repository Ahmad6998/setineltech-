<?php
/**
 * Setinel Tech 404 Error Template
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div class="container section-spacing" style="padding-top: 180px; text-align: center;">
    <div class="badge badge-emerald">Error 404 // Node Missing</div>
    <h1 style="font-size: clamp(3rem, 8vw, 6rem); margin-bottom: 20px;" class="gradient-text">404</h1>
    <h2 style="margin-bottom: 16px;">Requested Route Does Not Exist</h2>
    <p style="max-width: 540px; margin: 0 auto 36px auto;">
        The system path you requested could not be resolved by our routing cluster. It may have moved or been decommissioned.
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
        <span>Return to Main Terminal</span>
    </a>
</div>

<?php
get_footer();
