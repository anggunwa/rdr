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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <p class="text-2xl">
                    For inquiries, collaboration or just drinking together - you can find me on social media or send a message here!
                </p>
                <ul class="socialIcon">
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook fa-2xl transition duration-300 hover:-translate-y-1 hover:scale-105"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-instagram fa-2xl transition duration-300 hover:-translate-y-1 hover:scale-105"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter fa-2xl transition duration-300 hover:-translate-y-1 hover:scale-105"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contactForm">
                <form action="#" class="space-y-8">
                    <div>
                        <label for="name" class="contactLabel">Name</label>
                        <input type="name" id="name" class="contactInput border" placeholder="Let us know your name" required>
                    </div>
                    <div>
                        <label for="email" class="contactLabel">Email</label>
                        <input type="email" id="email" class="contactInput border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know your email" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="contactLabel">Your message</label>
                        <textarea id="message" rows="6" class="contactInput border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="formButton font-medium">Send message</button>
                </form>

            </div>
        </div>
    </section>

</body>
</html> 