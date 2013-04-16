<!DOCTYPE html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php bloginfo('name'); ?> » <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsify.css"/>

<!-- Typekit Code -->
<script type="text/javascript" src="//use.typekit.net/eam5ytk.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--WP Generated Header -->
  <?php wp_head(); ?>
<!--End WP Generated Header -->

</head>

<body <?php body_class($class); ?>>

  <header role="banner">
    <div class="contain">
      <a href="/" title="Back to the homepage" class="logo">
      <img src="<?php bloginfo('template_url'); ?>/img/supersmith.svg" alt="Supersmith Logo" />
      </a>

      <nav role="navigation" class="header-nav">
        <a href="#">Courses</a>
        <a href="#">Tim TV</a>
        <a href="/help">Help</a>
      </nav>
      
      <div class="search">
        <?php get_search_form(); ?>
      </div><!-- .search -->

      <div class="signed-in-status">
        <?php if ( is_user_logged_in() ) : ?>

          <div class="profile-box signed-in">
            <a class="profile" href="<?php echo memberful_account_url(); ?>">
              <?php echo get_avatar( wp_get_current_user()->user_email, 25 ); ?>
              <?php echo wp_get_current_user()->display_name; ?>
            </a>
            <a class="sign-out" href="<?php echo memberful_sign_out_url(); ?>">Sign out</a>
          </div>

          <?php else : ?>
          <div class="profile-box signed-out">
            <a title="Sign in" class="btn sign-in" href="<?php echo memberful_sign_in_url(); ?>">Sign In</a>
            <a title="Sign in" class="btn" href="https://anythingoes.memberful.com/orders/new?subscription=27">Sign Up</a>
          </div>

        <?php endif; ?>
      </div><!-- end .signed-in-status -->

    </div><!-- end .contain -->
  </header>

  <section class="statement">
    <div class="contain">
      <h1>Learn Web Design, Front-End Development, and more with Your Pal, <a href="http://timothybsmith.com" title="Tim Smith">Tim Smith</a></h1>
    </div> <!-- end .contain -->
  </section><!-- end .statement -->