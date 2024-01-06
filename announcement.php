<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Barangy Dashboard | Announcement</title>

    <link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/" />
    <!-- <script src="https://cdn.tiny.cloud/1/46877zyhse80x7h0y2a1cv21dmq25v3t1ndzq6puboorqf9c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
<script src="js/tailwindcss.js"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> -->
    <script src="vendor/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="css/profile.css">
    <script src="js/tailwind.config.js"></script>
    <script src="js/system.js"></script>
    <!-- Required the tailwind cli -->
    <?php require 'css/tailwindcss.php';
    require 'config.php';
    ?>
</head>

<body class="bg-gray-50 dark:bg-gray-800">
    <script>
        // tinymce.init({
        //     selector: 'textarea#default',
        //     plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        //     tinycomments_mode: 'embedded',
        //     tinycomments_author: 'Author name',
        //     mergetags_list: [{
        //             value: 'First.Name',
        //             title: 'First Name'
        //         },
        //         {
        //             value: 'Email',
        //             title: 'Email'
        //         },
        //     ],
        //     ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        //     image_title: true,
        //     automatic_uploads: true,
        //     toolbar_sticky: true,

        //       image_advtab: true,
        //         file_picker_types: 'image',
        //         file_picker_callback: function (cb, value, meta) {
        //           var input = document.createElement('input');
        //           input.setAttribute('type', 'file');
        //           input.setAttribute('accept', 'image/*');

        //           input.onchange = function () {
        //             var file = this.files[0];
        //             var reader = new FileReader();

        //             reader.onload = function () {
        //               var id = 'blobid' + (new Date()).getTime();
        //               var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        //               var base64 = reader.result.split(',')[1];
        //               var blobInfo = blobCache.create(id, file, base64);
        //               blobCache.add(blobInfo);

        //               // call the callback and populate the Title field with the file name
        //               cb(blobInfo.blobUri(), { title: file.name });
        //             };
        //             reader.readAsDataURL(file);
        //           };

        //           input.click();
        //         },
        //     ... other options you might want to use
        // });
        tinymce.init({
            selector: '#default',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
    <!-- Header  -->
    <?php require_once 'components/header.php'; ?>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <!-- Side Bar -->
        <?php require_once 'components/sidebar.php'; ?>

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="container p-4 mx-auto">
                    <?php if (isset($_GET['create'])) {

                    ?>
                        <div id="AnnouncementModal" class="justify-center w-full overflow-x-hidden overflow-y-auto fitems-center md:inset-0 md:h-full">
                            <div class="relative w-full h-full max-w-full p-4 md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add Announcement / Notice
                                        </h3>

                                    </div>
                                    <!-- Modal body -->

                                    <form action="#">
                                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                            </div>
                                            <div>
                                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                                            </div>
                                            <div class="w-full col-span-2 mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">



                                                <textarea id="default">
      Welcome to TinyMCE! dawdawdadsdawda
    </textarea>

                                            </div>


                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            Add new product
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <style>
                            figure.image {
                                display: inline-block;
                                border: 1px solid gray;
                                margin: 0 2px 0 1px;
                                background: #f5f2f0;
                            }

                            figure.align-left {
                                float: left;
                            }

                            figure.align-right {
                                float: right;
                            }

                            figure.image img {
                                margin: 8px 8px 0 8px;
                            }

                            figure.image figcaption {
                                margin: 6px 8px 6px 8px;
                                text-align: center;
                            }


                            /*
 Alignment using classes rather than inline styles
 check out the "formats" option
*/

                            img.align-left {
                                float: left;
                            }

                            img.align-right {
                                float: right;
                            }

                            /* Basic styles for Table of Contents plugin (toc) */
                            .mce-toc {
                                border: 1px solid gray;
                            }

                            .mce-toc h2 {
                                margin: 4px;
                            }

                            .mce-toc li {
                                list-style-type: none;
                            }
                        </style>

                    <?php
                        //  include 'components/createAnnouncement.php';
                    } else {

                    ?>
                        <!-- <div id="listAnnouncements" class="mt-4">
                        <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <h2 class="mb-4 text-xl font-bold dark:text-white">Announcements</h2>
                            <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                                    <div class="w-full md:w-1/2">
                                        <form class="flex items-center">
                                            <label for="simple-search" class="sr-only">Search</label>
                                            <div class="relative w-full">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                                        <button id="AnnouncementModalButton" data-modal-target="AnnouncementModal" data-modal-toggle="AnnouncementModal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                            </svg>
                                            Add Announcement
                                        </button>
                                        <div class="flex items-center w-full space-x-3 md:w-auto">
                                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                                </svg>
                                                Actions
                                            </button>
                                            <div id="actionsDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                                                </div>
                                            </div>
                                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                                </svg>
                                                Filter
                                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                                </svg>
                                            </button>
                                            <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                                <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                                    <li class="flex items-center">
                                                        <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">online</label>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">offline</label>
                                                    </li>
                                           
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full leading-normal ">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-400 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-700">
                                                Title
                                            </th>
                                            <th
                                                class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-400 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-700">
                                                Date
                                            </th>
                                            <th
                                                class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-400 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-gray-700">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <tr>
                                            <td class="px-5 py-5 text-sm bg-white dark:bg-gray-800">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="font-bold text-gray-900 whitespace-no-wrap dark:text-white">
                                                            Announcement Title Here
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 text-sm bg-white dark:bg-gray-800">
                                                <p class="font-bold text-gray-900 whitespace-no-wrap dark:text-white">
                                                    Date Published
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 text-sm bg-white dark:bg-gray-800">
                                            <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                                            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                            </td>
                                        </tr>
                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->

                    <?php }  ?>
                </div>



            </main>


            <?php require 'components/footer.php';

            ?>
        </div>
    </div>

    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>

</body>

</html>