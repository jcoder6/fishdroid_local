<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">

         <h4 class="text-xl font-bold text-blue-700 p-3">Manage Fish Jokes</h4>

         <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">Fish Jokes List</p>
            <a href="/jokes/create" class="bg-white hover:bg-blue-700 rounded-md font-semibold hover:text-white px-5 py-1 transition-all text-blue-700"><i class="fa-solid fa-plus pr-2"></i>Add Jokes</a>
         </div>

         <div class="bg-gradient-to-r from-cyan-500 to-blue-500 flex px-5 py-1">
            <div class="text-white font-semibold no w-[9%]">No</div>
            <div class="text-white font-semibold fish-name w-[66%]">Jokes</div>
            <div class="text-white font-semibold action w-[25%]">Action</div>
         </div>

         <?php $num = 0; foreach($jokes as $joke): $num++ ?>
         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[9%]"><?= $num ?></div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[66%]">Q: <?= $joke->getQuestion() ?></div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[20%]">
               <a href="/jokes/edit/<?= $joke->getId() ?>" class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</a>
               <a href="/jokes/confirm/<?= $joke->getId() ?>" class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</a>
            </div>
         </div>
         <?php endforeach ?>     
      </div>
      
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>