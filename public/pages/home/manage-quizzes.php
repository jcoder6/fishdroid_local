<?php include '../partials/header.php' ?>
<?php include '../partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include '../partials/body-header.php' ?>

      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
         <h4 class="text-xl font-bold text-blue-700 p-3">Manage Quiz</h4>
         <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">Quiz List</p>
            <button class="bg-blue-700 rounded-md font-semibold text-white px-5 py-1 hover:bg-white transition-all hover:text-blue-700"><i class="fa-solid fa-plus pr-2"></i>Add Quiz</button>
         </div>
         <div class=" bg-blue-700 flex px-5 py-1 border ">
            <div class="text-white font-semibold no w-[9%]">No</div>
            <div class="text-white font-semibold fish-name w-[33%]">Fish Name</div>
            <div class="text-white font-semibold img w-[33%]">Family Name</div>
            <div class="text-white font-semibold action w-[25%]">Action</div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">1</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Black & Gold Chormis</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">Pomacentrinae</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">2</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Mud Carp</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">Cyprinidae</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">3</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Milk fish</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">Chanidae</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">4</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Banded Tilapia</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">Cichlidae</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]">5</div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[33%]">Weakfish</div>
            <div class="text-gray-800 flex items-center font-semibold img w-[33%]">Drum</div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>
                 
         
      </div>
      
</div>

<?php include '../partials/footer.php' ?>