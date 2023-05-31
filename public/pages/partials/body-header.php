<header class="w-full bg-gradient-to-r from-cyan-500 to-blue-500 p-3 h-28 rounded-b-3xl mt flex justify-end items-start">
   <div class="user-container flex items-center">
      <div class="user-img-container w-7 h-7 relative bg-black rounded-full overflow-hidden">
         <img class="absolute h-full w-full inset-0" src="<?= ROOT_URL ?>/public/assets/images/user_images/<?= $_SESSION['img'] ?>" alt="User profile">
      </div>
      <a href="#" class="userfullname text-white font-semibold text-sm ml-2"><?= $_SESSION['fullname'] ?></a>
      
      <div class="group flex relative">
         <a href="/app/out" class="userfullname text-white font-semibold text-xl ml-2"><i class="fa-solid fa-right-from-bracket"></i></a>
         <span class="group-hover:opacity-100 transition-opacity bg-gray-500 px-4 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto py-2 min-w-[5rem]">Log out</span>
      </div>
   </div>
</header>