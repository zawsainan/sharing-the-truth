<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #292929 0%, #1a1a1a 100%);
            color: white;
            overflow-x: hidden;
            min-height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            position: relative;
        }

        .background-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .floating-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .circle-1 {
            width: 200px;
            height: 200px;
            background: #ffbb00;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            background: #ababab;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .circle-3 {
            width: 100px;
            height: 100px;
            background: #ffbb00;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .main-content {
            text-align: center;
            z-index: 10;
            position: relative;
        }

        .logo {
            width: 90px;
            height: 90px;
            background-color: transparent;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            filter: drop-shadow(0 15px 40px rgba(255, 187, 0, 0.5));
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .main-title {
            font-size: 4rem;
            font-weight: 300;
            letter-spacing: 3px;
            margin-bottom: 20px;
            font-weight: bold;
            background: linear-gradient(45deg, white, #ababab);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: slideInUp 1s ease-out;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #ababab;
            margin-bottom: 40px;
            font-weight: 300;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        .description {
            font-size: 1.1rem;
            color: #ababab;
            max-width: 500px;
            line-height: 1.9;
            margin-bottom: 50px;
            animation: slideInUp 1s ease-out 0.6s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .countdown {
            display: flex;
            gap: 30px;
            margin-bottom: 50px;
            animation: slideInUp 1s ease-out 0.9s both;
        }

        .countdown-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 187, 0, 0.2);
            border-radius: 15px;
            padding: 20px 15px;
            min-width: 80px;
            transition: all 0.3s ease;
        }

        .countdown-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 187, 0, 0.1);
            border-color: rgba(255, 187, 0, 0.4);
        }

        .countdown-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffbb00;
            display: block;
            line-height: 1;
        }

        .countdown-label {
            font-size: 0.9rem;
            color: #ababab;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 8px;
        }

        .notify-section {
            animation: slideInUp 1s ease-out 1.2s both;
        }

        .email-form {
            display: flex;
            gap: 15px;
            max-width: 400px;
            margin: 0 auto 30px;
        }

        .email-input {
            flex: 1;
            padding: 15px 20px;
            border: 2px solid rgba(171, 171, 171, 0.3);
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .email-input::placeholder {
            color: #ababab;
        }

        .email-input:focus {
            border-color: #ffbb00;
            box-shadow: 0 0 20px rgba(255, 187, 0, 0.3);
        }

        .notify-btn {
            display: inline-block;
            color: #292929;
            text-decoration: none;
            padding: 3px 40px;
            background: linear-gradient(45deg, #ffbb00, #ffd700);
            border: none;
            border-radius: 20px;

            margin-bottom: 25px;
            color: #292929;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .notify-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 187, 0, 0.4);
        }

        .social-links {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .social-link {
            width: 28px;
            height: 28px;
            border: 2px solid transparent;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ababab;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .social-link:hover {
            border-color: #ffbb00;
            color: #ffbb00;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 187, 0, 0.3);
        }

        .social-link img {
            width: 100%;
            height: 100%;
        }

        .copyright {
            color: #ababab;
            text-align: center;
            margin-top: 1rem;
            font-size: 14px;
        }

        .footer {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: #ababab;
            font-size: 0.9rem;
            animation: slideInUp 1s ease-out 1.5s both;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 2.5rem;

                letter-spacing: 2px;
            }

            .subtitle {
                font-size: 1.2rem;
            }

            .countdown {
                gap: 15px;
                flex-wrap: wrap;
            }

            .countdown-item {
                min-width: 70px;
                padding: 15px 10px;
            }

            .countdown-number {
                font-size: 2rem;
            }

            .email-form {
                flex-direction: column;
                gap: 15px;
            }

            .notify-btn {
                width: 100%;
            }
        }

        .glow-effect {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 187, 0, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: glow 4s ease-in-out infinite;
            z-index: 2;
        }

        @keyframes glow {

            0%,
            100% {
                opacity: 0.5;
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                opacity: 0.8;
                transform: translate(-50%, -50%) scale(1.1);
            }
        }
    </style>
</head>

<body>
    <div class="background-elements">
        <div class="floating-circle circle-1"></div>
        <div class="floating-circle circle-2"></div>
        <div class="floating-circle circle-3"></div>
        <div class="glow-effect"></div>
    </div>

    <div class="container">
        <div class="main-content">
            <div class="logo">
                <img src="assets/images/mon.png" alt="">
            </div>

            <h1 class="main-title">COMING SOON</h1>
            <p class="subtitle">မင်္ဂလာပါ! မွန် channel မှနွေးထွေးစွာကြိုဆိုပါ၏။</p>
            <p class="description">
                မွန်ဘာသာစကားဖြင့် အကြောင်းအရာအသစ်များကို တင်ဆက်နိုင်ဖို့ ကျွန်တော်တို့ ကြိုးစားလျက် ရှိပါတယ်။ အသစ်တွေ ထွက်လာတဲ့အခါမှာ အဦးဆုံး သိရှိနိုင်ဖို့ စောင့်မျှော်ပေးပါဦးနော်။ </p>

            <div class="notify-section">
                <a href="/" type="submit" class="notify-btn">မူလစာမျက်နှာသို့</a>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <img src="assets/icons/facebook.svg" alt="">
                    </a>
                    <a href="#" class="social-link">
                        <img src="assets/icons/tiktok.png" alt="">

                    </a>
                    <a href="#" class="social-link">
                        <img src="assets/icons/youtube.png" alt="">
                    </a>
                    <a href="#" class="social-link">💬</a>

                </div>
                <p class="copyright"> &copy; 2025 Sharing The Truth. All rights reserved</p>
            </div>
        </div>
    </div>

    <script>
        // Countdown Timer
        function updateCountdown() {
            // Set launch date (30 days from now as example)
            const launchDate = new Date();
            launchDate.setDate(launchDate.getDate() + 30);

            const now = new Date().getTime();
            const distance = launchDate.getTime() - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
            }
        }

        // Update countdown every second
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // Email form submission
        document.getElementById('notifyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.email-input').value;

            // Simple email validation
            if (email && email.includes('@')) {
                alert('Thank you! We\'ll notify you when we launch.');
                this.querySelector('.email-input').value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });

        // Add smooth scroll and interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to countdown items
            const countdownItems = document.querySelectorAll('.countdown-item');
            countdownItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.05)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Parallax effect for floating circles
            document.addEventListener('mousemove', function(e) {
                const circles = document.querySelectorAll('.floating-circle');
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;

                circles.forEach((circle, index) => {
                    const speed = (index + 1) * 0.5;
                    const xPos = (x - 0.5) * speed * 20;
                    const yPos = (y - 0.5) * speed * 20;
                    circle.style.transform = `translate(${xPos}px, ${yPos}px)`;
                });
            });
        });

        // Add typing effect to description
        function typeWriter(element, text, speed = 50) {
            let i = 0;
            element.innerHTML = '';
            element.style.borderRight = '2px solid #ffbb00';

            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                } else {
                    setTimeout(() => {
                        element.style.borderRight = 'none';
                    }, 1000);
                }
            }
            type();
        }

        // Initialize typing effect after page loads
        window.addEventListener('load', function() {
            setTimeout(() => {
                const description = document.querySelector('.description');
                const originalText = description.textContent;
                typeWriter(description, originalText, 30);
            }, 2000);
        });
    </script>
</body>

</html>