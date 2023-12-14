<!DOCTYPE html>
<html lang="pt-br" class="h-full">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!---------======== CSS ========--------->
    <script src="https://cdn.tailwindcss.com"></script>

    <!---------======== BoxIcons CSS ========--------->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Error 404</title>
</head>
<body class="h-full">
    <main class="grid min-h-full place-items-center bg-zinc-600 px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-3xl font-semibold text-indigo-500">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
            <p class="mt-6 text-base leading-7 text-zinc-100">Sorry, we couldn’t find the page you’re looking for.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="<?php echo HOME_URI; ?>" class="bg-indigo-500 hover:bg-indigo-400 hover:shadow-lg hover:shadow-black duration-200 font-semibold rounded-lg px-3.5 py-2.5">Go back home</a>
              <a href="#" class="text-sm font-semibold text-indigo-300 hover:text-indigo-100">Contact support <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </main>
</body>
</html>