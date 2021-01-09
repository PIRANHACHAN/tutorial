<div class="sidebar">
  <ul>
    <?php if(function_exists('dynamic_sidebar')&&dynamic_sidebar()):else: ?>
    <!-- 搜索框 -->
    <li id="search">
      <?php include(TEMPLATEPATH . '/searchform.php'); ?>
    </li>
    <!-- 日历 -->
    <li id="calendar">
      <h2>
        <?php _e('Calendar'); ?>
      </h2>
      <?php get_calendar(); ?>
    </li>
    <!-- 获取页面 -->
    <!-- <?php wp_list_pages('title_li=<h2>Pages</h2>&depth=38'); ?> -->
    <!-- 注册登录 -->
    <li>
      <h2><?php _e('Meta'); ?></h2>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </li>
    <!-- 获取分类 -->
    <li>
      <h2>
        <?php _e('Categories'); ?>
      </h2>
      <ul>
        <?php wp_list_cats('sort_column=name$optioncount=1$hierarchical=0'); ?>
      </ul>
    </li>
    <!-- 归档 -->
    <li>
      <h2>
        <?php _e('Archives'); ?>
      </h2>
      <ul>
        <?php wp_get_archives('type=monthly') ?>
      </ul>
    </li>
    <!-- 友情链接 -->
    <?php wp_list_bookmarks(); ?>
    <?php endif; ?>
  </ul>
</div>
