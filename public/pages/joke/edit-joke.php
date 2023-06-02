<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

    <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
      <h4 class="text-xl font-bold text-blue-700 p-3">Edit Jokes</h4>
      <form class="upload-form text-right pb-6" action="/jokes/update/<?= $joke->getId() ?>" method="post" enctype="multipart/form-data">

            <div class="flex justify-between py-3 px-10">
               <div class="fullname w-[100%]">
                  <label for="question" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Question</label>
                  <input type="text" name="question" id="question" value="<?= $joke->getQuestion() ?>" placeholder="Enter fish jokes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="flex justify-between py-3 px-10">
               <div class="username w-[100%]">
                  <label for="answer" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Answer</label>
                  <input type="text" name="answer" id="answer" value="<?= $joke->getAnswer() ?>" placeholder="Enter Answer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="ml-10 mt-6">
               <div class="image-label flex items-center gap-3">
                  <span class="font-semibold text-gray-900 ">Insert joke image: </span>
                  <label for="eventPhoto" class="bg-white font-semibold border border-blue-700 cursor-pointer text-blue-700 py-1 px-4 rounded-md hover:text-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 transition-all"><i class="fa-solid fa-upload mr-3  "></i>Upload Photo</label>
                </div>

               <input type="file" name="joke_image" id="eventPhoto" class="hidden" onChange="previewChoosenImage(event)">
               <div id="inputPhoto" class="relative h-52 w-96 border mb-5 bg-white border-slate-400 overflow-hidden rounded-md text-slate-400 flex justify-center items-center mt-6">
                  <img src="<?= ROOT_URL ?>/public/assets/images/joke_images/<?= $joke->getJoke_image() ?>" alt="Defualt Image">
               </div>
               <input type="hidden" name="default_img" value="<?= $joke->getJoke_image() ?>">
            </div>
            
            <input type="submit" value="Update joke" class="border mr-10 border-blue-700 transition-all font-semibold text-blue-700 py-1 rounded-md w-[8rem] cursor-pointer bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 hover:text-white">
         </form>
            
        </div>
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>