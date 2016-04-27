<?php  get_header(); ?>

  <section id="about" class="s_about bg_light">
        <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_about');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr"><?php echo category_description($id); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                       <?php                    
                        // The Query
                        $photo = new WP_Query( array ( 'tag' => 'photo' ) );
                        // The Loop
                          if ( $photo->have_posts() ) : while ( $photo->have_posts() ) : $photo->the_post();  ?>                  
                   <div class="col-md-4 col-md-push-4 animation_1">
                                                 
                     <?php if ( has_post_thumbnail() ) { ?>
                       <h3><?php the_title_attribute(); ?></h3>
                       <div class="person">
                                <a class="popup" href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); 
                                            echo $large_image_url[0]; ?>" title="<?php echo get_bloginfo('name'); ?>" >
                                        <?php the_post_thumbnail(array(220, auto));} ?>
                                    </a>
                                    <?php endwhile; 
                                     wp_reset_postdata();
                                     else : ?>
                                     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                     <?php endif; ?>
                           
                       </div>
                   </div>
                      <?php
                        // The Query
                        $about = new WP_Query( array ( 'tag' => 'manifest' ) );
                        // The Loop
                          if ( $about->have_posts() ) : while ( $about->have_posts() ) : $about->the_post();  ?>                   
                   <div class="col-md-4 col-md-pull-4 animation_2">
                       <h3><?php the_title(); ?></h3>
                       <?php the_content(); ?>
                    </div>  
                    	
                         <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?>
                      
                          <?php
                            // The Query
                            $bio = new WP_Query( array ( 'tag' => 'bio' ) );
                            // The Loop
                              if ( $bio->have_posts() ) : while ( $bio->have_posts() ) : $bio->the_post();  ?>
                   <div class="col-md-4 animation_3 personal_last_block">
                       <h3><?php the_title(); ?></h3>
                       <h2 class="personal_header"><?php echo get_bloginfo('name'); ?></h2>
                       <?php the_content(); ?>
                       
                           <?php endwhile; 
                             wp_reset_postdata();
                             else : ?>
                             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                             <?php endif; ?>
                       <div class="social_wrap">
                           <ul>
                               <?php dynamic_sidebar('socials'); ?>
                           </ul>
                       </div>
                   </div>
                </div>
            </div>
        </div>
  </section>

  <section id="exhibit" class="s_exhibit">
         <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_exhibit');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr"><?php echo category_description($id); ?></div>
            </div>                
         </div>   
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="exhibit_container">
                        <div class="col-md-6 col-sm-6 left ">
                               <?php
                            // The Query
                            $left_side = new WP_Query( array ( 'category_name' => 's_left' ) );
                            // The Loop
                              if ( $left_side->have_posts() ) : while ( $left_side->have_posts() ) : $left_side->the_post();  ?>                              
                                
                            <div class="exhibit_item">
                                <div class="year"><?php echo get_post_meta($post->ID, "year", true); ?></div>
                                <?php the_content(); ?>                             
                            </div>
                                
                                  <?php endwhile; 
                                 wp_reset_postdata();
                                 else : ?>
                                 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                 <?php endif; ?>                                                                                  
                        </div>


                        
                        <div class="col-md-6 col-sm-6 right">
                               
                               <?php
                            // The Query
                            $right_side = new WP_Query( array ( 'category_name' => 's_right' ) );
                            // The Loop
                              if ( $right_side->have_posts() ) : while ( $right_side->have_posts() ) : $right_side->the_post();  ?>                              
                                
                            <div class="exhibit_item">
                                <div class="year"><?php echo get_post_meta($post->ID, "year", true); ?></div>
                                <?php the_content(); ?>                             
                            </div>
                                
                                  <?php endwhile; 
                                 wp_reset_postdata();
                                 else : ?>
                                 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                 <?php endif; ?>

                            </div>                                                                                                               
                        </div>             
                    </div>   
                </div>
            </div>
        </div>
  </section>
    
  <section id="gallery" class="s_gallery bg_dark">
        <div class="section_header">
            <h2><?php
                $idObj = get_category_by_slug('s_gallery');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></h2>
            <div class="s_descr_wrap">
                <div class="s_descr"><?php echo category_description($id); ?></div>
            </div>
        </div>
        <div class="section_content">
            <div class="container">
                <div class="row">
                        <div class="filter_div controls">
                            <ul>
                                    <li class="filter active" data-filter="all">Все работы</li>
                                    <li class="filter" data-filter=".paysage"><?php
                                                                                $idObj = get_category_by_slug('s_paysage');
                                                                                $id = $idObj->term_id;
                                                                                echo get_cat_name($id);
                                                                                ?></li>
                                    <li class="filter" data-filter=".nature_morte"><?php
                                                                                $idObj = get_category_by_slug('s_nature_morte');
                                                                                $id = $idObj->term_id;
                                                                                echo get_cat_name($id);
                                                                                ?></li>
                                <li class="filter" data-filter=".ceramics"><?php
                                                                                $idObj = get_category_by_slug('s_ceramics');
                                                                                $id = $idObj->term_id;
                                                                                echo get_cat_name($id);
                                                                                ?></li> 
                            </ul>
                        </div>
                    <div id="gallery_grid">
                       
                       
                        <?php                    
                        // The Query
                        $gallery = new WP_Query( array ( 'category_name' => 's_gallery', 'posts_per_page' => -1, 'order' => ASC ) );
                        // The Loop
                          if ( $gallery->have_posts() ) : while ( $gallery->have_posts() ) : $gallery->the_post();  ?>
                        
                                                           
                           <div class="col-md-3 col-sm-6 col-xs-12 gallery_item mix <?php
                                $tags = wp_get_post_tags($post->ID);
                                     if ($tags) {
                                         foreach($tags as $tag) {
                                               echo " ".$tag->name;
                                    }
                                  }
                                ?> ">
                            
                             <?php if ( has_post_thumbnail() ) { ?> 
                                <?php the_post_thumbnail(array(600, 460));} ?>
                            <div class="gallery_item_cont">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                                <a href="#" class="popup_content">Посмотреть</a>
                            </div>
                            <div class="hidden">
                                    <div class="gallery_item_descr"> 
                                        <div class="modal-box-content"> 
                                            <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>                                                                                                       
                                            <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), '' ); 
                                            echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" />
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_content(); ?></p>
                                        </div>   
                                                                                   
                                    </div>
                            </div>        
                        </div>
                        
                        <?php endwhile; 
                             wp_reset_postdata();
                             else : ?>
                             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                             <?php endif; ?>
                       
                                               
                    </div>
                </div>
            </div>
        </div>
  </section>
    
  <section id="contacts" class="s_contacts bg_light">
    <div class="section_header">
        <h2><?php
            $idObj = get_category_by_slug('s_contacts');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description($id); ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact_box">
                           <i class="contact_icon icon-basic-paperplane"></i>
                           <h3>E-mail:</h3>
                           <p><a href="mailto:<?php $options=get_option('sample_theme_options');
                                echo $options['emailtext']; ?>"><?php $options=get_option('sample_theme_options');
                               echo $options['emailtext']; ?></a></p>
                        </div>
                        <div class="contact_box">
                           <i class="contact_icon icon-basic-smartphone"></i>
                           <h3>Телефон:</h3>
                           <p><?php $options=get_option('sample_theme_options');
                                echo $options['phonetext']; ?></p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php get_footer(); ?>    
