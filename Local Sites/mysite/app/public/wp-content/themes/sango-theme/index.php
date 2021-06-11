<?php get_header(); ?>
<?php if(is_front_page()) get_template_part('parts/home/featured-header'); ?>
  <div id="content">
    <div id="inner-content" class="wrap cf">
      <div class="tagcloud">
        <?php wp_tag_cloud(); ?>
      </div>
      <div class="new_articles">
        <a class="new" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/new_articles.png"></a>
      </div>
      <main id="main" class="m-all t-2of3 d-5of7 cf">
        <?php
          if(is_active_sidebar( 'home_top' )) dynamic_sidebar( 'home_top' );
          if(get_option('activate_tab')) {
            // タブありの記事一覧
            get_template_part('parts/home/post-tab');
          } else {
            // タブなしの記事一覧
            get_template_part('parts/post-grid');
          }
          if(is_active_sidebar( 'home_bottom' )) dynamic_sidebar( 'home_bottom' );
        ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>
