<?php /* Template Name: Page d'accueil */ ?>

<?php get_header(); ?>
<main class="main-body">

<div class="hero">
    <div class="hero-title">
        <h1>Hello, I'm <span class="colored-word">Farah</span>.<br> <span class="colored-word">WordPress</span> Developper </h1>
    </div>

    <div class="hero-description">
        <p> Welcome to <span class="bold-word">my digital playground</span>, where lines of code <span class="underline-text">come to life</span>,<br> and creativity knows no bounds. As a <span class="bold-word">WordPress developer</span>, <br> I craft <span class="bold-word">virtual worlds</span> and turn <span class="underline-text">visions into reality</span>. <br> <span class="underline-text">Join me to work together</span> on an <span class="bold-word">amazing project!</span></p>
    </div>


    <div class="hero-contact">
        <button id="contact-me">Contact me!</button>
    </div>
</div>




<div class="projects-section">

    <div class="projects_section-title">
        <h2 id="Projects">My <span class="colored-word">Projects</span>.</h2>
    </div>

    <div class="projects_section-thumbnail">

            <!-- pour récupérer toutes les publications du type de post "sites" -->
            <?php
            $args = array(
                'post_type' => 'sites', 
                'posts_per_page' => -1, // pour afficher toutes les publications
            );

            $query = new WP_Query($args);
            ?>

            <!-- Afficher toutes les publications -->
            <?php while($query->have_posts()) : ?>
                <?php $query->the_post(); ?>

                <!-- Code pour afficher chaque publication -->
                <div class="thumbnail-card">
                    <div class="thumbnail" data-id="<?php echo get_the_ID(); ?>">
                        <?php the_post_thumbnail('custom-thumbnail'); ?>

                        <div class="thumbnail-hover">
                                <div class="thumbnail-hover__eye">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="thumbnail-hover__link">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                        </div>
                    </div>

                    <div class="thumbnail_info">

                        <div class="thumbnail_info-title">
                            <h3 class="thumbnail-title"><?php the_title(); ?></h3>
                        </div>

                        <div class="thumbnail_info-langages">
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

                    </div>

                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    </div>   
</div>

<div class="skills-section">
        <div class="skills_section-title">
            <h2 id="Skills">My <span class="colored-word">Skills</span>.</h2>
        </div>

    <div class="skills_component">

        <div class="skills_section-item">

            <div class="skills-item">
                <div class="skills-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/WP.png" alt="Wordpress"> 
                </div>
                <p>WordPress</p>
            </div>

            <div class="skills-item">
                <div class="skills-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/HTML.png" alt="HTML">
                </div>
                <p>HTML</p>
            </div>

            <div class="skills-item">
                <div class="skills-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/CSS.png" alt="CSS"> 
                </div>
                <p>CSS</p>
            </div>

            <div class="skills-item">
                <div class="skills-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/PHP.png" alt="PHP"> 
                </div>
                <p>Php</p>
            </div>

            <div class="skills-item">
                <div class="skills-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/JS.png" alt="JavaScript">
                </div>
                <p>JavaScript</p>
            </div>

            <div class="skills-item">
                <div class="skills-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Notion.png" alt="Notion"> 
                </div>
                <p>Notion</p>
            </div>

        </div>

        <div class="skills_cv">
        
            <div class="skills_section-cv">
                
                <div class="skills_section-date">
                    <p>2023</p>
                </div>

                <div class="skills_section-info">
                    <p class="info-title">WordPress Developper</p>
                    <p class="info-description">OpenClassrooms</p>
                </div>

            </div>

            <div class="skills_section-cv">
                
                <div class="skills_section-date">
                    <p>2022</p>
                </div>

                <div class="skills_section-info">
                    <p class="info-title">Master 2 of international law </p>
                    <p class="info-description">Paris V University</p>
                </div>

            </div>
        </div>

    </div>

</div>


</main>
<?php get_footer(); ?> 