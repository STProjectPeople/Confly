<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/helper.php',    // Scripts and stylesheets

  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer

  'lib/app/debug.php',
  'lib/app/settings.php',
  'lib/app/helper.php',
  'lib/app/acfext.php',
  'lib/app/cpt.php',
  'lib/app/webinars.php'
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_action('wp_head', 'your_function_name');
function your_function_name(){
  global $post;
  if ( is_front_page() ) {
    echo '<meta name="description" content="Dzięki aplikacji do efektywnych wideokonferencji Confly skrócisz czas swojej pracy, by skupić na tym, co naprawdę ważne. Let\'s meet with results!" />' . "\n";
}
};
add_action('template_redirect', 'confly_disable_author_page');

function confly_disable_author_page() {
    global $wp_query;

    if ( is_author() ) {
        // Redirect to homepage, set status to 301 permenant redirect. 
        // Function defaults to 302 temporary redirect. 
        wp_redirect(get_option('home'), 301); 
        exit; 
    }
}