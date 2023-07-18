<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php print($errtype . ' - ' . config('APP_NAME')) ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php print(config('APP_AUTHOR')) ?>">
    <link rel="shortcut icon" href="<?php print(asset('images/favicon.png')); ?>">

    <link href="<?php print(asset('css/error-pages.css')); ?>" rel="stylesheet">
</head>

<body>


    <section class="bg-white dark:bg-gray-900 flex h-screen">
        <div class="py-8 px-4 max-w-screen-xl w-full lg:py-16 lg:px-6 m-auto">
            <div class="mx-auto max-w-screen-sm w-full">

                <div class="flex">
                    <h1 class="mb-4 text-3xl tracking-tight font-extrabold md:text-4xl text-primary-600 dark:text-primary-500 mr-4">500</h1>
                    <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">
                        <?php print($errtype) ?>
                    </p>
                </div>

                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Fix the below error in order to run the <?php print(config('APP_NAME')) ?>.</p>

                <?php

                switch ($errno) {
                    case E_ERROR:
                        print('
                            <!-- Critical -->
                            <div class="p-4 my-4 text-red-900 bg-red-100 border border-red-200 rounded-md" style="overflow-x:auto;">
                                <div class="flex justify-between flex-wrap">
                                    <div class="w-0 flex-1 flex">
                                        <div class="mr-3 pt-1"> <svg width="26" height="26" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                <path d="M13.6086 3.247l8.1916 15.8c.0999.2.1998.5.1998.8 0 1-.7992 1.8-1.7982 1.8H3.7188c-.2997 0-.4995-.1-.7992-.2-.7992-.5-1.1988-1.5-.6993-2.4 5.3067-10.1184 8.0706-15.385 8.2915-15.8.3314-.6222.8681-.8886 1.4817-.897.6135-.008 1.273.2807 1.6151.897zM12 18.95c.718 0 1.3-.582 1.3-1.3 0-.718-.582-1.3-1.3-1.3-.718 0-1.3.582-1.3 1.3 0 .718.582 1.3 1.3 1.3zm-.8895-10.203v5.4c0 .5.4.9.9.9s.9-.4.9-.9v-5.3c0-.5-.4-.9-.9-.9s-.9.4-.9.8z">
                                                </path>
                                            </svg> </div>
                                        <div>
                                            <h4 class="text-md leading-6 font-medium">' . $errstr . '</h4>
                                            <p class="text-sm">line ' . $errline . ' : of the file ' . $errfile . '</p>
                                            <p class="text-xs">PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>
                                            <div class="flex mt-3">
                                                <a href="' . route($requestURI) . '" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">Reload the page </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ');
                        break;

                    case E_WARNING:
                        print('
                                <!-- Warning -->
                                <div class="p-4 my-4 text-yellow-900 bg-yellow-100 border border-yellow-200 rounded-md" style="overflow-x:auto;">
                                    <div class="flex justify-between flex-wrap">
                                        <div class="w-0 flex-1 flex">
                                            <div class="mr-3 pt-1"> <svg width="26" height="26" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                    <path d="M13.6086 3.247l8.1916 15.8c.0999.2.1998.5.1998.8 0 1-.7992 1.8-1.7982 1.8H3.7188c-.2997 0-.4995-.1-.7992-.2-.7992-.5-1.1988-1.5-.6993-2.4 5.3067-10.1184 8.0706-15.385 8.2915-15.8.3314-.6222.8681-.8886 1.4817-.897.6135-.008 1.273.2807 1.6151.897zM12 18.95c.718 0 1.3-.582 1.3-1.3 0-.718-.582-1.3-1.3-1.3-.718 0-1.3.582-1.3 1.3 0 .718.582 1.3 1.3 1.3zm-.8895-10.203v5.4c0 .5.4.9.9.9s.9-.4.9-.9v-5.3c0-.5-.4-.9-.9-.9s-.9.4-.9.8z">
                                                    </path>
                                                </svg> </div>
                                            <div>
                                                <h4 class="text-md leading-6 font-medium">' . $errstr . '</h4>
                                                <p class="text-sm">line ' . $errline . ' : of the file ' . $errfile . '</p>
                                                <p class="text-xs">PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>
                                                <div class="flex mt-3">
                                                    <a href="' . route($requestURI) . '" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-yellow-500 text-base font-medium text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 sm:w-auto sm:text-sm">Reload the page </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ');
                        break;

                    case E_NOTICE:
                        print('
                            <!-- Notice -->
                            <div class="p-4 my-4 text-blue-900 bg-blue-100 border border-blue-200 rounded-md mt-6" style="overflow-x:auto;">
                                <div class="flex justify-between flex-wrap">
                                    <div class="w-0 flex-1 flex">
                                        <div class="mr-3 pt-1"> <svg width="26" height="26" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                <path d="M14.1667 17h-3.3334c-.5 0-.8333-.3146-.8333-.7865 0-.472.3333-.7865.8333-.7865H11.5c.0833 0 .1667-.0787.1667-.1573v-3.5394c0-.0786-.0834-.1573-.1667-.1573h-.6667c-.5 0-.8333-.3146-.8333-.7865S10.3333 10 10.8333 10h.8334c.9166 0 1.6666.7079 1.6666 1.573v3.7753c0 .0787.0834.1573.1667.1573h.6667c.5 0 .8333.3146.8333.7865 0 .472-.3333.7079-.8333.7079zM12.3 6c.6933 0 1.3.6067 1.3 1.3s-.52 1.3-1.3 1.3S11 7.9933 11 7.3 11.6067 6 12.3 6zM12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2">
                                                </path>
                                            </svg> </div>
                                        <div>
                                            <h4 class="text-md leading-6 font-medium">' . $errstr . '</h4>
                                            <p class="text-sm">line ' . $errline . ' : of the file ' . $errfile . '</p>
                                            <p class="text-xs">PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>
                                            <div class="flex mt-3">
                                                <a href="' . route($requestURI) . '" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-700 text-base font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm">Reload the page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ');
                        break;

                    default:
                        print('
                            <!-- Notice -->
                            <div class="p-4 my-4 text-blue-900 bg-blue-100 border border-blue-200 rounded-md mt-6" style="overflow-x: auto;">
                                <div class="flex justify-between flex-wrap">
                                    <div class="w-0 flex-1 flex">
                                        <div class="mr-3 pt-1"> <svg width="26" height="26" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                <path d="M14.1667 17h-3.3334c-.5 0-.8333-.3146-.8333-.7865 0-.472.3333-.7865.8333-.7865H11.5c.0833 0 .1667-.0787.1667-.1573v-3.5394c0-.0786-.0834-.1573-.1667-.1573h-.6667c-.5 0-.8333-.3146-.8333-.7865S10.3333 10 10.8333 10h.8334c.9166 0 1.6666.7079 1.6666 1.573v3.7753c0 .0787.0834.1573.1667.1573h.6667c.5 0 .8333.3146.8333.7865 0 .472-.3333.7079-.8333.7079zM12.3 6c.6933 0 1.3.6067 1.3 1.3s-.52 1.3-1.3 1.3S11 7.9933 11 7.3 11.6067 6 12.3 6zM12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2">
                                                </path>
                                            </svg> </div>
                                        <div>
                                            <h4 class="text-md leading-6 font-medium">' . $errstr . '</h4>
                                            <p class="text-sm">line ' . $errline . ' : of the file ' . $errfile . '</p>
                                            <p class="text-xs">PHP ' . PHP_VERSION . ' (' . PHP_OS . ')</p>
                                            <div class="flex mt-3">
                                                <a href="' . route($requestURI) . '" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-700 text-base font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm">Reload the page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ');
                        break;
                }

                ?>

            </div>
        </div>
    </section>

    <script>
        console.error(`
            <?php print($errtype) ?> : <?php print($errstr) ?>\n
            line <?php print($errline) ?> : of the file <?php print($errfile) ?>\n
            PHP <?php print(PHP_VERSION) ?> (<?php print(PHP_OS) ?>)\n
        `);
    </script>

</body>

</html>