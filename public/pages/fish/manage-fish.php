<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>
      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg">
         <h4 class="text-xl font-bold text-blue-700 p-3">Manage Fish</h4>
         <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">Fish List</p>
            <a href="/fishes/create" class="bg-white hover:bg-gradient-to-r from-blue-500 to-cyan-500 rounded-md font-semibold hover:text-white px-5 py-1 transition-all text-blue-700"><i class="fa-solid fa-plus pr-2"></i>Add Fish</a>
         </div>
         <div class="bg-gradient-to-r from-blue-500 to-cyan-500 flex px-5 py-1">
            <div class="text-white font-semibold text-center no w-[5%]">No</div>
            <div class="text-white font-semibold text-center fish-name w-[25%]">Fish Name</div>
            <div class="text-white font-semibold text-center img w-[25%]">Scientific Name</div>
            <div class="text-white font-semibold text-center img w-[25%]">Images</div>
            <div class="text-white font-semibold text-center action w-[20%]">Action</div>
         </div>

         <?php $num = 0; foreach($fishes as $fish) : $num++;?>
         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-3">
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center no w-[5%]"><?= $num ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center fish-name w-[25%]"><?= $fish->getFish_name() ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%]"><?= $fish->getScientific_name() ?></div>
            <div class="text-gray-800 flex justify-center items-center font-semibold text-center img w-[25%] p-1">
               <div class="fish-image-container w-[80%] h-[100px] overflow-hidden relative">
                  <img src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               </div>
            </div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[20%]">
               <a href="/fishes/edit/<?= $fish->getId() ?>" class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</a>
               <a href="/fishes/confirm/<?= $fish->getId() ?>" class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</a>
            </div>
         </div>
         <?php endforeach; ?>   
      </div>
   </div>
<?php include PAGES_PATH . '/partials/footer.php' ?>