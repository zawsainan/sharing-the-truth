<?php get_header(); ?>

<main>
    <!-- Banner Section -->
    <section class="container-fluid py-5 banner-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/includes/assets/images/slider-1.png');">
        <h1 class="banner-text">About Us</h1>
    </section>

    <div class="container my-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!-- Article Card -->
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>


                    <!-- Title -->
                    <h1 class="mb-3"><?php the_title(); ?></h1>

                    <!-- Meta (Date, Author) -->
                    <div class="text-muted mb-4 d-flex">
                        <small>
                            Published on <?php echo get_the_date(); ?>
                            by <?php the_author(); ?>
                        </small>
                        <button type="button" class="ms-5 btn py-1 rounded-pill" style="font-size: 12px; background-color: #292929;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" style="fill: #f2f4f5;transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);">
                                <path d="M11 7.05V4a1 1 0 0 0-1-1 1 1 0 0 0-.7.29l-7 7a1 1 0 0 0 0 1.42l7 7A1 1 0 0 0 11 18v-3.1h.85a10.89 10.89 0 0 1 8.36 3.72 1 1 0 0 0 1.11.35A1 1 0 0 0 22 18c0-9.12-8.08-10.68-11-10.95zm.85 5.83a14.74 14.74 0 0 0-2 .13A1 1 0 0 0 9 14v1.59L4.42 11 9 6.41V8a1 1 0 0 0 1 1c.91 0 8.11.2 9.67 6.43a13.07 13.07 0 0 0-7.82-2.55z"></path>
                            </svg>
                            <span style="color: #f2f4f5">Share</span>
                        </button>
                    </div>

                    <!-- Block Editor Content -->
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Comments Section -->
                    <div class="mt-5">
                        <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>

                    </div>

                </article>

        <?php endwhile;
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>