<header class="w-full bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 p-3 h-28 rounded-b-3xl mt flex justify-end items-start">
   <div class="mr-3 text-slate-100 relative">
      <div class="menu-button cursor-pointer"><i class="fa-solid fa-user mr-2"></i><?= $_SESSION['fullname'] ?><i class="fa-solid fa-caret-down ml-3"></i></div>
      <div class="menu-container hidden flex-col bg-slate-100 absolute w-40 right-0 rounded-md shadow-md overflow-hidden mt-2">
         <a href="#" class="userfullname text-gray-700 text-sm py-3 pl-3 pr-6 flex items-center gap-2 border-b border-b-slate-300 hover:bg-slate-300 transition-all">
            <div class="user-img-container w-7 h-7 relative bg-black rounded-full overflow-hidden">
               <img class="absolute h-full w-full inset-0" src="<?= ROOT_URL ?>/public/assets/images/user_images/<?= $_SESSION['img'] ?>" alt="User profile">
            </div>
            <?= $_SESSION['username'] ?>
         </a>
         <a href="/messages" class="text-gray-700 text-sm py-2 pl-5 pr-6 hover:bg-slate-300 transition-all"><i class="fa-solid fa-envelope mr-2 ml-2"></i>Messages <span class="text-red-500 invisible font-bold">*</span></a>
         <a href="/app/out" class="text-gray-700 text-sm py-2 pl-5 pr-6 hover:bg-slate-300 transition-all"><i class="fa-solid fa-right-from-bracket mr-2 ml-2"></i>Log out</a>
      </div>
   </div>
</header>
