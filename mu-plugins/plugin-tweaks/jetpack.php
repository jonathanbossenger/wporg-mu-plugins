<?php

namespace WordPressdotorg\MU_Plugins\Plugin_Tweaks\Jetpack;

defined( 'WPINC' ) || die();

/**
 * Actions and filters.
 */
add_filter( 'jetpack_active_modules', __NAMESPACE__ . '\activate_jetpack_blocks' );

/**
 * Ensure "blocks" module is active.
 *
 * The subscribe block is used in the footer template, so this must be active
 * for all sites. The filter only fires if Jetpack itself is already active.
 *
 * @param string[] $modules Array of active Jetpack modules.
 * @return string[]
 */
function activate_jetpack_blocks( $modules ) {
	if ( ! in_array( 'blocks', $modules, true ) ) {
		$modules[] = 'blocks';
	}
	return $modules;
}
