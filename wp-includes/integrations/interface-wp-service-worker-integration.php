<?php
/**
 * WP_Service_Worker_Integration interface.
 *
 * @package PWA
 */

/**
 * Interface representing a service worker integration.
 *
 * @since 0.2
 */
interface WP_Service_Worker_Integration {

	/**
	 * Gets the scope this integration applies to.
	 *
	 * @return int Either WP_Service_Workers::SCOPE_FRONT, WP_Service_Workers::SCOPE_ADMIN, or
	 *             WP_Service_Workers::SCOPE_ALL.
	 */
	public function get_scope();

	/**
	 * Registers the integration functionality.
	 *
	 * @since 0.2
	 *
	 * @param WP_Service_Worker_Cache_Registry $cache_registry Instance to register service worker behavior with.
	 */
	public function register( WP_Service_Worker_Cache_Registry $cache_registry );
}
