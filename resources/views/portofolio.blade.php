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
    <section class="h-screen darkBackground wrapper">
        <h1 class="text-4xl">Hover to see my services below!</h1>
        <div class="jobContainer grid grid-cols-3 gap-10">
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

</body>
</html>