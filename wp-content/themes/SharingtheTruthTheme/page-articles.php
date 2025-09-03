<?php get_header(); ?>
<main>
    <section class="container-fluid py-5 banner-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/includes/assets/images/slider-1.png');">

        <h1 class="banner-text">Articles</h1>
    </section>
    <div class="container my-4 my-lg-5">
        <div class="row g-4">
            <?php $data = new WP_Query(array(
                'post_type' => 'article',
                'posts_per_page' => -1,
                'orderby' => 'ID',
                'order' => 'DESC'
            ));
            if ($data->have_posts()):
                while ($data->have_posts()):
                    $data->the_post();
            ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Article Card  -->
                        <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
                            <div class="card rounded-2 position-relative border-0 shadow-sm h-100">
                                <!-- Audio Icon Badge -->
                                <span class="position-absolute top-0 start-0 m-2 bg-dark rounded-circle p-1 z-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                        <path d="M15 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V7l-5-5zM6 20V4h8v4h4v12H6z"></path>
                                        <path d="M8 12h8v2H8zm0 4h8v2H8zm0-8h4v2H8z"></path>
                                    </svg>
                                </span>

                                <!-- Featured Image -->
                                <div class="card-img-top ratio ratio-16x9 bg-secondary rounded-top-1 overflow-hidden">

                                    <?php
                                    $featuredImage = get_the_post_thumbnail_url(get_the_ID(), 'large'); // get URL
                                    if ($featuredImage):
                                    ?>
                                        <img src="<?php echo esc_url($featuredImage); ?>" class="w-100 h-100 object-fit-cover" alt="<?php the_title_attribute(); ?>">
                                    <?php else: ?>
                                        <div class="d-flex align-items-center justify-content-center bg-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-muted" viewBox="0 0 16 16">
                                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body d-flex flex-column">
                                    <!-- Title -->
                                    <h5 class="card-title clamp-2 fw-semibold mb-2 fs-6">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark d-inline-block py-1">
                                            <?php echo get_the_title(); ?>
                                        </a>
                                    </h5>

                                    <!-- Published Date and Read Time -->
                                    <div class="mt-auto pt-2">
                                        <div class="d-flex justify-content-between align-items-center text-muted " style="font-size: 13px;">
                                            <span class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="me-1" viewBox="0 0 16 16">
                                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                </svg>
                                                <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
                                            </span>

                                            <span class="d-flex align-items-center">
                                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="fill: rgba(33, 37, 41, 0.75);">
                                                    <path d="M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm.002 16H5V8h14l.002 12z"></path>
                                                    <path d="m11 17.414 5.707-5.707-1.414-1.414L11 14.586l-2.293-2.293-1.414 1.414z"></path>
                                                </svg>
                                                <?php echo get_the_date('M j, Y'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>