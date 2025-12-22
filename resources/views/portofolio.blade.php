<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthur Morgan | Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
</head>
<body>
    <!-- Jumbotron -->
    <section class="bg-cover h-screen content-center text-white wrapper" style="background-image: url('img/rdr-bg.png');">
        <!-- Jumbotron container -->
        <div class="darkJumbotron">
            <div class="headerContainer">
                <div class="textContainer column">
                    <h1 class="text-5xl font-bold">Arthur Morgan</h1>
                    <p class="text-4xl p-3">A seasoned gunslinger from the west with sharp instincts, survival skills, and unwavering resolve.</p>
                </div>
                <div class="imageContainer column">
                    <img class="imageProperty" src="img/arthursquare.png">
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="h-screen wrapper">
        <h1 class="text-4xl font-bold text-center">Hover to see my services below!</h1>
        <div class="serviceContainer">
            <!-- New card test -->
            <div class="card">
                <div class="image-box">
                    <img src="img/arthur-track.jpg" />
                </div>
                <div class="content">
                    <h2 class="font-bold text-2xl">Survival & Wilderness Tracking</h2>
                    <p>Tracked targets and survived hostile environment accross.</p><br>
                    <h2 class="font-bold">Skills:</h2>
                    <p>Tracking · Hunting · Environmental Awareness</p>
                </div>
            </div>
            <div class="card">
                <div class="image-box">
                    <img src="img/arthur-escort2.jpg" />
                </div>
                <div class="content">
                    <h2 class="font-bold text-2xl">Protection & Escort Missions</h2>
                    <p>Secured high-assets and protected key individuals in volatile situations.</p><br>
                    <h2 class="font-bold">Skills:</h2>
                    <p>Situational Awareness · Defense · Decision Making</p>
                </div>
            </div>
            <div class="card">
                <div class="image-box">
                    <img src="img/arthur-fight.jpg" />
                </div>
                <div class="content">
                    <h2 class="font-bold text-2xl">Close-Combat Engagements</h2>
                    <p>Handled direct confrontations with precision and controlled aggresion.</p><br>
                    <h2 class="font-bold">Skills:</h2>
                    <p>Markmanship · Reflexes · Tactical Movement</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="h-screen wrapper serviceBG">
        <h1 class="text-4xl font-bold text-center">Mastered Skills</h1>
        <ul class="skillContainer">
            <li class="font-script">
                <img src="img/icon/bullseye-svgrepo-com.svg">
                Markmanship
            </li>
            <li>
                <img src="img/icon/fist-svgrepo-com.svg">
                Close Combat
            </li>
            <li>
                <img src="img/icon/chess-king-svgrepo-com.svg">
                Tactical Decision-Making
            </li>
            <li>
                <img src="img/icon/pig-svgrepo-com.svg">
                Wilderness Survival
            </li>
            <li>
                <img src="img/icon/footsteps-svgrepo-com.svg">
                Tracking and Hunting
            </li>
            <li>
                <img src="img/icon/drop-weapon-svgrepo-com.svg">
                Stealth and Infiltration
            </li>
            <li>
                <img src="img/icon/minefield-svgrepo-com.svg">
                Situational Awareness
            </li>
            <li>
                <img src="img/icon/mounted-knight-svgrepo-com.svg">
                Resilience & Endurance
            </li>
            <li>
                <img src="img/icon/atom-svgrepo-com.svg">
                Team Coordination
            </li>
            <li>
                <img src="img/icon/cement-shoes-svgrepo-com.svg">
                Leadership Under Pressure
            </li>
        </ul>
    </section>

    <!-- About -->
    <section class="h-screen wrapper aboutBG">
        <h1 class="text-4xl font-bold text-center">About Me</h1>
        <div class="aboutContainer">
            <div class="aboutMeBio">
                <p class="text-2xl p-2">
                    I am Arthur Morgan — a seasoned gunslinger shaped by the harsh realities of a changing frontier.
                    Raised in a world where survival comes before comfort, I learned early that every decision carries weight.<br><br>

                    My experience lies in high-risk operations, wilderness survival, and navigating uncertainty under pressure. I rely on sharp instincts, discipline, and adaptability to overcome unpredictable environments — whether facing open conflict or moving unseen when necessary.
                </p>
            </div>
            <div class="aboutMeImg">
                <img class="aboutImg" src="img/arthur-about.jpg">
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="h-screen wrapper contactBG">
        <h1 class="text-4xl font-bold text-center">Contact</h1>
        <div class="contactContainer">
            <div class="contactText">
                <p class="text-2xl p-2">
                    For inquiries, collaboration or just drinking together - you can find me on social media or send a message here!
                </p>
                <ul class="socialIcon">
                    <li>
                        <a href="javascript:;" class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72" fill="none">
                                <path d="M46.4233 38.6403L47.7279 30.3588H39.6917V24.9759C39.6917 22.7114 40.8137 20.4987 44.4013 20.4987H48.1063V13.4465C45.9486 13.1028 43.7685 12.9168 41.5834 12.8901C34.9692 12.8901 30.651 16.8626 30.651 24.0442V30.3588H23.3193V38.6403H30.651V58.671H39.6917V38.6403H46.4233Z" fill="#111827" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"
                        class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72" fill="none">
                                <path d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z" fill="#111827" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72" fill="none">
                            <path d="M40.7568 32.1716L59.3704 11H54.9596L38.7974 29.383L25.8887 11H11L30.5205 38.7983L11 61H15.4111L32.4788 41.5869L46.1113 61H61L40.7557 32.1716H40.7568ZM34.7152 39.0433L32.7374 36.2752L17.0005 14.2492H23.7756L36.4755 32.0249L38.4533 34.7929L54.9617 57.8986H48.1865L34.7152 39.0443V39.0433Z" fill="#111827" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contactForm">

            </div>
        </div>
    </section>

</body>
</html> 