<?php
/**
 * File holding logic related to the DXP Dashboard.
 *
 * @package cf-dxpct
 */

// Hook Custom Updater
new OSDXP_Dashboard\OsdxpModuleUpdateChecker(
    SHARED_COUNTS_UPDATE_URL,
    SHARED_COUNTS_FILE,
    SHARED_COUNTS_SLUG
);

// Change button text
add_filter('osdxp_manage_button_module_osdxp-shared-counts', function () {
    return 'View Website';
});
