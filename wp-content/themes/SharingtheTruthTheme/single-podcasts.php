<?php get_header(); ?>
<section class="container-fluid py-5 banner-image">
    <h1 class="banner-text">Audios</h1>
</section>
<div class="container py-4">
    <section class="row mb-5">
        <!-- Feature Image  -->
        <div class="col-4">
            <?php
            $featuredImage = get_field('featured_image');
            if ($featuredImage):
            ?>
                <img src="<?php echo the_field('featured_image') ?>" class="h-100 w-100 object-fit-cover" style="max-height:240px;">
            <?php else: ?>
                <div class="d-flex align-items-center justify-content-center bg-light w-100 h-100" style="max-height: 240px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-muted" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                    </svg>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-8">
            <!-- Audio File and Metadata Section  -->
            <div class="h-100 rounded-2 p-4 shadow-sm bg-light mb-3 d-flex justify-content-center flex-column">
                <audio
                    class="w-100"
                    controls
                    preload="auto">
                    <source src="<?php the_field('audio_file') ?>" type="audio/mpeg">
                    Your browser does not support the audio tag.
                </audio>
                <h5 class="fs-6 mt-4 mb-2"><?php echo get_the_title(); ?></h5>

                <div>
                    <div class="d-flex gap-3 align-items-center text-muted " style="font-size: 13px;">
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
                        <button type="button" class=" ms-auto btn py-1 rounded-pill" style="font-size: 12px; background-color: #292929;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" style="fill: #f2f4f5;transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);">
                                <path d="M11 7.05V4a1 1 0 0 0-1-1 1 1 0 0 0-.7.29l-7 7a1 1 0 0 0 0 1.42l7 7A1 1 0 0 0 11 18v-3.1h.85a10.89 10.89 0 0 1 8.36 3.72 1 1 0 0 0 1.11.35A1 1 0 0 0 22 18c0-9.12-8.08-10.68-11-10.95zm.85 5.83a14.74 14.74 0 0 0-2 .13A1 1 0 0 0 9 14v1.59L4.42 11 9 6.41V8a1 1 0 0 0 1 1c.91 0 8.11.2 9.67 6.43a13.07 13.07 0 0 0-7.82-2.55z"></path>
                            </svg>
                            <span style="color: #f2f4f5">Share</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-3">
            <?php the_field('description') ?>
        </div>
    </section>

    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>
</div>

<?php get_footer(); ?>