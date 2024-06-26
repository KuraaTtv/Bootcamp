<?php
 session_start();
?>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Bootcamp</title>
</head>
<body>
<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 uppercase">
        create your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 max-w">
            Or
            <a href="Login.php" class="font-medium text-blue-600 hover:text-blue-500">
                login here
            </a>
        </p>
    </div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="../includes/Sign-sys.php" method="POST">
               
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Enter your email address">    
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Enter your password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"">
                            <?php
                                // session_start();
                                if(!empty($_SESSION["error"]))
                                {
                                    echo '<p class="text-red-600 font-bold ml-2">' . $_SESSION['error'] . '</p>';
                                    unset($_SESSION['error']);
                                }
                            ?>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                    Confirmation Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="repassword" type="password" autocomplete="current-password" 
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Enter your password">
                            <?php
                                if(!empty($_SESSION["conf"]))
                                {
                                    echo '<p class="text-red-600 font-bold ml-2">' . $_SESSION['conf'] . '</p>';
                                    unset($_SESSION['conf']);
                                }
                            ?>
                    </div>
                </div>
                

                <div>
                    <label for="Role" class="block text-sm font-medium text-gray-700">
                    Role
                    </label>
                    <select id="countries" name="Role" class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm text-black">
                        <option selected>Choose Your Role</option>
                        <option value="Candidate">Candidate</option><!--Candidat-->
                        <option value="Instructor">Instructor</option><!--Formateur-->
                         <option value="Hire">Hire</option><!--Recruter-->
                    </select>
                    <?php
                                if(!empty($_SESSION["role"]))
                                {
                                    echo '<p class="text-red-600 font-bold ml-2">' . $_SESSION['role'] . '</p>';
                                    unset($_SESSION['role']);
                                }
                            ?>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" name="btnsubmit" onclick="succesMessage()"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Sign up
                    </button>
                </div>
            </form>
            <div class="mt-6">

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-100 text-gray-500">
                            Or Sign up with
                        </span>
                    </div>
                </div>

                <div class="mt-6">
                    <div>
                        <a href="#"
                            class="group relative w-full flex justify-center py-2 px-4 border border-black text-sm font-medium rounded-md text-white bg-white-600 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <img class="h-6 w-6" src="https://www.svgrepo.com/show/452216/google.svg"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /*function succesMessage()
{
    Swal.fire({
  title: "Login Successfully!",
  text: "You clicked the button!",
  icon: "success",
  timer: 1500
});
}*/
</script>
</body>
</html>