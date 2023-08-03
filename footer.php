<?php get_template_part('templates_parts/contact-modal'); ?>

<?php wp_footer(); ?>
</body>
</html>

    <a href="#" class="scroll-to-top" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <?php
        wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class' => 'footer-menu',
        ));
    ?>
      