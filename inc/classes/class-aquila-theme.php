<?php
/**
 * Bootstrap the Theme.
 * 
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;
 class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
        // load classes.
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hook();
    }

    protected function setup_hook() {
        /**
         * Actions & Filters.
         */

         add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
        /**
         * for title
         */
        add_theme_support( 'title-tag' );
        /**
         * for custom logo
         */
        add_theme_support( 'custom-logo', array(
            'header-text'          => array( 'site-title', 'site-description' ),
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ) );

        /**
         * for custom background
         */
        $args = array(
            'default-color' => 'fff',
            'default-image' => '',
            'default-repeat'     => 'no-repeat'
        );
        add_theme_support( 'custom-background', $args );

        /**
         * for post thumbnail
         */

        add_theme_support( 'post-thumbnails' );
        /**
         * for feed links
         */
        add_theme_support( 'automatic_feed_links' );

        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

        add_editor_style();

        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
        if( ! isset( $content_width ) ) {
            $content_width = 1240;
        }
    }

 }