<?php include('header.php') ?>
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

            <?php for ($i = 0; $i < 12; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Article Card  -->
                    <a class="text-decoration-none text-dark" href="audio-detail.php">
                        <div class="rounded-2 position-relative">
                            <span class="position-absolute top-0 start-0 m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                    <path d="M20 12v-1.707c0-4.442-3.479-8.161-7.755-8.29-2.204-.051-4.251.736-5.816 2.256A7.933 7.933 0 0 0 4 10v2c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h2V10a5.95 5.95 0 0 1 1.821-4.306 5.977 5.977 0 0 1 4.363-1.691C15.392 4.099 18 6.921 18 10.293V20h2c1.103 0 2-.897 2-2v-4c0-1.103-.897-2-2-2z"></path>
                                    <path d="M7 12h2v8H7zm8 0h2v8h-2z"></path>
                                </svg>
                            </span>
                            <div class="bg-secondary w-100 mb-3 rounded-1 overflow-hidden" style="height: 150px;"></div>
                            <p class="clamp-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim fuga dolorum aut quaerat alias nesciunt, obcaecati excepturi autem unde debitis sunt illo fugiat neque voluptatem velit, nemo repudiandae magnam laudantium?</p>

                        </div>
                    </a>
                </div>
            <?php endfor; ?>


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