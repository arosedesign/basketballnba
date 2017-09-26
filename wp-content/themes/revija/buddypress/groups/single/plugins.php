<?php

/**
 * Fires before the display of content for plugins using the BP_Group_Extension.
 *
 * @since BuddyPress (1.2.0)
 */
do_action( 'bp_before_group_plugin_template' ); ?>

<?php

/**
 * Fires and displays content for plugins using the BP_Group_Extension.
 *
 * @since BuddyPress (1.0.0)
 */
do_action( 'bp_template_content' ); ?>

<?php

/**
 * Fires after the display of content for plugins using the BP_Group_Extension.
 *
 * @since BuddyPress (1.2.0)
 */
do_action( 'bp_after_group_plugin_template' );
