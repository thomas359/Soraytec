<?php 
/**
 * Template Name: Product
 * 
 * @package sorayatec
 */

get_header(); 
?> 

<?php if( $acf_label ) : ?>

<!-- ==============================================
    **Banner**
    =================================================== -->
    <?php 
    $banner = get_field('banner');
    if (!empty($banner)):
        $right = $banner['right_img'];
        $left = $banner['left_img'];
    ?>
    <div class="banner prdct-banner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-4 left">
                    <p><?php echo $banner['banner_desc']; ?></p>
                    <figure>
                        <img src="<?php echo $left['url']; ?>" alt=""/>
                    </figure>
                </div>
                <div class="col-md-8 right">
                    <figure>
                        <img src="<?php echo $right['url']; ?>" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- ==============================================
    **prdct-feature**
    =================================================== -->

    <section class="prdct-feature about-sec">

        <?php 
        $feature = get_field('product_features');
        if (!empty($feature)):
        ?>

        <div class="container">
            <div class="prdct-feature-header">
                <h2><?php echo strtoupper($feature['title']); ?></h2>
                <p><?php echo $feature['desc']; ?></p>
            </div>
            <ul class="row prdct-feature-cnt">

                <?php
                if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' )):
                    if( have_rows('features_loop') ):
                    while( have_rows('features_loop') ) : the_row();
                    $img = get_sub_field('img');
                    $desc = get_sub_field('desc');
                    ?>

                        <li class="col-md-4 col-sm-6">
                            <figure>
                                <img src="<?php echo $img['url']; ?>" class="img-fluid" alt=""/>
                            </figure>
                            <p><?php echo $desc; ?></p>
                        </li>
                        
                    <?php endwhile; endif;     
                else:?>

                    <div class="container">

                        <h3 class="entry-header"><?php _e('Please Install ACF PRO Plugin!', 'Sorayatec'); ?></h3>

                    </div>   

                <?php endif;?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="prdct-feature-bottom">
            <div class="container">
                <div class="row align-items-center">

                        <?php
                        if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' )):
                            $i=0;
                            if( have_rows('features_bottom') ):
                                while( have_rows('features_bottom') ) : the_row();
                                $img = get_sub_field('img');
                                if($i%2==0):
                            ?>

                                <div class="col-md-6">
                                    <figure>
                                        <img src="<?php echo $img['url']; ?>" class="img-fluid" alt=""/>
                                    </figure>
                                </div>
                            <?
                            $i++;
                                else:
                            ?>

                                <div class="col-md-6 right">
                                    <figure>
                                        <img src="<?php echo $img['url']; ?>" class="img-fluid" alt=""/>
                                    </figure>
                                </div>

                            <?php $i++; endif; endwhile; endif; ?>
                        <?php else:?>

                            <div class="container">

                                <h3 class="entry-header"><?php _e('Please Install ACF PRO Plugin!', 'Sorayatec'); ?></h3>

                            </div>   

                        <?php endif;?>

                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ==============================================
    **application**
    =================================================== -->
    <section class="application">
                                
        <div class="container">
            <div class="row">

                <?php 
                $application = get_field('application');
                if (!empty($application)):
                    $img = $application['image'];
                ?>
                                    
                    <div class="col-md-6 left">
                        <h2><?php echo strtoupper($application['title']); ?></h2>
                        <ul>

                        
                                <?php
                                if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' )):
                                    if( have_rows('application_points') ):
                                    while( have_rows('application_points') ) : the_row();
                                    $point = get_sub_field('application_point');
                                    ?>

                                    <li><?php echo $point; ?></li>

                                    <?php endwhile; endif; ?>

                                <?php else:?>

                                    <div class="container">

                                        <h3 class="entry-header"><?php _e('Please Install ACF PRO Plugin!', 'Sorayatec'); ?></h3>

                                    </div>   

                                <?php endif;?>

                        </ul>
                        <figure>
                            <img src="<?php echo $img['url']; ?>" class="img-fluid"/>
                        </figure>
                    </div>
                <?php endif; ?>
                <div class="col-md-6 right">
                    <?php
                    if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' )):
                        if( have_rows('specification_box') ):
                        while( have_rows('specification_box') ) : the_row();
                        $title = get_sub_field('title');
                        ?>

                            <div class="application-cnt">
                                <h3><?php echo strtoupper($title); ?></h3>
                                <ul>
                                    <?php
                                    if( have_rows('rows') ):
                                    while( have_rows('rows') ) : the_row();
                                    $row_title = get_sub_field('row_title');
                                    ?>
                                        <li>
                                            <div class="left-table">
                                                <h4><?php echo $row_title; ?></h4>
                                            </div>

                                            <div class="right-table">

                                                <?php
                                                if( have_rows('row_fields') ):
                                                while( have_rows('row_fields') ) : the_row();
                                                $column = get_sub_field('row_field');
                                                ?>

                                                    <span><?php echo $column; ?></span>

                                                <?php endwhile; endif; ?>    
                                            </div>

                                        </li>

                                    <?php endwhile; endif; ?> 

                                </ul>
                            </div>
                            
                        <?php endwhile; endif; ?> 

                    <?php else:?>

                        <div class="container">

                            <h3 class="entry-header"><?php _e('Please Install ACF PRO Plugin!', 'Sorayatec'); ?></h3>

                        </div>   

                    <?php endif;?>

                </div>
            </div>
        </div>
    </section>
    <!-- ==============================================
    **features-wrapper**
    =================================================== -->
    <section class="features-wrapper about-sec">
        <div class="features-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <?php 
                        $features = get_field('features'); 
                        $img = $features['img'];
                        ?>
                        <h2><?php echo strtoupper($features['title']); ?></h2>

                        <ul>
                            <?php
                            if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' )):
                                if( have_rows('features_points') ):
                                    while( have_rows('features_points') ) : the_row();
                                    $point = get_sub_field('features_point');
                                ?>

                                <li><?php echo $point; ?></li>

                                <?php endwhile; endif; ?>  

                            <?php else:?>

                                <div class="container">

                                    <h3 class="entry-header"><?php _e('Please Install ACF PRO Plugin!', 'Sorayatec'); ?></h3>

                                </div>   

                            <?php endif;?>
                        </ul> 
                        
                    </div>
                    <div class="col-md-6 right">
                        <figure>
                            <img src="<?php echo $img['url']; ?>" class="img-fluid"/>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ==============================================
    **contact-wrapper**
    =================================================== -->

    <section class="contact-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <p><?php the_field('more_info_text'); ?></p>
                </div>
                <div class="col-md-6 right">

                    <?php $contact = get_field('contact_product'); ?>

                    <h2><?php echo strtoupper($contact['contact_title']); ?></h2>

                    <a href="mailto:<?php echo $contact['contact_email']; ?>" class="mail"><?php echo $contact['contact_email']; ?></a>
                </div>
            </div>
        </div>
    </section>

<?php else:

get_template_part( 'template-parts/acf', 'none'); 

endif;?> 




<?php get_footer(); ?>