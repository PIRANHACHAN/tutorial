<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      http-equiv="Content-Type"
      content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"
    />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <link
      rel="stylesheet"
      href="<?php bloginfo('stylesheet_url'); ?>"
      type="text/css"
      media="screen"
    />

    <link
      rel="alternate"
      type="application/rss+xml"
      title="RSS 2.0"
      href="<?php bloginfo('rss2_url'); ?>"
    />

    <link
      rel="alternate"
      type="text/xml"
      title="RSS .92"
      href="<?php bloginfo('rss_url'); ?>"
    />

    <link
      rel="alternate"
      type="application/atom+xml"
      title="Atom 0.3"
      href="<?php bloginfo('atom_url'); ?>"
    />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_get_archives('type=monthly&format=link'); ?>

    <?php //comments_popup_script(); // off by default
  ?>

    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header">
      <h1>
        <a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>
      </h1>
      <?php bloginfo('description') ?>
    </div>
    <div class="container">
      <?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <h2>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
            ><?php the_title(); ?></a
          >
        </h2>
        <div class="entry">
          <?php the_content(); ?>
          <p class="postmetadata">
            <?php _e('Filed under&#58;'); ?>
            <?php the_category(', ') ?>
            <?php _e('by'); ?>
            <?php  the_author(); ?><br />
            <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            <?php edit_post_link('Edit', ' &#124; ', ''); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
      <div class="navagation">
        <?php posts_nav_link('in between','Previous Page','after'); ?>
      </div>
      <?php else: ?>
      <div class="post">
        <h2><?php _e('Not Found!'); ?></h2>
      </div>
      <?php endif; ?>
    </div>
  </body>
</html>
