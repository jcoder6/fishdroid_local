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
            <a href="/hatcheries/edit/1" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
            <a href="/hatcheries/confirm/1" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
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
<?php include PAGES_PATH . '/partials/footer.php' ?>