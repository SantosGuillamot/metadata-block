<?php

/**
 * Plugin Name:       Metadata Block
 * Version:           0.1.0
 * Requires at least: 6.0
 * Requires PHP:      5.6
 * Author:            Mario Santos
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       metadata-block
 */
function metadata_block_init()
{
    register_block_type(
        plugin_dir_path(__FILE__) . 'build/blocks/metadata/',
    );
}
add_action('init', 'metadata_block_init');
