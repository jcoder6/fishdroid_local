<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[70%] mt-[-60px] bg-slate-100 mx-auto rounded-lg">

         <h4 class="text-xl text-center font-bold text-green-600 p-3">Manage Trivia</h4>

         <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-slate-100 text-lg">Trivia list</p>
            <a href="/jokes/create" class="bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 rounded-md font-semibold hover:text-white pr-3 pl-2 py-1 transition-all text-green-600 text-sm"><i class="fa-solid fa-plus pr-2"></i>Add Trivia</a>
         </div>

         <div class="bg-slate-300 flex px-5 py-1">
            <div class="text-gray-700 text-center font-semibold no w-[3%]">No</div>
            <div class="text-gray-700 text-center font-semibold fish-name w-[72%]">Jokes</div>
            <div class="text-gray-700 text-center font-semibold action w-[25%]">Action</div>
         </div>

         <?php $num = 0; foreach($trivias as $trivia): $num++ ?>
         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex justify-center items-center font-semibold no w-[3%]"><?= $num ?></div>
            <div class="text-gray-800 flex ml-10 items-center truncate fish-name w-[72%]"><?= $trivia->getTrivia() ?></div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[25%]">
               <a href="/jokes/edit/<?= $trivia->getId() ?>" class="py-1 px-4 bg-white shadow-md text-center rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
               <a href="/jokes/confirm/<?= $trivia->getId() ?>" class="py-1 px-4 bg-white shadow-md text-center rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
         </div>
         <?php endforeach ?>     
      </div>
      
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>