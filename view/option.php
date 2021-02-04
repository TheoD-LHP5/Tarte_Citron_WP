<div class="wrap">
    <h1>Configuration du plugin</h1>
    <!-- L'action doit être options.php. C'est la page WP pour sauvegarder en base-->
    <form method="post" action="options.php"> 
        <h2>Google Analytics</h2>
        <?php 
        //Cette fonction doit être appelée à l'intérieur de la balise form. C'est pour autoriser l'enregistrement en base
        settings_fields('LAMANU_GoogleAnalytics');
        //On rappelle le nom de la page d'option
        do_settings_sections( 'Configuration' ); ?>
        <label>ID de suivi : </label><input type="text" id="google_analytics" name="google_analytics" value="<?= get_option('google_analytics','UA-00000000-0'); ?>"/>
        <?php submit_button(); ?>
    </form>
</div>