<?php get_header(); ?>
<main>
    <!-- Carousel Section -->
    <div id="carouselExampleDark" class="carousel bg-black slide" data-bs-wrap="true" data-bs-pause="false" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img loading="eager" src="<?= get_template_directory_uri(); ?>/includes/assets/images/slider-1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>ကမ္ဘာဦးလူသားနှစ်ဦးကို အသက်သွင်းအနေဂဇာတင်ခဲ့တဲ့ထာဝရဘုရားဆိုတာ ယေရှုခရစ်တော် ဖြစ်ကြောင်း သင်သိပါသလား။ </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="<?= get_template_directory_uri(); ?>/includes/assets/images/slider-2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>ဘုရားဘုံမှလူ့ဘုံသို့ဆင်းသက်လာခဲ့သော ကယ်မည့်ဘုရားအပျိုသားသည် ယေရှုခရစ်တော် ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="<?= get_template_directory_uri(); ?>/includes/assets/images/slider-3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>လက်ရှိကမ္ဘာကြီးနှင့် နိဗ္ဗာန်ဘုံနှင့်ငရဲဘုံကို အုပ်စိုးနေသောဘုရားသည် ယေရှုခရစ်တော် ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="<?= get_template_directory_uri(); ?>/includes/assets/images/slider-4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fourth slide label</h5>
                    <p>သေခြင်းမစ္စုမာရ်ကို အောင်သောဘုရားသည် ယေရှုခရစ်တော်ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="<?= get_template_directory_uri(); ?>/includes/assets/images/slider-5.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fifth slide label</h5>
                    <p>လူသားများ၏အပြစ်ကိုလွတ်၍ အပါယ်ငရဲမှ ကယ်တင်ရန် အပြစ်လွတ်ခြင်း အမိန့်ကို ထုတ်ခဲ့သောဘုရားသည် ယေရှုခရစ်တော်ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Other Channels Section  -->

    <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle px-5 py-1 drop-shadow rounded-5 z-2 bg-white" style="background-color: #f4f7fc;">
            <div class="d-flex gap-5 ">
                <a href="" class="cursor-pointer text-decoration-none text-dark other-channel py-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="<?= get_template_directory_uri(); ?>/includes/assets/images/rawang.png" alt="">
                    <p class="text-center mb-0">Rawang</p>
                </a>
                <a href="rakhine.php" class="cursor-pointer text-decoration-none text-dark other-channel p-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="<?= get_template_directory_uri(); ?>/includes/assets/images/rakhine.png" alt="">
                    <p class="text-center mb-0">Rakhine</p>
                </a>
                <a href="shan.php" class="cursor-pointer text-decoration-none text-dark other-channel p-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="<?= get_template_directory_uri(); ?>/includes/assets/images/shan.png" alt="">
                    <p class="text-center mb-0">Shan</p>
                </a>
                <a href="mon.php" class="cursor-pointer text-decoration-none text-dark other-channel p-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="<?= get_template_directory_uri(); ?>/includes/assets/images/mon.png" alt="">
                    <p class="text-center mb-0">Mon</p>
                </a>
            </div>
        </div>
    </div>

    <div class="container pt-5 my-4 my-lg-5">

        <!-- About Us Section  -->
        <div class="row pt-3 mb-4 mb-lg-5 gx-5">
            <div class="col-12 col-md-5">
                <img src="<?= get_template_directory_uri(); ?>/includes/assets/images/whoweare.jpg" alt="" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="col-12 col-md-7">
                <div>
                    <h1>Who We Are</h1>
                    <p class="text-justify lh-17">ကျွန်ုပ်တို့သည် ယေရှုခရစ်တော်၏ဧဝံဂေလိတရားကို ဝေငှရန် ရည်စူးထားသော ခရစ်ယာန်မီဒီယာအဖွဲ့အစည်းတစ်ခုဖြစ်သည်။ ဒေသခံယုံကြည်သူများကို စွမ်းရည်မြှင့်တင်ရန်နှင့် တိုင်းရင်းသားဘာသာစကားအမျိုးမျိုးဖြင့် သတင်းကောင်းကို ဖြန့်ဝေရန်အတွက် ရိုးရာယဉ်ကျေးမှုနှင့်ကိုက်ညီသော မီဒီယာများကို ဖန်တီးပါသည်။ ကျွန်ုပ်တို့၏ရည်ရွယ်ချက်မှာ ဘုရားသခင်၏ဘုန်းတော်ကို သိကျွမ်းခြင်းပညာသည် မြေကြီးကို လွှမ်းမိုးစေရန်ဖြစ်သည်။ သမ္မာကျမ်းစာကိုအခြေခံပြီး တပည့်တော်ဖြစ်ခြင်းနှင့် အသင်းတော်ကြီးထွားမှုကို အထောက်အကူပြုမည့် မီဒီယာများ ထုတ်လုပ်ရန် ကျွန်ုပ်တို့ ကတိပြုပါသည်။</p>
                    <a href="/about-us.php" class="btn btn-outline-success rounded-pill py-2 px-3">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
        <!-- Latest Videos Section  -->
        <div class="mb-4 mb-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="fw-bold text-dark mb-0">Latest Videos</h4>
                <a href="#" class="btn btn-view-all fw-semibold px-0">
                    View All Videos
                </a>
            </div>
            <div class="row gx-3 my-3">

                <?php
                // $args = array(
                //     'post_type'      => 'youtube_videos',
                //     'posts_per_page' => 3,
                //     'orderby'        => 'ID',
                //     'order'          => 'DESC'
                // );

                // $data = new WP_Query($args);

                // if ($data->have_posts()):
                //     while ($data->have_posts()):
                //         $data->the_post();
                ?>

                <div class="col-12 col-lg-4 h-100" style="height: 400px;">
                    <?php
                    // the_field('youtube_video_link');
                    ?>
                </div>

                <?php
                //     endwhile;
                // endif;
                // wp_reset_postdata();
                ?>
            </div>

        </div>
        <!-- Latest Articles Section  -->
        <div class="mb-4 mb-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="fw-bold text-dark mb-0">Latest Articles</h4>
                <a href="#" class="btn btn-view-all fw-semibold px-0">
                    View All Articles
                </a>
            </div>
            <div class="row gx-3 my-3">

            </div>

        </div>
        <!-- Latest Audios Section  -->
        <div class="mb-4 mb-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="fw-bold text-dark mb-0">Latest Audios</h4>
                <a href="#" class="btn btn-view-all fw-semibold px-0">
                    View All Audios
                </a>
            </div>
            <div class="row gx-3 my-3">

                <?php $data = new WP_Query(array(
                    'post_type' => 'podcasts',
                    'posts_per_page' => 4,
                    'orderby' => 'ID',
                    'order' => 'DESC'
                ));
                if ($data->have_posts()):
                    while ($data->have_posts()):
                        $data->the_post();
                ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Audio Card  -->
                            <a class="text-decoration-none text-dark" href="audio-detail.php">
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
                                        <h5 class="card-title clamp-2 fw-semibold mb-2">
                                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
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
        <div class="text-center">
            <img class="bible" src="<?= get_template_directory_uri(); ?>/includes/assets/images/bibleicon.jfif" alt="" />
            <h4
                class="fs-2 fw-bold text-primary-color my-4 my-lg-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, eos?
            </h4>
            <a
                href="contact-us"
                class="btn btn-primary rounded-pill">
                Contact Now
            </a>
        </div>
    </div>
</main>
<script>
    // Select all video containers
    const videoContainers = document.querySelectorAll('.video-container');

    videoContainers.forEach(container => {
        const videoPlayer = container.querySelector('.videoPlayer');

        // Play video on hover
        container.addEventListener('mouseenter', () => {
            const playPromise = videoPlayer.play();
            if (playPromise !== undefined) {
                playPromise.catch(err => {
                    // Ignore play interruption errors
                    console.warn("Play interrupted:", err);
                });
            }
        });

        // Pause + reset when mouse leaves
        container.addEventListener('mouseleave', () => {
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
        });

        // For mobile (click toggle play/pause)
        container.addEventListener('click', () => {
            if (videoPlayer.paused) {
                videoPlayer.play().catch(err => console.warn("Play error:", err));
            } else {
                videoPlayer.pause();
            }
        });
    });
</script>


<?php get_footer(); ?>