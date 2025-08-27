<?php include('header.php') ?>
<main>
    <!-- Carousel Section -->
    <div id="carouselExampleDark" class="carousel carousel-dark bg-black slide" data-bs-wrap="true" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img loading="eager" src="assets/images/slider-1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>ကမ္ဘာဦးလူသားနှစ်ဦးကို အသက်သွင်းအနေဂဇာတင်ခဲ့တဲ့ထာဝရဘုရားဆိုတာ ယေရှုခရစ်တော် ဖြစ်ကြောင်း သင်သိပါသလား။ </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="assets/images/slider-2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>ဘုရားဘုံမှလူ့ဘုံသို့ဆင်းသက်လာခဲ့သော ကယ်မည့်ဘုရားအပျိုသားသည် ယေရှုခရစ်တော် ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="assets/images/slider-3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>လက်ရှိကမ္ဘာကြီးနှင့် နိဗ္ဗာန်ဘုံနှင့်ငရဲဘုံကို အုပ်စိုးနေသောဘုရားသည် ယေရှုခရစ်တော် ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="assets/images/slider-4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fourth slide label</h5>
                    <p>သေခြင်းမစ္စုမာရ်ကို အောင်သောဘုရားသည် ယေရှုခရစ်တော်ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img loading="eager" src="assets/images/slider-5.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fifth slide label</h5>
                    <p>လူသားများ၏အပြစ်ကိုလွတ်၍ အပါယ်ငရဲမှ ကယ်တင်ရန် အပြစ်လွတ်ခြင်း အမိန့်ကို ထုတ်ခဲ့သောဘုရားသည် ယေရှုခရစ်တော်ဖြစ်ကြောင်း သင်သိပါသလား။</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4 my-lg-5">

        <!-- About Us Section  -->
        <div class="row mb-4 mb-lg-5">
            <div class="col-5">
                <div class="w-100 h-100 bg-warning"></div>
            </div>
            <div class="col-7">
                <div>
                    <h1>About Us</h1>
                    <p>Lorem, ipsum dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, beatae? Enim ratione aliquam officia minus magni, doloremque blanditiis aut voluptatibus architecto praesentium aspernatur maxime totam facilis reprehenderit obcaecati laudantium! Blanditiis odio animi, aspernatur adipisci pariatur neque quam beatae repellat qui. Aperiam delectus assumenda expedita dolor, tempore neque? Sit, ipsa rerum? sit amet consectetur adipisicing elit. Hic, error modi! Architecto, mollitia corrupti delectus molestias id sed illum nihil omnis temporibus praesentium corporis accusamus cum rem ex doloribus esse.</p>
                    <a href="/about-us.php" class="btn btn-outline-success rounded-pill py-2 px-3">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
        <!-- Latest Articles, Videos and Audios Section  -->
        <div class="mb-4 mb-lg-5">
            <h1>Latest Articles</h1>
            <div class="row gx-2 my-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Article Card  -->
                    <div class="rounded-2 position-relative">
                        <span class="position-absolute top-0 start-0 m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M20 12v-1.707c0-4.442-3.479-8.161-7.755-8.29-2.204-.051-4.251.736-5.816 2.256A7.933 7.933 0 0 0 4 10v2c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h2V10a5.95 5.95 0 0 1 1.821-4.306 5.977 5.977 0 0 1 4.363-1.691C15.392 4.099 18 6.921 18 10.293V20h2c1.103 0 2-.897 2-2v-4c0-1.103-.897-2-2-2z"></path>
                                <path d="M7 12h2v8H7zm8 0h2v8h-2z"></path>
                            </svg>
                        </span>
                        <div class="bg-secondary w-100 mb-3 rounded-1 overflow-hidden" style="height: 180px;"></div>
                        <h4>Title</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim fuga dolorum aut quaerat alias nesciunt, obcaecati excepturi autem unde debitis sunt illo fugiat neque voluptatem velit, nemo repudiandae magnam laudantium?</p>
                        <a href="" class="rounded-pill btn btn-outline-success">View More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Video Card  -->
                    <div class="rounded-2 position-relative">
                        <span class="position-absolute top-0 start-0 m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M4 8H2v12a2 2 0 0 0 2 2h12v-2H4z"></path>
                                <path d="M20 2H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-9 12V6l7 4z"></path>
                            </svg>
                        </span>
                        <div class="bg-secondary w-100 mb-3 rounded-1 overflow-hidden" style="height: 180px;"></div>
                        <h4>Title</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim fuga dolorum aut quaerat alias nesciunt, obcaecati excepturi autem unde debitis sunt illo fugiat neque voluptatem velit, nemo repudiandae magnam laudantium?</p>
                        <a href="" class="rounded-pill btn btn-outline-success">View More</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Article Card  -->
                    <div class="rounded-2 position-relative">
                        <span class="position-absolute top-0 start-0 m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M19.903 8.586a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.952.952 0 0 0-.051-.259c-.01-.032-.019-.063-.033-.093zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z"></path>
                                <path d="M8 12h8v2H8zm0 4h8v2H8zm0-8h2v2H8z"></path>
                            </svg>
                        </span>
                        <div class="bg-secondary w-100 mb-3 rounded-1 overflow-hidden" style="height: 180px;"></div>
                        <h4>Title</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim fuga dolorum aut quaerat alias nesciunt, obcaecati excepturi autem unde debitis sunt illo fugiat neque voluptatem velit, nemo repudiandae magnam laudantium?</p>
                        <a href="" class="rounded-pill btn btn-outline-success">View More</a>
                    </div>
                </div>



            </div>
        </div>
        <div class="text-center">
            <img class="bible" src="assets/images/bibleicon.jfif" alt="" />
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
<?php include('footer.php') ?>