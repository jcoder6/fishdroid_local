
<?php include PAGES_PATH . '/partials/header.php';?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>
      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg">
         <h4 class="text-xl font-bold text-blue-700 p-3">Manage Fish</h4>
         <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">Fish List</p>
            <a href="/fishes/create" class="bg-white hover:bg-blue-700 rounded-md font-semibold hover:text-white px-5 py-1 transition-all text-blue-700"><i class="fa-solid fa-plus pr-2"></i>Add Fish</a>
         </div>
         <div class="bg-gradient-to-r from-cyan-500 to-blue-500 flex px-5 py-1">
            <div class="text-white font-semibold text-center no w-[5%]">No</div>
            <div class="text-white font-semibold text-center fish-name w-[25%]">Fish Name</div>
            <div class="text-white font-semibold text-center img w-[25%]">Scientific Name</div>
            <div class="text-white font-semibold text-center img w-[25%]">Images</div>
            <div class="text-white font-semibold text-center action w-[20%]">Action</div>
         </div>

         <?php $num = 0; foreach($fishes as $fish) : $num++;?>
         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]"><?= $num ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]"><?= $fish->getFish_name() ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]"><?= $fish->getScientific_name() ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[30%] h-[50px] overflow-hidden relative">
                  <img src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <!-- THIS IS MORE ACTION CONTAINER -->
               
               <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800  font-large rounded-md text-sm px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><i class="fa-solid fa-ellipsis"></i></button>
               <!-- Dropdown menu -->
               <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 w-32 rounded-lg shadow dark:bg-gray-700">
                  <ul class="text-sm text-gray-700 text-center dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                     <li><a href="#" class="block px-4 py-2 hover:bg-blue-500 text-blue-500 hover:text-white"><i class="fa-solid fa-eye pr-3"></i>View</a></li>
                     <li><a href="/fishes/edit/<?= $fish->getId() ?>" class="block px-4 py-2 hover:bg-green-500 text-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</a></li>
                     <li><a href="#" class="block px-4 py-2 hover:bg-orange-500 text-orange-500 hover:text-white"><i class="fa-solid fa-utensils pr-3"></i>Recipe</a></li>
                     <li><a href="#" class="block px-4 py-2 hover:bg-purple-500 text-purple-500 hover:text-white"><i class="fa-solid fa-heart-pulse pr-3"></i>Nutrition</a></li>
                     <li><a href="/fishes/confirm/<?= $fish->getId() ?>" class="block px-4 py-2 hover:bg-red-500 text-red-500 hover:text-white"><i class="fa-solid fa-trash pr-3"></i>Delete</a></li>
                     
                  </ul>
               </div>

               <?php 
               /*
               <a href="/fishes/confirm/<?= $fish->getId() ?>" class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</a>
               <a href="/fishes/edit/<?= $fish->getId() ?>" class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</a>
               */
               ?>
            </div>
         </div>
         <?php endforeach; ?>   
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
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete this Fish?</h3>
                  </div>
               </div>
            </div>
            <div class="bg-gray-50 px-4 py-4 flex justify-center items center gap-3">
               <a href="/fishes/delete/<?=$id?>" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500">Delete</a>
               <a href="/fishes" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</a>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>