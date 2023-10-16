<?php
/*
Template Name: Homepage
*/

get_header(); ?>



<div class="slider-home" style="background-image: linear-gradient( rgb(0 0 0 / 30%), rgb(0 0 0 / 30%) ), url(<?php the_field('afbeelding-slider'); ?>)">
    <div class="slider-home-inner">
        <?php if( get_field('informatie-slider') ): ?>
            <p class="informatie-slider"><?php the_field('informatie-slider'); ?></p>
        <?php endif; ?>
        <?php if( get_field('titel_slider_1') ): ?>
            <h2 class="titel_slider_1"><?php the_field('titel_slider_1'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('titel_slider_2') ): ?>
            <h2 class="titel_slider_2"><?php the_field('titel_slider_2'); ?></h2>
        <?php endif; ?>
    </div>
</div>
<div class="home-info-1">
    <div class="usp-home">
        <?php if( get_field('USP-1_1') ): ?>
            <h2 class="USP-1_1"><?php the_field('USP-1_1'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('USP-1_2') ): ?>
            <h2 class="USP-1_2"><?php the_field('USP-1_2'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('USP-1_3') ): ?>
            <h2 class="USP-1_3"><?php the_field('USP-1_3'); ?></h2>
        <?php endif; ?>
    </div>
    <div class="home-info-1-inner" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding_1'); ?>)">
        <div class="home-info_1-c1"  style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding_2'); ?>)">
            <div class="home-c1-deel">
                <?php if( get_field('titel-informatie1_1') ): ?>
                    <h2 class="titel-informatie1_1"><?php the_field('titel-informatie1_1'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('titel-informatie1_2') ): ?>
                    <h4 class="titel-informatie1_2"><?php the_field('titel-informatie1_2'); ?></h4>
                <?php endif; ?>
                <?php if( get_field('informatie-informatie_1') ): ?>
                    <?php the_field('informatie-informatie_1'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="home-info_1-c2">
            <?php if( get_field('afbeelding-informatie') ): ?>
                <img class="afbeelding-informatie" src="<?php the_field('afbeelding-informatie'); ?>" />
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="werkErvaring">
    <div class="werkErvaring-inner">
        <div class="werkErvaring-c1" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('afbeelding-werkervaring_1'); ?>)">
            <div class="afbeelding-1-werkErvaring">
                <?php if( get_field('afbeelding-werkervaring_2') ): ?>
                    <img class="afbeelding-werkervaring_2" src="<?php the_field('afbeelding-werkervaring_2'); ?>" />
                <?php endif; ?>
            </div>
            <div class="afbeelding-2-werkErvaring">
                <?php if( get_field('afbeelding-werkervaring_3') ): ?>
                    <img class="afbeelding-werkervaring_3" src="<?php the_field('afbeelding-werkervaring_3'); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="werkErvaring-c2">
            <?php if( get_field('titel-werkervaring_1') ): ?>
                <h2 class="titel-werkervaring_1"><?php the_field('titel-werkervaring_1'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('titel-werkervaring_2') ): ?>
                <h2 class="titel-werkervaring_2"><?php the_field('titel-werkervaring_2'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('informatie-werkervaring') ): ?>
                <?php the_field('informatie-werkervaring'); ?>
            <?php endif; ?>
            <?php 
            $link_home = get_field('link-werkervaring');
            if( $link_home ): 
                $link_url = $link_home['url'];
                $link_title = $link_home['title'];
                $link_target = $link_home['target'] ? $link_home['target'] : '_self';
                ?>
                <a class="button-costum link-werkervaring" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="image-border image-border-1"></div>
<div class="aanbod">
    <div class="aanbod-inner">

    <?php

        // Check rows existexists.
        if( have_rows('aanbod-home') ):

            // Loop through rows.
            while( have_rows('aanbod-home') ) : the_row();

                // Load sub field value.
                $achtergrond_blob = get_sub_field('achtergrond_blob-repeater-home');
                $afbeelding_rep = get_sub_field('afbeelding-repeater-home');
                $titel_rep = get_sub_field('titel-repeater-home');
                $informatie_rep = get_sub_field('informatie-repeater-home');
                // Do something... ?>

                <div class="aanbod-div" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php echo $achtergrond_blob ?>)">
                    <img class="afbeelding-repeater-home" src="<?php echo $afbeelding_rep ?>" />
                    <h2 class="titel-repeater-home"><?php echo $titel_rep ?></h2>
                    <p class="informatie-repeater-home"><?php echo $informatie_rep ?></p>
                    <?php 
                    $link_rep = get_sub_field('link_repeater-home');
                    if( $link_rep ): 
                        $link_url = $link_rep['url'];
                        $link_title = $link_rep['title'];
                        $link_target = $link_rep['target'] ? $link_rep['target'] : '_self';
                        ?>
                        <a class="link_rep" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>


            <?php
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;

        ?>

    
    </div>
</div>
<div class="image-border image-border-2"></div>
<div class="overOns">
    <div class="overOns-inner">
        <div class="overOns-c1" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding-overOns'); ?>)">
            <?php if( get_field('afbeelding-overOns') ): ?>
                <img class="afbeelding-overOns" src="<?php the_field('afbeelding-overOns'); ?>" />
            <?php endif; ?>
        </div>
        <div class="overOns-c2">
            <?php if( get_field('titel-overOns') ): ?>
                <h2 class="titel-overOns"><?php the_field('titel-overOns'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('informatie-overOns') ): ?>
                <?php the_field('informatie-overOns'); ?>
            <?php endif; ?>
            <?php 
            $link_overOns  = get_field('link-overOns');
            if( $link_overOns ): 
                $link_url = $link_overOns ['url'];
                $link_title = $link_overOns ['title'];
                $link_target = $link_overOns ['target'] ? $link_overOns ['target'] : '_self';
                ?>
                <a class="link_overOns button-costum" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>





<?php get_footer(); ?>

