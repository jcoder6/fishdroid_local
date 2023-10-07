<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
<?php include PAGES_PATH . '/partials/body-header.php' ?>
   <div class="contents-container w-[70%] mt-[-60px] bg-slate-200 mx-auto rounded-lg"> 
      <h4 class="text-2xl text-center font-bold text-gray-700 p-3">Hatchery Process</h4>
      <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
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

      <?php $num = 0; foreach($hatcheries as $hatchery): $num++ ?>
      <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
         <div class="text-gray-800 flex items-center w-[8%]"><?= $num ?></div>
         <div class="text-gray-800 flex items-center w-[20%]"><?= $hatchery->getFish_name() ?></div>
         <div class="text-gray-800 flex items-center w-[52%] truncate pl-2 pr-8"><?= $hatchery->getHatch_process() ?></div>
         <div class="text-blue-700 flex gap-3 justify-center items-center font-semibold text-center action w-[20%] ml-6">
            <a href="/hatcheries/edit/<?= $hatchery->getId() ?>" class="py-1 px-4 shadow-md bg-white text-green-500 hover:bg-green-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
            <a href="/hatcheries/confirm/<?= $hatchery->getId() ?>" class="py-1 px-4 shadow-md bg-white text-red-500 hover:bg-red-500 rounded-md hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
         </div>
      </div>
      <?php endforeach; ?>
      <!-- THIS IS WHERE WE LOOP THE DATA -->
   </div>
</div>   
<?php include PAGES_PATH . '/partials/footer.php' ?>