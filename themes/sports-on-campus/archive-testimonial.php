<?php
/**
 * The template for displaying all pages.
 *Template name: archive-testimonial
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>
<<<<<<< HEAD
=======
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : ?>
        <section>
            <?php $testimonials = get_terms("testimonial_category"); ?>
            <?php foreach ($testimonials as $value) : setup_postdata($value); ?>
            <a href=<?php echo get_term_link($value) ?>><?php echo $value->name ?></a>
            <?php endforeach;
            wp_reset_postdata(); ?>
            <?php $testimonials = soc_get_testimonial_category(); ?>
            <?php foreach ($testimonials as $post) : setup_postdata($post); ?>
            <article id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                    <?php the_post_thumbnail('large'); ?>
                </a>
                <?php endif; ?>
                <img class="test-image sample-picture" src='<?php echo CFS()->get('video'); ?>'>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
                                <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                                <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
            </article>
                         <?php endforeach;
                        wp_reset_postdata(); ?>
        </section>
        <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </main><!-- #main -->
</div>


<?php get_footer(); ?>  
    


            
=======
>>>>>>> 7a72325018eeb95fab637cab5b04ec642f4849ff
        </main><!-- #main -->
    </div>


<?php get_footer(); ?>
<<<<<<< HEAD
=======
=======
>>>>>>> 7a72325018eeb95fab637cab5b04ec642f4849ff
>>>>>>> 1eee34f7fa1addbf0f489b529bcdd5289ec5f4c5
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
       <?php if (have_posts()) : ?>
       <section >
           <?php $testimonials = get_terms("testimonial_category"); ?>
           <?php foreach ($testimonials as $value) : setup_postdata($value); ?>
           <a href=<?php echo get_term_link($value) ?>><?php echo $value->name ?></a>
           <?php endforeach;
           wp_reset_postdata(); ?>
           <?php $testimonials = soc_get_testimonial_category(); ?>
           <?php foreach ($testimonials as $post) : setup_postdata($post); ?>
           <article id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php if (has_post_thumbnail()) : ?>
               <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                   <?php the_post_thumbnail('large'); ?>
               </a>
               <?php endif; ?>
               <img class="test-image sample-picture" src='<?php echo CFS()->get('video'); ?>'>
               <h1>
                   <?php the_title(); ?>
               </h1>
               <?php the_content(); ?>
                               <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                               <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
           </article>
                        <?php endforeach;
                       wp_reset_postdata(); ?>
       </section>
       <?php else : ?>
       <?php get_template_part('template-parts/content', 'none'); ?>
       <?php endif; ?>
   </main><!-- #main -->
</div>


<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?> 
<<<<<<< HEAD
=======
>>>>>>> 3d8270590a903cea4b8957d38361abf8e0e3cd79
>>>>>>> 7a72325018eeb95fab637cab5b04ec642f4849ff
>>>>>>> 1eee34f7fa1addbf0f489b529bcdd5289ec5f4c5
