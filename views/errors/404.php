<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Not Found - <?php print(config('APP_NAME')) ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php print(config('APP_AUTHOR')) ?>">
    <link rel="shortcut icon" href="<?php print(asset('images/favicon.png')); ?>">

    <link href="<?php print(asset('css/error-pages.css')) ?>" rel="stylesheet">
</head>

<body>

    <section class="bg-white dark:bg-gray-900 flex h-screen">
        <div class="py-8 px-4 max-w-screen-xl lg:py-16 lg:px-6 m-auto">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500"><?= $error->code ?></h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Page Not Found.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400"><?= $error->message ?> You'll find lots to explore on the home page.</p>
                <a href="<?php print(route('/')) ?>" class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>
            </div>
        </div>
    </section>

</body>

</html>