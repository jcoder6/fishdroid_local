<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[70%] mt-[-60px] bg-slate-300 mx-auto rounded-lg min-h-[90vh]">
         <h4 class="text-xl font-bold text-gray-700 p-3 text-center">Manage Technological Term</h4>
         <div class="manage-header bg-gray-700 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-slate-200 text-lg">Technological Term List</p>
            <a href="/terms/create" class="bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 rounded-md font-semibold hover:text-white pr-3 pl-2 py-1 transition-all text-gray-700 text-sm"><i class="fa-solid fa-plus pr-2"></i>Add Term</a>
         </div>
         <div class="bg-slate-300 flex px-5 py-1 border ">
            <div class="text-gray-700 font-semibold w-[5%]">No</div>
            <div class="text-gray-700 font-semibold w-[20%]">Term</div>   
            <div class="text-gray-700 font-semibold w-[55%]">Description</div>
            <div class="text-gray-700 text-center font-semibold w-[20%] ml-6">Action</div>
         </div>

         <?php $num = 0; foreach($terms as $term) : $num++?>

         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center text-sm font-semibold w-[5%]"><?=$num?></div>
            <div class="text-gray-800 flex items-center text-sm font-semibold w-[20%]"><?=$term->getTech_term()?></div>
            <div class="text-gray-800 flex items-center text-sm font-semibold w-[55%] truncate pr-8"><?=$term->getTech_desc()?></div>
            <div class="text-blue-700 flex gap-3  justify-center items-center font-semibold text-center action w-[20%] ml-6">
               <a href="/terms/edit/<?=$term->getId()?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
               <a href="/terms/confirm/<?=$term->getId()?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
         </div>

         <?php endforeach ?>           
      </div>
      
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>