<?php
/*
Plugin Name: Zayso
Plugin URI: http://wordpress.org/extend/plugins/zayso/
Description: Zayso Referee Scheduling
Author: Art Hundiak
Version: 1.6
Author URI: http://ma.tt/
*/

/* ===========================
 * Add a zayso admin page
 */
function zayso_admin_actions()
{
    add_options_page("Zayso Admin", "Zayso Admin", 10, "zayso-admin", "zayso_admin"); 
}
function zayso_admin()
{
    include 'zayso_admin_options.php';
}
add_action('admin_menu', 'zayso_admin_actions');

/* ==========================
 * Just call this directly from a page?
 * [zayso_project]
 */
function zayso_project($atts, $content = null)
{
    return sprintf('<h2>Zayso Project %s</h2>',get_option('zayso_project'));
}
add_shortcode('zayso_project','zayso_project');

/* ==========================
 * Now try to buill full S2 app
 */
function zayso_get_app()
{
    static $app;
    
    if ($app) return $app;
    
    // Do the S2 stuff
}
function zayso_volunteer_plan()
{
    $app = zayso_get_app;
    
    // Need the session variable at least
    $request = new Request('/volunteer/plan');
    $response = $app->handle($request);
    return $response->getContent();
}
?>
