<?php
/*
Plugin Name: Zozela
Plugin URI: http://www.zozela.com
Version: 1.0
Description: Add I love zozela to your wordpress site.
Author: Zozela
Author URI:  http://www.zozela.com
*/



function script() 
{ 
	echo '<script type="text/javascript" src="/wp-content/plugins/zozela/zozela.js"></script>';

 } 
function displayZozela()
{

return script();
}

add_action('wp_head', 'displayZozela');
?>