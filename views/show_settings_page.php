<div class="wrap">
    <?php screen_icon(); ?>
    <h2>Pronamic Framework Settings</h2>
    <form action="options.php" method="post">
        <?php settings_fields( 'pfe_settings' ); ?>
        <?php do_settings_sections( 'pronamic-framework-settings-page' ); ?>
        <?php submit_button() ;?>
    </form>
</div>