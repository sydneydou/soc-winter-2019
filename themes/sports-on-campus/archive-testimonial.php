<?php
/**
 * The template for displaying all pages.
 *Template name: archive-testimonial
 * @package sport_on_campus_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
       <?php if (have_posts()) : ?>
       <section>
           <ul class="mobile-slide">
               <h1 class="banner-text-desktop">Testimonials</h1>
               <div class="banner-box">
                    <?php $testimonials = get_terms("testimonial_category"); ?>
                        <?php foreach ($testimonials as $value) : setup_postdata($value); ?>
                         <li class="slide-list">
                        <a href=<?php echo get_term_link($value) ?>><?php echo $value->name ?></a>
                        </li>
                        <?php endforeach;?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </ul>
            <div class="container">
                    <?php $testimonials = soc_get_testimonial_category(); ?>
                    <?php foreach ($testimonials as $post) : setup_postdata($post); ?>
                <article  id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                    <?php endif; ?>
                    <img class="test-image sample-picture" src='<?php echo CFS()->get('video'); ?>'>
                    <div class= "test-cluster">
                            <h1>
                               <?php the_title(); ?>
                            </h1>
                        
                        <div class="test-uni"> <?php echo CFS()->get('university'); ?></div>
                        <div class="test-position"> <?php echo CFS()->get('position'); ?></div>
                        <div class="test-block">
                            <i class="fas fa-quote-left"></i>
                            <?php the_content(); ?>
                        </div>
                    </div>                 
                </article>
                        <?php endforeach;
                       wp_reset_postdata(); ?>
            </div>
       </section>
       <?php else : ?>
       <?php get_template_part('template-parts/content', 'none'); ?>
       <?php endif; ?>
   </main><!-- #main -->
</div>

<?php get_footer(); ?>


