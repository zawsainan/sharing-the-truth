<?php get_header(); ?>
<section class="container-fluid py-5 banner-image">
    <h1 class="banner-text">Audios</h1>
</section>
<div class="container py-4">
    <div class="mx-auto" style="max-width: 900px;">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Audios</li>
            </ol>
        </nav>

        <div class="row gx-3 my-3">

            <?php $data = new WP_Query(array(
                'post_type' => 'podcasts',
                'posts_per_page' => -1,
                'orderby' => 'ID',
                'order' => 'DESC'
            ));
            if ($data->have_posts()):
                while ($data->have_posts()):
                    $data->the_post();
            ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Audio Card  -->
                        <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
                            <div class="card rounded-2 position-relative border-0 shadow-sm h-100">
                                <!-- Audio Icon Badge -->
                                <span class="position-absolute top-0 start-0 m-2 bg-dark bg-opacity-75 rounded-circle p-1 z-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                        <path d="M20 12v-1.707c0-4.442-3.479-8.161-7.755-8.29-2.204-.051-4.251.736-5.816 2.256A7.933 7.933 0 0 0 4 10v2c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h2V10a5.95 5.95 0 0 1 1.821-4.306 5.977 5.977 0 0 1 4.363-1.691C15.392 4.099 18 6.921 18 10.293V20h2c1.103 0 2-.897 2-2v-4c0-1.103-.897-2-2-2z"></path>
                                        <path d="M7 12h2v8H7zm8 0h2v8h-2z"></path>
                                    </svg>
                                </span>

                                <!-- Featured Image -->
                                <div class="card-img-top ratio ratio-16x9 bg-secondary rounded-top-1 overflow-hidden">

                                    <?php
                                    $featuredImage = get_field('featured_image');
                                    if ($featuredImage):
                                    ?>
                                        <img src="<?php echo the_field('featured_image') ?>" class="w-100 h-100 object-fit-cover">
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
        <div class="my-4 my-lg-5 d-flex justify-content-center gap-2">
            <div class="bg-secondary d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 30px; height: 30px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <div class="text-white d-flex align-items-center justify-content-center fw-bold bg-primary-color" style="width: 32px;height:32px; border-radius:50%">1</div>
            <div class="text-white d-flex align-items-center justify-content-center fw-bold bg-secondary" style="width: 32px;height:32px; border-radius:50%">2</div>
            <div class="text-white d-flex align-items-center justify-content-center fw-bold bg-secondary" style="width: 32px;height:32px; border-radius:50%">3</div>
            <div class="bg-secondary d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 30px; height: 30px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>