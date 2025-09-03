<?php get_header(); ?>
<section class="container-fluid py-5 banner-image">
    <h1 class="banner-text">Videos</h1>
</section>
<div class="container py-4">
    <div class="mx-auto" style="max-width: 900px;">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Videos</li>
            </ol>
        </nav>

        <div class="row gx-3 my-3">

            <?php
            $args = array(
                'post_type'      => 'youtube_videos',
                'posts_per_page' => -1,
                'orderby'        => 'ID',
                'order'          => 'DESC'
            );

            $data = new WP_Query($args);

            if ($data->have_posts()):
                while ($data->have_posts()):
                    $data->the_post();
            ?>

                    <div class="col-12 col-lg-4 h-100" style="height: 400px;">
                        <?php
                        // the_field('youtube_video_link');
                        ?>
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