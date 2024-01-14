<?php 
require_once '../includes/components/header.php';


?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
[x-cloak] {
    display: none;
}

[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

.form-checkbox {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
    display: inline-block;
    vertical-align: middle;
    background-origin: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    flex-shrink: 0;
    color: currentColor;
    background-color: #fff;
    border-color: #e2e8f0;
    border-width: 1px;
    border-radius: 0.25rem;
    height: 1.2em;
    width: 1.2em;
}

.form-checkbox:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<body>
    <div class="flex h-screen bg-gray-100">

        <!-- sidebar -->
        <?php require_once '../includes/components/sidebar.php';?>
        <div class="flex flex-col flex-1 overflow-y-auto">
            <?php require_once "../includes/components/nav.php";?>
            <div class="p-4">
                <!-- report title -->

                <h1 class="py-4 mb-10 text-3xl border-b">Datatable</h1>



                <div class="relative overflow-x-auto overflow-y-auto bg-white rounded-lg shadow h-[40rem]">
                    <table id="SurveyData"
                        class="relative w-full whitespace-no-wrap bg-white border-collapse table-auto table-striped">
                        <thead>
                            <tr class="text-left">

                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        ID
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Lastname
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        FirstName
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        MiddleInitial
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        BirthPlace
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        BirthDate
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Age
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Gender
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        CivilStatus
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Religion
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Dialect
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Education
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Job

                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        MonthLyIncome
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        PhoneNumber
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Email
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Year
                                    </label>
                                </th>
                                <th class="sticky top-0 px-3 py-2 bg-gray-100 border-b border-gray-200">
                                    <label>
                                        Action
                                    </label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>



                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- loading indicator svg -->
    </div>

    <div x-show="isModalOpen" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- ... modal background overlay ... -->
            <div class="fixed inset-0 transition-opacity" @click="isModalOpen = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- ... modal content ... -->
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <!-- ... modal details ... -->
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
                                User Details
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500"
                                    x-text="selectedUser.FirstName + ' ' + selectedUser.LastName"></p>
                                <!-- ... more user details ... -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:flex sm:flex-row-reverse">
                    <button @click="isModalOpen = false" type="button"
                        class="w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:border-red-700 focus:shadow-outline-red sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('#SurveyData').DataTable({
            "processing": true, // Show processing indicator
            "serverSide": true, // Enable server-side processing
            "ajax": {
                "url": "../api/showAllData.php", // URL of the server-side processing script
                "type": "GET" // HTTP method to use for the AJAX call
            },
            "columns": [{
                    "data": "ID"
                }, // Column for first name
                {
                    "data": "FirstName"
                }, // Column for first name
                {
                    "data": "LastName"
                }, // Column for last name
                {
                    "data": "MiddleInitial"
                }, // Column for last name
                {
                    "data": "BirthPLace"
                }, // Column for last name
                {
                    "data": "BirthDate"
                }, // Column for last name
                {
                    "data": "Age"
                }, // Column for last name
                {
                    "data": "Gender"
                }, // Column for last name
                {
                    "data": "CivilStatus"
                }, // Column for last name
                {
                    "data": "Religion"
                }, // Column for last name
                {
                    "data": "Dialect"
                }, // Column for last name
                {
                    "data": "Education"
                }, // Column for last name
                {
                    "data": "Job"
                }, // Column for last name
                {
                    "data": "MonthLyIncome"
                }, // Column for last name
                {
                    "data": "PhoneNumber"
                }, // Column for last name
                {
                    "data": "Email"
                }, // Column for last name
                {
                    "data": "year_added"
                }, // Column for age

                // Add more columns as needed, matching the data returned from the server
            ],
            // Optionally, you can add additional DataTables options here, such as:
            "order": [
                [0, 'asc']
            ], // Default order on the first column
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, 100, 150, 300]
            ], // Length menu options
            "pageLength": 20, // Default number of rows to display
            "language": {
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "Showing 0 to 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "loadingRecords": "Loading...",
                "processing": "Processing...",
                "search": "Search:",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                }
            },
            "drawCallback": function(settings) {
                // Apply Tailwind CSS styles to the DataTable elements

                // Style the DataTable container
                $('.dataTables_wrapper').addClass(
                    'p-4 bg-white rounded-lg shadow');

                // Style the DataTable
                $('#SurveyData').addClass('min-w-full divide-y divide-gray-200');

                // Style the DataTable header
                $('#SurveyData thead').addClass('bg-gray-50');
                $('#SurveyData thead th').addClass(
                    'px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'
                    );

                // Style the DataTable body
                $('#SurveyData tbody').addClass('bg-white divide-y divide-gray-200');
                $('#SurveyData tbody td').addClass('px-6 py-4 whitespace-nowrap');

                // Style the DataTable pagination
                $('.dataTables_paginate').addClass('flex justify-between pt-4');
                $('.paginate_button').addClass(
                    'px-4 py-2 mx-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                    );

                // Style the DataTable length menu and search input
                $('.dataTables_length select').addClass(
                    'block w-full px-3 py-1.5 w-10 font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'
                    );
                $('.dataTables_filter input').addClass(
                    'form-input rounded-md shadow-sm mt-1 block w-full');

                // Style the DataTable processing indicator
                $('.dataTables_info').addClass('text-sm text-gray-700');
                $('#SurveyData_processing').addClass(
                    'h-6 bg-blue-500 text-white text-xs leading-6 rounded-md px-4 py-1');
                // Style the DataTable length menu and search input
                $('.dataTables_length').addClass('flex items-center gap-2');
                $('.dataTables_length label').addClass('flex items-center gap-1');
                $('.dataTables_length select').addClass(
                    'form-select block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'
                    );
                $('.dataTables_filter').addClass('flex justify-end');
                $('.dataTables_filter label').addClass('flex items-center gap-1');
                $('.dataTables_filter input').addClass(
                    'form-input rounded-md shadow-sm mt-1 block w-full');

                // Responsive adjustments
                $('.dataTables_length select, .dataTables_filter input').addClass('text-sm');
                $('.dataTables_length, .dataTables_filter').addClass(
                    'flex-col md:flex-row md:items-center');

                // Add any additional styling as needed
            },
        });
    });
    </script>

</body>

</html>