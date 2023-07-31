<?php get_header(); ?>

<div class="single-post-container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div class="post-content">

        <div class="first-section">

            <div class="title_ref">

                <div class="title">
                    <h1 class="post-title line-break-title"><?php the_title(); ?></h1>        <!-- class pour que les titres aillent à la ligne -->
                </div>

                <div class="ref">

                        <div class="post-year">
                            <?php echo 'Date : ' . get_the_date('m-Y'); ?>
                        </div>

                        <div class="post-description">
                            <?php
                            $reference = get_field('description');
                            if ($reference) {
                                echo ' ' . $reference;
                            }
                            ?>
                        </div>
                    
                        <div class="langage-category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'langage');
                            if ($terms && !is_wp_error($terms)) {
                                echo '';
                                foreach ($terms as $term) {
                                    echo '<span class="tag">' . $term->name . '</span>';
                                }
                            }
                            ?>
                        </div>

                        <div class="post-lien-github">
                            <?php
                            $lien_github = get_field('lien_github');
                            if ($lien_github) {
                                echo '<button class="github-button"><a href="' . esc_url($lien_github) . '">GitHub Link</a></button>';
                            }
                            ?>
                        </div>
                </div>

            </div>
            
            

                <!-- Display the Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>


        </div>

        <div class="second-section">

            <div class="photo-navigation">
            <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>

                <div class="arrow-left-thumbnail">
                <?php if ( ! empty( $prev_post ) ): ?>
                    <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="custom-prev-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png" class="arrow" data-direction="previous" alt="Previous"></a>
                    <?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail', array( 'class' => 'mini-thumbnail' ) ); ?>
                <?php endif; ?>
                </div>
                
                <div class="arrow-right-thumbnail">
                <?php if ( ! empty( $next_post ) ): ?>
                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="custom-next-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right.png" class="arrow" data-direction="next" alt="Next"></a>
                    <?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array( 'class' => 'mini-thumbnail' ) ); ?>
                <?php endif; ?>
                </div>
                
            </div>
        </div>


    </div>

        <?php endwhile; else: ?>

            <p><?php _e('Sorry, this page does not exist.'); ?></p>

        <?php endif; ?>

</div>

<?php get_footer(); ?> 