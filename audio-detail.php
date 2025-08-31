<?php include('header.php') ?>

<div class="container py-4">
    <div class="mx-auto" style="max-width: 900px;">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="audios.php">Audios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sermon Audio: Trusting God in Hard Times</li>
            </ol>
        </nav>

        <!-- Audio Player -->
        <div class="rounded-2 p-4 shadow-sm bg-light mb-3">
            <audio
                class="w-100"
                controls
                preload="auto">
                <source src="assets/audios/song.mp3" type="audio/mpeg">
                Your browser does not support the audio tag.
            </audio>
        </div>

        <!-- metadata  -->
        <div class="text-secondary small mt-3">
            <span class="me-3"><i class="bi bi-calendar-event"></i> Published: Aug 31, 2025</span>
        </div>

        <!-- Audio Title -->
        <h2 class="fw-bold mb-3">
            Sermon Audio: Trusting God in Hard Times
        </h2>

        <!-- Audio Description -->
        <p class="fs-6 text-muted lh-lg">
            This sermon shares encouragement and wisdom for facing life’s challenges.
            Discover biblical truths about perseverance, hope, and the power of prayer
            to strengthen your walk with God.
        </p>

    </div>
</div>

<?php include('footer.php') ?>