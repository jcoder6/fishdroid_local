<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

    <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
      <h4 class="text-xl font-bold text-blue-700 p-3">Add Terms</h4>
      <form class="upload-form text-right" action="/terms/save" method="post" enctype="multipart/form-data">

            <div class="flex justify-between py-3 px-10">
               <div class="fullname w-[100%]">
                  <label for="tech_term" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Technological Term</label>
                  <input required type="text" name="tech_term" id="tech_term" placeholder="Enter Technological Term" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
              
            </div>

            <div class="flex justify-between py-3 px-10">
               <div class="username w-[100%]">
                  <label for="tech_desc" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Term Description</label>
                  <textarea required type="text" name="tech_desc" id="tech_desc" placeholder="Description..." class="bg-gray-50 block border min-h-[20rem] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"></textarea>
               </div>
              
            </div>              
            
            <input type="submit" value="Add new term" class="border mr-10 border-blue-700 transition-all font-semibold text-blue-700 py-1 rounded-md w-[8rem] cursor-pointer bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 hover:text-white">
         </form>
            
        </div>
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>