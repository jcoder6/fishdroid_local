<header class="w-full bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 p-3 h-28 rounded-b-3xl mt flex justify-end items-start">
   <div class="user-container flex items-center">
      <a href="/messages" class="text-white text-sm ml-5"><i class="fa-solid fa-envelope mr-2"></i>Messages <span class="text-red-500 invisible font-bold">*</span></a>
      <!-- <div class="user-img-container w-7 h-7 relative bg-black rounded-full overflow-hidden">
         <img class="absolute h-full w-full inset-0" src="<?= ROOT_URL ?>/public/assets/images/user_images/<?= $_SESSION['img'] ?>" alt="User profile">
      </div> -->
      <a href="#" class="userfullname text-white text-sm ml-5"><i class="fa-solid fa-user mr-2"></i><?= $_SESSION['fullname'] ?></a>

      <a href="/app/out" class="text-white text-sm ml-6 mr-5"><i class="fa-solid fa-right-from-bracket mr-2"></i>Log out</a>
         <!-- <span class="group-hover:opacity-100 transition-opacity bg-gray-500 px-4 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto py-2 min-w-[5rem]">Log out</span> -->
      
   </div>
</header>