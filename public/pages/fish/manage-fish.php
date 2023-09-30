<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>
      <div class="contents-container w-[80%] mt-[-60px] bg-slate-200 mx-auto rounded-lg"> 
         <h4 class="text-2xl text-center font-bold text-gray-700 p-3">Manage Fish</h4>
         <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-white text-lg">Fish List</p>
            <a href="/fishes/create" class="bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 rounded-md text-sm font-semibold hover:text-white pr-4 py-1 pl-3 transition-all text-gray-700"><i class="fa-solid fa-plus pr-2"></i>Add Fish</a>
         </div>
         <div class="bg-gray-200 flex px-5 py-1">
            <div class="text-gray-700 font-semibold text-center no w-[5%]">No</div>
            <div class="text-gray-700 font-semibold text-center img w-[25%]">Images</div>
            <div class="text-gray-700 font-semibold text-left fish-name w-[22%]">Fish Name</div>
            <div class="text-gray-700 font-semibold text-left img w-[22%]">Scientific Name</div>
            <div class="text-gray-700 font-semibold text-center action w-[26%]">Action</div>
         </div>

         <?php $num = 0; foreach($fishes as $fish) : $num++; $fishID = $fish->getId();?>

         <div class="fish-table border-b border-b-gray-400 bg-slate-200 flex px-5">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]"><?= $num ?></div>
            <div class="text-gray-800 flex justify-center items-center text-center img w-[25%] p-1">
               <div class="fish-image-container w-[30%] h-[50px] overflow-hidden relative">
                  <img src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               </div>
            </div>
            <div class="text-gray-800 flex justify-left items-center fish-name w-[22%]"><?= $fish->getFish_name() ?></div>
            <div class="text-gray-800 flex justify-left items-center img w-[22%]"><?= $fish->getScientific_name() ?></div>
            <div class="text-blue-700 flex justify-center gap-1 items-center font-semibold text-center action w-[26%]">
               
               <a data-tooltip-target="view" href="/fishes/view/<?= $fish->getId() ?>" class="p-3 py-2 rounded-md hover:bg-blue-500 text-blue-500 hover:text-white"><i class="fa-solid fa-eye"></i></a></li>
               <a data-tooltip-target="edit" href="/fishes/edit/<?= $fish->getId() ?>" class="p-3 py-2 rounded-md hover:bg-green-500 text-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a></li>
               <a data-tooltip-target="recipe" href="/recipes/viewRecipe/<?= $fish->getId() ?>" class="p-3 py-2 rounded-md hover:bg-orange-500 text-orange-500 hover:text-white"><i class="fa-solid fa-utensils"></i></a></li>
               <a data-tooltip-target="nutrition" href="/nutritions/viewNutrition/<?= $fish->getId() ?>" class="p-3 py-2 rounded-md hover:bg-purple-500 text-purple-500 hover:text-white"><i class="fa-solid fa-heart-pulse"></i></a></li>
               <a data-tooltip-target="delete" href="/fishes/confirm/<?= $fish->getId() ?>" class="p-3 py-2 rounded-md hover:bg-red-500 text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i></a></li>
               
               <div id="view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  View
                  <div class="tooltip-arrow" data-popper-arrow></div>
               </div>
               <div id="edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  Edit
                  <div class="tooltip-arrow" data-popper-arrow></div>
               </div>
               <div id="recipe" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  Recipes
                  <div class="tooltip-arrow" data-popper-arrow></div>
               </div>
               <div id="nutrition" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  Nutritions
                  <div class="tooltip-arrow" data-popper-arrow></div>
               </div>
               <div id="delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  Delete
                  <div class="tooltip-arrow" data-popper-arrow></div>
               </div>
            </div>
         </div>
         <?php endforeach; ?>   
      </div>
   </div>
<?php include PAGES_PATH . '/partials/footer.php' ?>

