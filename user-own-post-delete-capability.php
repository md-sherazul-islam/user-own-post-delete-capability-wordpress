<?php
/**
 * Plugin Name: User Own Post Delete Capability
 * Description: Allow subscribers to delete their own posts
 **/

//* On activation, add the capabilities to the subscriber role
register_activation_hook( __FILE__, 'uopdc_268755_activation' );
function uopdc_268755_activation() {
  $subscriber = get_role( 'subscriber' );
  $subscriber->add_cap( 'delete_posts' );
  $subscriber->add_cap( 'delete_published_posts' );
}

//* On deactivation, remove the capabilities from the subscriber role
register_deactivation_hook( __FILE__, 'uopdc_268755_deactivation' );
function uopdc_268755_deactivation() {
  $subscriber = get_role( 'subscriber' );
  $subscriber->remove_cap( 'delete_posts' );
  $subscriber->remove_cap( 'delete_published_posts' );
}