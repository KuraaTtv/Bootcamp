<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="build/tailwind.css">
  <title>Bootcamp</title>
</head>
<body>
<nav class="bg-white-800 p-4 shadow-xl">
    <div class="container mx-auto flex justify-between items-center">
                <div class="flex">
            <span><img src="img/letter-b.png" class="text-2xl"/></span><h1 class="font-bold uppercase mr-3 text-2xl ">ootcamp</h1>
                </div>
        <!-- Navbar links -->
        <div class="hidden md:block">
            <a href="#" class="text-black ml-4">Home</a>
            <a href="#" class="text-black ml-4">About</a>
            <a href="#" class="text-black ml-4">Services</a>
            <a href="#" class="text-black ml-4">Contact</a>
            <a href="#" class="ml-4 btn bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login</a>
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="mobile-menu-toggle" class="text-black focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
<!-- Mobile menu -->
<div id="mobile-menu" class="md:hidden hidden shadow-xl text-black">
    <a href="#" class="block py-2 px-4">Home</a>
    <a href="#" class="block py-2 px-4">About</a>
    <a href="#" class="block py-2 px-4">Services</a>
    <a href="#" class="block py-2 px-4">Contact</a>
    <a href="#" class="block py-2 px-4 btn bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login</a>
</div>

<!-- Hero Section -->
<div class="relative overflow-hidden bg-cover bg-no-repeat" style="
        background-position: 50%;
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
        height: 500px;
      ">
    <div
      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mt-2 mb-16 text-3xl font-bold tracking-tight md:text-6xl xl:text-4xl uppercase">
          Welcome to our Bootcamp <br /><span class="uppercase" >Learn the latest technologies and launch your career</span>
          </h1>
          <button type="button"
            class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200"
            data-te-ripple-init data-te-ripple-color="light">
            Sign Up
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero end -->
<!-- About start -->
<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center">
    <h2 class="mb-20 text-3xl font-bold uppercase">About the Bootcamp</h2>

    <div class="grid lg:grid-cols-3 lg:gap-x-12">
      <div class="mb-12 lg:mb-0">
        <div
          class="block h-full rounded-lg bg-blue-100">
          <div class="flex justify-center">
            <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-7 w-7">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
              </svg>
              <!-- <img src="img/life-skills.png"/> -->
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-semibold">Discover the skills</h5>
            <p>
            Embarking on this coding bootcamp, I aim to quickly grasp essential programming skills, 
            diving into both front-end and back-end development.
             My goal is to emerge ready to tackle real-world tech challenges, 
             laying a strong foundation for my career in software development.
            </p>
          </div>
        </div>
      </div>

      <div class="mb-12 lg:mb-0">
        <div
          class="block h-full rounded-lg bg-blue-100">
          <div class="flex justify-center">
            <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-7 w-7">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
              </svg>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-semibold">Check the job offers</h5>
            <p>
            Upon completing the intensive bootcamp, the crucial next step is to diligently check the job offers, 
            a phase that is as exciting as it is pivotal for kickstarting my career in tech
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <div
          class="block h-full rounded-lg bg-blue-100">
          <div class="flex justify-center">
            <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-7 w-7">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
              </svg>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-semibold">Take assessments</h5>
            <p>
            Participating in the learning process involves taking assessments and receiving feedback from the trainers.
             These assessments serve as crucial checkpoints,
             allowing learners to gauge their progress and identify areas for improvemen
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->
<!-- About end -->

<!-- Service Section start -->
<div class="relative overflow-hidden bg-gray-900 pt-16 pb-32 space-y-24">
    <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
            <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">

                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                                </path>
                            </svg>
                        </span>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Natural Language Processing (NLP):
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            The AI product utilizes advanced NLP algorithms to understand and interpret human language,
                            enabling it to accurately process and analyze text-based inputs.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-blue-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-white-600 hover:bg-blue-700 hover:ring-white-700"
                                href="/login">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                    <img loading="lazy" width="647" height="486"
                        class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                        style="color:transparent" src="https://images.unsplash.com/photo-1569144157591-c60f3f82f137">
                </div>
            </div>
        </div>
    </div>



    <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
            <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Sentiment Analysis:
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            The product has built-in sentiment analysis capabilities, allowing it to determine the
                            sentiment (positive, negative, or neutral) expressed in text or customer feedback.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-pink-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-pink-600 hover:bg-pink-700 hover:ring-pink-700"
                                href="/login">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                    <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                        class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                        style="color:transparent" src="https://images.unsplash.com/photo-1599134842279-fe807d23316e">
                </div>
            </div>
        </div>
    </div>



    <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
            <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Natural Language Generation (NLG):
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            The AI product can generate human-like written content, summaries, or reports based on
                            structured data or analysis results.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-pink-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-pink-600 hover:bg-pink-700 hover:ring-pink-700"
                                href="/login">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                    <img loading="lazy" width="646" height="485"
                        class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                        style="color:transparent"
                        src="https://images.unsplash.com/photo-1483478550801-ceba5fe50e8e">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section end -->

<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>