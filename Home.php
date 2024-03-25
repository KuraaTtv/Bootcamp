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
        <!-- Logo -->
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

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>



</body>
</html>
 <!-- <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex">
            <span><img src="img/letter-b.png" class="text-2xl"/></span><h1 class="font-bold uppercase mr-3 text-2xl ">ootcamp</h1>
       </div> -->