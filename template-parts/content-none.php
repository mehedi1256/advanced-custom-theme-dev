<?php 
    /**
     * The Template part for displaying a message that posts cannot be found.
     * 
     * @package Aquila
     */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'aquila' ); ?></h1>
    </header>

    <?php 
        if (is_home() && current_user_can('publish_posts')) {
            ?>

            <p>
                <?php 
                    printf(
                        wp_kses(
                            __( 'Ready to publish your first post? <a href="%s">Get started here</a>', 'aquila' ) ,
                            [
                                'a' => [
                                    'href' => [],
                                ]
                            ]
                        ),
                        esc_url(admin_url('post-new.php'))
                    )
                ?>
            </p>
            <?php
        } elseif(is_search()) {
            ?>
                <p><?php esc_html_e('No results found for the search query. please try again', 'aquila') ?></p>
            <?php
                get_search_form();
        } else {
            ?>
                <p><?php esc_html_e('It seems we can not find what you are looking for. Perhaps searching can help.', 'aquila') ?></p>
            <?php
                get_search_form();
        }
    ?>
</section>