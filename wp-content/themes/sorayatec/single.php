<?php get_header(); ?> 

<section class="inner-outer posts-outer news-single">
        <div class="top-post">
            <div class="container">

                <?php 
                $img = get_field( 'news_img' );
                ?> 

                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <figure>
                            <img src="<?php echo $img['url']; ?>" class="img-fluid" alt="">
                        </figure>
                        <div class="source">
                            <span><?php echo get_field( 'date' ); ?></span>
                            <?php echo get_field( 'place' ); ?>
                        </div>
                        <h1><a href="#"><?php echo the_title(); ?></a></h1>
                        <div><?php echo the_content(); ?></div>
                        <ul class="follow-us">
                                
                                <?php
                                if( have_rows('follow') ):
                                while( have_rows('follow') ) : the_row();
                                ?>

                                    <li><a href="<?php echo the_sub_field( 'link' ); ?>" target="_blank"><i class="<?php echo the_sub_field( 'icon_class' ); ?>"></i></a></li>
                                
                                <?php endwhile; endif; ?> 

                        </ul>
                        <div class="pager">
                            <a href="<?php echo get_permalink( get_adjacent_post()->ID ); ?>">&#60; PREVIOUS</a>
                            <a href="<?php echo get_permalink( get_adjacent_post( false, '', false )->ID ); ?>" class="ml-auto">NEXT &#62;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>