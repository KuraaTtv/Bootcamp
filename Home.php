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
<nav class="bg-white p-4 shadow-xl fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
                <div class="flex">
            <span><img src="img/letter-b.png" class="text-2xl"/></span><h1 class="font-bold uppercase mr-3 text-2xl ">ootcamp</h1>
                </div>
        <!-- Navbar links -->
        <div class="hidden md:block">
            <a href="#" class="text-black ml-4">Home</a>
            <a href="#About" class="text-black ml-4">About</a>
            <a href="#Service" class="text-black ml-4">Services</a>
            <a href="#Contact" class="text-black ml-4">Contact</a>
            <a href="Auth/Login.php" class="ml-4 btn bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login</a>
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
    <a href="#About" class="block py-2 px-4">About</a>
    <a href="#Service" class="block py-2 px-4">Services</a>
    <a href="#Contact" class="block py-2 px-4">Contact</a>
    <a href="#" class="block py-2 px-4 btn bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login</a>
</div>

<!-- Hero Section -->
<div class="relative overflow-hidden bg-cover bg-no-repeat" style="
        background-position: 50%;
        background-image: url('img/pexels-andrea-piacquadio-840996.jpg');
        height: 500px;
      ">
    <div
      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mt-2 mb-16 text-3xl font-bold tracking-tight md:text-6xl xl:text-4xl uppercase">
          Welcome to our Bootcamp <br /><span class="uppercase" >Learn the latest technologies and launch your career</span>
          </h1>
          <!-- <button type="button"
            class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200"
            data-te-ripple-init data-te-ripple-color="light">
            Sign Up
          </button> -->
          <a href="Auth/Signup.php"class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200">
          Sign Up
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero end -->
<!-- About start -->
<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6" >
  <!-- Section: Design Block -->
  <section class="mb-32 text-center" id="About">
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
             <!-- Count Candidateur -->
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
<!-- About end -->

<!-- Service Section start -->
<h2 class="mb-20 text-3xl font-bold uppercase text-center" id="Service">Service of Bootcamp</h2>
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
                        Data Management
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                        Data management is all about helping you organize, store, and handle your information effectively, 
                        ensuring it's always accessible, accurate, and secure. As you navigate through our web app, you'll discover 
                        tools and features designed to streamline these processes, 
                        empowering you to make informed decisions and safeguard your sensitive data with ease
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
                        style="color:transparent" src="img/Checklist-pana.png"/>
                </div>
            </div>
        </div>
    </div>



    <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
            <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500">
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
                        Skillful IT Candidate Management
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                        Our platform simplifies the process of managing candidates' IT skills, ensuring that you can easily track, 
                        evaluate, and utilize their technical proficiencies. With our intuitive tools, you'll have a comprehensive overview of candidates' 
                        capabilities,empowering you to make informed hiring decisions and build a skilled workforce tailored to your organization's needs
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
                <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                    <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                        class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                        style="color:transparent" src="img/Mention-bro.png">
                </div>
            </div>
        </div>
    </div>



    <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
            <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl  bg-blue-500">
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
                        Explore Job Opportunities
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                        Here, you'll find a wide array of exciting career opportunities waiting to be discovered. 
                        Whether you're seeking your next big challenge or aiming to advance your career, 
                        our platform offers a diverse range of roles across various industries.
                         Begin your journey now and uncover the perfect opportunity to unleash your potential.
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
                    <img loading="lazy" width="646" height="485"
                        class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                        style="color:transparent"
                        src="img/Shared workspace-pana.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section end -->

<!-- Contact section start -->
<div class="" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 text-center">
        <h2 class="text-4xl font-bold dark:text-black">Contact</h2>
        <p class="pt-6 pb-6 text-base max-w-2xl text-center m-auto dark:text-black">
            Want to contact us? Choose an
            option below and well be happy to show you how we can transform companys web experience.
        </p>
    </div>
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 grid md:grid-cols-2 lg:grid-cols-2 gap-y-8 md:gap-x-8 md:gap-y-8 lg:gap-x-8 lg:gap-y-16">
        <div>
            <h2 class="text-lg font-bold dark:text-black">Contact Us</h2>
            <p class="max-w-sm mt-4 mb-4 dark:text-black">Have something to say? We are here to help. Fill up the
                form or send email or call phone.</p>
            <div class="flex items-center mt-8 space-x-2 text-dark-600 dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z">
                    </path>
                </svg><span>14th avenue glory road</span>
            </div>
            <div class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                    </path>
                </svg>
                <a href="mailto:hello@company.com">hello@company.com</a>
            </div>
            <div class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                    </path>
                </svg>
                <a href="tel:11111111111">+51 11111111111</a>
            </div>
        </div>
        <div>
            <form>
                <input type="checkbox" id="" class="hidden" style="display:none" name="botcheck">
                <div class="mb-5">
                    <input type="text" placeholder="Full Name" autocomplete="false"
                        class="w-full px-4 py-3 border-2 placeholder:text-black-800 dark:text-black rounded-md outline-none dark:placeholder:text-black dark:bg-white focus:ring-4 border-black focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                        name="name">
                </div>
                <div class="mb-5">
                    <label for="email_address" class="sr-only">Email Address</label>
                    <input id="email_address" type="email" placeholder="Email Address" autocomplete="false"
                        class="w-full px-4 py-3 border-2 placeholder:text-black-800 dark:text-black rounded-md outline-none dark:placeholder:text-black dark:bg-white focus:ring-4 border-black focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                        name="email">
                </div>
                <div class="mb-3">
                    <textarea placeholder="Your Message"
                        class="w-full px-4 py-3 border-2 placeholder:text-black-800 dark:text-black rounded-md outline-none dark:placeholder:text-black dark:bg-white focus:ring-4 border-black focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                        name="message">
                    </textarea>
                </div>
                
                <button type="submit"
                    class="w-full py-4 font-semibold text-white transition-colors bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-offset-2 focus:ring focus:ring-gray-200 px-7 dark:bg-blue-500 dark:text-white ">Send
                    Message
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Contact section end -->

<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>