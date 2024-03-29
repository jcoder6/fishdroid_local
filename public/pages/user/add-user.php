<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-2">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[100%] mt-[-56px] bg-slate-100 mx-auto pb-10">
         <h4 class="text-xl font-bold text-green-600 p-3 pl-10 pt-6">Add User</h4>
         <form class="upload-form text-right pb-12 w-[40%] border border-gray-300 rounded-md shadow-md bg-white mx-auto" action="/users/save" method="post" enctype="multipart/form-data">
            <div class="flex flex-col-reverse justify-center items-center p-4 mt-3">
               <div class="image-label flex items-center gap-3">
                  <span class=" text-gray-900 font-semibold">Insert user image: </span>
                  <label for="eventPhoto" class="bg-white font-semibold text-[13px] cursor-pointer shadow-md text-green-600 py-1 px-4 rounded-md hover:text-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600 transition-all"><i class="fa-solid fa-upload mr-3  "></i>Upload</label>
                  </div>
               <input type="file" name="user_photo" id="eventPhoto" accept="image/png, image/jpg, image/jpeg" class="hidden" onChange="previewChoosenImage(event)">
               <div id="inputPhoto" class="relative h-44 w-44 border mb-5 border-slate-400 bg-white overflow-hidden text-slate-400 rounded-full flex justify-center items-center">No Image Choose</div>
               <input type="hidden" name="default_img" value="default yern">
            </div>

            <div class="flex justify-center gap-2">
               <div class="fullname w-[70%]">
                  <label for="fullname" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname<span class="text-red-500 font-bold"> *</span></label>
                  <input type="text" name="fullname" id="fullname" placeholder="Enter your fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="flex justify-center gap-2">
               <div class="email w-[70%]">
                  <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Email<span class="text-red-500 font-bold"> *</span></label>
                  <input type="email" name="email" id="email" placeholder="Enter your email" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="flex justify-center gap-2">
               <div class="username w-[70%]">
                  <label for="username" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Username<span class="text-red-500 font-bold"> *</span></label>
                  <input type="text" name="username" id="username" placeholder="Enter your username" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="flex justify-center gap-2">
               <div class="role w-[70%]">
                  <label for="role_id" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Role<span class="text-red-500 font-bold"> *</span></label>
                  <select type="text" name="role_id" id="role_id" placeholder="Enter your username" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
                     <option value="0" hidden>Select Roles</option>
                     <option value="2">System Administrator</option>
                     <option value="3">Employee</option>
                  </select>
               </div>
            </div>

            <div class="flex justify-center gap-2 mb-5">
               <div class="password w-[70%]">
                  <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Password<span class="text-red-500 font-bold"> *</span></label>
                  <input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>
            
            <input type="submit" value="Add" class="mr-10 transition-all font-semibold text-green-600 text-[13px]  shadow-md py-1 rounded-md p-5 cursor-pointer bg-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:text-white">
         </form>
            
      </div>
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>