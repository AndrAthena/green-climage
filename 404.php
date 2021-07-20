<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<div class="inner">
	<div class="container">
    <div class="not-found text-center">
      <h1 class="page-title"><?php _e( 'Oops! Cette page est introuvable.', 'green-climate' ); ?></h1>
    </div>
	</div>
</div>

<?php
get_footer();
