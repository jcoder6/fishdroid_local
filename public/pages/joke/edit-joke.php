<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

   <div class="contents-container w-[40%] mt-[-60px] bg-slate-100 mx-auto rounded-lg">
      <h4 class="text-xl font-bold text-green-600 p-3 pl-10 pt-6">Edit Trivia</h4>

      <div class="flex justify-center items-center gap-4">
         <button id="is_image_trivia" class="transition-all font-semibold text-[13px] shadow-sm py-1 p-5 cursor-pointer bg-gradient-to-r from-green-400 via-green-500 to-green-600 text-white hover:bg-gray-50">Image</button>
         <button id="is_video_trivia" class="transition-all font-semibold text-[13px] text-green-600 shadow-sm py-1 p-5 cursor-pointer bg-white hover:bg-gray-50">Video</button>
      </div>

      <form class="upload-form text-right pb-6" action="/jokes/update/<?= $trivia->getId() ?>" method="post" enctype="multipart/form-data">
         
         <div  id="input_image_cont" class="block px-10 py-3">
            <input type="file" name="trivia_img" id="eventPhoto" accept="image/png, image/jpg, image/jpeg" class="hidden" onChange="previewChoosenImage(event)">
            <div id="inputPhoto" class="relative h-52 w-[100%] border mb-5 bg-white border-slate-400 overflow-hidden rounded-md text-slate-400 flex justify-center text-xs items-center mt-2">
               <?php showTriviaImg($trivia->getTrivia_video()) ?>
            </div>
            <div class="image-label flex justify-center items-center gap-3">
               <span class="font-semibold text-gray-900 ">Insert fish image: </span>
               <label for="eventPhoto" class="bg-white font-semibold text-[13px] cursor-pointer shadow-md text-green-600 py-1 px-4 rounded-md hover:text-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600 transition-all"><i class="fa-solid fa-upload mr-3  "></i>Upload</label>
            </div>
         </div>


         <div id="input_video_cont" class="hidden py-3 px-10">
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
         <input type="submit" value="Update" class="mr-10 transition-all font-semibold text-[13px] text-green-600 shadow-md py-1 rounded-md p-5 cursor-pointer bg-white  hover:text-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600 ">
      </form>
         
   </div>
      
</div>

<?php 
   function showTriviaImg($triviaFile) {
      $extName = explode('.', $triviaFile);
      $ext = end($extName);

      if($triviaFile != 'NO_VIDEO_YET'){
         if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'JPG' && $ext != 'gif' && $ext != 'PNG'){
            echo 'No Image Choosen';
         } else {
            echo '<img src="' . ROOT_URL . '/public/assets/videos/trivia_videos/'. $triviaFile . '" alt="Trivia Image">';
         }
      } else {
         echo 'No Image Choosen';
      }
   }
?>
<?php include PAGES_PATH . '/partials/footer.php' ?>