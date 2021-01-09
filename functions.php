 <?php
/*   if (!isset($content_width))
    $content_width = 800;
  if (!function_exists('tutorial_setup')) :
    function tutorial_setup()
    {
      load_theme_textdomain('tutorial', get_template_directory() . '/languages');

      add_theme_support('automatic-feed-links');

      add_theme_support('post-thumbnails');

      register_nav_menus(array(
        'primary'   => __('Primary Menu', 'tutorial'),
        'secondary' => __('Secondary Menu', 'tutorial')
      ));

      add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

      register_sidebar();
    }
  endif;
  add_action('after_setup_theme', 'tutorial_setup'); */
  if ( function_exists('register_sidebar') )
  register_sidebar();
?>