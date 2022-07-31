<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="text-gray-700 bg-white antialiased" style="font-family: 'Roboto', sans-serif">

<!--Nav-->
<nav class="flex items-center justify-between flex-wrap p-6">

    <div class="flex items-center flex-shrink-0 text-dark md:text-right mr-6">
        <span class="font-semibold text-xl tracking-tight hover:text-green-800"><a href="#">Gym Fitness</a></span>
    </div>

    <div class="block lg:hidden">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>

    <div id="nav-content" class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0 md:text-right">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-1 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Home</a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">About</a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Contact</a>
        </div>
    </div>

</nav>

<!--Hero
style="background: linear-gradient(90deg, #2b4554 0%, #767ba2 100%)"
-->
<div class="py-20 bg-cover bg-no-repeat bg-fixed" style="background-image: url(https://media.vanityfair.com/photos/5ce426151c0b0773cacd1121/master/pass/star-wars-feature-vf-2019-summer-embed-05.jpg)">
    <div class="container m-auto text-center px-6 opacity-100">
        <h2 class="text-4xl font-bold mb-2 text-white">Echo Base...I've got something!</h2>
        <h3 class="text-2xl mb-8 text-gray-200">Not much, but it could be a life form. This is Rouge Two. this is Rouge Two. Captain Solo, so you copy?</h3>
        <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider hover:border-transparent hover:text-blue-500 hover:bg-gray-800">Commander Skywalker, do you copy?</button>
    </div>
</div>


<!-- Features -->
<section class="container mx-auto px-6 p-10">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Artoo!</h2>
    <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2 pr-10">
            <h4 class="text-3xl text-gray-800 font-bold mb-3">Vortex</h4>
            <p class="text-gray-600 mb-8">Their primary target will be the power generators. Prepare to open the shield. Sir, Rebel ships are coming into our sector. Good. Our first catch of the day. Stand by, ion control....Fire! The first transport is away.</p>
        </div>
        <div class="w-full md:w-1/2">
            <img class="rounded-lg" src="https://pbs.twimg.com/media/CR45LOXVEAADG5E.jpg" alt="Vortex" />
        </div>
    </div>
    <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2">
            <img class="rounded-lg" src="https://www.thesun.co.uk/wp-content/uploads/2019/06/SWJFO-EAPlay-08-1.jpg" alt="use the force" />
        </div>
        <div class="w-full md:w-1/2 pl-10">
            <h4 class="text-3xl text-gray-800 font-bold mb-3">Use the Force!</h4>
            <p class="text-gray-600 mb-8">We'll never get it out now. So certain are you. Always with you it cannot be done. Hear you nothing that I say? Master, moving stones around is one thing. This is totally different. No! No different!</p>
        </div>
    </div>
    <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2 pr-10">
            <h4 class="text-3xl text-gray-800 font-bold mb-3">Life creates it</h4>
            <p class="text-gray-600 mb-8">There is no try. I can't. It's too big. Size matters not. Look at me. Judge me by my size, do you? Hm? Mmmm. And well you should not. For my ally in the Force. And a powerful ally it is.</p>
        </div>
        <div class="w-full md:w-1/2">
            <img class="rounded-lg" src="{{ asset('img/cover-gym.jpg') }}" alt="Syncing" />
        </div>
    </div>
</section>

<hr>
<!-- Section 5 -->
<section class="flex items-center justify-center py-20 bg-white min-w-screen">
    <div class="px-16 bg-white">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">Meet Our Trainers</p>


            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                See what others are saying</h2>
            <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

            <!-- Trainer Card Wrapper -->
            <div class="flex flex-wrap">
                <!-- Card 1 -->
                <div
                    class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
                    data-aos="flip-right"
                >
                    <div class="px-6">
                        <img
                            alt="..."
                            src="https://images.unsplash.com/photo-1597347343908-2937e7dcc560?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                            class="shadow-lg rounded max-w-full mx-auto"
                            style="max-width: 350px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Mr Rogers</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Neighborhood Watchman
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
                    data-aos="flip-right"
                >
                    <div class="px-6">
                        <img
                            alt="..."
                            src="https://images.unsplash.com/photo-1594381898411-846e7d193883?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                            class="shadow-lg rounded max-w-full mx-auto"
                            style="max-width: 350px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Strawberry Shortcake</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Cupcake Smasher
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
                    data-aos="flip-right"
                >
                    <div class="px-6">
                        <img
                            alt="..."
                            src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                            class="shadow-lg rounded max-w-full mx-auto"
                            style="max-width: 350px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ronald McDonald</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Double Whoopass With Cheese
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Call to Action-->
<section style="background-color: #667eea">
    <div class="container mx-auto px-6 text-center py-20">
        <h2 class="mb-6 text-4xl font-bold text-center text-white">Headquarters personnel</h2>
        <h3 class="my-4 text-2xl text-white">Report to command center. Take it easy.</h3>
        <button class="bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider hover:border-red hover:text-white hover:bg-red-600">Report</button>
    </div>
</section>


<!--Footer-->
<footer class="bg-gray-100">
    <div class="container mx-auto px-6 pt-10 pb-6">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class="uppercase mb-6 font-bold">Links</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">I'll return</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">I promise</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Reckless is he</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class="uppercase mb-6 font-bold">Legal</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Emperor's Terms</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Pulverized?</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class="uppercase mb-6 font-bold">Social</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Corellia</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Bilbringi</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Fondor</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class="uppercase mb-6 font-bold">Through the Force</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Journey to the Emperor</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Lord Vader ship approaching?</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">X-wing class</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
