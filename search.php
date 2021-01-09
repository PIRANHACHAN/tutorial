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

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

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

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <?php wp_get_archives('type=monthly&format=link'); ?>

    <?php //comments_popup_script(); // off by default
  ?>

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="container">
      <!-- 页头 -->
      <?php get_header(); ?>
      <!-- 主体 -->
      <div class="main">
        <!-- 循环开始 -->
        <!-- 如果有文章，按给定格式，循环输出 -->
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <!-- 文章块 -->
        <div class="post" id="post-<?php the_ID(); ?>">
          <!-- 文章标题，文章链接 -->
          <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <!-- 文章内容 -->
          <div class="entry">
            <?php the_excerpt(); ?>
            <!-- 文章元数据 -->
            <p class="postmetadata">
              <!-- 输出冒号 -->
              <?php _e('Filed under&#58;'); ?>
              <!-- 分类 -->
              <?php the_category(', ') ?>
              <?php _e('by'); ?>
              <!-- 作者 -->
              <?php the_author(); ?><br />
              <!-- 评论 -->
              <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
              <!-- 编辑，登录可见 -->
              <?php edit_post_link('Edit', ' &#124; ', ''); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
        <!-- 结束循环 -->
        <!-- 分页导航 -->
        <div class="navagation">
          <!-- 中间，上一页，下一页 -->
          <?php posts_nav_link('in between','Previous Page','after'); ?>
        </div>
        <?php else: ?>
        <!-- 无文章时输出 -->
        <div class="post">
          <h2>
            <?php _e('Not Found!'); ?>
          </h2>
        </div>
        <?php endif; ?>
      </div>
      <!-- 侧边栏 -->
      <?php get_sidebar(); ?>
      <!-- 底部 -->
      <?php get_footer(); ?>
    </div>
  </body>
</html>
