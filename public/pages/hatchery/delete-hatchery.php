<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
<?php include PAGES_PATH . '/partials/body-header.php' ?>
    <div class="contents-container w-[80%] mt-[-60px] bg-slate-200 mx-auto rounded-lg"> 
        <h4 class="text-2xl text-center font-bold text-gray-700 p-3">Hatchery Process</h4>
        <div class="manage-header bg-gray-500 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-white text-lg">Fish Hathcery List</p>
            <a href="/hatcheries/create" class="bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 rounded-md text-sm font-semibold hover:text-white pr-4 py-1 pl-3 transition-all text-gray-700"><i class="fa-solid fa-plus pr-2"></i>Add Hatch</a>
        </div>
        <div class="bg-gray-200 flex px-5 py-1">
            <div class="text-gray-700 font-semibold text-left no w-[8%]">No</div>
            <div class="text-gray-700 font-semibold text-left img w-[20%]">Fish name</div>
            <div class="text-gray-700 font-semibold text-left fish-name w-[52%]">Hatching Process</div>
            <div class="text-gray-700 font-semibold text-center action w-[20%]">Action</div>
        </div>
        
        <!-- THIS IS WHERE WE LOOP THE DATA -->

        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
            <div class="text-gray-800 flex items-center font-semibold w-[8%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold w-[20%]">Bangus</div>
            <div class="text-gray-800 flex items-center font-semibold w-[52%] truncate pl-2 pr-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non at quaerat, ea reprehenderit excepturi magnam voluptatem reiciendis iusto magni temporibus cumque culpa? Cumque incidunt repudiandae dolores alias officiis vitae voluptatem commodi eos fugit, asperiores maiores voluptates veniam, illum fugiat quidem eius vel itaque sequi animi quos! Suscipit voluptatum quia iste!
            </div>
            <div class="text-blue-700 flex gap-3 justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="/haticheries/edit/" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="/haticheries/confirm/" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>

        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
            <div class="text-gray-800 flex items-center font-semibold w-[8%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold w-[20%]">Bangus</div>
            <div class="text-gray-800 flex items-center font-semibold w-[52%] truncate pl-2 pr-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non at quaerat, ea reprehenderit excepturi magnam voluptatem reiciendis iusto magni temporibus cumque culpa? Cumque incidunt repudiandae dolores alias officiis vitae voluptatem commodi eos fugit, asperiores maiores voluptates veniam, illum fugiat quidem eius vel itaque sequi animi quos! Suscipit voluptatum quia iste!
            </div>
            <div class="text-blue-700 flex gap-3 justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="/haticheries/edit/" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="/haticheries/confirm/" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        
        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
            <div class="text-gray-800 flex items-center font-semibold w-[8%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold w-[20%]">Bangus</div>
            <div class="text-gray-800 flex items-center font-semibold w-[52%] truncate pl-2 pr-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non at quaerat, ea reprehenderit excepturi magnam voluptatem reiciendis iusto magni temporibus cumque culpa? Cumque incidunt repudiandae dolores alias officiis vitae voluptatem commodi eos fugit, asperiores maiores voluptates veniam, illum fugiat quidem eius vel itaque sequi animi quos! Suscipit voluptatum quia iste!
            </div>
            <div class="text-blue-700 flex gap-3 justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="/haticheries/edit/" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="/haticheries/confirm/" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        
        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
            <div class="text-gray-800 flex items-center font-semibold w-[8%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold w-[20%]">Bangus</div>
            <div class="text-gray-800 flex items-center font-semibold w-[52%] truncate pl-2 pr-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non at quaerat, ea reprehenderit excepturi magnam voluptatem reiciendis iusto magni temporibus cumque culpa? Cumque incidunt repudiandae dolores alias officiis vitae voluptatem commodi eos fugit, asperiores maiores voluptates veniam, illum fugiat quidem eius vel itaque sequi animi quos! Suscipit voluptatum quia iste!
            </div>
            <div class="text-blue-700 flex gap-3 justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="/haticheries/edit/" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="/haticheries/confirm/" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        
        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
            <div class="text-gray-800 flex items-center font-semibold w-[8%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold w-[20%]">Bangus</div>
            <div class="text-gray-800 flex items-center font-semibold w-[52%] truncate pl-2 pr-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non at quaerat, ea reprehenderit excepturi magnam voluptatem reiciendis iusto magni temporibus cumque culpa? Cumque incidunt repudiandae dolores alias officiis vitae voluptatem commodi eos fugit, asperiores maiores voluptates veniam, illum fugiat quidem eius vel itaque sequi animi quos! Suscipit voluptatum quia iste!
            </div>
            <div class="text-blue-700 flex gap-3 justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="/haticheries/edit/" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="/haticheries/confirm/" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        <!-- THIS IS WHERE WE LOOP THE DATA -->
    </div>
</div>  

<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-opacity-75 bg-slate-500 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center">
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="flex flex-col justify-center items-center">
                <div class="flex h-24 w-24 flex-shrink-0 items-center justify-center mb-4 rounded-full bg-red-100">
                <svg class="h-16 w-16 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete Hatching Process?</h3>
                </div>
            </div>
            </div>
            <div class="bg-gray-50 px-4 py-4 flex justify-center items center gap-3">
            <a href="/jokes/delete/<?=$id?>" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500">Delete</a>
            <a href="/hatcheries" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</a>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>