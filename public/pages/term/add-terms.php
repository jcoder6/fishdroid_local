<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

   <div class="contents-container w-[50%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
      <h4 class="text-xl font-bold text-green-600 p-3 pl-10 pt-6">Add Terms</h4>
         <form class="upload-form text-right pb-10" action="/terms/save" method="post" enctype="multipart/form-data">
            <div class="flex justify-between py-3 px-10">
               <div class="fullname w-[100%]">
                  <label for="tech_term" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Technological Term<span class="text-red-500 font-bold"> *</span></label>
                  <input required type="text" name="tech_term" id="tech_term" placeholder="Enter Technological Term" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="ml-10 mt-6">
               <div class="image-label flex items-center gap-3">
                  <span class="font-semibold text-gray-900 ">Insert term image: </span>
                  <label for="eventPhoto" class="bg-white font-semibold text-[13px] cursor-pointer text-green-600 py-1 px-4 rounded-md hover:text-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600  transition-all"><i class="fa-solid fa-upload mr-3  "></i>Upload Photo</label>
               </div>
               <input type="file" name="term_img" id="eventPhoto" accept="image/png, image/jpg, image/jpeg" class="hidden" onChange="previewChoosenImage(event)">
               <div id="inputPhoto" class="relative h-52 w-96 border mb-5 bg-white border-slate-400 overflow-hidden rounded-md text-slate-400 flex justify-center items-center mt-6 text-xs">No Image Choose</div>
               <input type="hidden" name="default_img" value="NO_IMG_YET">
            </div>

            <div class="flex justify-between py-3 px-10">
               <div class="username w-[100%]">
                  <label for="tech_desc" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Term Description<span class="text-red-500 font-bold"> *</span></label>
                  <textarea required type="text" name="tech_desc" id="tech_desc" placeholder="Description..." class="bg-gray-50 block border min-h-[20rem] border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"></textarea>
               </div>
            </div>              
            
            <input type="submit" value="Add" class="mr-10 transition-all font-semibold text-[13px] text-green-600 shadow-md py-1 rounded-md p-5 cursor-pointer bg-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600  hover:text-white">
         </form>
            
      </div>   
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>