<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BackyardCrew
 */

get_header(); ?>

<div class="home">
   <div class="home-background">
     <div class="home-overlay"></div>
   </div>

  <div class="container">
    <div class="home-intro">
      <div class="home-intro-title">
        <h2>Music is to feel</br><span> Music is who I am</span></h2>
      </div>

      <div class="introduction">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur, dolor a volutpat dictum, nibh velit maximus felis, lobortis euismod nunc enim nec arcu.
        Nullam eget est ut libero condimentum volutpat. Nunc eget sodales dui. Donec in leo non quam porta malesuada. Ut vehicula pellentesque mauris cursus gravida.
        Vestibulum a feugiat est, ut pulvinar leo. Nunc sed arcu mollis, fringilla turpis ut, ornare ex. Morbi tellus quam, aliquam id sollicitudin eget, vehicula quis orci.
        Nunc felis sapien, placerat non nulla sed, elementum gravida neque. Aliquam erat volutpat. Duis ultrices metus magna, sed facilisis neque consequat quis. Fusce at vehicula nulla.
        Praesent gravida libero non ipsum aliquam fringilla. In placerat sem quis nisi eleifend, nec semper nibh elementum.
        Nunc felis sapien, placerat non nulla sed, elementum gravida neque. Aliquam erat volutpat. Duis ultrices metus magna, sed facilisis neque consequat quis. Fusce at vehicula nulla.
        Nunc felis sapien, placerat non nulla sed, elementum gravida neque. Aliquam erat volutpat. Duis ultrices metus magna, sed facilisis neque consequat quis. Fusce at vehicula nulla.
        Nunc felis sapien, placerat non nulla sed, elementum gravida neque. Aliquam erat volutpat. Duis ultrices metus magna, sed facilisis neque consequat quis. Fusce at vehicula nulla.
      </div>
    </div>

    <div class="about-us">
      <h2>Lose yourself in the music - With us</h2>
      <p>
        Maecenas non condimentum neque, placerat finibus metus. Cras elementum, tellus quis posuere lobortis, neque sem efficitur nisi, quis finibus nisl lectus in augue.
        Aliquam eget semper diam. Nam posuere arcu sem, non mollis nisl consequat in. Ut sem neque, luctus in tempus nec, malesuada sed mauris.
        Proin posuere elit vel ex blandit, bibendum consectetur sapien maximus. Praesent placerat felis ac lacus rutrum suscipit.
        Nullam efficitur, lectus sed euismod tristique, magna justo congue nunc, eget bibendum purus ipsum eget felis. Duis in dolor ullamcorper, iaculis eros vel, commodo lacus.
        In hac habitasse platea dictumst. Phasellus congue accumsan sagittis.
      </p>
      <p>
        Maecenas non condimentum neque, placerat finibus metus. Cras elementum, tellus quis posuere lobortis, neque sem efficitur nisi, quis finibus nisl lectus in augue.
        Aliquam eget semper diam. Nam posuere arcu sem, non mollis nisl consequat in. Ut sem neque, luctus in tempus nec, malesuada sed mauris.
        Proin posuere elit vel ex blandit, bibendum consectetur sapien maximus. Praesent placerat felis ac lacus rutrum suscipit.
        Nullam efficitur, lectus sed euismod tristique, magna justo congue nunc, eget bibendum purus ipsum eget felis. Duis in dolor ullamcorper, iaculis eros vel, commodo lacus.
        In hac habitasse platea dictumst. Phasellus congue accumsan sagittis.
      </p>
      <p>
        Maecenas non condimentum neque, placerat finibus metus. Cras elementum, tellus quis posuere lobortis, neque sem efficitur nisi, quis finibus nisl lectus in augue.
        Aliquam eget semper diam. Nam posuere arcu sem, non mollis nisl consequat in. Ut sem neque, luctus in tempus nec, malesuada sed mauris.
        Proin posuere elit vel ex blandit, bibendum consectetur sapien maximus. Praesent placerat felis ac lacus rutrum suscipit.
        Nullam efficitur, lectus sed euismod tristique, magna justo congue nunc, eget bibendum purus ipsum eget felis. Duis in dolor ullamcorper, iaculis eros vel, commodo lacus.
        In hac habitasse platea dictumst. Phasellus congue accumsan sagittis.
      </p>
    </div>
  </div>

  <div class="gallery">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <!-- Carousel items -->
      <div class="carousel-inner">

        <!-- Slide 1 : Active -->
        <div class="item active">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_2.jpg" alt="">
          <div class="carousel-caption">
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="item ">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_3.jpg" alt="">
          <div class="carousel-caption">
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="item ">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_4.jpg" alt="">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <!-- Controls -->
      <!-- Add "ng-non-bindable" to tell angularjs ignore the conflict with bootstrap ui-->
      <div class="control-box">
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" ng-non-bindable>
          <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" ng-non-bindable>
          <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="myCarousel-responsive"></div>
  </div>
</div>

<div class="container">
	<div class="callout">
			<div class="row column text-center">
					<h1>Welcome to our blog</h1>
			</div>
	</div>

	<div class="row" id="content">
			<div class="col-xs-12 col-sm-8 col-md-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

				<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>

		<div class="col-xs-10 col-sm-4 col-md-4" data-sticky-container>
				<div class="sticky" data-sticky data-anchor="content">
					<?php get_sidebar(); ?>
				</div>
		</div>
	</div>
</div>

<?php
get_footer();
