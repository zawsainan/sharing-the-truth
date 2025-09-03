<?php include('header.php') ?>

<!-- Chat Widget Styles -->
<style>
    .chat-widget {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }

    .chat-widget .chat-toggle {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        transition: all 0.3s ease;
        border: none;
    }

    .chat-widget .chat-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
    }

    .chat-widget .chat-toggle svg {
        width: 28px;
        height: 28px;
        fill: white;
        transition: transform 0.3s ease;
    }

    .chat-widget .chat-toggle.active svg {
        transform: rotate(45deg);
    }

    .chat-widget .chat-container {
        position: absolute;
        bottom: 80px;
        right: 0;
        width: 400px;
        height: 600px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        transform: translateY(20px) scale(0.95);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        overflow: hidden;
    }

    .chat-widget .chat-container.open {
        transform: translateY(0) scale(1);
        opacity: 1;
        visibility: visible;
    }

    .chat-widget .chat-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 20px;
        color: white;
        border-radius: 20px 20px 0 0;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .chat-widget .chat-header-content {
        flex: 1;
    }

    .chat-widget .chat-header h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .chat-widget .chat-header p {
        font-size: 14px;
        opacity: 0.9;
        margin: 0;
    }

    .chat-widget .chat-close-btn {
        width: 32px;
        height: 32px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        margin-left: 15px;
        flex-shrink: 0;
    }

    .chat-widget .chat-close-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
    }

    .chat-widget .chat-close-btn svg {
        width: 18px;
        height: 18px;
        fill: white;
        transition: transform 0.2s ease;
    }

    .chat-widget .chat-close-btn:hover svg {
        transform: rotate(90deg);
    }

    .chat-widget .chat-messages {
        height: 420px;
        overflow-y: auto;
        padding: 20px;
        background: #f8fafc;
    }

    .chat-widget .chat-messages::-webkit-scrollbar {
        width: 6px;
    }

    .chat-widget .chat-messages::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }

    .chat-widget .chat-messages::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }

    /* Animations (namespaced to avoid conflicts) */
    @keyframes ragc-slide-in {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes ragc-blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }
    @keyframes ragc-typing {
        0%, 80%, 100% { transform: scale(0.8); opacity: 0.5; }
        40% { transform: scale(1); opacity: 1; }
    }

    .chat-widget .message {
        margin-bottom: 15px;
        animation: ragc-slide-in 0.3s ease;
    }
    .chat-widget .message.user { text-align: right; }
    .chat-widget .message.bot { text-align: left; }

    .chat-widget .message-bubble {
        display: inline-block;
        padding: 12px 16px;
        border-radius: 18px;
        max-width: 80%;
        word-wrap: break-word;
        position: relative;
    }

    .chat-widget .message.user .message-bubble {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .chat-widget .message.bot .message-bubble {
        background: white;
        color: #333;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .chat-widget .streaming-message { position: relative; }

    .chat-widget .cursor {
        display: inline-block;
        width: 2px;
        height: 1em;
        background-color: #667eea;
        animation: ragc-blink 1s infinite;
        margin-left: 2px;
    }

    .chat-widget .chat-input-container {
        padding: 20px;
        background: white;
        border-radius: 0 0 20px 20px;
        border-top: 1px solid #e2e8f0;
    }

    .chat-widget .chat-input-form {
        display: flex;
        gap: 10px;
        align-items: center;
        margin: 0;
    }

    .chat-widget .chat-input {
        flex: 1;
        padding: 12px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 25px;
        font-size: 14px;
        outline: none;
        transition: all 0.3s ease;
    }

    .chat-widget .chat-input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .chat-widget .send-button {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .chat-widget .send-button:hover {
        transform: scale(1.1);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .chat-widget .send-button:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }

    .chat-widget .send-button svg {
        width: 20px;
        height: 20px;
        fill: white;
    }

    .chat-widget .typing-indicator {
        display: flex;
        align-items: center;
        padding: 12px 16px;
        background: white;
        border-radius: 18px;
        margin-bottom: 15px;
        border: 1px solid #e2e8f0;
        max-width: fit-content;
    }

    .chat-widget .typing-dots {
        display: flex;
        gap: 4px;
    }

    .chat-widget .typing-dot {
        width: 8px;
        height: 8px;
        background: #667eea;
        border-radius: 50%;
        animation: ragc-typing 1.4s infinite ease-in-out;
    }

    .chat-widget .typing-dot:nth-child(1) { animation-delay: -0.32s; }
    .chat-widget .typing-dot:nth-child(2) { animation-delay: -0.16s; }

    .chat-widget .error-message {
        color: #ef4444;
        font-size: 12px;
        margin-top: 5px;
        padding: 8px 12px;
        background: #fef2f2;
        border-radius: 8px;
        border-left: 3px solid #ef4444;
    }

    @media (max-width: 480px) {
        .chat-widget .chat-container {
            width: 350px;
            height: 500px;
            bottom: 80px;
            right: 10px;
        }
        .chat-widget {
            bottom: 10px;
            right: 10px;
        }
    }
</style>

<main>
    <!-- Carousel Section -->
    <div id="carouselExampleDark" class="carousel bg-black slide" data-bs-wrap="true" data-bs-pause="false" data-bs-ride="carousel">

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
                <img loading="eager" src="assets/images/slider-5.png" class="d-block w-100" alt="...">
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
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="assets/images/rawang.png" alt="">
                    <p class="text-center mb-0">Rawang</p>
                </a>
                <a href="rakhine.php" class="cursor-pointer text-decoration-none text-dark other-channel p-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="assets/images/rakhine.png" alt="">
                    <p class="text-center mb-0">Rakhine</p>
                </a>
                <a href="shan.php" class="cursor-pointer text-decoration-none text-dark other-channel p-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="assets/images/shan.png" alt="">
                    <p class="text-center mb-0">Shan</p>
                </a>
                <a href="mon.php" class="cursor-pointer text-decoration-none text-dark other-channel p-2">
                    <img style="width: 100px; height: 60px" class="object-fit-contain" src="assets/images/mon.png" alt="">
                    <p class="text-center mb-0">Mon</p>
                </a>
            </div>
        </div>
    </div>

    <div class="container pt-5 my-4 my-lg-5">

        <!-- About Us Section  -->
        <div class="row pt-3 mb-4 mb-lg-5 gx-5">
            <div class="col-12 col-md-5">
                <img src="assets/images/whoweare.jpg" alt="" class="w-100 h-100 object-fit-cover">
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

                <?php for ($i = 0; $i < 4; $i++): ?>
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
                <?php include('article-card.php') ?>
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

                <?php for ($i = 0; $i < 4; $i++): ?>
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

<!-- Chat Widget -->
<div class="chat-widget">
    <div class="chat-container" id="chatContainer">
        <div class="chat-header">
            <div class="chat-header-content">
                <h3>Sharing the Truth</h3>
                <p>Ask me anything about faith</p>
            </div>
            <button class="chat-close-btn" id="chatCloseBtn" title="Close chat">
                <svg viewBox="0 0 24 24">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                </svg>
            </button>
        </div>
        
        <div class="chat-messages" id="chatMessages">
            <div class="message bot">
                <div class="message-bubble">
                    မင်္ဂလာပါ! သင်ရဲ့ မေးခွန်းတွေကို ဖြေကြားပေးနိုင်ပါတယ်။
                </div>
            </div>
        </div>
        
        <div class="chat-input-container">
            <form class="chat-input-form" id="chatForm">
                <input 
                    type="text" 
                    class="chat-input" 
                    id="chatInput" 
                    placeholder="Type your message here..."
                    autocomplete="off"
                >
                <button type="submit" class="send-button" id="sendButton">
                    <svg viewBox="0 0 24 24">
                        <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    
    <button class="chat-toggle" id="chatToggle">
        <svg viewBox="0 0 24 24">
            <path d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4A2,2 0 0,0 20,2Z" />
        </svg>
    </button>
</div>

<script>
    // Video hover functionality (existing)
    const videoContainers = document.querySelectorAll('.video-container');

    videoContainers.forEach(container => {
        const videoPlayer = container.querySelector('.videoPlayer');

        container.addEventListener('mouseenter', () => {
            const playPromise = videoPlayer.play();
            if (playPromise !== undefined) {
                playPromise.catch(err => {
                    console.warn("Play interrupted:", err);
                });
            }
        });

        container.addEventListener('mouseleave', () => {
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
        });

        container.addEventListener('click', () => {
            if (videoPlayer.paused) {
                videoPlayer.play().catch(err => console.warn("Play error:", err));
            } else {
                videoPlayer.pause();
            }
        });
    });

    // RAG Chatbox functionality
    class RAGChatbox {
        constructor() {
            this.apiUrl = 'http://127.0.0.1:8000/query/stream';
            this.isOpen = false;
            this.isLoading = false;
            this.currentStreamingMessage = null;
            
            this.initializeElements();
            this.bindEvents();
        }

        initializeElements() {
            this.chatToggle = document.getElementById('chatToggle');
            this.chatContainer = document.getElementById('chatContainer');
            this.chatMessages = document.getElementById('chatMessages');
            this.chatForm = document.getElementById('chatForm');
            this.chatInput = document.getElementById('chatInput');
            this.sendButton = document.getElementById('sendButton');
            this.chatCloseBtn = document.getElementById('chatCloseBtn');
        }

        bindEvents() {
            this.chatToggle.addEventListener('click', () => this.toggleChat());
            this.chatCloseBtn.addEventListener('click', () => this.closeChat());
            this.chatForm.addEventListener('submit', (e) => this.handleSubmit(e));
            this.chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    this.handleSubmit(e);
                }
            });
        }

        toggleChat() {
            this.isOpen = !this.isOpen;
            this.chatContainer.classList.toggle('open', this.isOpen);
            this.chatToggle.classList.toggle('active', this.isOpen);
            
            if (this.isOpen) {
                setTimeout(() => this.chatInput.focus(), 300);
            }
        }

        closeChat() {
            this.isOpen = false;
            this.chatContainer.classList.remove('open');
            this.chatToggle.classList.remove('active');
        }

        async handleSubmit(e) {
            e.preventDefault();
            
            const message = this.chatInput.value.trim();
            if (!message || this.isLoading) return;

            this.addMessage(message, 'user');
            this.chatInput.value = '';
            this.setLoading(true);

            try {
                await this.streamResponse(message);
            } catch (error) {
                this.addErrorMessage('Sorry, I encountered an error. Please try again.');
                console.error('Chat API Error:', error);
            } finally {
                this.setLoading(false);
            }
        }

        async streamResponse(query) {
            const requestBody = {
                query: query,
                k: 5,
                search_type: "similarity",
                use_cache: true,
                include_sources: true
            };

            try {
                const response = await fetch(this.apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(requestBody)
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                this.currentStreamingMessage = this.createStreamingMessage();
                
                const reader = response.body.getReader();
                const decoder = new TextDecoder();
                let buffer = '';

                while (true) {
                    const { done, value } = await reader.read();
                    
                    if (done) break;
                    
                    buffer += decoder.decode(value, { stream: true });
                    
                    // Process complete lines
                    const lines = buffer.split('\n');
                    buffer = lines.pop() || ''; // Keep incomplete line in buffer
                    
                    for (const line of lines) {
                        if (line.startsWith('data: ')) {
                            try {
                                const data = JSON.parse(line.slice(6));
                                this.handleStreamData(data);
                            } catch (e) {
                                console.warn('Failed to parse streaming data:', e);
                            }
                        }
                    }
                }
                
                // Finalize the streaming message
                this.finalizeStreamingMessage();
                
            } catch (error) {
                console.error('Streaming error:', error);
                throw error;
            }
        }

        createStreamingMessage() {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message bot streaming-message';
            
            const bubbleDiv = document.createElement('div');
            bubbleDiv.className = 'message-bubble';
            
            const contentSpan = document.createElement('span');
            contentSpan.className = 'streaming-content';
            
            const cursor = document.createElement('span');
            cursor.className = 'cursor';
            
            bubbleDiv.appendChild(contentSpan);
            bubbleDiv.appendChild(cursor);
            messageDiv.appendChild(bubbleDiv);
            
            this.chatMessages.appendChild(messageDiv);
            this.scrollToBottom();
            
            return {
                element: messageDiv,
                content: contentSpan,
                cursor: cursor
            };
        }

        handleStreamData(data) {
            if (!this.currentStreamingMessage) return;
            
            switch (data.type) {
                case 'status':
                    console.log('Status:', data.message);
                    break;
                    
                case 'content':
                    this.currentStreamingMessage.content.textContent += data.data;
                    this.scrollToBottom();
                    break;
                    
                case 'error':
                    this.currentStreamingMessage.content.textContent = 'Sorry, I encountered an error: ' + data.message;
                    this.finalizeStreamingMessage();
                    break;
                    
                case 'done':
                    console.log('Streaming complete. Cached:', data.cached);
                    this.finalizeStreamingMessage();
                    break;
            }
        }

        finalizeStreamingMessage() {
            if (this.currentStreamingMessage) {
                if (this.currentStreamingMessage.cursor) {
                    this.currentStreamingMessage.cursor.remove();
                }
                
                this.currentStreamingMessage.element.classList.remove('streaming-message');
                this.currentStreamingMessage = null;
            }
        }

        addMessage(content, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}`;
            
            const bubbleDiv = document.createElement('div');
            bubbleDiv.className = 'message-bubble';
            bubbleDiv.textContent = content;
            
            messageDiv.appendChild(bubbleDiv);
            this.chatMessages.appendChild(messageDiv);
            this.scrollToBottom();
        }

        addErrorMessage(message) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.textContent = message;
            this.chatMessages.appendChild(errorDiv);
            this.scrollToBottom();
        }

        setLoading(loading) {
            this.isLoading = loading;
            this.sendButton.disabled = loading;
            
            if (loading) {
                this.addTypingIndicator();
            } else {
                this.removeTypingIndicator();
            }
        }

        addTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.className = 'message bot';
            typingDiv.id = 'typingIndicator';
            
            const indicator = document.createElement('div');
            indicator.className = 'typing-indicator';
            
            const dots = document.createElement('div');
            dots.className = 'typing-dots';
            
            for (let i = 0; i < 3; i++) {
                const dot = document.createElement('div');
                dot.className = 'typing-dot';
                dots.appendChild(dot);
            }
            
            indicator.appendChild(dots);
            typingDiv.appendChild(indicator);
            this.chatMessages.appendChild(typingDiv);
            this.scrollToBottom();
        }

        removeTypingIndicator() {
            const indicator = document.getElementById('typingIndicator');
            if (indicator) {
                indicator.remove();
            }
        }

        scrollToBottom() {
            setTimeout(() => {
                this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
            }, 50);
        }
    }

    // Initialize the chatbox when the page loads
    document.addEventListener('DOMContentLoaded', () => {
        new RAGChatbox();
    });
</script>

<?php include('footer.php') ?>