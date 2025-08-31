<?php include('header.php') ?>
<div class="container py-4">
    <div class="mx-auto" style="max-width: 900px;">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="videos.php">Videos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sermon Audio: Trusting God in Hard Times</li>
            </ol>
        </nav>

        <!-- Video Player -->
        <div class="rounded-2 p-0 overflow-hidden shadow-sm">
            <video
                class="w-100 rounded-1"
                controls
                playsinline
                preload="auto">
                <source src="assets/videos/test.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- metadata  -->
        <div class="text-secondary small mt-3">
            <span class="me-3"><i class="bi bi-calendar-event"></i> Published: Aug 31, 2025</span>
            <span><i class="bi bi-clock"></i> Duration: 12:35</span>
        </div>
        <!-- Video Title -->
        <h2 class="fw-bold mb-3">
            Inspiring Sermon: Walking by Faith
        </h2>

        <!-- Video Description -->
        <p class="fs-6 text-muted lh-lg">
            In this message, we explore how faith shapes our journey and helps us
            overcome challenges. This video provides practical insights and biblical
            examples to inspire your daily walk with God.
        </p>


    </div>
</div>

<?php include('footer.php') ?>