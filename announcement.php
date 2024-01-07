<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Barangy Dashboard | Announcement</title>

    <link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/" />
    <script src="https://cdn.tiny.cloud/1/46877zyhse80x7h0y2a1cv21dmq25v3t1ndzq6puboorqf9c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <script src="js/tailwindcss.js"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> -->
    <!-- <script src="vendor/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script> -->
    <link rel="stylesheet" href="css/profile.css">
    <script src="js/tailwind.config.js"></script>
    <script src="js/system.js"></script>
    <!-- Required the tailwind cli -->
    <?php require 'css/tailwindcss.php';
    require 'config.php';
    ?>
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
                   

                <?php 
                
                  
                include_once 'components/createAnnouncement.php';
                
                include_once 'components/ShowAnnouncement.php';
          
                ?>      
                </div>



            </main>


            <?php require 'components/footer.php';

            ?>
        </div>
    </div>

    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>

</body>

</html>