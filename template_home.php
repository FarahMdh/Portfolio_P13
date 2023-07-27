<?php /* Template Name: Page d'accueil */ ?>

<?php get_header(); ?>

<div class="hero">
    <div class="hero-title">
        <h1>Hello, I'm <span class="colored-word">Farah</span>.<br> <span class="colored-word">WordPress</span> Developper </h1>
        </h1>
    </div>

    <div class="hero-description">
        <p> Welcome to my digital playground, where lines of code come to life,<br> and creativity knows no bounds. As a WordPress developer, <br> I craft virtual worlds and turn visions into reality. <br> Join me to work together on an amazing project!</p>
    </div>


    <div class="hero-contact">
        <button id="contact-me">Contact me!</button>
    </div>
</div>

<?php 
the_content (); ?>

<?php get_footer(); ?> 