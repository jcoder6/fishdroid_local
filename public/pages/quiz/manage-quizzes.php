<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
   <?php include PAGES_PATH . '/partials/body-header.php' ?>

   <div class="contents-container w-full mt-[-56px] bg-slate-100 mx-auto min-h-[90vh]">
      <h4 class="text-xl font-bold text-green-600 p-3 text-center">Manage Quiz</h4>
      <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
         <p class="manage-header-title font-bold text-slate-100 text-lg">Quiz List</p>
         <a href="/quizzes/create" class="bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 rounded-md font-semibold hover:text-white pr-3 pl-2 py-1 transition-all text-green-600 text-sm"><i class="fa-solid fa-plus pr-2"></i>Add Quiz</a>
      </div>
      <div class="bg-slate-300 flex px-5 py-1">
         <div class="text-center text-gray-700 font-semibold no w-[3%]">No</div>
         <div class="text-center text-gray-700 font-semibold fish-name w-[35%]">Quiz Image</div>
         <div class="text-center text-gray-700 font-semibold img w-[35%]">Quiz Answer</div>
         <div class="text-center text-gray-700 font-semibold action w-[27%]">Action</div>
      </div>

      <?php $num = 0; foreach($quizzes as $quiz) : $num++?>
      <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
         <div class="text-gray-800 flex justify-center items-center font-semibold no w-[3%]"><?=$num?></div>
         <div class="text-gray-800 flex justify-center items-center fish-name w-[35%]">
            <div class="fish-image-container w-[30%] h-[50px] overflow-hidden relative">
               <?php if($quiz->getQuiz_image() != 'NO_IMG_YET') : ?>
                  <img src="<?=ROOT_URL?>/public/assets/images/quiz_images/<?= $quiz->getQuiz_image() ?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               <?php else : ?>
                  <img src="<?=ROOT_URL?>/public/assets/images/default_img.PNG?>" class="absolute h-[100%] w-[100%] inset-0" alt="Fish Image">
               <?php endif; ?>
            </div>
         </div>
         <div class="text-gray-800 flex justify-center items-center img w-[35%]"><?= $quiz->getQuiz_answer() ?></div>
         <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[27%]">
            <a href="/quizzes/edit/<?=$quiz->getId()?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
            <a href="/quizzes/confirm/<?=$quiz->getId()?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
         </div>
      </div>
      <?php endforeach; ?>
   </div>
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>