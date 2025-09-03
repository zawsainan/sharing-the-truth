<?php get_header(); ?>

<main>
    <section class="container-fluid py-5 banner-image">
        <h1 class="banner-text">Activities</h1>
    </section>
    <div class="container py-4 py-lg-5">
        <div class="row g-3">
            <?php $data = new WP_Query(array(
                'post_type' => 'activity',
                'posts_per_page' => -1,
                'orderby' => 'ID',
                'order' => 'DESC'
            ));
            if ($data->have_posts()):
                while ($data->have_posts()):
                    $data->the_post();
            ?>

                    <div class="col-12 col-md-6 col-lg-4" onclick="showModal(this)" data-image-url="assets/images/slider-4.png" data-title="Not Just a Title">
                        <div class="overflow-hidden w-100 h-100 rounded-3 zoom-in ">
                            <img src="<?php the_field('activity_image') ?>" alt="" class="w-100 h-100 object-fit-cover">
                            <div class="gallery-overlay">
                                <img src="<?php get_template_directory_uri(); ?>/includes/assets/icons/expand.png" class="expand" alt="">
                            </div>
                            <h4 class="gallery-title">Title</h4>
                        </div>
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
</main>
<div class="modal-container d-none" id="modalContainer">
    <div class="overlay"></div>
    <div class="modal-box p-2">
        <div class="d-flex justify-content-between align-items-center py-2 px-3">
            <h4 id="modalTitle">title</h4>
            <button class="border-0 bg-white closeBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                    <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                </svg>
            </button>
        </div>
        <img id="modalImage" src="assets/images/slider-4.png" alt="" class="w-100 rounded-2 object-fit-cover">
    </div>
</div>
<script>
    const modalContainer = document.getElementById('modalContainer')
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');

    document.querySelector('.closeBtn').addEventListener('click', () => modalContainer.classList.add('d-none'));
    document.querySelector('.overlay').addEventListener('click', () => modalContainer.classList.add('d-none'));

    function showModal(element) {
        modalContainer.classList.remove('d-none');
        modalTitle.textContent = element.dataset.title;
        modalImage.src = element.dataset.imageUrl;
    }
</script>
<?php get_footer(); ?>