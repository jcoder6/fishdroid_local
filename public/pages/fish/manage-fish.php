<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>
      <div class="contents-container w-[80%] mt-[-60px] mb-8 bg-slate-100 mx-auto rounded-lg"> 
         <h4 class="text-xl text-center font-bold text-green-600 p-3">Manage Fish</h4>
         <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-white text-lg">Fish List</p>
            <div class="r-side flex items-center justify-center gap-4">
               <div class="relative">
                  <span for="page" class="text-white">Pages:</span>
                  <span class="page-btn cursor-pointer bg-white py-1 px-2 text-xs text-gray-700 ml-2 rounded-md">1<i class="fa-solid fa-sort-down translate-y-[-2.5px] ml-1"></i></span>
                  <div class="pages-container absolute right-0 top-6 pages-links hidden flex-col z-50 shadow-md">
                     <a class="px-3 hover:text-white hover:bg-green-600 bg-white" href="/fishes/pages/1">1</a>
                     <a class="px-3 hover:text-white hover:bg-green-600 bg-white" href="/fishes/pages/2">2</a>
                     <a class="px-3 hover:text-white hover:bg-green-600 bg-white" href="/fishes/pages/3">3</a>
                     <a class="px-3 hover:text-white hover:bg-green-600 bg-white" href="/fishes/pages/4">4</a>
                  </div>
               </div>
               <a href="/fishes/create" class="bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 rounded-md text-sm font-semibold hover:text-white pr-4 py-1 pl-3 transition-all text-green-600"><i class="fa-solid fa-plus pr-2"></i>Add Fish</a>
            </div>
         </div>
         <div class="bg-gray-300 flex px-5 py-1">
            <div class="text-gray-700 font-semibold text-center no w-[5%]">No</div>
            <div class="text-gray-700 font-semibold text-center img w-[25%]">Images</div>
            <div class="text-gray-700 font-semibold text-left fish-name w-[22%]">Fish Name</div>
            <div class="text-gray-700 font-semibold text-left img w-[22%]">Scientific Name</div>
            <div class="text-gray-700 font-semibold text-center action w-[26%]">Action</div>
         </div>

         <?php $num = 0; foreach($fishes as $fish) : $num++; $fishID = $fish->getId();?>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]"><?= $num ?></div>
            <div class="text-gray-800 flex justify-center items-center text-center img w-[25%] p-1">
               <div class="fish-image-container w-[30%] h-[50px] overflow-hidden relative">
                  <img src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               </div>
            </div>
            <div class="text-gray-800 flex justify-left items-center fish-name w-[22%]"><?= $fish->getFish_name() ?></div>
            <div class="text-gray-800 flex justify-left items-center img w-[22%]"><?= $fish->getScientific_name() ?></div>
            <div class="text-blue-700 relative font-semibold text-center action w-[26%]">
               <div class="fish-menu bg-gradient-to-tr from-green-400 via-green-500 to-green-600 text-white rounded-md shadow-md cursor-pointer px-4 py-1 absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]"><i class="fa-solid fa-ellipsis"></i></div>
               <div class="bg-blue-100 shadow-md mt-[7.3rem] hidden flex-col absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] z-10">
                  <a href="/fishes/view/<?= $fish->getId() ?>" class="text-center p-3 py-2 hover:bg-blue-500 text-blue-500 hover:text-white"><i class="pr-3 fa-solid fa-eye"></i>View</a></li>
                  <a href="/fishes/edit/<?= $fish->getId() ?>" class="text-center p-3 py-2 hover:bg-green-500 text-green-500 hover:text-white transition-all"><i class="pr-3 fa-solid fa-pencil"></i>Edit</a></li>
                  <a href="/recipes/viewRecipe/<?= $fish->getId() ?>" class="text-center p-3 py-2 hover:bg-orange-500 text-orange-500 hover:text-white"><i class="pr-3 fa-solid fa-utensils"></i>Recipe</a></li>
                  <a href="/nutritions/viewNutrition/<?= $fish->getId() ?>" class="text-center p-3 py-2 hover:bg-purple-500 text-purple-500 hover:text-white"><i class="pr-3 fa-solid fa-heart-pulse"></i>Nutrition</a></li>
                  <a href="/fishes/confirm/<?= $fish->getId() ?>" class="text-center p-3 py-2 hover:bg-red-500 text-red-500 hover:text-white"><i class="pr-3 fa-solid fa-trash"></i>Delete</a></li>
               </div>
            </div>
         </div>
         <?php endforeach; ?>   
      </div>
   </div>

   <script>
      const pageBtn = document.querySelector('.page-btn')
      const pagesContainer = document.querySelector('.pages-container');

      pageBtn.addEventListener('click', () => {
         if(pagesContainer.classList.contains('hidden')){   
            pagesContainer.classList.remove('hidden');
            pagesContainer.classList.add('flex');
         } else {
            pagesContainer.classList.add('hidden');
            pagesContainer.classList.remove('flex');
         }
      })
   </script>

<?php include PAGES_PATH . '/partials/footer.php' ?>

