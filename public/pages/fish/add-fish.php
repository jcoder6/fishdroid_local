<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
      <h4 class="text-xl font-bold text-blue-700 p-3">Add Fish</h4>
         <form class="pb-6 upload-form text-right" action="/fishes/save" method="post" enctype="multipart/form-data">

            <div class="flex justify-between py-3 gap-3 px-10">
               <div class="fish_name w-[50%]">
                  <label for="fish_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Fish name</label>
                  <input type="text" name="fish_name" id="fish_name" placeholder="Enter fish name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
               <div class="scientific_name w-[50%]">
               <label for="scientific_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Scientific name</label>
                  <input type="text" name="scientific_name" id="scientific_name" placeholder="Enter scientific name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="flex justify-between py-3 gap-3 px-10">
               <div class="family_name w-[50%]">
                  <label for="family_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Family name</label>
                  <input type="text" name="family_name" id="family_name" placeholder="Enter family name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
               <div class="life_span w-[50%]">
               <label for="life_span" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Name</label>
                  <input type="text" name="life_span" id="life_span" placeholder="Enter local name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="ml-10 mt-6">
               <div class="image-label flex items-center gap-3">
                  <span class="font-semibold text-gray-900 ">Insert fish image: </span>
                  <label for="eventPhoto" class="bg-blue-700 font-semibold border border-blue-700 cursor-pointer text-white py-1 px-4 rounded-md hover:text-blue-700 hover:bg-white transition-all"><i class="fa-solid fa-upload mr-3  "></i>Upload Photo</label>
               </div>
               <input type="file" name="fish_image" id="eventPhoto" class="hidden" onChange="previewChoosenImage(event)">
               <div id="inputPhoto" class="relative h-52 w-96 border mb-5 bg-white border-slate-400 overflow-hidden rounded-md text-slate-400 flex justify-center items-center mt-6">No Image Choose</div>
               <input type="hidden" name="default_img" value="default yern">
            </div>

            <div class="flex justify-between py-3 px-10">
               <div class="fish_info w-[100%]">
                  <label for="eventDesc" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Fish Information</label>
                  <textarea type="text" name="fish_info" id="eventDesc" placeholder="Enter a description or some information about the fish..." class="bg-gray-50 block border min-h-[20rem] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"></textarea>
               </div>
            </div>     
            <input type="submit" value="Add new fish" class="border mr-10 border-blue-700 bg-blue-700 transition-all font-semibold text-white py-1 rounded-md w-[8rem] cursor-pointer hover:bg-white hover:text-blue-700">
      </form>
            
      </div>
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>