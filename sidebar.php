<?php 

if ( is_active_sidebar( 'sidebar-search' ) ) {
  dynamic_sidebar( 'sidebar-search' );
}

if ( is_active_sidebar( 'sidebar-recent' ) ) {
  dynamic_sidebar( 'sidebar-recent' );
}

if ( is_active_sidebar( 'sidebar-categories' ) ) {
  dynamic_sidebar( 'sidebar-categories' ); 
}

if ( is_active_sidebar( 'sidebar-tags' ) ) {
  dynamic_sidebar( 'sidebar-tags' ); 
}

?>
