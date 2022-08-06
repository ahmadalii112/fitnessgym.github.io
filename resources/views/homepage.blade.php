<!doctype html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/init-alpine.js')}}" defer></script>
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    <title>{{env('APP_NAME')}}</title>
</head>

<body class="text-gray-700 bg-white antialiased dark:bg-gray-800" style="font-family: 'Roboto', sans-serif">

<!--Nav-->
<nav class="flex items-center justify-between flex-wrap p-6 bg-white shadow-md dark:bg-gray-800">

    <div class="flex items-center flex-shrink-0 text-dark md:text-right mr-6">
        <span class="font-semibold text-xl tracking-tight hover:text-green-800 dark:hover:text-gray-200 dark:text-gray-100"><a href="#">Fitness Time</a></span>
    </div>
    <div class="flex items-center flex-shrink-0 text-dark md:text-right mr-6">
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                    <template x-if="!dark">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                            </path>
                        </svg>
                    </template>

                </button>
            </li>
            <!-- Mobile menu -->
            <li class="relative">
                <a href="#responsive-header" class="block mt-1 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4 dark:hover:text-gray-200 dark:text-gray-100">Home</a>
            </li>
            <li class="relative">
                <a href="#about"
                   class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4 dark:hover:text-gray-200 dark:text-gray-100">About</a>
            </li>
            <li class="relative">
                <a href="#contact_us"
                   class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4 dark:hover:text-gray-200 dark:text-gray-100">Contact</a>
            </li>

        </ul>
    </div>

</nav>

<div class="py-20 bg-cover bg-no-repeat bg-fixed"
     id="home"
{{--     style="background-image: url(https://media.vanityfair.com/photos/5ce426151c0b0773cacd1121/master/pass/star-wars-feature-vf-2019-summer-embed-05.jpg)">--}}
     style="background-image: url({{asset('img/kyle-johnson-Yi-4X9ZJU6Y-unsplash.jpg')}})">
    <div class="container m-auto text-center px-6 opacity-100" data-aos="fade-in">
        <h2 class="text-4xl font-bold mb-2 text-white">Echo Base...I've got something!</h2>
        <h3 class="text-2xl mb-8 text-gray-200">Not much, but it could be a life form. This is Rouge Two. this is Rouge
            Two. Captain Solo, so you copy?</h3>
        <button
            class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider hover:border-transparent hover:text-blue-500 hover:bg-gray-800">
            Are you Ready ?
        </button>
    </div>
</div>

<!-- Features -->
<section class="container mx-auto px-6 p-10">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-8 dark:text-gray-200">Artoo!</h2>
    <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2 pr-10" data-aos="fade-right">
            <h4 class="text-3xl text-gray-800 font-bold mb-3 dark:text-gray-200">Vortex</h4>
            <p class="text-gray-600 mb-8 text-justify dark:text-gray-50">Their primary target will be the power generators. Prepare to open the shield.
                Sir, Rebel ships are coming into our sector. Good. Our first catch of the day. Stand by, ion
                control....Fire! The first transport is away.</p>
        </div>
        <div class="w-full md:w-1/2" data-aos="fade-left">
            <img class="rounded-lg" src="{{ asset('img/bicep-curls.png')}}" alt="Vortex"/>
        </div>
    </div>
    <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2" data-aos="fade-right">
            <img class="rounded-lg" src="{{ asset('img/gym-1.jpg') }}" alt="use the force"/>
        </div>
        <div class="w-full md:w-1/2 pl-10" data-aos="fade-left">
            <h4 class="text-3xl text-gray-800 font-bold mb-3 dark:text-gray-200">Use the Force!</h4>
            <p class="text-gray-600 mb-8 text-justify dark:text-gray-50">We'll never get it out now. So certain are you. Always with you it cannot be
                done. Hear you nothing that I say? Master, moving stones around is one thing. This is totally different.
                No! No different!</p>
        </div>
    </div>
    <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2 pr-10" data-aos="fade-right">
            <h4 class="text-3xl text-gray-800 font-bold mb-3 dark:text-gray-200">Life creates it</h4>
            <p class="text-gray-600 text-justify mb-8 dark:text-gray-50">There is no try. I can't. It's too big. Size matters not. Look at me. Judge me
                by my size, do you? Hm? Mmmm. And well you should not. For my ally in the Force. And a powerful ally it
                is.</p>
        </div>
        <div class="w-full md:w-1/2" data-aos="fade-left">
            <img class="rounded-lg" src="{{ asset('img/cover-gym.jpg') }}" alt="Syncing"/>
        </div>
    </div>
</section>

<hr class="dark:bg-gray-800">
<!-- Section 5 -->
<section class="flex items-center justify-center py-20 bg-white min-w-screen dark:bg-gray-800">
    <div class="px-16 bg-white dark:bg-gray-800">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 dark:text-purple-500 uppercase lg:justify-center lg:items-center">
                Meet Our Trainers</p>


            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center dark:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
                     viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                See what others are saying
            </h2>
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
                            <h5 class="text-xl font-bold dark:text-gray-200">Mr Rogers</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold dark:text-gray-50">
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
                            <h5 class="text-xl font-bold dark:text-gray-200">Strawberry Shortcake</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold dark:text-gray-50">
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
                            <h5 class="text-xl font-bold dark:text-gray-200">Ronald McDonald</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold dark:text-gray-50">
                                Double Whoopass With Cheese
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section
    id="contact_us"
    class="bg-cover bg-no-repeat bg-fixed"
         style="background-image: url({{ asset('img/gym.jpg') }})"
{{--    style="background-color: #667eea"--}}
    >
    <div class="container mx-auto px-6 text-center py-20">
        <h2 class="mb-6 text-4xl font-bold text-center text-white">CONTACT US</h2>
        <p class="my-4 text-2xl text-white">Contact us to ask any questions, aquire a membership, talk to our trainers
            or anything else</p>
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
                    data-aos="fade-up-right"
                >
                    <div class="flex-auto p-5 lg:p-10 text-gray-700 bg-white rounded-lg shadow-xl">
                        <h4 class="text-3xl text-gray-800 font-bold mb-3">Want to work with us?</h4>
                        <p class="text-gray-600 mb-8">
                            Complete this form and we will get back to you in 24 hours.
                        </p>
                        <div class="relative w-full mb-3 mt-8">
                            <label
                                class="block uppercase text-xs font-bold mb-2"
                                for="full-name"
                            >Full Name</label><input
                                type="text"
                                class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                placeholder="Full Name"
                                style="transition: all 0.15s ease 0s"
                            />
                        </div>
                        <div class="relative w-full mb-3">
                            <label
                                class="block uppercase text-xs font-bold mb-2"
                                for="email"
                            >Email</label
                            ><input
                                type="email"
                                class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                placeholder="Email"
                                style="transition: all 0.15s ease 0s"
                            />
                        </div>
                        <div class="relative w-full mb-3">
                            <label
                                class="block uppercase text-xs font-bold mb-2"
                                for="message"
                            >Message</label
                            ><textarea
                                rows="4"
                                cols="80"
                                class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                placeholder="Type a message..."
                            ></textarea>
                        </div>
                        <div class="text-center mt-6">
                            <button
                                class="bg-black text-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider hover:border-red hover:text-white hover:bg-green-600">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Footer-->
<footer class="bg-gray-100 dark:bg-gray-800" id="about">
    <div class="container mx-auto px-6 pt-10 pb-6">
        <div class="flex justify-between">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.4205824094834!2d74.28488911510334!3d31.430086381399637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901b7ad8da7af%3A0x8e04e7bce11e4d64!2sFitness%20time%20gym!5e0!3m2!1sen!2s!4v1659797612042!5m2!1sen!2s" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class="uppercase mb-6 font-bold dark:text-gray-200">Follow Us</h5>
                <ul class="mb-4">
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500 dark:text-gray-50 dark:hover:text-orange-500"><i class="fa-brands fa-square-facebook mr-1"></i>Facebook</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500 dark:text-gray-50 dark:hover:text-orange-500"><i class="fa-brands fa-square-instagram mr-1"></i>Instagram</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="hover:underline text-gray-600 hover:text-orange-500 dark:text-gray-50 dark:hover:text-orange-500"><i class="fa-brands fa-tiktok mr-1"></i>Tiktok</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle('hidden')
        document.getElementById(collapseID).classList.toggle('block')
    }

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    AOS.init({
        delay: 200,
        duration: 1200,
        once: false,
    })
</script>
@livewireScripts

</body>
</html>
