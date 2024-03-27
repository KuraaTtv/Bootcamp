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
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-semibold">Discover the skills</h5>
            <p>
              Laudantium totam quas cumque pariatur at doloremque hic quos
              quia eius. Reiciendis optio minus mollitia rerum labore
              facilis inventore voluptatem ad, quae quia sint.
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
            <h5 class="mb-4 text-lg font-semibold">Safe and solid</h5>
            <p>
              Eum nostrum fugit numquam, voluptates veniam neque quibusdam
              ullam aspernatur odio soluta, quisquam dolore animi mollitia a
              omnis praesentium, expedita nobis!
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
            <h5 class="mb-4 text-lg font-semibold">Extremely fast</h5>
            <p>
              Enim cupiditate, minus nulla dolor cumque iure eveniet facere
              ullam beatae hic voluptatibus dolores exercitationem? Facilis
              debitis aspernatur amet nisi?
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

<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>