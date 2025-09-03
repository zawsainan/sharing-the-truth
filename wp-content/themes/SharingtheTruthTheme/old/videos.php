<?php include('header.php') ?>
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

            <?php for ($i = 0; $i < 12; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Video Card  -->
                    <a href="video-detail.php" class="text-decoration-none text-dark">
                        <div class="rounded-1 overflow-hidden pb-3 position-relative">
                            <span class="position-absolute top-0 start-0 m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                    <path d="M4 8H2v12a2 2 0 0 0 2 2h12v-2H4z"></path>
                                    <path d="M20 2H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-9 12V6l7 4z"></path>
                                </svg>
                            </span>

                            <div class="video-container w-100 mb-2 overflow-hidden" style="height: 150px;">
                                <video class="w-100 videoPlayer" class="videoPlayer" muted loop playsinline preload="auto">
                                    <source src="assets/videos/test.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="play-overlay">
                                    Preview
                                </div>
                            </div>
                            <p class="clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi minima praesentium velit? </p>

                        </div>
                    </a>
                </div>
            <?php endfor ?>
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

<?php include('footer.php') ?>