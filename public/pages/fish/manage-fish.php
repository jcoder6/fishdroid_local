<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>
      <div class="contents-container w-[80%] mt-[-60px] bg-slate-200 mx-auto rounded-lg"> 
         <h4 class="text-2xl text-center font-bold text-gray-700 p-3">Manage Fish</h4>
         <div class="manage-header bg-gray-500 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-white text-lg">Fish List</p>
            <a href="/fishes/create" class="bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 rounded-md text-sm font-semibold hover:text-white pr-4 py-1 pl-3 transition-all text-gray-700"><i class="fa-solid fa-plus pr-2"></i>Add Fish</a>
         </div>
         <div class="bg-gray-500 flex px-5 py-1">
            <div class="text-white font-semibold text-center no w-[5%]">No</div>
            <div class="text-white font-semibold text-center img w-[31%]">Images</div>
            <div class="text-white font-semibold text-left fish-name w-[22%]">Fish Name</div>
            <div class="text-white font-semibold text-left img w-[22%]">Scientific Name</div>
            <div class="text-white font-semibold text-center action w-[20%]">Action</div>
         </div>

         <?php $num = 0; foreach($fishes as $fish) : $num++;?>
         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]"><?= $num ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[31%] p-1">
               <div class="fish-image-container w-[30%] h-[50px] overflow-hidden relative">
                  <img src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               </div>
            </div>
            <div class="text-gray-800 flex justify-left items-center font-semibold fish-name w-[22%]"><?= $fish->getFish_name() ?></div>
            <div class="text-gray-800 flex justify-left items-center font-semibold img w-[22%]"><?= $fish->getScientific_name() ?></div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <!-- THIS IS MORE ACTION CONTAINER -->
               
               <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-large rounded-md text-sm px-5 py-2 text-center inline-flex items-center transition-all" type="button"><i class="fa-solid fa-ellipsis"></i></button>
               <!-- Dropdown menu -->
               <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 w-32 rounded-lg shadow dark:bg-gray-700">
                  <ul class="text-sm text-gray-700 text-center dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                     <li><a href="/fishes/view/<?= $fish->getId() ?>" class="block px-4 py-2 hover:bg-blue-500 text-blue-500 hover:text-white"><i class="fa-solid fa-eye pr-3"></i>View</a></li>
                     <li><a href="/fishes/edit/<?= $fish->getId() ?>" class="block px-4 py-2 hover:bg-green-500 text-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</a></li>
                     <li><a href="/recipes/viewRecipe/<?= $fish->getId() ?>" class="block px-4 py-2 hover:bg-orange-500 text-orange-500 hover:text-white"><i class="fa-solid fa-utensils pr-3"></i>Recipe</a></li>
                     <li><a href="/nutritions/viewNutrition/<?= $fish->getId() ?>" class="block px-4 py-2 hover:bg-purple-500 text-purple-500 hover:text-white"><i class="fa-solid fa-heart-pulse pr-3"></i>Nutrition</a></li>
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
<?php include PAGES_PATH . '/partials/footer.php' ?>