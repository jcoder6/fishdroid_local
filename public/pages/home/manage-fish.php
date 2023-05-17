<?php include '../partials/header.php' ?>
<?php include '../partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include '../partials/body-header.php' ?>
      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg">
         <h4 class="text-xl font-bold text-blue-700 p-3">Manage Fish</h4>
         <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">Fish List</p>
            <button class="bg-blue-700 rounded-md font-semibold text-white px-5 py-1 hover:bg-white transition-all hover:text-blue-700"><i class="fa-solid fa-plus pr-2"></i>Add Fish</button>
         </div>
         <div class="fish-table bg-blue-700 flex px-5 py-1 border ">
            <div class="text-white font-semibold text-center no w-[5%]">No</div>
            <div class="text-white font-semibold text-center fish-name w-[25%]">Fish Name</div>
            <div class="text-white font-semibold text-center img w-[25%]">Scientific Name</div>
            <div class="text-white font-semibold text-center img w-[25%]">Images</div>
            <div class="text-white font-semibold text-center action w-[20%]">Action</div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-3">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]">1</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]">Mud Carp</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]">Cirrhinus molitorella</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[80%] h-[100px] overflow-hidden relative">
                  <img src="../src/images/mud-carp.PNG" class="absolute h-[100%] w-[100%] inset-0" alt="Mud Carp">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-3">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]">2</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]">Chromis</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]">Neoglyphidodon nigroris</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[80%] h-[100px] overflow-hidden relative">
                  <img src="../src/images/chromis.PNG" class="absolute h-[100%] w-[100%] inset-0" alt="Mud Carp">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-3">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]">3</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]">Weak Fish</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]">Cynoscion regalis</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[80%] h-[100px] overflow-hidden relative">
                  <img src="../src/images/weakfish.PNG" class="absolute h-[100%] w-[100%] inset-0" alt="Mud Carp">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-3">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]">4</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]">Banded Tilapia</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]">Tilapia sparrmanii</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[80%] h-[100px] overflow-hidden relative">
                  <img src="../src/images/btilapia.PNG" class="absolute h-[100%] w-[100%] inset-0" alt="Mud Carp">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-3">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]">5</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]">Malay Combtail</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]">Belontia hasselti</div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[80%] h-[100px] overflow-hidden relative">
                  <img src="../src/images/combtail.PNG" class="absolute h-[100%] w-[100%] inset-0" alt="Mud Carp">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</button>
               <button class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</button>
            </div>
         </div>
                 
         
      </div>
   </div>
<?php include '../partials/footer.php' ?>