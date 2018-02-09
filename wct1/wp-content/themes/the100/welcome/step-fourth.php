<?php
/**
 * Changelog
 */

$bloog_lite = wp_get_theme( 'the100' );
?>
<div class="featured-section changelog">
<?php
	WP_Filesystem();
	global $wp_filesystem;
	$the100_changelog       = $wp_filesystem->get_contents( get_template_directory() . '/readme.txt' );
	$changelog_start = strpos($the100_changelog,'== Changelog ==');
	$the100_changelog_before = substr($the100_changelog,0,($changelog_start+15));
	$the100_changelog = str_replace($the100_changelog_before,'',$the100_changelog);
	$the100_changelog = str_replace('**','<br/>**',$the100_changelog);
	$the100_changelog = str_replace('= 1.0','<br/><br/>= 1.0',$the100_changelog);
	echo $the100_changelog;
	echo '<hr />';
	?>
</div>