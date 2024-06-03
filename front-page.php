<?php get_header(); ?>
    <section class="hero-content has-back-img">
        <div class="text-content">
            <h2 class="hero-text-primary">
                <?php echo get_theme_mod('semantics-hero-text-setting'); ?>
            </h2>
            <h4 class="hero-text-secondary">
                <?php echo get_theme_mod('semantics-hero-secondary-text-setting'); ?>
            </h4>
        </div>
        <div class="back-img">
            <?php if(get_background_image()){ ?>
                <img src="<?php echo get_background_image(); ?>" alt="background-image">
            <?php } ?>
            
        </div>
    </section>

    <section class="company-info-section wrapper-container">
        <div class="wrapper">
            <div class="company-info-content">
                <div class="info">
                    <?php if(get_theme_mod('semantics-info-thumbnail-setting')) { ?>
                    <div class="img-container">
                        <img src="<?php echo get_theme_mod('semantics-info-thumbnail-setting'); ?>" alt="">
                    </div>
                    <?php } ?>
                </div>
                <div class="info">
                    <h2 class="label-text">
                        <?php echo get_theme_mod('semantics-info-header-text-setting'); ?>
                    </h2>
                    <p>
                        <?php echo get_theme_mod('semantics-info-text-setting'); ?>
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="company-stats-section wrapper-container has-back-img">
        <div class="wrapper">
            <h2 class="header-text">Best Facts Of Our Company</h2>
            <div class="stats-container">
                <div class="stat">
                    <div class="stat-num">
                        <?php echo get_theme_mod('semantics-company-clients-setting'); ?>
                    </div>
                    <div class="stat-title">satisfied clients</div>
                </div>
                <div class="stat">
                    <div class="stat-num">
                        <?php echo get_theme_mod('semantics-company-projects-setting'); ?>
                    </div>
                    <div class="stat-title">completed projects</div>
                </div>
                <div class="stat">
                    <div class="stat-num">
                        <?php echo get_theme_mod('semantics-company-employees-setting'); ?>
                    </div>
                    <div class="stat-title">total employees</div>
                </div>
                <div class="stat">
                    <div class="stat-num">
                        <?php echo get_theme_mod('semantics-company-satisfaction-setting'); ?>
                    </div>
                    <div class="stat-title">satisfaction rate</div>
                </div>
                <div class="stat">
                    <div class="stat-num">
                        <?php echo get_theme_mod('semantics-company-workhours-setting'); ?>
                    </div>
                    <div class="stat-title">hours of work</div>
                </div>
            </div>
            <div class="back-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/operation.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="company-operations-section">
        <div class="wrapper">
            <h2 class="header-text">Our Services</h2>
            <div class="operations-list grid-list">
                <?php 
                   
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'services'
                    );
                    $arr_posts = new WP_Query($args);
                    if($arr_posts->have_posts()){
                        while ($arr_posts->have_posts()){
                            $arr_posts->the_post();
                        ?>
                            <div class="operation">
                                <div class="thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="operation-detail detail">
                                    <h2 class="detail-title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="detail-desc">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
            </div>
        </div>
    </section>

    <section class="company-moto-section wrapper-container has-back-img">
        <div class="wrapper">
            <h2 class="header-text">Testimonials</h2>
            <ul class="testimonial-list">
                <?php 
                    $args = array(
                        'post-type' => 'post',
                        'category_name' => 'reviews'
                    );

                    $arr_posts = new WP_Query($args);
                    if($arr_posts->have_posts()){
                        while($arr_posts->have_posts()){
                            $arr_posts->the_post();
                        
                ?>
                    <li class="testimonial-item">
                        <div class="user-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h2 class="username"><?php the_title(); ?></h2>
                        <p class="testimonial-desc">
                            <?php the_excerpt(); ?>
                        </p>
                    </li>
                <?php 
                }
                    }
                 ?>
               
            </ul>
        </div>
        <div class="back-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/operation.jpg" alt="">
        </div>
    </section>

    <section class="company-invitation-section wrapper-container">
        <div class="wrapper">
            <div class="invitation-container">
                <h2 class="label-text">Want to build something?</h2>
                <p class="desc-text">Lorem ipsum dolor sit amet.</p>
                <a href="" class="direct-contact">
                    Contact
                </a>
            </div>
        </div>
    </section>

    <!-- <section class="company-client-reviews wrapper-container">
        <div class="wrapper">

        </div>
    </section>

    <section class="company-client-list wrapper-container">
        <div class="wrapper">

        </div>
    </section> -->


    <section class="company-blog-list">
        <div class="wrapper">
            <h2 class="header-text">Blogs</h2>
            <div class="blog-list grid-list">
                <div class="blog">
                    <div class="thumbnail">
                        <img src="./assets/images/companyInfo.jpg" alt="">
                    </div>
                    <div class="detail">
                        <h2 class="detail-title">Wordpress Customization</h2>
                        <p class="detail-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium,
                            excepturi!</p>
                    </div>
                </div>

                <div class="blog">
                    <div class="thumbnail">
                        <img src="./assets/images/companyInfo.jpg" alt="">
                    </div>
                    <div class="detail">
                        <h2 class="detail-title">Wordpress Customization</h2>
                        <p class="detail-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium,
                            excepturi!</p>
                    </div>
                </div>

                <div class="blog">
                    <div class="thumbnail">
                        <img src="./assets/images/companyInfo.jpg" alt="">
                    </div>
                    <div class="detail">
                        <h2 class="detail-title">Wordpress Customization</h2>
                        <p class="detail-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium,
                            excepturi!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>