<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
         <h4 class="text-xl font-bold text-blue-700 p-3">Manage User</h4>
         <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">User List</p>
            <button class="bg-blue-700 rounded-md font-semibold text-white px-5 py-1 hover:bg-white transition-all hover:text-blue-700"><i class="fa-solid fa-plus pr-2"></i>Add User</button>
         </div>
         <div class=" bg-blue-700 flex px-5 py-1 border ">
            <div class="text-white font-semibold no w-[9%]">No</div>
            <div class="text-white font-semibold fish-name w-[33%]">Name</div>
            <div class="text-white font-semibold img w-[33%]">Email</div>
            <div class="text-white font-semibold action w-[25%]">Action</div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Jomer Dorego</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">jdorego06@gmail.com</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">2</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Ivan Gerard Deguzman</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">ivangerard28@gmail.com</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">3</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Shekina Cayago</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">kayna24@gmail.com</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">3</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Mark Lester Taguiam</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">lestertaguiam07@gmail.com</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>  
      </div>
      
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>