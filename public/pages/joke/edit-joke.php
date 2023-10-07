<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

   <div class="contents-container w-[40%] mt-[-60px] bg-slate-200 mx-auto rounded-lg">
      <h4 class="text-xl font-bold text-blue-700 p-3 pl-10 pt-6">Edit Triva</h4>
      <form class="upload-form text-right pb-6" action="/jokes/update/<?= $trivia->getId() ?>" method="post" enctype="multipart/form-data">
         
         <div class="py-3 px-10">
               <div class="w-[100%]">
                  <label for="triviaVideo" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Video:</label>
                  <input type="file" name="trivia_video" accept="video/*" id="triviaVideo"  class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="small_size" >
                  <input type="text" class="hidden" name="default_video" value="<?= $trivia->getTrivia_video(); ?>" />
                  <!-- <input type="file" name="hatch_video" accept="video/*" id="triviaVideo">     -->
               </div>   
         </div>

         <div class="flex justify-between py-3 px-10">
            <div class="username w-[100%]">
               <label for="trivia" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Term Description<span class="text-red-500 font-bold"> *</span></label>
               <textarea required type="text" name="trivia" id="trivia" placeholder="Description..." class="bg-gray-50 block border min-h-[20rem] border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"><?= $trivia->getTrivia(); ?></textarea>
            </div>
         
         </div>      
         <input type="submit" value="Update trivia" class="mr-10 transition-all font-semibold text-gray-700 shadow-md py-1 rounded-md w-[8rem] cursor-pointer bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:text-white">
      </form>
         
   </div>
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>