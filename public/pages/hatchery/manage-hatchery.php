<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
<?php include PAGES_PATH . '/partials/body-header.php' ?>
   <div class="contents-container w-[70%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]"> 
      <h4 class="text-xl text-center font-bold text-green-600 p-3">Hatchery Process</h4>
      <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
         <p class="manage-header-title font-bold text-white text-s">Fish Hathcery List</p>
         <a href="/hatcheries/create" class="bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 rounded-md text-sm font-semibold hover:text-white pr-4 py-1 pl-3 transition-all text-green-600"><i class="fa-solid fa-plus pr-2"></i>Add Hatch</a>
      </div>
      <div class="bg-gray-300 flex px-5 py-1">
         <div class="text-gray-700 font-semibold text-left no w-[8%]">No</div>
         <div class="text-gray-700 font-semibold text-left img w-[20%]">Fish name</div>
         <div class="text-gray-700 font-semibold text-left fish-name w-[46%]">Hatching Process</div>
         <div class="text-gray-700 font-semibold text-center action w-[26%]">Action</div>
      </div>
      
      <!-- THIS IS WHERE WE LOOP THE DATA -->

      <?php $num = 0; foreach($hatcheries as $hatchery): $num++ ?>
      <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-2">
         <div class="text-gray-800 flex items-center w-[8%]"><?= $num ?></div>
         <div class="text-gray-800 flex items-center w-[20%]"><?= $hatchery->getFish_name() ?></div>
         <div class="text-gray-800 flex items-center w-[46%] truncate pr-8"><?= $hatchery->getHatch_process() ?></div>
         
         <div class="text-blue-700 relative font-semibold text-center action w-[26%]">
            <div class="fish-menu bg-gradient-to-tr from-green-400 via-green-500 to-green-600 text-white rounded-md shadow-md cursor-pointer px-4 py-1 absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]"><i class="fa-solid fa-ellipsis"></i></div>
            <div class="bg-blue-100 shadow-md mt-[4.9rem] hidden flex-col absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] z-10">
               <a href="/hatcheries/edit/<?= $hatchery->getId() ?>" class="text-center p-3 py-2 hover:bg-green-500 text-green-500 hover:text-white transition-all"><i class="pr-3 fa-solid fa-pencil"></i>Edit</a></li>
               <a href="/hatchVideos/viewVideos/<?= $hatchery->getId() ?>" class="text-center p-3 py-2 hover:bg-blue-500 text-blue-500 hover:text-white"><i class="pr-3 fa-solid fa-video"></i>Videos</a></li>
               <a href="/hatcheries/confirm/<?= $hatchery->getId() ?>" class="text-center p-3 py-2 hover:bg-red-500 text-red-500 hover:text-white"><i class="pr-3 fa-solid fa-trash"></i>Delete</a></li>
            </div>
         </div>
      </div>
      <?php endforeach; ?>
      <!-- THIS IS WHERE WE LOOP THE DATA -->
   </div>
</div>   
<?php include PAGES_PATH . '/partials/footer.php' ?>