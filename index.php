<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Barangy Dashboard</title>

    <link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Required the tailwind cli -->
    <?php require 'css/tailwindcss.php'; ?>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
            darkMode: 'class',

        };
    </script>


    <script>
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

</head>

<body class="bg-gray-50 dark:bg-gray-800">

    <!-- Header  -->
    <?php require_once 'components/header.php'; ?>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <!-- Side Bar -->
        <?php require_once 'components/sidebar.php'; ?>

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="pt-9 mt-10 mx-auto mb-auto h-full min-h-[84vh] p-2 rounded-lg">
                    <div>
                        <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                            <div class="card relative flex flex-col bg-clip-border rounded-xl shadow-md">
                                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" height="200px" width="200px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="group">
                                                <path d="M24,15.9c0-2.8-1.5-5-3.7-6.1C21.3,8.8,22,7.5,22,6c0-2.8-2.2-5-5-5c-2.1,0-3.8,1.2-4.6,3c0,0,0,0,0,0c-0.1,0-0.3,0-0.4,0 c-0.1,0-0.3,0-0.4,0c0,0,0,0,0,0C10.8,2.2,9.1,1,7,1C4.2,1,2,3.2,2,6c0,1.5,0.7,2.8,1.7,3.8C1.5,10.9,0,13.2,0,15.9V20h5v3h14v-3h5 V15.9z M17,3c1.7,0,3,1.3,3,3c0,1.6-1.3,3-3,3c0-1.9-1.1-3.5-2.7-4.4c0,0,0,0,0,0C14.8,3.6,15.8,3,17,3z M13.4,4.2 C13.4,4.2,13.4,4.2,13.4,4.2C13.4,4.2,13.4,4.2,13.4,4.2z M15,9c0,1.7-1.3,3-3,3s-3-1.3-3-3s1.3-3,3-3S15,7.3,15,9z M10.6,4.2 C10.6,4.2,10.6,4.2,10.6,4.2C10.6,4.2,10.6,4.2,10.6,4.2z M7,3c1.2,0,2.2,0.6,2.7,1.6C8.1,5.5,7,7.1,7,9C5.3,9,4,7.7,4,6S5.3,3,7,3 z M5.1,18H2v-2.1C2,13.1,4.1,11,7,11v0c0,0,0,0,0,0c0.1,0,0.2,0,0.3,0c0,0,0,0,0,0c0.3,0.7,0.8,1.3,1.3,1.8 C6.7,13.8,5.4,15.7,5.1,18z M17,21H7v-2.1c0-2.8,2.2-4.9,5-4.9c2.9,0,5,2.1,5,4.9V21z M22,18h-3.1c-0.3-2.3-1.7-4.2-3.7-5.2 c0.6-0.5,1-1.1,1.3-1.8c0.1,0,0.2,0,0.4,0v0c2.9,0,5,2.1,5,4.9V18z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="p-4 text-right">
                                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                        Resident Registered</p>
                                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        53</h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">+55</strong>&nbsp;than last week
                                    </p>
                                </div>
                            </div>
                            <div class="card relative flex flex-col bg-clip-border rounded-xl shadow-md">
                                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                    <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor" class="w-6 h-6 text-white">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">


                                            <g>
                                                <rect x="114.087" y="148.892" class="st0" width="157.906" height="26.318"></rect>
                                                <rect x="114.087" y="245.39" class="st0" width="157.906" height="26.318"></rect>
                                                <rect x="114.087" y="341.888" class="st0" width="96.498" height="26.318"></rect>
                                                <path class="st0" d="M454.95,86.619c-78.157,10.768-159.83,199.833-196.664,267.692c-9.252,17.049,12.264,31.278,21.786,14.958 c6.862-11.728,44.291-85.601,44.291-85.601c40.77,1.345,55.806-27.123,39.511-44.805c54.794,1.131,81.952-29.025,66.412-47.324 c16.345,5.175,30.498,1.713,51.521-9.749C526.664,157.321,524.573,75.421,454.95,86.619z"></path>
                                                <path class="st0" d="M350.998,307.03V443.15c0,4.034-3.29,7.316-7.316,7.324H42.407c-4.027-0.008-7.308-3.29-7.316-7.324v-374.3 c0.009-4.036,3.29-7.316,7.316-7.325h301.275c4.027,0.009,7.316,3.29,7.316,7.325v67.961c11.48-15.463,23.147-29.144,35.09-40.504 V68.851c-0.018-23.431-18.967-42.398-42.407-42.416H42.407C18.976,26.453,0.009,45.42,0,68.851v374.3 c0.009,23.431,18.976,42.398,42.407,42.414h301.275c23.44-0.016,42.389-18.984,42.407-42.414V284.704 C377.967,295.404,365.87,303.114,350.998,307.03z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="p-4 text-right">
                                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                        Pending Requests</p>
                                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        2,300</h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">+3%</strong>&nbsp;than last month
                                    </p>
                                </div>
                            </div>
                            <div class="card relative flex flex-col bg-clip-border rounded-xl shadow-md">
                                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                                    </svg>
                                </div>
                                <div class="p-4 text-right">
                                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                        4ps Members</p>
                                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        3,462</h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-red-500">-2%</strong>&nbsp;than yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="card relative flex flex-col bg-clip-border rounded-xl shadow-md">
                                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M21.9445 14.4719L21.9661 14.5336L21.9892 14.6345L21.9981 14.7331V21.25C21.9981 21.6297 21.7159 21.9435 21.3499 21.9932L21.2481 22H2.75C2.3703 22 2.05651 21.7178 2.00685 21.3518L2 21.25V14.7506L2.00184 14.6977L2.01271 14.6122C2.02285 14.5584 2.03841 14.5072 2.05894 14.4587L4.81824 8.44003C4.92517 8.2068 5.14245 8.04682 5.39153 8.01047L5.5 8.0026L8.03982 8.00183L7.25089 9.37206L7.18282 9.50183L5.981 9.502L3.918 13.9998H20.07L18.0428 9.65383L18.9052 8.15653C18.9718 8.20739 19.0301 8.26957 19.0771 8.3411L19.1297 8.43553L21.9445 14.4719ZM13.3652 2.05565L13.4566 2.10062L18.6447 5.10375C18.9729 5.29371 19.1033 5.69521 18.9636 6.03728L18.9187 6.1289L16.112 11.001L17.25 11.0016C17.6642 11.0016 18 11.3374 18 11.7516C18 12.1313 17.7178 12.4451 17.3518 12.4948L17.25 12.5016L15.248 12.501L15.2471 12.504H11.1691L11.166 12.501L6.75 12.5016C6.33579 12.5016 6 12.1658 6 11.7516C6 11.3719 6.28215 11.0581 6.64823 11.0085L6.75 11.0016L8.573 11.001L8.39145 10.8963C8.06327 10.7063 7.93285 10.3048 8.0726 9.96272L8.11747 9.8711L12.4341 2.37536C12.6235 2.04633 13.024 1.91557 13.3652 2.05565ZM13.3559 3.77529L9.78781 9.97119L11.566 11.001H14.383L17.248 6.02818L13.3559 3.77529Z" fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="p-4 text-right">
                                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                        Registered Voters</p>
                                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        103,430</h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">+5%</strong>&nbsp;than yesterday
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex-shrink-0">
                                        <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">$45,385</span>
                                        <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Sales this
                                            week</h3>
                                    </div>
                                    <div class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
                                        12.5%
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="main-chart" style="min-height: 435px;">
                                </div>
                                <!-- Card Footer -->
                                <di v class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                                    <div>
                                        <button class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="weekly-sales-dropdown" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(99px, 340px);" data-popper-placement="top" data-popper-reference-hidden="" data-popper-escaped="">
                                            <div c lass="px-4 py-3" role="none">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                                    Sep 16, 2021 - Sep 22, 2021
                                                </p>
                                            </div>
                                            <ul class="py-1" role="none">
                                                <li>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Yesterday</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Today</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Last 7 days</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Last 30 days</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Last 90 days</a>
                                                </li>
                                            </ul>
                                            <div class="py-1" role="none">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Custom...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="#" class="inline-flex items-center p-2 text-xs font-medium dark:text-white uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                            Sales Report
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                            </div>
                            <div class="p-4 bg-white border dark:text-white border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <h2 class="text-lg font-medium mb-2">Users Online</h2>

                                <p class="text-sm text-gray-400 mb-4">See who is currently online and available</p>
                                <div class="bg-white dark:bg-gray-800 p-2 rounded-lg shadow">
                                    <div class="space-y-2">

                                        <div class="flex items-center">
                                            <img src="https://i.pravatar.cc/40?img=1" alt="" class="w-10 h-10 rounded-full">
                                            <div class="ml-4">
                                                <h3 class="text-sm font-medium">John Doe</h3>
                                                <p class="text-xs text-gray-500">Admin</p>
                                            </div>
                                            <span class="ml-auto px-2 py-1 text-xs text-green-600 bg-green-200 rounded-full">Online</span>
                                        </div>

                                        <div class="flex items-center">
                                            <img src="https://i.pravatar.cc/40?img=2" alt="" class="w-10 h-10 rounded-full">
                                            <div class="ml-4">
                                                <h3 class="text-sm font-medium">Jane Smith</h3>
                                                <p class="text-xs text-gray-500">Editor</p>
                                            </div>
                                            <span class="ml-auto px-2 py-1 text-xs text-yellow-600 bg-yellow-200 rounded-full">Idle</span>
                                        </div>

                                        <div class="flex items-center">
                                            <img src="https://i.pravatar.cc/40?img=3" alt="" class="w-10 h-10 rounded-full">
                                            <div class="ml-4">
                                                <h3 class="text-sm font-medium">Bob Johnson</h3>
                                                <p class="text-xs text-gray-500">Author</p>
                                            </div>
                                            <span class="ml-auto px-2 py-1 text-xs text-red-600 bg-red-200 rounded-full">Offline</span>
                                        </div>

                                        <!-- 7 more users -->

                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>
            </main>
            <footer class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 xl:p-8 dark:bg-gray-800">
                <ul class="flex flex-wrap items-center mb-6 space-y-1 md:mb-0">
                    <li>
                        <a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Terms
                            and conditions</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Cookie
                            Policy</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm font-normal text-gray-500 hover:underline dark:text-gray-400">Contact</a>
                    </li>
                </ul>
                <div class="flex space-x-6 sm:justify-center">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </footer>
            <?php require 'components/footer.php';?>
        </div>
    </div>

    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>

    <svg id="SvgjsSvg1344" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="
        overflow: hidden;
        top: -100%;
        left: -100%;
        position: absolute;
        opacity: 0;
      ">
        <defs id="SvgjsDefs1345"></defs>
        <polyline id="SvgjsPolyline1346" points="0,0"></polyline>
        <path id="SvgjsPath1347" d="M-1 2647.699L-1 2647.699C-1 2647.699 58.62361113230388 2647.699 58.62361113230388 2647.699C58.62361113230388 2647.699 117.24722226460776 2647.699 117.24722226460776 2647.699C117.24722226460776 2647.699 175.87083339691162 2647.699 175.87083339691162 2647.699C175.87083339691162 2647.699 234.4944445292155 2647.699 234.4944445292155 2647.699C234.4944445292155 2647.699 293.1180556615194 2647.699 293.1180556615194 2647.699C293.1180556615194 2647.699 351.74166679382324 2647.699 351.74166679382324 2647.699C351.74166679382324 2647.699 351.74166679382324 2647.699 351.74166679382324 2647.699 "></path>
    </svg>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-top datepicker-orient-left" style="top: 1215px; left: 1084.5px">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold" style="display: none"></div>
                <div class="datepicker-controls flex justify-between mb-2">
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">
                        December 2023
                    </button>
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1">
                            <span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7">
                            <span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1700928000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701014400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701100800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701187200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701273600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701360000000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701446400000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701532800000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701619200000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701705600000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701792000000">6</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701878400000">7</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701964800000">8</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702051200000">9</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702137600000">10</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702224000000">11</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused" data-date="1702310400000">12</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702396800000">13</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702483200000">14</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702569600000">15</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702656000000">16</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702742400000">17</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702828800000">18</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702915200000">19</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703001600000">20</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703088000000">21</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703174400000">22</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703260800000">23</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703347200000">24</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703433600000">25</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703520000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703606400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703692800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703779200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703865600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703952000000">31</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704038400000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704124800000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704211200000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704297600000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704384000000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704470400000">6</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 mt-2">
                    <button type="button" class="button today-btn text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Today
                    </button>
                    <button type="button" class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Clear
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-top datepicker-orient-left" style="top: 1215px; left: 1212.75px">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold" style="display: none"></div>
                <div class="datepicker-controls flex justify-between mb-2">
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">
                        December 2023
                    </button>
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1">
                            <span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7">
                            <span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1700928000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701014400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701100800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701187200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701273600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701360000000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701446400000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701532800000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701619200000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701705600000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701792000000">6</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701878400000">7</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701964800000">8</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702051200000">9</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702137600000">10</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702224000000">11</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused" data-date="1702310400000">12</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702396800000">13</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702483200000">14</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702569600000">15</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702656000000">16</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702742400000">17</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702828800000">18</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702915200000">19</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703001600000">20</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703088000000">21</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703174400000">22</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703260800000">23</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703347200000">24</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703433600000">25</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703520000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703606400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703692800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703779200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703865600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703952000000">31</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704038400000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704124800000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704211200000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704297600000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704384000000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704470400000">6</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 mt-2">
                    <button type="button" class="button today-btn text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Today
                    </button>
                    <button type="button" class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Clear
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-top datepicker-orient-left" style="top: 3207.7px; left: 817px">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold" style="display: none"></div>
                <div class="datepicker-controls flex justify-between mb-2">
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">
                        December 2023
                    </button>
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1">
                            <span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7">
                            <span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1700928000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701014400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701100800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701187200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701273600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701360000000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701446400000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701532800000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701619200000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701705600000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701792000000">6</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701878400000">7</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701964800000">8</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702051200000">9</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702137600000">10</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702224000000">11</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused" data-date="1702310400000">12</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702396800000">13</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702483200000">14</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702569600000">15</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702656000000">16</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702742400000">17</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702828800000">18</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702915200000">19</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703001600000">20</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703088000000">21</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703174400000">22</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703260800000">23</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703347200000">24</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703433600000">25</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703520000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703606400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703692800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703779200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703865600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703952000000">31</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704038400000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704124800000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704211200000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704297600000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704384000000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704470400000">6</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 mt-2">
                    <button type="button" class="button today-btn text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Today
                    </button>
                    <button type="button" class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Clear
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-top datepicker-orient-left" style="top: 3207.7px; left: 1079px">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold" style="display: none"></div>
                <div class="datepicker-controls flex justify-between mb-2">
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">
                        December 2023
                    </button>
                    <button type="button" class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1">
                            <span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7">
                            <span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1700928000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701014400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701100800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701187200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500" data-date="1701273600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701360000000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701446400000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701532800000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701619200000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701705600000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701792000000">6</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701878400000">7</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1701964800000">8</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702051200000">9</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702137600000">10</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702224000000">11</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused" data-date="1702310400000">12</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702396800000">13</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702483200000">14</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702569600000">15</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702656000000">16</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702742400000">17</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702828800000">18</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1702915200000">19</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703001600000">20</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703088000000">21</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703174400000">22</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703260800000">23</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703347200000">24</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703433600000">25</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703520000000">26</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703606400000">27</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703692800000">28</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703779200000">29</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703865600000">30</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day" data-date="1703952000000">31</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704038400000">1</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704124800000">2</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704211200000">3</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704297600000">4</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704384000000">5</span><span class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500" data-date="1704470400000">6</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 mt-2">
                    <button type="button" class="button today-btn text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Today
                    </button>
                    <button type="button" class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2" style="display: none">
                        Clear
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>