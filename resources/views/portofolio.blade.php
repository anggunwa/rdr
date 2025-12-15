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

    <!-- Job -->
    <section class="h-screen darkBackground wrapper">
        <h1 class="text-4xl">See my project below!</h1>
        <div class="jobContainer grid grid-cols-3 gap-10">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="img/arthur-track.jpg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Survival & Wilderness Tracking</div>
                    <p>Tracked targets and survived hostile environment accross. </p>
                    <h3 class="font-bold pt-3">Skills:</h2>
                    <p>Tracking · Hunting · Environmental Awareness</p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="img/arthur-escort2.jpg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Protection & Escort Missions</div>
                    <p>Secured high-assets and protected key individuals in volatile situations.</p>
                    <h3 class="font-bold pt-3">Skills:</h2>
                    <p>Situational Awareness · Defense · Decision Making</p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="img/arthur-fight.jpg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Close-Combat Engagements</div>
                    <p>Handled direct confrontations with precision and controlled aggresion.</p>
                    <h3 class="font-bold pt-3">Skills:</h2>
                    <p>Markmanship · Reflexes · Tactical Movement</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>