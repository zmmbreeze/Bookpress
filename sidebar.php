<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
    <div class="side" role="complementary">
        <?php if (!is_home()) { ?>
        <header class="header" role="banner">
            <hgroup>
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <p><?php bloginfo( 'description' ); ?></p>
            </hgroup>
        </header><!-- #branding -->
        <?php } ?>

        <aside id="octocard"></aside>
        <script>
        OCTOCARD = {
          name: 'zmmbreeze',
          modules: 'base,repos,eventsStatis,orgs'
        };
        </script>
        <script src="http://nodejs.in/octocard/bin/octocard.js"></script>
        <aside>

        <aside class="side-rss">
            <a href="<?php bloginfo( 'rss2_url' ); ?>">RSS</a>
        </aside>

        <?php wp_list_bookmarks('category_before=<aside>&category_after=</aside>'); ?> 
    </div>
