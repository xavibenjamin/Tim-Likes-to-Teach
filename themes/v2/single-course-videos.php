<?php get_header(); ?>

<section class="main-content" role="main">

  <div <?php post_class(); ?>>

    <div class="contain">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php
          $product_name = get_field('integration_slug');
          if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>

            <div class="video-container">
              <?php the_field('video_embed'); ?>
            </div>

          <?php else : ?>

            <div class="video-container-anon">
              <h2>Become a Member <small>To Watch this Video</small></h2>
              <a href="https://anythingoes.memberful.com/orders/new?subscription=27" class="btn">Sign Up</a>
            </div>

          <?php endif; ?>
        
        <div class="video-meta-bar">
          <div class="breadcrumb">
            <a href="<?php bloginfo('url');?>" rel="home">Home</a>
            <span class="sep">&rsaquo;</span>
            
            <?php
              // Find connected posts
              $connected = new WP_Query( array(
              'connected_type' => 'courses_to_videos',
              'connected_items' => get_queried_object(),
              'nopaging' => true,
              ) );

              // Display connected posts
              if ( $connected->have_posts() ) : $connected->the_post(); ?>
            
            <a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a>

            <?php // Prevent weirdness
            wp_reset_postdata(); endif; ?>

            <span class="sep">&rsaquo;</span>
            <span class="trail-end"><?php the_title(); ?></span>
          </div>

          <?php
          $product_name = get_field('integration_slug');
          if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>
            <nav class="video-nav">
              <?php previous_post_link('%link', 'Previous Video', TRUE); ?>
              <?php if(!get_adjacent_post(true, '', true)) { 
                echo '<span class="inactive">Previous Video</span>'; 
              } ?>
              &mdash;
              <?php next_post_link('%link', 'Next Video', TRUE); ?>
              <?php if(!get_adjacent_post(true, '', false)) { 
                echo '<span class="inactive">Next Video</span>'; 
              } ?>
            </nav>
          <?php else : ?>

          <?php endif; ?>

        </div><!-- end .video-meta-bar -->

        <div class="module">
          <h2><?php the_title(); ?></h2>
          <p class="video_length"><strong>Video Length:</strong> <?php the_field('video_length'); ?></p>
          <?php the_content(); ?>
        </div><!-- end .module -->

      <?php endwhile; endif; ?>
    
    </div><!-- end .contain -->

  </div><!-- end .post-class -->

</section><!-- end .main-content -->

<?php get_footer(); ?>