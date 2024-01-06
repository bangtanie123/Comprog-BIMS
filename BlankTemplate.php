<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Barangy Dashboard | Announcement</title>

    <link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> -->

    <link rel="stylesheet" href="css/profile.css">
    <script src="js/tailwind.config.js"></script>
    <script src="js/system.js"></script>
    <!-- Required the tailwind cli -->
    <?php require 'css/tailwindcss.php'; ?>
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
                <div class="container p-4 mx-auto">

                </div>
            </main>

            <?php require 'components/footer.php'; ?>
        </div>
    </div>
    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
    <script>
        function switchTab(tabName) {
            if (tabName === 'list') {
                document.getElementById('listAnnouncements').classList.remove('hidden');
                document.getElementById('createAnnouncement').classList.add('hidden');
            } else if (tabName === 'create') {
                document.getElementById('createAnnouncement').classList.remove('hidden');
                document.getElementById('listAnnouncements').classList.add('hidden');
            }
        }

        function previewFiles() {
            var preview = document.querySelector('#preview');
            var files = document.querySelector('input[type=file]').files;

            function readAndPreview(file) {
                // Make sure `file.name` matches our extensions criteria
                if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    var reader = new FileReader();

                    reader.addEventListener("load", function() {
                        var image = new Image();
                        image.height = 100;
                        image.title = file.name;
                        image.src = this.result;
                        preview.appendChild(image);
                    }, false);

                    reader.readAsDataURL(file);
                }
            }

            if (files) {
                [].forEach.call(files, readAndPreview);
            }
        }
    </script>
</body>

</html>