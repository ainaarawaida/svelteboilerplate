<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="#">
	<?php 
    
    
    add_filter( 'document_title_parts', function( $title_parts_array ) {
        $title_parts_array['title'] = 'Dashboard';
        return $title_parts_array;
        } );
        
        
        wp_head(); 

$files = glob(SVELTEBOILERPLATE_PATH."myapp/dist/assets/*.js");

foreach($files AS $key => $val){
   echo "<script type=\"module\" src=\"".SVELTEBOILERPLATE_URL."/myapp/dist/assets/".basename($val)."\"></script>" ;
}

?>
    
</head>
<body>

<?php wp_body_open(); ?>


<body>
   <div id="svelteapp"></div>


<?php
// get_footer();
wp_footer();

?>
</body>
</html>