<?php get_header(); ?> 

<?php if( class_exists('ACF') ) : ?>

<!-- ==============================================
    **Post**
    =================================================== -->
    <section class="inner-outer about-outer single-page">
        <div class="about-banner">
            <div class="container">
                <h1><?php echo strtoupper(the_title()); ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">

                    <?php
                    if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' )):
                    if( have_rows('privacy_policy') ):
                    while( have_rows('privacy_policy') ) : the_row();
                    ?>

                        <h2><?php echo the_sub_field( 'main_title' ); ?></h2>

                            <?php
                            if( have_rows('sub_section') ):
                            while( have_rows('sub_section') ) : the_row();
                            ?>

                            <h3><?php echo the_sub_field( 'sub_title' ); ?></h3>

                                <?php
                                if( have_rows('sub_content') ):
                                while( have_rows('sub_content') ) : the_row();
                                ?>
                                
                                    <p><?php echo the_sub_field( 'paragraph' ); ?></p>

                                <?php endwhile; endif; ?>

                            <?php endwhile; endif; ?>    

                    <?php endwhile; endif; ?> 

                    <?php else:?>

                    <div class="container">

                        <h2 class="entry-header">Please Install ACF PRO Plugin!</h2>

                    </div>   

                    <?php endif;?>    

                </div>
            </div>
        </div>
    </section>

<?php else:?>

    <div class="container">

        <h1 class="entry-header">ACF does not exist!</h1>

    </div>   

<?php endif;?> 


<?php get_footer(); ?>
