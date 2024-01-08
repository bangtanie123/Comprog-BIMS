<?php require_once 'head.php';?>
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